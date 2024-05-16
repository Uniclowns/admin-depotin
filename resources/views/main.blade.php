<!doctype html>
<html>

<head>
    @include('layouts.head')
</head>

<body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500">
<!-- sidenav  -->
@include('layouts.sidenav')
<!-- end sidenav -->

<main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
    <!-- Navbar -->
    @include('layouts.navbar')
    <!-- End Navbar -->

    <!-- Content -->
    @yield('container')
    <!-- End Content -->
</main>
<script src="script/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
