@extends('main')
@section('container')
    <div class="container bg-[#DDE4FF]">
        <h1 class="py-4 font-bold text-3xl">Beranda</h1>
        <div class="flex">
            <div class="w-1/4 max-w-full mb-6 mr-8">
                <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p class="mb-4 font-sans text-sm font-semibold leading-normal">Total Pengguna</p>
                                    <h5 class="mb-0 font-bold">
                                        {{ $users }}
                                    </h5>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <img src="/img/total-pengguna.png" alt="">
                            </div>
                        </div>
                    </div>
                    @if($usersToday > $usersYesterday)
                        <div class="flex items-center p-4">
                            <img src="/img/trend-up.png" alt="" width="40" class="mr-2">
                            <p class="font-semibold mt-4"><span class="text-[#00B69B]">{{ number_format($userCount, 1) }}%</span> Naik dari kemarin.</p>
                        </div>
                    @elseif($usersToday == $usersYesterday)
                        <div class="flex items-center p-4">
                            <img src="/img/trend-up.png" alt="" width="40" class="mr-2">
                            <p class="font-semibold mt-4"><span>{{ number_format($userCount, 1) }}%</span> Sama dari kemarin.</p>
                        </div>
                    @else
                        <div class="flex items-center p-4">
                            <img src="/img/trend-down.png" alt="" width="40" class="mr-2">
                            <p class="font-semibold mt-4"><span class="text-[#F93C65]">8.5%</span> Turun dari kemarin.</p>
                        </div>
                    @endif
                </div>

            </div>

            <div class="w-1/4 max-w-full mb-6 mr-8">
                <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p class="mb-4 font-sans text-sm font-semibold leading-normal">Total Pemesanan</p>
                                    <h5 class="mb-0 font-bold">
                                        {{ $total_pesanan }}
                                    </h5>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <img src="/img/total-pemesanan.png" alt="">
                            </div>
                        </div>
                    </div>
                    @if($pesananToday > $pesananYesterday)
                        <div class="flex items-center p-4">
                            <img src="/img/trend-up.png" alt="" width="40" class="mr-2">
                            <p class="font-semibold mt-4"><span class="text-[#00B69B]">{{ number_format($pesananCount, 1) }}%</span> Naik dari kemarin.</p>
                        </div>
                    @elseif($pesananToday == $pesananYesterday)
                        <div class="flex items-center p-4">
                            <img src="/img/trend-up.png" alt="" width="40" class="mr-2">
                            <p class="font-semibold mt-4"><span>{{ number_format($pesananCount, 1) }}%</span> Sama dari kemarin.</p>
                        </div>
                    @else
                        <div class="flex items-center p-4">
                            <img src="/img/trend-down.png" alt="" width="40" class="mr-2">
                            <p class="font-semibold mt-4"><span class="text-[#F93C65]">{{ number_format($pesananCount, 1) }}%</span> Turun dari kemarin.</p>
                        </div>
                    @endif
                </div>
            </div>

            <div class="w-1/4 max-w-full mb-6 mr-8">
                <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p class="mb-4 font-sans text-sm font-semibold leading-normal">Total Penjualan</p>
                                    <h5 class="mb-0 font-bold">
                                        Rp{{ number_format($total_penjualan, 0) }}
                                    </h5>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <img src="/img/total-penjualan.png" alt="">
                            </div>
                        </div>
                    </div>
                    @if($penjualanToday > $penjualanYesterday)
                        <div class="flex items-center p-4">
                            <img src="/img/trend-up.png" alt="" width="40" class="mr-2">
                            <p class="font-semibold mt-4"><span class="text-[#00B69B]">{{ number_format($penjualanCount, 1) }}%</span> Naik dari kemarin.</p>
                        </div>
                    @elseif($penjualanToday == $penjualanYesterday)
                        <div class="flex items-center p-4">
                            <img src="/img/trend-up.png" alt="" width="40" class="mr-2">
                            <p class="font-semibold mt-4"><span>{{ number_format($penjualanCount, 1) }}%</span> Sama dari kemarin.</p>
                        </div>
                    @else
                        <div class="flex items-center p-4">
                            <img src="/img/trend-down.png" alt="" width="40" class="mr-2">
                            <p class="font-semibold mt-4"><span class="text-[#F93C65]">{{ number_format($penjualanCount, 1) }}%</span> Turun dari kemarin.</p>
                        </div>
                    @endif
                </div>
            </div>

            <div class="w-1/4 max-w-full mb-6 ">
                <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                            <div class="flex-none w-2/3 max-w-full px-3">
                                <div>
                                    <p class="mb-4 font-sans text-sm font-semibold leading-normal">Pendapatan Harian</p>
                                    <h5 class="mb-0 font-bold">
                                        Rp{{ number_format($total_penjualan, 0) }}
                                    </h5>
                                </div>
                            </div>
                            <div class="px-3 text-right basis-1/3">
                                <img src="/img/pendapatan-harian.png" alt="">
                            </div>
                        </div>
                    </div>
                    @if($pendapatan_harian > $pendapatanYesterday)
                        <div class="flex items-center p-4">
                            <img src="/img/trend-up.png" alt="" width="40" class="mr-2">
                            <p class="font-semibold mt-4"><span class="text-[#00B69B]">{{ number_format($pendapatanCount, 1) }}%</span> Naik dari kemarin.</p>
                        </div>
                    @elseif($pendapatan_harian == $pendapatanYesterday)
                        <div class="flex items-center p-4">
                            <img src="/img/trend-up.png" alt="" width="40" class="mr-2">
                            <p class="font-semibold mt-4"><span>{{ number_format($pendapatanCount, 1) }}%</span> Sama dari kemarin.</p>
                        </div>
                    @else
                        <div class="flex items-center p-4">
                            <img src="/img/trend-down.png" alt="" width="40" class="mr-2">
                            <p class="font-semibold mt-4"><span class="text-[#F93C65]">{{ number_format($pendapatanCount, 1) }}%</span> Turun dari kemarin.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="flex flex-wrap bg-white rounded-lg">
            <div class="w-full p-8">
                <h1 class="line mb-4 text-xl font-bold">Rincian Penjualan</h1>
                <canvas id="myCanvas"></canvas>
            </div>
        </div>

        <div class="flex ">
            <div class="w-full p-8 mr-3 bg-white rounded-lg mt-6 mb-16">
                <h1 class="line mb-4 text-xl font-bold">Pendapat Harian</h1>
                <canvas id="myCanvas2" class="h-full"></canvas>
            </div>

            <div class="w-full p-8 bg-white rounded-lg mt-6 mb-16">
                <h1 class="line mb-4 text-xl font-bold">Total Pengguna</h1>
                <canvas id="myCanvas3"></canvas>
            </div>
        </div>
    </div>

    <script>
        "use strict";

        const ctx = document.getElementById("myCanvas").getContext("2d");
        var labels = [@foreach($penjualanAll as $penjualan) '{{ date('d', strtotime($penjualan->tanggal)) }}', @endforeach];
        var data = [@foreach($penjualanAll as $penjualan) {{ $penjualan->total_penjualan }}, @endforeach];

        let config = {
            type: "line",
            data: {
                labels: labels,
                datasets: [{
                    label: "Total Penjualan (Rp)",
                    data: data,
                }, ],
            },
        };
        new Chart(ctx, config);

        const chart2 = document.getElementById("myCanvas2").getContext("2d");
        var labels2 = [@foreach($penjualanAll as $penjualan) '{{ date('D', strtotime($penjualan->tanggal)) }}', @endforeach];

        let data2 = {
            type: "bar",
            data: {
                labels: labels2,
                datasets: [{
                    label: "Pendapatan Harian (Rp)",
                    data: data,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };
        new Chart(chart2, data2);

        const chart3 = document.getElementById("myCanvas3").getContext("2d");
        var datas3 = [{{ $users }}];

        let data3 = {
            type: "doughnut",
            data: {
                labels: [
                    'Pengguna Aktif',
                ],
                datasets: [{
                    label: 'My First Dataset',
                    data: datas3,
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                    ],
                    hoverOffset: 4
                }]
            },
        };
        new Chart(chart3, data3);
    </script>
@endsection
