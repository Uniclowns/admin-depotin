<div class="relative flex items-end justify-end z-[999]">

    <div class="flex items-center mx-4">
        <div class="flex items-center justify-center">
            <img src="/img/IDN Flag.png" alt="">
        </div>

        <div class="flex items-center justify-center mx-4">
            <select name="bahasa" id="bahasa" class="border-0">
                <option value="bahasa">Indonesia</option>
                <option value="bahasa">English</option>
            </select>
        </div>

        <div class="flex items-center justify-center mx-4">
            <img src="/img/mbak_profile.png" alt="" width="50" height="50">
        </div>

        <div class="mx-2">
            <h6 class="font-bold text-[#404040] text-lg mb-0.5 pt-3">{{ Auth::guard('admin')->user()->nama_pengguna }}</h6>
            <p class="font-semibold text-[#565656] text-xs">Admin</p>
        </div>

        <div class="flex items-center justify-center mx-4">
            <button id="toggle-down" name="toggle-down" type="button" class="border rounded-full border-[#5C5C5C] p-3">
                <img src="/img/toggle-down.png" alt="">
            </button>

            <nav id="nav-menu"
                class="absolute top-full  hidden w-full max-w-[183px] rounded-lg py-3 shadow-lg right-5 bg-white z-[999]">
                <ul class="block">
                    <li class="group">
                        <a href="/profil" class="mx-8 flex py-2 justify-start items-center">
                            <i class="fa-solid fa-user-gear text-primary text-[18px] mx-2.5"></i>
                            <span class="text-[#404040] font-semibold text-base">Profil</span>
                        </a>
                    </li>

                    <hr class="h-px my-2 bg-[#979797] border-0">

                    <li class="group">
                        <form action="logout" method="post">
                            @csrf
                            <button class="mx-8 py-2 justify-start items-center block" type="submit">
                                <i class="fa-solid fa-right-from-bracket text-red-400 text-[18px] mx-2.5"></i>
                                <span class="text-[#404040] font-semibold text-base">Keluar</span>
                            </button>
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
