@extends('main')
@section('container')
    <div class="container bg-[#DDE4FF] h-[100%]">
        <div class="py-8 text-base">
            <span><a href="/dashboard" class="text-[#5C59E8]">Beranda</a> > <a class="text-primary" href="/driver">Kelola driver</a> > Edit Driver</span>
        </div>

        <div>
            <form action="/driver/{{ $driver->id }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <label for="nama" class="block font-bold ">Nama</label>
                <input type="text" name="nama" id="nama" class="bg-[#D9D9FF] border border-[#9CB0E2] p-2 rounded-lg w-[60%] mt-2 mb-4" value="{{ old('nama', $driver->nama) }}">
                @error('nama')
                <div class="text-red-500">
                    {{ $message }}
                </div>
                @enderror
                <label for="alamat" class="block font-bold ">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="bg-[#D9D9FF] border border-[#9CB0E2] p-2 rounded-lg w-[60%] mt-2 mb-4" value="{{ old('alamat', $driver->alamat) }}">
                @error('alamat')
                <div class="text-red-500">
                    {{ $message }}
                </div>
                @enderror
                <label for="no_hp" class="block font-bold ">No. Handphone</label>
                <input type="text" name="no_hp" id="no_hp" class="bg-[#D9D9FF] border border-[#9CB0E2] p-2 rounded-lg w-[60%] mt-2 mb-4" value="{{ old('no_hp', $driver->no_hp) }}">
                @error('no_hp')
                <div class="text-red-500">
                    {{ $message }}
                </div>
                @enderror
                <label for="plat_kendaraan" class="block font-bold ">Plat Kendaraan</label>
                <input type="text" name="plat_kendaraan" id="plat_kendaraan" class="bg-[#D9D9FF] border border-[#9CB0E2] p-2 rounded-lg w-[60%] mt-2 mb-4" value="{{ old('plat_kendaraan', $driver->plat_kendaraan) }}">
                @error('plat_kendaraan')
                <div class="text-red-500">
                    {{ $message }}
                </div>
                @enderror
                <div class="flex">
                    <div class="flex flex-wrap justify-between">
                        <div>
                            <label for="ktp" class="block font-bold ">KTP</label>
                            <input type="file" name="ktp" id="ktp">
                            @error('ktp')
                            <div class="text-red-500">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div>
                            <label for="sim" class="block font-bold ">STNK</label>
                            <input type="file" name="sim" id="sim">
                            @error('sim')
                            <div class="text-red-500">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div>
                            <label for="ijazah" class="block font-bold ">Ijazah</label>
                            <input type="file" name="ijazah" id="ijazah">
                            @error('ijazah')
                            <div class="text-red-500">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div>
                            <label for="skbn" class="block font-bold ">SKBN</label>
                            <input type="file" name="skbn" id="skbn">
                            @error('skbn')
                            <div class="text-red-500">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="flex flex-wrap justify-between">
                        <div>
                            <label for="sim" class="block font-bold ">SIM</label>
                            <input type="file" name="sim" id="sim">
                            @error('sim')
                            <div class="text-red-500">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div>
                            <label for="skck" class="block font-bold ">SKCK</label>
                            <input type="file" name="skck" id="skck">
                            @error('skck')
                            <div class="text-red-500">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div>
                            <label for="skd" class="block font-bold ">SKD</label>
                            <input type="file" name="skd" id="skd">
                            @error('skd')
                            <div class="text-red-500">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div>
                            <label for="bpjs" class="block font-bold ">BPJS</label>
                            <input type="file" name="bpjs" id="bpjs">
                            @error('bpjs')
                            <div class="text-red-500">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <button class="bg-primary px-6 py-2 block mt-6 text-white rounded-lg w-[60%] mb-12">Edit data</button>
            </form>
        </div>

    </div>
@endsection
