@extends('main')
@section('container')
    <div class="container bg-[#DDE4FF]">
        <div class="py-8 text-base">
            <span><a href="/dashboard" class="text-[#5C59E8]">Beranda</a> > Kelola Promo</span>
        </div>

        <div class="flex justify-between items-center">
            <div class="w-[50%] ">
                <form action="/promo" method="get">
                    <input type="text" name="search" id="search" placeholder="🔍   Cari"
                           class="block w-full bg-[#F6F6F6] rounded-full px-8 py-2 focus:ring-[##4880FF] focus:border-[##4880FF] text-[#202224] text-sm border border-[#D5D5D5] placeholder-[#202224]">
                </form>
            </div>

            <div class="bg-primary rounded-xl">
                <a class="flex items-center p-2" href="/promo/create">
                    <img src="/img/plus.png" > <span class="text-white font-sans font-bold"> Tambah Promo</span>
                </a>
            </div>
        </div>

        <div class="p-2 bg-white mt-4 rounded-xl w-full py-64">
            <table class="items-center w-full mb-0 align-top">
                <thead>
                <tr>
                    <th class="px-6 py-3 pl-2 font-bold text-center border-b text-sm">No</th>
                    <th class="px-6 py-3 pl-2 font-bold text-center  border-b text-sm">Nama Promo</th>
                    <th class="px-6 py-3 pl-2 font-bold text-center  border-b text-sm">Deskripsi Promo</th>
                    <th class="px-6 py-3 pl-2 font-bold text-center  border-b text-sm">Syarat Ketentuan</th>
                    <th class="px-6 py-3 pl-2 font-bold text-center  border-b text-sm">Masa Berlaku</th>
                    <th class="px-6 py-3 pl-2 font-bold text-center  border-b text-sm">Minimal Belanja</th>
                    <th class="px-6 py-3 pl-2 font-bold text-center  border-b text-sm">Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($promos as $promo)
                    <tr>
                        <td class="p-2 text-center">{{ $loop->iteration }}</td>
                        <td class="p-2 font-semibold text-center">{{ $promo->nama_promo }}</td>
                        <td class="p-2 font-semibold">{{ $promo->deskripsi_promo }}</td>
                        <td class="p-2 font-semibold">{{ $promo->syarat_ketentuan }} galon</td>
                        <td class="p-2 font-semibold">{{ date('d-m-Y'), strtotime($promo->masa_berlaku) }}</td>
                        <td class="p-2 font-semibold text-center">Rp{{ number_format($promo->min_belanja, 0) }}</td>
                        <td class="p-2 font-semibold">
                            <div class="flex">
                                <div class="bg-[#4AD989] flex justify-center px-2 py-0.5 rounded-lg mx-2 items-center">
                                    <a href="/promo/{{ $promo->id }}/edit" class="bg-[#4AD989] shadow-xl">
                                        <img src="/img/edit.png" alt="">
                                    </a>
                                </div>
                                <div class="bg-red-500 p-2 rounded-lg mx-2 flex justify-center items-center">
                                    <form action="{{ route('promo.destroy', $promo->id) }}" method="post" >
                                        @method('delete')
                                        @csrf
                                        <button class="bg-[#FF0000]">
                                            <img src="/img/delete.png" alt="" class="mt-4">
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
```
