<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public $user = User::class;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.index',[
            'active' => 'kelola',
            'users' => User::latest('id')->filter(request(['search']))->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view ('user.edit', [
            'active' => 'kelola',
            'user' => User::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'nama' => 'required',
            'email' => 'required',
            'foto_profil' => 'image|file|max:2048',
            'no_hp' => 'required',
        ];

        $validatedData = $request->validate($rules);

        if($request->file('foto_profil'))
        {
            $validatedData['foto_profil'] =  $request->file('foto_profil')->store('foto_profil');
        }

        User::where('id', $id)->update($validatedData);
        return redirect('/kelola')->withSuccess('Data berhasil diubah!');
    }

    public function editProfil()
    {
        return view('user.edit-profil', [
            'active' => 'beranda',
            'user' => auth()->user(),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/kelola')->withSuccess('Data berhasil dihapus!');
    }
}
