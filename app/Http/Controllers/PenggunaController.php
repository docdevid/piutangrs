<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class PenggunaController extends Controller
{
    public function __construct(public $title = 'Pengguna')
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $title = $this->title;
        $penggunas = User::when($request->has('search'), function ($q) use ($request) {
            $q->where('name', 'like', '%' . $request->search . '%');
            $q->orWhere('email', 'like', '%' . $request->search . '%');
        })
            ->orderBy('id', 'desc')
            ->paginate(25);
        return view('pengguna.index', compact('penggunas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pengguna = new User();
        $title = $this->title;
        $roles = Role::all()->filter(function ($e) {
            if ($e->name != 'Super Admin') {
                return $e;
            }
        });
        return view('pengguna.create', compact('title', 'pengguna', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'role' => 'required',
        ]);

        if ($userCreated = $user->create($request->all())) {

            $userCreated->assignRole($request->role);

            if ($request->has('image') && $request->file('image')->isValid()) {
                $userCreated->addMediaFromRequest('image')->toMediaCollection('pengguna');
            }

            return to_route('pengguna.index')->with('status', 'create-success');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $pengguna)
    {
        $title = $this->title;
        return view('pengguna.show', compact('pengguna', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $pengguna)
    {
        $title = $this->title;
        $roles = Role::all()->filter(function ($e) {
            if ($e->name != 'Super Admin') {
                return $e;
            }
        });
        return view('pengguna.edit', compact('title', 'pengguna', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $pengguna)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $pengguna->id,            'password' => 'required',
        ]);

        $pengguna->update($request->all());

        if ($request->has('image') && $request->file('image')->isValid()) {

            $pengguna->clearMediaCollection('pengguna');
            $pengguna->addMediaFromRequest('image')->toMediaCollection('pengguna');
        }

        return to_route('pengguna.index')->with('status', 'update-success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $pengguna)
    {
        $pengguna->delete();
        return back()->with('status', 'delete-success');
    }
}
