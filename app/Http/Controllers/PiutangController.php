<?php

namespace App\Http\Controllers;

use App\Models\JenisPerawatan;
use App\Models\Pasien;
use App\Models\Piutang;
use Illuminate\Http\Request;

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
        $piutangs = Piutang::when($request->has('search'), function ($q) use ($request) {
            $q->where('nama', 'like', '%' . $request->search . '%');
        })
            ->orderBy('id', 'desc')
            ->paginate(25);
        $jenisPerawatans = JenisPerawatan::orderBy('id', 'ASC')->get();
        return view('piutang.index', compact('piutangs', 'jenisPerawatans', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jenisPerawatan = new JenisPerawatan();
        $title = $this->title;

        return view('piutang.create', compact('title', 'jenisPerawatan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, JenisPerawatan $jenisPerawatan)
    {
        $request->validate([
            'nama' => 'required',
            'biaya' => 'numeric'
        ]);

        $jenisPerawatan->create($request->all());

        return to_route('piutang.index')->with('status', 'create-success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasien $pasien)
    {
        $title = $this->title;
        return view('piutang.show', compact('pasien', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JenisPerawatan $jenisPerawatan)
    {
        $title = $this->title;
        return view('piutang.edit', compact('title', 'jenisPerawatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JenisPerawatan $jenisPerawatan)
    {
        $request->validate([
            'nama' => 'required',
            'biaya' => 'numeric'
        ]);

        $jenisPerawatan->update($request->all());
        return to_route('piutang.index')->with('status', 'update-success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JenisPerawatan $jenisPerawatan)
    {
        $jenisPerawatan->delete();
        return back()->with('status', 'delete-success');
    }
}
