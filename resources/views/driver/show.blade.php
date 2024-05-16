@extends('main')
@section('container')
    <div class="container bg-[#DDE4FF] h-[100%]">
        <div class="py-8 text-base">
        </div>
        <span><a href="/dashboard" class="text-[#5C59E8]">Beranda</a> > <a class="text-primary" href="/driver">Kelola Driver</a> > Lihat Driver</span>

        <div class="py-4 flex justify-between">
            <div>
                <h1 class="font-semibold text-3xl">Lihat Driver</h1>
            </div>

            <div class="flex">
                    <div class="bg-[#4AD989] flex justify-center px-2 py-2 rounded-xl mx-2 items-center">
                        <a href="/driver/{{ $driver->id }}/edit" class="bg-[#4AD989] shadow-xl">
                            <img src="/img/edit.png" alt="">
                        </a>
                    </div>
                    <div class="bg-red-500 flex justify-center px-2 py-0.5 rounded-xl mx-2 items-center">
                        <form action="{{ route('kelola.destroy', $driver->id) }}" method="post">
                            @method('delete')
                            @csrf
                            <button class="bg-[#FF0000]">
                                <img src="/img/delete.png" alt="">
                            </button>
                        </form>
                    </div>
                </div>
        </div>

        <div class="p-2 bg-white mt-4 rounded-xl w-full py-64 mb-32">
            <div class="flex">
                <div class="pl-9 pt-10 mr-8 w">
                    <div class="flex items-center bg-[#F1F4F9] rounded-xl py-2.5 pl-6 pr-56 w-[578px]">
                            <h4 class="font-semibold text-xl mr-24">Nama</h4>
                            <h4 class="font-semibold text-xl text-[#444444]">{{ $driver->nama }}</h4>
                    </div>
                    <hr class="border-0 bg-[#EBEFF2] h-px my-2 rounded">

                    <div class="flex items-center bg-[#F1F4F9] rounded-xl py-2.5 pl-6 pr-56 w-[578px]">
                        <div class="mr-[92px]">
                            <h4 class="font-semibold text-xl">Alamat</h4>
                        </div>
                        <div>
                            <h4 class="font-semibold text-xl text-[#444444]">{{ $driver->alamat }}</h4>
                        </div>
                    </div>
                    <hr class="border-0 bg-[#EBEFF2] h-px my-2 rounded">

                    <div class="flex items-center bg-[#F1F4F9] rounded-xl py-2.5 pl-6 pr-56 w-[578px]">
                        <div class="mr-4">
                            <h4 class="font-semibold text-xl">No.Handphone</h4>
                        </div>
                        <div>
                            <h4 class="font-semibold text-xl text-[#444444]">{{ $driver->no_hp }}</h4>
                        </div>
                    </div>
                    <hr class="border-0 bg-[#EBEFF2] h-px my-2 rounded">

                    <div class="flex items-center bg-[#F1F4F9] rounded-xl py-2.5 pl-6 pr-56 w-[578px]">
                        <div class="mr-4">
                            <h4 class="font-semibold text-xl">Plat Kendaraan</h4>
                        </div>
                        <div>
                            <h4 class="font-semibold text-xl text-[#444444]">{{ $driver->plat_kendaraan }}</h4>
                        </div>
                    </div>
                    <hr class="border-0 bg-[#EBEFF2] h-px my-2 rounded">

                </div>
                <div class="pt-10 pr-3 flex items-center flex-wrap justify-center">
                    <div class="relative mb-6">
                        <img src="/img/driver-ktp.png">
                        <div class="absolute top-4 left-[120px]">
                            <img src="/{{ $driver->ktp }}" alt="" srcset="">
                        </div>
                    </div>
                    <div class="relative mb-6">
                        <img src="/img/driver-sim.png">
                        <div class="absolute top-4 left-[120px]">
                            <img src="/{{ $driver->sim }}" alt="" srcset="">
                        </div>
                    </div>
                    <div class="relative mb-6">
                        <img src="/img/driver-stnk.png">
                        <div class="absolute top-4 left-20">
                            <img src="/{{ $driver->stnk }}" alt="" srcset="">
                        </div>
                    </div>
                    <div class="relative mb-6">
                        <img src="/img/driver-skck.png">
                        <div class="absolute top-4 left-[120px]">
                            <img src="/{{ $driver->skck }}" alt="" srcset="">
                        </div>
                    </div>
                    <div class="relative mb-6">
                        <img src="/img/driver-ijazah.png">
                        <div class="absolute top-4 left-[120px]">
                            <img src="/{{ $driver->ijazah }}" alt="" srcset="">
                        </div>
                    </div>
                    <div class="relative mb-6">
                        <img src="/img/driver-skd.png">
                        <div class="absolute top-4 left-[120px]">
                            <img src="/{{ $driver->skd }}" alt="" srcset="">
                        </div>
                    </div>
                    <div class="relative mb-6">
                        <img src="/img/driver-skbn.png">
                        <div class="absolute top-4 left-[120px]">
                            <img src="/{{ $driver->skbn }}" alt="" srcset="">
                        </div>
                    </div>
                    <div class="relative">
                        <img src="/img/driver-bpjs.png">
                        <div class="absolute top-4 left-[120px]">
                            <img src="/{{ $driver->bpjs }}" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
