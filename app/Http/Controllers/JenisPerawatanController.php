<?php

namespace App\Http\Controllers;

use App\Models\JenisPerawatan;
use App\Models\Pasien;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class JenisPerawatanController extends Controller
{
    public function __construct(public $title = 'Jenis Perawatan')
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $title = $this->title;
        $jenisPerawatans = JenisPerawatan::when($request->has('search'), function ($q) use ($request) {
            $q->where('nama', 'like', '%' . $request->search . '%');
        })
            ->orderBy('id', 'desc')
            ->paginate(25);
        return view('jenis-perawatan.index', compact('jenisPerawatans', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jenisPerawatan = new JenisPerawatan();
        $title = $this->title;

        return view('jenis-perawatan.create', compact('title', 'jenisPerawatan'));
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

        return to_route('jenis-perawatan.index')->with('status', 'create-success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasien $pasien)
    {
        $title = $this->title;
        return view('jenis-perawatan.show', compact('pasien', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JenisPerawatan $jenisPerawatan)
    {
        $title = $this->title;
        return view('jenis-perawatan.edit', compact('title', 'jenisPerawatan'));
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
        return to_route('jenis-perawatan.index')->with('status', 'update-success');
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
