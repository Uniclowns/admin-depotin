    <aside
        class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">
        <div class="h-19.5 ">
            <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap" href="/dashboard" target="_blank">
                <img src="/img/depotin.png"
                    class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8 "
                    alt="main_logo" />
            </a>
        </div>

        <div class="items-center block w-auto max-h-screen">
            <ul class="flex flex-col pl-0 mb-0">
                <li class="mt-0.5 w-ful">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg {{ $active === 'beranda' ? 'bg-primary font-bold shadow-soft-xl' : ' ' }} px-4 transition-colors"
                        href="/dashboard">
                        <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg ">
                            @if($active === 'beranda')
                                <img src="/img/Category.png" alt="">
                            @else
                                <img src="/img/Category-Black.png" alt="">
                            @endif
                        </div>
                        <span
                            class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft {{ $active === 'beranda' ? 'text-white' : ' ' }}">Beranda</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg {{ $active === 'kelola' ? 'bg-primary font-bold shadow-soft-xl' : ' ' }} px-4 font-semibold  transition-colors"
                        href="/kelola">
                        <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg ">
                            @if($active === 'kelola')
                                <img src="/img/kelola_pengguna_white.png" alt="">
                            @else
                                <img src="/img/kelola_pengguna.png" alt="">
                            @endif
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft {{ $active === 'kelola' ? 'text-white' : ' ' }}">Kelola Pengguna</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg {{ $active === 'mitra' ? 'bg-primary font-bold shadow-soft-xl' : ' ' }} px-4 font-semibold  transition-colors"
                        href="/mitra">
                        <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg ">
                            @if($active === 'mitra')
                                <img src="/img/love_white.png" alt="">
                            @else
                                <img src="/img/love.png" alt="">
                            @endif
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft {{ $active === 'mitra' ? 'text-white' : ' ' }}">Kelola Mitra</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg {{ $active === 'driver' ? 'bg-primary font-bold shadow-soft-xl' : ' ' }} px-4 font-semibold  transition-colors"
                        href="/driver">
                        <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg ">
                            @if($active === 'driver')
                                <img src="/img/driver_white.png" alt="">
                            @else
                                <img src="/img/driver.png" alt="">
                            @endif
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft {{ $active === 'driver' ? 'text-white' : ' ' }}">Kelola Driver</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg {{ $active === 'pemesanan' ? 'bg-primary font-bold shadow-soft-xl' : ' ' }} px-4 font-semibold  transition-colors"
                        href="/pemesanan">
                        <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg ">
                            @if($active === 'pemesanan')
                                <img src="/img/pemesanan_white.png" alt="">
                            @else
                                <img src="/img/pemesanan.png" alt="">
                            @endif
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft {{ $active === 'pemesanan' ? 'text-white' : ' ' }}">Kelola
                            Pemesanan</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg {{ $active === 'promo' ? 'bg-primary font-bold shadow-soft-xl' : ' ' }} px-4 font-semibold  transition-colors"
                        href="/promo">
                        <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg ">
                            @if($active === 'promo')
                                <img src="/img/promo_white.png" alt="">
                            @else
                                <img src="/img/promo.png" alt="">
                            @endif
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft {{ $active === 'promo' ? 'text-white' : ' ' }}">Kelola Promo</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg {{ $active === 'laporan' ? 'bg-primary font-bold shadow-soft-xl' : ' ' }} px-4 font-semibold  transition-colors"
                       href="/laporan">
                        <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg ">
                            @if($active === 'laporan')
                                <img src="/img/laporan_white.png" alt="">
                            @else
                                <img src="/img/laporan.png" alt="">
                            @endif
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft {{ $active === 'laporan' ? 'text-white' : ' ' }}">Laporan Pendapatan</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
