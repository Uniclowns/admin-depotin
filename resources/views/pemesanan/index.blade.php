@extends('main')
@section('container')
    <div class="container bg-[#DDE4FF]">
        <div class="py-8 text-base">
            <span><a href="/dashboard" class="text-[#5C59E8]">Beranda</a> > Kelola Pemesanan</span>
        </div>

        <div class="flex justify-between items-center">
            <div class="w-[50%] ">
                <form action="/pemesanan">
                    <input type="text" name="search" id="search" placeholder="🔍   Cari"
                           class="block w-full bg-[#F6F6F6] rounded-full px-8 py-2 focus:ring-[##4880FF] focus:border-[##4880FF] text-[#202224] text-sm border border-[#D5D5D5] placeholder-[#202224]">
                </form>
            </div>

            <div class="flex">
                <form action="/pemesanan" class="flex">
                    <div>
                        <input type="date" name="dateBefore" id="fromA" class="p-2 rounded-xl mx-2">
                    </div>
                    <div>
                        <input type="date" name="dateAfter" id="toA"  class="p-2 rounded-xl mx-2">
                    </div>
                    <div class="flex justify-center bg-primary rounded-lg">
                        <button type="submit" class="inline px-4 py-2 text-white">Tampilkan</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="p-2 bg-white mt-4 rounded-xl w-full py-64">
            <table class="items-center w-full mb-0 align-top">
                <thead>
                <tr>
                    <th class="px-6 py-3 pl-2 font-bold text-center border-b text-sm">No</th>
                    <th class="px-6 py-3 pl-2 font-bold text-center  border-b text-sm">Tanggal</th>
                    <th class="px-6 py-3 pl-2 font-bold text-center  border-b text-sm">Nama Pelanggan</th>
                    <th class="px-6 py-3 pl-2 font-bold text-center  border-b text-sm">Item</th>
                    <th class="px-6 py-3 pl-2 font-bold text-center  border-b text-sm">Mitra Depot</th>
                    <th class="px-6 py-3 pl-2 font-bold text-center  border-b text-sm">Nama Driver</th>
                    <th class="px-6 py-3 pl-2 font-bold text-center  border-b text-sm">Total</th>
                    <th class="px-6 py-3 pl-2 font-bold text-center  border-b text-sm">Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pemesanans as $pemesanan)
                    <tr class="border ">
                        <td class="p-2 text-center">{{ $loop->iteration }}</td>
                        <td class="p-2 font-semibold">{{ date('d-m-Y', strtotime($pemesanan->created_at)) }}</td>
                        <td class="p-2 font-semibold">{{ $pemesanan->pelanggan->nama }}</td>
                        <td class="p-2 font-semibold">{{ $pemesanan->jumlah_pemesanan }} galon</td>
                        <td class="p-2 font-semibold">{{ $pemesanan->mitra->nama_depot }}</td>
                        <td class="p-2 font-semibold">{{ $pemesanan->supir->nama ?? 'Data Driver Kosong' }}</td>
                        <td class="p-2 font-semibold">Rp{{ number_format($pemesanan->total_harga, 0) }}</td>
                        @if($pemesanan->status_transaksi == 'Berhasil')
                            <td class="p-2 font-semibold bg-[#00B69B] rounded-full text-white text-center px-5 py-0.5">{{ $pemesanan->status_transaksi }}</td>
                        @elseif($pemesanan->status_transaksi == 'Proses')
                            <td class="p-2 font-semibold bg-[#FCBE2D] rounded-full text-white text-center px-5 py-0.5">{{ $pemesanan->status_transaksi }}</td>
                        @else
                            <td class="p-2 font-semibold bg-[#FD5454] rounded-full text-white text-center px-5 py-0.5">{{ $pemesanan->status_transaksi }}</td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                {{ $pemesanans->links() }}
            </div>
        </div>
    </div>
@endsection
```
