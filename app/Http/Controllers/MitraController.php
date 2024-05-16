<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mitra.index', [
            'active' => 'mitra',
            'mitras' => Mitra::latest('id')->filter(request(['search']))->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mitra.create', [
            'active' => 'mitra',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required',
            'nama_depot' => 'required',
            'alamat' => 'required',
            'foto_depot' => 'image|file|max:2048',
        ]);

        if ($request->hasFile('foto_depot')) {
            $validated['foto_depot'] = $request->file('foto_depot')->store('foto_depot');
        }

        $validated['admin_id'] = 1;
        $validated['password'] = bcrypt('12345');
        $validated['barcode_qris'] = 'img/default.png';
        Mitra::create($validated);
        return redirect()->route('mitra.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('mitra.edit', [
            'active' => 'mitra',
            'mitra' => Mitra::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $rules = [
            'username' => 'required|unique:mitra,username,' . $id,
            'nama_depot' => 'required',
            'alamat' => 'required',
            'foto_depot' => 'image|file|max:2048',
        ];

        $validatedData = $request->validate($rules);

        if($request->file('foto_depot'))
        {
            $validatedData['foto_depot'] =  $request->file('foto_depot')->store('foto_profil');
        }

        Mitra::where('id', $id)->update($validatedData);
        return redirect('/mitra')->withSuccess('Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Mitra::destroy($id);
        return redirect()->route('mitra.index')->withSuccess('Data berhasil dihapus!');
    }
}
