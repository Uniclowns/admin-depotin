<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('promo.index', [
            'active' => 'promo',
            'promos' => Promo::latest('id')->filter(request(['search']))->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('promo.create', [
            'active' => 'promo',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_promo' => 'required',
            'deskripsi_promo' => 'required',
            'syarat_ketentuan' => 'required',
            'masa_berlaku' => 'required',
            'min_belanja' => 'required|numeric',
        ]);

        $validated['admin_id'] = 1;
        $validated['pengguna_id'] = 1;
        Promo::create($validated);
        return redirect()->route('promo.index');
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
        return view('promo.edit', [
            'active' => 'promo',
            'promo' => Promo::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_promo' => 'required',
            'deskripsi_promo' => 'required',
            'syarat_ketentuan' => 'required',
            'masa_berlaku' => 'required',
            'min_belanja' => 'required|numeric',
        ]);

        $validated['admin_id'] = 1;
        $validated['pengguna_id'] = 1;
        Promo::where('id', $id)->update($validated);
        return redirect()->route('promo.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        Promo::destroy($id);
        return redirect()->route('promo.index')->withSucces('Data berhasil dihapus');
    }
}
