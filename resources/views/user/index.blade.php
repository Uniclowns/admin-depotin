@extends('main')
@section('container')
    <div class="container bg-[#DDE4FF] h-[120vh]">
        <div class="py-8 text-base">
            <span><a href="/dashboard" class="text-[#5C59E8]">Beranda</a> > Kelola Pengguna</span>
        </div>

        @if (session()->has('success'))
            <div class="text-white py-4 bg-primary rounded-xl px-6 font-semibold mb-4 w-[30%]" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="w-[50%]">
            <form action="/kelola">
                <input type="text" name="search" id="search" placeholder="🔍   Cari"
                       class="block w-full bg-[#F6F6F6] rounded-full px-8 py-2 focus:ring-[##4880FF] focus:border-[##4880FF] text-[#202224] text-sm border border-[#D5D5D5] placeholder-[#202224]">
            </form>
        </div>

        <div class="p-2 bg-white mt-4 rounded-xl w-full pb-36 ">
            <table class="items-center w-full mb-0 align-top">
                <thead>
                    <tr>
                        <th class="px-6 py-3 pl-2 font-bold text-center border-b text-sm">No</th>
                        <th class="px-6 py-3 pl-2 font-bold text-left  border-b text-sm">Nama</th>
                        <th class="px-6 py-3 pl-2 font-bold text-left  border-b text-sm">Email</th>
                        <th class="px-6 py-3 pl-2 font-bold text-left  border-b text-sm">No. Handphone</th>
                        <th class="px-6 py-3 pl-2 font-bold text-left  border-b text-sm">Foto Profil</th>
                        <th class="px-6 py-3 pl-2 font-bold text-center`  border-b text-sm">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td class="p-2 text-center">{{ $loop->iteration }}</td>
                        <td class="p-2 font-semibold">{{ $user->nama }}</td>
                        <td class="p-2 font-semibold">{{ $user->email }}</td>
                        <td class="p-2 font-semibold">{{ $user->no_hp }}</td>
                        <td class="p-2 font-semibold">{{ $user->foto_profil }}</td>
                        <td class="p-2 font-semibold">
                            <div class="flex">
                                <div class="bg-[#4AD989] shadow-xl flex justify-center items-center rounded-lg mr-2">
                                    <a href="/kelola/{{ $user->id }}/edit" class="px-2 py-0.5">
                                        <img src="/img/edit.png" alt="">
                                    </a>
                                </div>
                                <div>
                                    <form action="/kelola/{{ $user->id }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button class="bg-[#FF0000] flex justify-center p-2 rounded-xl items-center" onclick="confirm('Apa kamu yakin ingin menghapus pengguna berikut ?')">
                                            <img src="/img/delete.png" alt="">
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="mt-4 flex mb-2">
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection
