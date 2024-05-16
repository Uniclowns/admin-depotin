@extends('main')
@section('container')
    <div class="container bg-[#DDE4FF] h-screen">
        <div class="py-8 text-base">
            <span><a href="/dashboard" class="text-[#5C59E8]">Beranda</a> > <a class="text-primary" href="/kelola">Kelola Mitra</a> > Edit Mitra</span>
        </div>

        <div>
            <form action="/mitra/{{ $mitra->id }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <label for="username" class="block font-bold ">Username</label>
                <input type="text" name="username" id="username" class="bg-[#D9D9FF] border border-[#9CB0E2] p-2 rounded-lg w-[60%] mt-2 mb-4" value="{{ old('username', $mitra->username) }}">
                @error('username')
                <div class="text-red-500">
                    {{ $message }}
                </div>
                @enderror
                <label for="nama_depot" class="block font-bold ">Nama Depot</label>
                <input type="text" name="nama_depot" id="nama_depot" class="bg-[#D9D9FF] border border-[#9CB0E2] p-2 rounded-lg w-[60%] mt-2 mb-4" value="{{ old('nama_depot', $mitra->nama_depot) }}">
                @error('nama_depot')
                <div class="text-red-500">
                    {{ $message }}
                </div>
                @enderror
                <label for="alamat" class="block font-bold ">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="bg-[#D9D9FF] border border-[#9CB0E2] p-2 rounded-lg w-[60%] mt-2 mb-4" value="{{ old('alamat', $mitra->alamat) }}">
                @error('alamat')
                <div class="text-red-500">
                    {{ $message }}
                </div>
                @enderror
                <label for="foto_depot" class="block font-bold ">Foto Depot</label>
                <input type="file" name="foto_depot" id="foto_depot">
                @error('foto_depot')
                <div class="text-red-500">
                    {{ $message }}
                </div>
                @enderror
                <button class="bg-primary px-6 py-2 block mt-6 text-white rounded-lg w-[60%]">Edit data</button>
            </form>
        </div>

    </div>
@endsection
