@extends('main')
@section('container')
    <div class="container bg-[#DDE4FF] h-[120vh]">
        <div class="pt-8 text-base">
            <span><a href="/dashboard" class="text-[#5C59E8]">Beranda</a> > <a class="text-[#5C59E8]" href="/profil">Kelola Profil</a> > Edit Profile User</span>
        </div>

        <div class="py-2">
            <h1>Informasi Pribadi</h1>

            <form action="/admin/{{ Auth::guard('admin')->user()->id }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="p-1">
                    <label for="nama_pengguna" class="text-[#606060] text-sm font-semibold my-1">Nama</label>
                    <input type="text" id="nama_pengguna" name="nama_pengguna" value="{{ Auth::guard('admin')->user()->nama_pengguna }}" class="block w-1/2 rounded-lg border-0 bg-[#F5F6FA]">
                </div>

                <div class="p-1">
                    <label for="email" class="text-[#606060] text-sm font-semibold my-1">Email</label>
                    <input type="text" id="email" name="email" value="{{ Auth::guard('admin')->user()->email }}" class="block w-1/2 rounded-lg border-0 bg-[#F5F6FA]">
                </div>

                <div class="p-1">
                    <label for="no_hp" class="text-[#606060] text-sm font-semibold my-3">No Handphone</label>
                    <input type="text" id="no_hp" name="no_hp" value="{{ Auth::guard('admin')->user()->no_hp  }}" class="block w-1/2 rounded-lg border-0 bg-[#F5F6FA]">
                </div>

                <div class="p-3 bg-[#4880FF] mt-2 w-1/2 rounded text-center text-white">
                    <button type="submit">Ubah</button>
                </div>
            </form>
        </div>


    </div>
@endsection
