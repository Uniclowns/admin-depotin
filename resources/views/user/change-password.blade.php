@extends('main')
@section('container')
    <div class="container bg-[#DDE4FF] h-[120vh]">
        <div class="pt-8 text-base">
            <span><a href="/dashboard" class="text-[#5C59E8]">Beranda</a> > <a class="text-[#5C59E8]" href="/profil">Kelola Profil</a> > Change Pass User</span>
        </div>

        <div class="py-2">
            @if (session()->has('success'))
                <div id="alert-3"
                     class="flex items-center p-3 mb-1 text-white rounded-lg bg-green-400 dark:bg-gray-800 dark:text-green-400"
                     role="alert">
                    <span class="text-3xl"><i class="bi bi-check2-circle"></i></span>
                    <span class="sr-only">Info</span>
                    <div class="ms-3 text-sm font-medium">
                        {{ session('success') }}
                    </div>
                    <button type="button"
                            class="ms-auto -mx-1.5 -my-1.5 bg-green-400 text-white rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-800 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                            data-dismiss-target="#alert-3" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            @elseif (session()->has('error'))
                <div id="alert-2" class="flex items-center p-3 mb-1 text-white rounded-lg bg-red-700 w-1/2" role="alert">
                    <i class="bi bi-exclamation-triangle-fill text-3xl"></i>
                    <span class="sr-only">Info</span>
                    <div class="ms-3 text-sm font-medium">
                        {{ session('error') }}
                    </div>
                    <button type="button"
                            class="ms-auto -mx-1.5 -my-1.5 bg-red-700 text-white rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-800 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                            data-dismiss-target="#alert-2" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            @endif

            <form action="/change" method="post">
                @csrf
                <div class="p-1">
                    <label for="oldPasswordInput" class="form-label">Password Lama</label>
                    <input name="old_password" type="password" class="block w-1/2 rounded-lg border-0 bg-[#F5F6FA]" id="oldPasswordInput"
                           placeholder="Password Lama">
                    @error('old_password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="p-1">
                    <label for="newPasswordInput" class="form-label">Password Baru</label>
                    <input name="new_password" type="password" class="block w-1/2 rounded-lg border-0 bg-[#F5F6FA]" id="newPasswordInput"
                           placeholder="Password Baru">
                    @error('new_password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="p-1">
                    <label for="confirmNewPasswordInput" class="form-label">Konfirmasi Password Baru</label>
                    <input name="new_password_confirmation" type="password" class="block w-1/2 rounded-lg border-0 bg-[#F5F6FA]" id="confirmNewPasswordInput"
                           placeholder="Konfirmasi Password Baru">
                </div>

                <div class="p-3 bg-[#4880FF] mt-2 w-1/2 rounded text-center text-white">
                    <button type="submit">Ubah</button>
                </div>
            </form>
        </div>


    </div>
@endsection
