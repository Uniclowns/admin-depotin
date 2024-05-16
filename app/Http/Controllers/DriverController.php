<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('driver.index', [
            'active' => 'driver',
            'drivers' => Driver::where('accepted', 1)->latest('id')->filter(request(['search']))->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('driver.create', [
            'active' => 'driver',
            'drivers' => Driver::where('accepted', 0)->latest('id')->filter(request(['search']))->paginate(10),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->status == 'terima') {
            $accept = 1;
            Driver::where('id', $request->id)->update(['accepted' => $accept]);
            return redirect()->route('driver.index')->withSuccess('Driver berhasil diterima!');
        }
        else
        {
            return view('driver.create', [
                'active' => 'driver',
                'drivers' => Driver::where('accepted', 0)->latest('id')->filter(request(['search']))->paginate(10),
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Driver $driver)
    {
        return view ('driver.show', [
            'active' => 'driver',
            'driver' => $driver,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Driver $driver)
    {
        return view('driver.edit', [
            'active' => 'driver',
            'driver' => $driver,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Driver $driver)
    {
        $rules = [
            'nama' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'plat_kendaraan' => 'required',
            'ktp' => 'image|file|max:2048',
            'sim' => 'image|file|max:2048',
            'skck' => 'image|file|max:2048',
            'stnk' => 'image|file|max:2048',
            'ijazah' => 'image|file|max:2048',
            'skd' => 'image|file|max:2048',
            'skbn' => 'image|file|max:2048',
            'bpjs' => 'image|file|max:2048',
        ];

        $validatedData = $request->validate($rules);

        if($request->file('ktp') || $request->file('sim') || $request->file('skck') || $request->file('stnk') || $request->file('ijazah') || $request->file('skd')  || $request->file('skbn') || $request->file('bpjs'))
        {
            Storage::delete($driver->ktp);
            Storage::delete($driver->sim);
            Storage::delete($driver->skck);
            Storage::delete($driver->stnk);
            Storage::delete($driver->ijazah);
            Storage::delete($driver->skd);
            Storage::delete($driver->skbn);
            Storage::delete($driver->bpjs);

            $validatedData['ktp'] =  $request->file('ktp')->store('data-driver');
            $validatedData['sim'] =  $request->file('sim')->store('data-driver');
            $validatedData['skck'] =  $request->file('skck')->store('data-driver');
            $validatedData['stnk'] =  $request->file('stnk')->store('data-driver');
            $validatedData['ijazah'] =  $request->file('ijazah')->store('data-driver');
            $validatedData['skd'] =  $request->file('skd')->store('data-driver');
            $validatedData['skbn'] =  $request->file('skbn')->store('data-driver');
            $validatedData['bpjs'] =  $request->file('bpjs')->store('data-driver');
        }

        Driver::where('id', $driver->id)->update($validatedData);
        return redirect('/driver')->withSuccess('Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Driver $driver)
    {
        Driver::destroy($driver->id);
        return redirect()->route('driver.index')->withSuccess('Data berhasil dihapus!');
    }
}
