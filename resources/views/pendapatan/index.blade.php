@extends('main')
@section('container')
    <div class="container bg-[#DDE4FF] h-screen">
        <div class="py-8 text-base">
            <span><a href="/dashboard" class="text-[#5C59E8]">Beranda</a> > Laporan pendapatan</span>
        </div>

        <div class="flex justify-end items-center">
            <div>
                <form action="/laporan" id="filter-form">
                    <div class="flex justify-center items-center bg-white px-4 rounded-full">
                        <div>
                            <img src="/img/Filter icon.png">
                        </div>
                        <div class="flex justify-center items-center">
                            <span class="mx-3 text-xxl font-semibold">Filter Berdasarkan</span>
                            <img src="/img/line-pemisah.png" alt="" srcset="">
                        </div>
                        <div class="flex items-center justify-center mx-2 relative">
                            <span>Bulan</span>
                            <input type="hidden" name="month" value="" id="month-input">
                            <button id="button-down" name="toggle-down" type="button" class="mx-6">
                                <img src="/img/toggle-down.png" alt="">
                            </button>
                            <nav id="month-menu" class="absolute top-8 hidden rounded-lg py-3 shadow-lg right-1 bg-white z-[999] p-1">
                                <ul class="block">
                                    <li class="group">
                                        <button type="submit" class="flex items-center justify-center" onclick="submitForm('01')">
                                            <img src="/img/icon-calendar.png" alt="" srcset="" class="mx-2">
                                            <span class="text-[#404040] text-sm" value="Januari">Januari</span>
                                        </button>
                                    </li>

                                    <hr class="h-px my-2 bg-[#979797] border-0">

                                    <li class="group">
                                        <button type="submit" class="flex items-center justify-center" onclick="submitForm('02')">
                                            <img src="/img/icon-calendar.png" alt="" srcset="" class="mx-2">
                                            <span class="text-[#404040] text-sm" value="Januari">Februari</span>
                                        </button>
                                    </li>

                                    <hr class="h-px my-2 bg-[#979797] border-0">

                                    <li class="group">
                                        <button type="submit" class="flex items-center justify-center" onclick="submitForm('03')">
                                            <img src="/img/icon-calendar.png" alt="" srcset="" class="mx-2">
                                            <span class="text-[#404040] text-sm" value="Januari">Maret</span>
                                        </button>
                                    </li>

                                    <hr class="h-px my-2 bg-[#979797] border-0">

                                    <li class="group">
                                        <button type="submit" class="flex items-center justify-center" onclick="submitForm('04')">
                                            <img src="/img/icon-calendar.png" alt="" srcset="" class="mx-2">
                                            <span class="text-[#404040] text-sm" value="Januari">April</span>
                                        </button>
                                    </li>

                                    <hr class="h-px my-2 bg-[#979797] border-0">

                                    <li class="group">
                                        <button type="submit" class="flex items-center justify-center" onclick="submitForm('05')">
                                            <img src="/img/icon-calendar.png" alt="" srcset="" class="mx-2">
                                            <span class="text-[#404040] text-sm" value="Januari">Mei</span>
                                        </button>
                                    </li>

                                    <hr class="h-px my-2 bg-[#979797] border-0">

                                    <li class="group">
                                        <button type="submit" class="flex items-center justify-center" onclick="submitForm('06')">
                                            <img src="/img/icon-calendar.png" alt="" srcset="" class="mx-2">
                                            <span class="text-[#404040] text-sm" value="Januari">Juni</span>
                                        </button>
                                    </li>

                                    <hr class="h-px my-2 bg-[#979797] border-0">

                                    <li class="group">
                                        <button type="submit" class="flex items-center justify-center" onclick="submitForm('07')">
                                            <img src="/img/icon-calendar.png" alt="" srcset="" class="mx-2">
                                            <span class="text-[#404040] text-sm" value="Januari">Juli</span>
                                        </button>
                                    </li>

                                    <hr class="h-px my-2 bg-[#979797] border-0">

                                    <li class="group">
                                        <button type="submit" class="flex items-center justify-center" onclick="submitForm('08')">
                                            <img src="/img/icon-calendar.png" alt="" srcset="" class="mx-2">
                                            <span class="text-[#404040] text-sm" value="Januari">Agustus</span>
                                        </button>
                                    </li>

                                    <hr class="h-px my-2 bg-[#979797] border-0">

                                    <li class="group">
                                        <button type="submit" class="flex items-center justify-center" onclick="submitForm('09')">
                                            <img src="/img/icon-calendar.png" alt="" srcset="" class="mx-2">
                                            <span class="text-[#404040] text-sm" value="Januari">September</span>
                                        </button>
                                    </li>

                                    <hr class="h-px my-2 bg-[#979797] border-0">

                                    <li class="group">
                                        <button type="submit" class="flex items-center justify-center" onclick="submitForm('10')">
                                            <img src="/img/icon-calendar.png" alt="" srcset="" class="mx-2">
                                            <span class="text-[#404040] text-sm" value="Januari">Oktober</span>
                                        </button>
                                    </li>

                                    <hr class="h-px my-2 bg-[#979797] border-0">

                                    <li class="group">
                                        <button type="submit" class="flex items-center justify-center" onclick="submitForm('11')">
                                            <img src="/img/icon-calendar.png" alt="" srcset="" class="mx-2">
                                            <span class="text-[#404040] text-sm" value="Januari">November</span>
                                        </button>
                                    </li>

                                    <hr class="h-px my-2 bg-[#979797] border-0">

                                    <li class="group">
                                        <button type="submit" class="flex items-center justify-center" onclick="submitForm('12')">
                                            <img src="/img/icon-calendar.png" alt="" srcset="" class="mx-2">
                                            <span class="text-[#404040] text-sm" value="Januari">Desember</span>
                                        </button>
                                    </li>
                                </ul>
                            </nav>
                            <img src="/img/line-pemisah.png" alt="" srcset="">
                        </div>
                        <div class="flex items-center justify-center mx-2 relative">
                            <span>Tahun</span>
                            <input type="hidden" name="year" value="" id="year-input">
                            <button id="buttonToDown" name="toggle-down" type="button" class="mx-6">
                                <img src="/img/toggle-down.png" alt="">
                            </button>

                            <nav id="yearMenu" class="absolute top-10 hidden w-full max-w-[95px] rounded-lg py-3 shadow-lg right-5 bg-white z-[999]">
                                <ul class="block">
                                    <li class="group">
                                        <button type="submit" class="flex items-center justify-center" onclick="submitFormYear('2024')">
                                            <img src="/img/icon-calendar.png" alt="" srcset="" class="mx-2">
                                            <span class="text-[#404040] text-sm">2024</span>
                                        </button>
                                    </li>

                                    </li>

                                    <hr class="h-px my-2 bg-[#979797] border-0">
                                </ul>
                            </nav>
                            <img src="/img/line-pemisah.png" alt="" srcset="">
                        </div>
                        <div class="flex items-center justify-center mx-2">
                            <button type="submit" class="text-white px-4 py-2 rounded-full" onclick="resetForm()">
                                <img src="/img/Reset Filter.png" alt="" srcset="">
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="mx-3 ">
                <form>
                    <a class="bg-primary px-3 py-2.5 rounded-lg text-white" href="cetak"><i class="fa-solid fa-print"></i> Cetak Laporan</a>
                </form>
            </div>
        </div>

        <div class="p-2 bg-white mt-4 rounded-xl w-full py-64">
            <table class="items-center w-full mb-0 align-top">
                <thead>
                <tr>
                    <th class="px-6 py-3 pl-2 font-bold text-center border-b text-sm">Minggu ke-</th>
                    <th class="px-6 py-3 pl-2 font-bold text-center  border-b text-sm">Tanggal</th>
                    <th class="px-6 py-3 pl-2 font-bold text-center  border-b text-sm">Jumlah Galon</th>
                    <th class="px-6 py-3 pl-2 font-bold text-center  border-b text-sm">Jumlah Pesanan</th>
                    <th class="px-6 py-3 pl-2 font-bold text-center  border-b text-sm">Total Pendapatan</th>
                    <th class="px-6 py-3 pl-2 font-bold text-center  border-b text-sm">Keuntungan</th>
                </tr>
                </thead>
                <tbody>
                @foreach($laporans as $laporan)
                    <tr>
                        <td class="p-2 text-center">{{ $loop->iteration }}</td>
                        <td class="p-2 font-semibold text-center">{{ date('d/m/Y', strtotime($laporan->start_date)) }}</td>
                        <td class="p-2 font-semibold text-center">{{ $laporan->total_pemesanan }} Galon</td>
                        <td class="p-2 font-semibold text-center">{{ $laporan->total_user }} Pesanan</td>
                        <td class="p-2 font-semibold text-center">Rp{{ number_format($laporan->total_harga, 0) }}</td>
                        <td class="p-2 font-semibold text-center">Rp{{ number_format($laporan->keuntungan, 0) }}</td>
                    </tr>
                @endforeach
                <tr class="border-t-4 border-red-500">
                    <td class="text-center font-extrabold text-[#202224]">Total</td>
                    <td></td>
                    <td class="text-center font-extrabold text-[#202224]">{{ $laporans->sum('total_pemesanan') }} Galon</td>
                    <td class="text-center font-extrabold text-[#202224]">{{ $laporans->sum('total_user') }}    Pelanggan</td>
                    <td class="text-center font-extrabold text-[#202224]">Rp{{ number_format($laporans->sum('total_harga'), 0) }}</td>
                    <td class="text-center font-extrabold text-[#202224]">Rp{{ number_format($laporans->sum('keuntungan'), 0) }}</td>
                </tr>
                </tbody>
            </table>

        </div>

        <script>
            const toggleMonth = document.getElementById("button-down");
            const navMenuMonth = document.getElementById("month-menu");

            toggleMonth.addEventListener("click", function () {
                navMenuMonth.classList.toggle("hidden");
            });

            const toggleYear = document.getElementById("buttonToDown");
            const yearMenu = document.getElementById("yearMenu");

            toggleYear.addEventListener("click", function () {
                yearMenu.classList.toggle("hidden");
            });

            function submitForm(month) {
                document.getElementById('month-input').value = month;
                document.getElementById('filter-form').submit();
            }

            function resetForm() {
                document.getElementById('filter-form').reset();
            }

            function submitFormYear(year) {
                document.getElementById('year-input').value = year;
                document.getElementById('filter-form').submit();
            }
        </script>
    </div>
@endsection
