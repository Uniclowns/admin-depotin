@extends('main')
@section('container')
    <div class="container bg-[#DDE4FF] h-screen">
        <div class="py-8 text-base">
            <span><a href="/dashboard" class="text-[#5C59E8]">Beranda</a> > <a class="text-primary" href="/kelola">Kelola Mitra</a> > Edit Promo</span>
        </div>

        <div>
            <form action="/promo/{{ $promo->id }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <label for="nama_promo" class="block font-bold ">Nama Promo</label>
                <input type="text" name="nama_promo" id="nama_promo" class="bg-[#D9D9FF] border border-[#9CB0E2] p-2 rounded-lg w-[60%] mt-2 mb-4" value="{{ old('nama_promo', $promo->nama_promo) }}">
                @error('nama_promo')
                <div class="text-red-500">
                    {{ $message }}
                </div>
                @enderror
                <label for="deskripsi_promo" class="block font-bold ">Deskripsi Promo</label>
                <input type="text" name="deskripsi_promo" id="deskripsi_promo" class="bg-[#D9D9FF] border border-[#9CB0E2] p-2 rounded-lg w-[60%] mt-2 mb-4" value="{{ old('deskripsi_promo', $promo->deskripsi_promo) }}">
                @error('deskripsi_promo')
                <div class="text-red-500">
                    {{ $message }}
                </div>
                @enderror
                <label for="syarat_ketentuan" class="block font-bold ">Syarat dan Ketentuan</label>
                <input type="text" name="syarat_ketentuan" id="syarat_ketentuan" class="bg-[#D9D9FF] border border-[#9CB0E2] p-2 rounded-lg w-[60%] mt-2 mb-4" value="{{ old('syarat_ketentuan', $promo->syarat_ketentuan) }}">
                @error('syarat_ketentuan')
                <div class="text-red-500">
                    {{ $message }}
                </div>
                @enderror
                <label for="masa_berlaku" class="block font-bold ">Masa Berlaku</label>
                <input type="date" name="masa_berlaku" id="masa_berlaku" class="bg-[#D9D9FF] border border-[#9CB0E2] p-2 rounded-lg w-[60%] mt-2 mb-4" value="{{ old('masa_berlaku', date('Y-m-d', strtotime($promo->masa_berlaku))) }}">
                @error('masa_berlaku')
                <div class="text-red-500">
                    {{ $message }}
                </div>
                @enderror
                <label for="min_belanja" class="block font-bold ">Minimal Belanja (Rp)</label>
                <input type="text" name="min_belanja" id="min_belanja" class="bg-[#D9D9FF] border border-[#9CB0E2] p-2 rounded-lg w-[60%] mt-2 mb-4" value="{{ old('min_belanja', $promo->min_belanja) }}">
                @error('min_belanja')
                <div class="text-red-500">
                    {{ $message }}
                </div>
                @enderror
                <button class="bg-primary px-6 py-2 block mt-6 text-white rounded-lg w-[60%]">Edit data</button>
            </form>
        </div>

    </div>
@endsection
