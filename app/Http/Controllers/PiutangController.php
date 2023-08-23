<?php

namespace App\Http\Controllers;

use App\Exports\PiutangExport;
use App\Imports\PiutangImport;
use App\Models\BiayaPerawatan;
use App\Models\JenisPerawatan;
use App\Models\Pasien;
use App\Models\Piutang;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PiutangController extends Controller
{
    public function __construct(public $title = 'Piutang')
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $title = $this->title;
        $piutangs = Piutang::has('pasien')->when($request->has('search'), function ($q) use ($request) {
            $q->whereHas('pasien', function ($q2) use ($request) {
                $q2->where('nama', 'like', '%' . $request->search . '%');
                $q2->orWhere('no_rm', 'like', '%' . $request->search . '%');
            });
        })
            ->when($request->has('date') && $request->date != '', function ($query) use ($request) {
                $date = explode(' - ', $request->date);
                $startDate = Carbon::createFromFormat('Y-m-d', $date[0]);
                $endDate = Carbon::createFromFormat('Y-m-d', $date[1]);
                $query->whereBetween('tgl_keluar', [$startDate, $endDate]);
            })
            ->orderBy('id', 'desc')
            ->paginate(50);
        $jenisPerawatans = JenisPerawatan::orderBy('id', 'ASC')->get();
        return view('piutang.index', compact('piutangs', 'jenisPerawatans', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = $this->title;
        $jenisPerawatan = new JenisPerawatan();
        $jenisPerawatans = JenisPerawatan::orderBy('id', 'ASC')->get();
        $piutang = new Piutang();
        return view('piutang.create', compact('title', 'jenisPerawatan', 'jenisPerawatans', 'piutang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Piutang $piutang)
    {
        $request->validate([
            'pasien_id' => 'required',
            'tgl_masuk' => 'required',
            'tgl_keluar' => 'required',
            'zaal' => 'required',
            'cicilan' => 'required',
        ]);

        // save jenis perawatan dan biaya

        $total = array_sum($request->jenis_perawatan);
        $cicilan = $request->cicilan;
        $sisa = $total - $cicilan;

        $request->request->add(['sisa' => $sisa]);
        $request->request->add(['total' => $total]);

        $piutang = $piutang->create($request->all());

        $piutang_id = $piutang->id;

        foreach ($request->jenis_perawatan as $id => $jp) {
            BiayaPerawatan::create(
                [
                    'piutang_id' => $piutang_id,
                    'jenis_perawatan_id' => $id,
                    'biaya' => $jp
                ]
            );
        }

        return to_route('piutang.index')->with('status', 'create-success');
    }

    /**
     * Display the specified resource.
    //  */
    // public function show(Pasien $pasien)
    // {
    //   
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Piutang $piutang)
    {
        $title = $this->title;
        $jenisPerawatans = JenisPerawatan::orderBy('id', 'ASC')->get();
        return view('piutang.edit', compact('title', 'piutang', 'jenisPerawatans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Piutang $piutang)
    {
        $request->validate([
            'pasien_id' => 'required',
            'tgl_masuk' => 'required',
            'tgl_keluar' => 'required',
            'zaal' => 'required',
            'cicilan' => 'required',
        ]);

        $request->request->add(['sisa' => 0]);
        $request->request->add(['total' => 0]);
        $piutang->update($request->all());


        // hapus biaya perawatan lama dan save jenis perawatan dan biaya
        BiayaPerawatan::where('piutang_id', $piutang->id)->delete();

        foreach ($request->jenis_perawatan as $id => $jp) {
            BiayaPerawatan::create(
                [
                    'piutang_id' => $piutang->id,
                    'jenis_perawatan_id' => $id,
                    'biaya' => $jp
                ]
            );
        }

        return to_route('piutang.index')->with('status', 'update-success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Piutang $piutang)
    {
        $piutang->delete();
        return back()->with('status', 'delete-success');
    }

    /**
     * get pasien data
     */

    public function getPasien()
    {
        $query = request()->query('search');
        $pasien = Pasien::where('nama', 'like', '%' . $query . '%')
            ->orWhere('no_rm', 'like', '%' . $query . '%')
            ->limit(5)
            ->get();
        return response()->json(['items' => $pasien], 200);
    }

    public function showExport()
    {
        $title = 'Export ' . $this->title;
        return view('piutang.export', compact('title'));
    }

    public function export(Request $request)
    {
        $year = $request->query('year');
        return Excel::download(new PiutangExport, 'data-piutang-' . $year . '.xls');
    }

    public function import()
    {
        $file = public_path('file/pasien.xlsx');
        Excel::import(new PiutangImport, $file);
        return back()->with('status', 'import-success');
    }
}
