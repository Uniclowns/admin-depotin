@extends('main')
@section('container')
    <div class="container bg-[#DDE4FF] h-[200vh]">
        <div class="py-8 text-base">
            <span><a href="/dashboard" class="text-[#5C59E8]">Beranda</a> > <a class="text-primary" href="/driver">Kelola Driver</a> > Tambah Driver</span>
        </div>

        <div class="flex justify-between items-center">
            <div class="w-[50%] ">
                <form action="/driver">
                    <input type="text" name="search" id="search" placeholder="🔍   Cari"
                           class="block w-full bg-[#F6F6F6] rounded-full px-8 py-2 focus:ring-[##4880FF] focus:border-[##4880FF] text-[#202224] text-sm border border-[#D5D5D5] placeholder-[#202224]">
                </form>
            </div>
        </div>

        <div class="p-2 bg-white mt-4 rounded-xl w-full py-64 mb-32">
            <table class="items-center w-full mb-0 align-top">
                <thead>
                <tr>
                    <th class="px-6 py-3 pl-2 font-bold text-center border-b text-sm">No</th>
                    <th class="px-6 py-3 pl-2 font-bold text-center  border-b text-sm">Nama</th>
                    <th class="px-6 py-3 pl-2 font-bold text-center  border-b text-sm">Alamat</th>
                    <th class="px-6 py-3 pl-2 font-bold text-center  border-b text-sm">No. Handphone</th>
                    <th class="px-6 py-3 pl-2 font-bold text-center  border-b text-sm">Selengkapnya</th>
                    <th class="px-6 py-3 pl-2 font-bold text-center  border-b text-sm">Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($drivers as $driver)
                    <tr class="border-b">
                        <td class="p-2 text-center">{{ $loop->iteration }}</td>
                        <td class="p-2 font-semibold">{{ $driver->nama }}</td>
                        <td class="p-2 font-semibold">{{ $driver->alamat }}</td>
                        <td class="p-2 font-semibold text-center">{{ $driver->no_hp }}</td>
                        <td class="p-2 font-semibold text-center">
                            <a href="/driver/{{ $driver->id }}" class="text-[#4379EE] underline font-bold text-sm">
                                Selengkapnya
                            </a>
                        </td>
                        <td class="p-2 font-semibold text-center">
                            <div class="flex">
                                <div class="bg-[#F5F5F5] rounded-full shadow-xl px-2 py-1 mr-2">
                                    <form action="/driver" method="post">
                                        @csrf
                                        <input type="hidden" name="status" value="terima">
                                        <input type="hidden" name="id" value="{{ $driver->id }}">
                                        <button type="submit" class="flex justify-center items-center bg-red-500 rounded shadow-xl" onclick="confirm('Apa anda yakin untuk terima driver ini?')">
                                            <div class="flex items-center justify-center">
                                                <img src="/img/tick.png" alt="" srcset=""> <span class="text-[#43B977]"> Terima</span>
                                            </div>
                                        </button>
                                    </form>
                                </div>
                                <div class="bg-[#F5F5F5] rounded-full shadow-xl px-2 py-1">
                                    <form action="/driver" method="post">
                                        @csrf
                                        <input type="hidden" name="status" value="tolak">
                                        <button type="submit" class="flex justify-center items-center bg-red-500 rounded shadow-xl" onclick="confirm('Apa anda yakin untuk menolak driver ini?')">
                                            <div class="flex items-center justify-center">
                                                <img src="/img/x circle.png" alt="" srcset=""> <span class="text-[#FF0000] ml-1"> Terima</span>
                                            </div>
                                        </button>
                                    </form>
                                </div>

                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="mt-4 flex mx-4">
                {{ $drivers->links() }}
            </div>
        </div>
    </div>
@endsection
