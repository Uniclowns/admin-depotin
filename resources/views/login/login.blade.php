<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet">
</head>
<body class="bg-no-repeat font-sans" style="background-image : url('/img/login.png'); background-size:cover">
<form action="{{ route('login') }}" method="post">
    @csrf
    <div class="flex justify-start items-center h-screen mx-16">
        <div class="px-6 pt-6 pb-8 mb-6">
            <div class="flex justify-center mb-6">
                <img src="/img/depotin.png" alt="">
            </div>
            <div class="flex justify-center mb-6">
                <img src="/img/user-logo.png" alt="" width="100" height="100">
            </div>
            <h2 class="text-[33px] font-normal text-center">Hi! Selamat Datang</h2>
            <p class="text-center text-[13px] text-[#8A92A6] mb-6">Masukkan nama pengguna dan kata sandi Anda untuk
                mengakses
                admin.</p>
            @if (session()->has('loginError'))
                <div class="bg-[#FF0000] font-bold text-white text-xl p-4 text-start rounded mb-4" role="alert">
                    {{ session('loginError') }}
                </div>
            @endif
            <div class="mb-4">
                <label class="block text-[#8A92A6] text-sm font-normal mb-2" for="nama">
                    Nama Pengguna
                </label>
                <input class="border border-[#3A57E8] rounded w-full py-2 px-3 text-gray-700 leading-tight"
                       id="nama_pengguna" type="text" placeholder="Nama Pengguna" name="nama_pengguna" value="{{ old('nama_pengguna') }}" required>
                @error('nama_pengguna')
                    <div class="invalid-feedback text-black">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block text-[#8A92A6] text-sm font-normal mb-2" for="password">
                    Password
                </label>
                <input class="border border-[#3A57E8] rounded w-full py-2 px-3 text-[gray-700] leading-tight"
                       id="password" type="password" placeholder="Password" name="password" required>
                @error('password')
                    <div class="invalid-feedback text-black">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="flex items-center justify-center">
                <button class="font-bold py-2 px-6 rounded w-full bg-primary text-white" type="submit">
                    Masuk
                </button>
            </div>
        </div>
    </div>
</form>
</body>
</html>
