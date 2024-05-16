@extends('main')
@section('container')
    <div class="container bg-[#DDE4FF] h-screen">
        <div class="py-8 text-base">
            <span><a href="/dashboard" class="text-[#5C59E8]">Beranda</a> > <a class="text-primary" href="/kelola">Kelola Pengguna</a> > Edit Pengguna</span>
        </div>

        <div>
            <form action="/kelola/{{ $user->id }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <label for="nama" class="block font-bold ">Nama</label>
                <input type="text" name="nama" id="nama" class="bg-[#D9D9FF] border border-[#9CB0E2] p-2 rounded-lg w-[60%] mt-2 mb-4" value="{{ old("nama", $user->nama) }}">

                <label for="email" class="block font-bold ">Email</label>
                <input type="email" name="email" id="email" class="bg-[#D9D9FF] border border-[#9CB0E2] p-2 rounded-lg w-[60%] mt-2 mb-4" value="{{ old("email", $user->email) }}">
                <label for="no_hp" class="block font-bold ">No. Handphone</label>
                <input type="text" name="no_hp" id="no_hp" class="bg-[#D9D9FF] border border-[#9CB0E2] p-2 rounded-lg w-[60%] mt-2 mb-4" value="{{ old("no_hp", $user->no_hp) }}">
                <label for="foto_profil" class="block font-bold ">Foto Profil</label>
                <input type="file" name="foto_profil" id="foto_profil">
                @error('foto_profil')
                <div class="text-red-500 mt-2">
                    {{ $message }}
                </div>
                @enderror
                <button class="bg-primary px-6 py-2 block mt-6 text-white rounded-lg w-[60%]">Edit</button>
            </form>
        </div>

    </div>
@endsection
