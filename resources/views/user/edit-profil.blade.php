@extends('main')
@section('container')
    <div class="container bg-[#DDE4FF] h-[120vh]">
        @if (session()->has('success'))
            <div id="alert-3"
                 class="flex items-center p-3 mb-1 mt-4 text-white rounded-lg bg-green-400 dark:bg-gray-800 dark:text-green-400" role="alert">
                <span class="text-3xl"><i class="bi bi-check2-circle"></i></span>
                <span class="sr-only">Info</span>
                <div class="ms-3 text-sm font-medium">
                    {{ session('success') }}
                </div>
                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-400 text-white rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-800 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
        @endif

        <div class="pt-8 text-base">
            <span><a href="/dashboard" class="text-[#5C59E8]">Beranda</a> > Kelola Profil</span>
        </div>

        <div class="flex justify-end">
            <a class="font-bold text-lg bg-[#4880FF] text-white px-6 py-2.5 rounded-full" href="/admin/{{ Auth::guard('admin')->user()->id }}/edit">
                <i class="fa-regular fa-pen-to-square"></i> Edit
            </a>
        </div>

        <div class="relative h-32 mt-8" style="background-image: url('/img/long-rectangle.png'); background-size: cover;">
            <div class="absolute -top-8 left-20">
                    <img src="/img/mbak_propil.png" alt="" srcset="">
            </div>
                <div class="absolute left-64 top-6">
                    <p class="text-lg font-semibold text-[#C2951F] -my-1">{{ Auth::guard('admin')->user()->nama_pengguna }}</p>
                    <p class="text-xl font-semibold text-black">Admin</p>
                </div>
        </div>

        <div class="flex justify-between">
            <div class="mt-12">
                <a href="/changepass" class="bg-[#ACC6FF] w-full p-3 rounded-lg  font-bold text-xl text-black">
                    Ganti Kata Sandi <i class="fa-solid fa-circle-arrow-right ml-[33rem]"></i>
                </a>
            </div>
            <div class="mt-10 pb-20 bg-white rounded-xl w-[454px]">
                <h4 class="text-xl font-bold text-[#606060] bg-[#ACC6FF] p-4 rounded-tl-xl rounded-tr-xl">Informasi Pribadi</h4>

                <div class="p-4">
                    <label for="nama" class="text-[#606060] text-sm font-semibold my-1">Nama</label>
                    <input type="text" value="{{ Auth::guard('admin')->user()->nama_pengguna }}" class="block w-full rounded-lg border-0 bg-[#F5F6FA]" disabled>
                </div>

                <div class="p-4">
                    <label for="email" class="text-[#606060] text-sm font-semibold my-1">Email</label>
                    <input type="text" value="{{ Auth::guard('admin')->user()->email }}" class="block w-full rounded-lg border-0 bg-[#F5F6FA]" disabled>
                </div>

                <div class="p-4">
                    <label for="no_hp" class="text-[#606060] text-sm font-semibold my-3">No Handphone</label>
                    <input type="text" value="{{ Auth::guard('admin')->user()->no_hp  }}" class="block w-full rounded-lg border-0 bg-[#F5F6FA]" disabled>
                </div>

            </div>
        </div>
    </div>
@endsection
