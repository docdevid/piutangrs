<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class PasienController extends Controller
{
    public function __construct(public $title = 'Pasien')
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $title = $this->title;
        $pasiens = Pasien::when($request->has('search'), function ($q) use ($request) {
            $q->where('nama', 'like', '%' . $request->search . '%');
            $q->orWhere('no_rm', 'like', '%' . $request->search . '%');
        })
            ->orderBy('id', 'desc')
            ->paginate(25);
        return view('pasien.index', compact('pasiens', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pasien = new User();
        $title = $this->title;

        return view('pasien.create', compact('title', 'pasien'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Pasien $user)
    {
        $request->validate([
            'nama' => 'required',
            'no_rm' => 'required',
            'alamat' => 'required',
        ]);

        if ($request->has('asli_daerah')) {
            $request->request->add(['asli_daerah' => '1']);
        } else {
            $request->request->add(['asli_daerah' => '0']);
        }

        $user->create($request->all());

        return to_route('pasien.index')->with('status', 'create-success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasien $pasien)
    {
        $title = $this->title;
        return view('pasien.show', compact('pasien', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasien $pasien)
    {
        $title = $this->title;
        return view('pasien.edit', compact('title', 'pasien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasien $pasien)
    {
        $request->validate([
            'nama' => 'required',
            'no_rm' => 'required',
            'alamat' => 'required',
        ]);

        if ($request->has('asli_daerah')) {
            $request->request->add(['asli_daerah' => '1']);
        } else {
            $request->request->add(['asli_daerah' => '0']);
        }

        $pasien->update($request->all());
        return to_route('pasien.index')->with('status', 'update-success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasien $pasien)
    {
        $pasien->delete();
        return back()->with('status', 'delete-success');
    }
}
