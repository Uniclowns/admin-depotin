@extends('main')
@section('container')
    <div class="container bg-[#DDE4FF] h-[140vh]">
        <h1 class="py-10 text-3xl ">Laporan Pendapatan</h1>
        <img src="/img/depotin.png" alt="depotin-logo" srcset="" class="w-36">
        <div class="flex py-6 justify-between max-w-[60%]">
            <h1 class="text-2xl font-semibold pt-10">Pendapatan</h1>
            <div class="bg-white p-2">
                <div class="flex ">
                    <div class="px-2">
                        <h4 class="text-base">Laporan #{{ $reportNumber }}</h4>
                        <h4 class="text-base">Tanggal & Waktu</h4>
                    </div>
                    <div class="mx-2">
                        <h4 class="text-base">{{ date('M Y', strtotime($today)) }}</h4>
                        <h4 class="text-base">{{ date('H:i:s', strtotime($today)) }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <hr class="border bg-black p-0.5 max-w-[60%]">
        <table class="items-center max-w-[60%] mb-0 align-top text-black">
            <thead>
            <tr>
                <th class="px-6 py-3 pl-2 font-bold text-center  border-b text-sm">Tanggal</th>
                <th class="px-6 py-3 pl-2 font-bold text-center  border-b text-sm">Jumlah Galon</th>
                <th class="px-6 py-3 pl-2 font-bold text-center  border-b text-sm">Jumlah Pelanggan</th>
                <th class="px-6 py-3 pl-2 font-bold text-center  border-b text-sm">Total Pendapatan</th>
                <th class="px-6 py-3 pl-2 font-bold text-center  border-b text-sm">Keuntungan</th>
            </tr>
            </thead>
            <tbody>
            @foreach($laporans as $laporan)
                <tr>
                    <td class="p-2 font-semibold text-center">{{ date('d/m/Y', strtotime($laporan->start_date)) }}</td>
                    <td class="p-2 font-semibold text-center">{{ $laporan->total_pemesanan }} Galon</td>
                    <td class="p-2 font-semibold text-center">{{ $laporan->total_user }} Pelanggan</td>
                    <td class="p-2 font-semibold text-center">Rp{{ number_format($laporan->total_harga, 0) }}</td>
                    <td class="p-2 font-semibold text-center">Rp{{ number_format($laporan->keuntungan, 0) }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <hr class="border bg-black p-0.5 max-w-[60%]">
        <h4 class="font-bold text-base px-4">Subtotal Total Pendapatan</h4>
        <div class="flex px-10 justify-between max-w-[60%]">
            <div>
                @foreach($laporans as $laporan)
                    <h4 class="text-sm font-semibold">Minggu ke-{{ $loop->iteration }}</h4>
                @endforeach
                <h4 class="text-sm font-semibold pt-20">Pengeluaran</h4>
                <h4 class="text-lg font-bold pt-9">TOTAL KEUNTUNGAN</h4>
            </div>
            <div>
                @foreach($laporans as $laporan)
                    <h4 class="text-sm font-semibold">Rp{{ number_format($laporan->total_harga, 0) }}</h4>
                @endforeach
                <div class="flex">
                    <hr class="bg-black w-24 h-px">
                    <i class="fa-solid fa-plus text-black"></i>
                </div>
                    <h4 class="text-sm font-semibold">Rp{{ number_format($laporans->sum('total_harga'), 0) }}</h4>
                    <h4 class="text-sm font-semibold pt-4">Rp{{ number_format($laporans->sum('total_harga') - $laporans->sum('keuntungan'), 0) }}</h4>
                    <div class="flex">
                        <hr class="bg-black w-24 h-px">
                        <i class="fa-solid fa-minus text-black"></i>
                    </div>
                    <h4 class="text-base font-bold">Rp{{ number_format($laporans->sum('total_harga') - ($laporans->sum('total_harga') - $laporans->sum('keuntungan')), 0) }}</h4>
            </div>
        </div>
    </div>
@endsection
