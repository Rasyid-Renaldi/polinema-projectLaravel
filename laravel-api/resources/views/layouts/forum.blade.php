<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" type="img" href="https://www.mejakita.com/images/logo-new.png?imwidth=256">
    <title>Forum</title>
</head>

<body >
    {{--  Navbar Start  --}}
    <div class="flex flex-wrap place-items-center">
        <section class="relative mx-auto">
            <nav class="flex justify-between bg-transparent text-white w-screen">
                <div class="px-5 xl:px-12 py-6 flex w-full items-center">
                    <a href="" class="">
                        <img class="w-36 h-7"
                            src="https://www.mejakita.com/images/logo-new.png?imwidth=256 "alt="">
                    </a>
                    {{--  <!-- Nav Links -->  --}}
                    <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
                        <li><a class="hover:text-primary text-gray-300" href="#">Beranda</a></li>
                        <li><a class="hover:text-primary text-gray-900" href="/contact">Contact</a></li>
                        <li><a class="hover:text-primary text-gray-900" href="#">Support</a></li>
                    </ul>
                    {{--  <!-- Header Icons -->  --}}
                    <div class="hidden xl:flex items-center space-x-5">
                        <a class="hover:text-blue-400" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-black hover:stroke-white"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </a>
                        <a class="flex items-center hover:text-gray-200" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-black hover:stroke-white"
                                fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span class="flex absolute -mt-5 ml-4">
                                <span
                                    class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-red-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-3 w-3 bg-red-500">
                                </span>
                            </span>
                        </a>
                        <!-- Sign In / Register      -->
                        <a class="flex items-center hover:text-gray-200" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-black hover:stroke-white"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </a>

                    </div>
                </div>
                {{--  <!-- Responsive navbar -->  --}}
                <a class="xl:hidden flex mr-6 items-center" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span class="flex absolute -mt-5 ml-4">
                        <span
                            class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
                        </span>
                    </span>
                </a>
                <a class="navbar-burger self-center mr-12 xl:hidden" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </a>
            </nav>
        </section>
    </div>
    {{--  Navbar End  --}}

    <section class="w-screen">
        <div class="flex bg-secondary1">
            <div class="w-1/5 h-screen mt-6">
                <div
                    class="flex text-m font-semibold px-3 py-2 items-center rounded-lg m-2 text-white transition ease-in-out delay-150 bg-secondary1 hover:-translate-y-1 hover:scale-110 hover:bg-gradient-to-b from-sky-400 to-sky-200 hover:text-secondary duration-300">
                    <img src="https://cdn-icons-png.flaticon.com/128/1165/1165674.png" width="28" height="28"
                        class="mx-3" alt="">
                    <span class="px-2">Cari Teman</span>
                </div>
                <div
                    class="flex text-m font-semibold px-3 py-2 items-center rounded-lg m-2 text-white transition ease-in-out delay-150 bg-secondary1 hover:-translate-y-1 hover:scale-110 hover:bg-gradient-to-b from-sky-400 to-sky-200 hover:text-secondary duration-300">
                    <img src="https://cdn-icons-png.flaticon.com/128/2598/2598906.png" width="28" height="28"
                        class="mx-3" alt="">
                    <span class="px-2">Messenger</span>
                </div>
                <div
                    class="flex text-m font-semibold px-3 py-2 items-center rounded-lg m-2 text-white transition ease-in-out delay-150 bg-secondary1 hover:-translate-y-1 hover:scale-110 hover:bg-gradient-to-b from-sky-400 to-sky-200 hover:text-secondary duration-300">
                    <img src="https://cdn-icons-png.flaticon.com/128/2936/2936766.png" width="28" height="28"
                        class="mx-3" alt="">
                    <span class="px-2">Group</span>
                </div>
                <div
                    class="flex text-m font-semibold px-3 py-2 items-center rounded-lg m-2 text-white transition ease-in-out delay-150 bg-secondary1 hover:-translate-y-1 hover:scale-110 hover:bg-gradient-to-b from-sky-400 to-sky-200 hover:text-secondary duration-300">
                    <img src="https://cdn-icons-png.flaticon.com/128/5667/5667029.png" width="28" height="28"
                        class="mx-3" alt="">
                    <span class="px-2">Tersimpan</span>
                </div>
                <div
                    class="flex text-m font-semibold px-3 py-2 items-center rounded-lg m-2 text-white transition ease-in-out delay-150 bg-secondary1 hover:-translate-y-1 hover:scale-110 hover:bg-gradient-to-b from-sky-400 to-sky-200 hover:text-secondary duration-300">
                    <img src="https://cdn-icons-png.flaticon.com/128/3112/3112946.png" width="28" height="28"
                        class="mx-3" alt="">
                    <span class="px-2">Prestasi Siswa</span>
                </div>
                <div
                    class="flex text-m font-semibold px-3 py-2 items-center rounded-lg m-2 text-white transition ease-in-out delay-150 bg-secondary1 hover:-translate-y-1 hover:scale-110 hover:bg-gradient-to-b from-sky-400 to-sky-200 hover:text-secondary duration-300">
                    <img src="https://cdn-icons-png.flaticon.com/128/591/591607.png" width="28" height="28"
                        class="mx-3" alt="">
                    <span class="px-2">Kalender</span>
                </div>
                <div
                    class="flex text-m font-semibold px-3 py-2 items-center rounded-lg m-2 text-white transition ease-in-out delay-150 bg-secondary1 hover:-translate-y-1 hover:scale-110 hover:bg-gradient-to-b from-sky-400 to-sky-200 hover:text-secondary duration-300">
                    <img src="https://cdn-icons-png.flaticon.com/128/2537/2537875.png" width="28" height="28"
                        class="mx-3" alt="">
                    <span class="px-2">Pusat Informasi</span>
                </div>
                <div
                    class="flex text-m font-semibold px-3 py-2 items-center rounded-lg m-2 text-white transition ease-in-out delay-150 bg-secondary1 hover:-translate-y-1 hover:scale-110 hover:bg-gradient-to-b from-sky-400 to-sky-200 hover:text-secondary duration-300">
                    <img src="https://cdn-icons-png.flaticon.com/128/2164/2164620.png" width="28" height="28"
                        class="mx-3" alt="">
                    <span class="px-2">Halaman</span>
                </div>
            </div>

            {{--  Section Middle Start  --}}
            <div class="flex-grow flex flex-col items-center bg-secondary1">
                <div class="shadow-sm bg-card my-3 mx-6 w-3/5 h-16 rounded-md flex items-center">
                    <div class="m-3 bg-blue-100 rounded-full cursor-move">
                        <a href="#">
                            <img src="https://cdn-icons-png.flaticon.com/128/2956/2956214.png" width="25"
                                height="25" alt="">
                        </a>
                    </div>
                    <div>
                        <h4 class="font-semibold text-white">Create a Idea</h4>
                        <div class="text-sm text-slate-400">
                            Share your ideas if there are difficulties
                        </div>
                    </div>
                </div>
                <div class="shadow-md bg-card m-6 w-3/4 rounded-md">
                    <div class="flex items-center">
                        <div class="flex items-center w-full p-3">
                            <div class="m-3">
                                <img src="https://mejakita.com/assets/images/profile_default.png" width="42"
                                    height="42" alt="" class="rounded-full">
                            </div>
                            <input class="bg-card1  rounded-lg h-12 flex-grow w-4/5 full py-1 px-3 text-white"
                                type="text" placeholder="What's on your mind jay">
                        </div>
                    </div>
                    <div class="w-full  border-t border-slate-500"></div>
                    <div class="flex justify-evenly">
                        <div
                            class="flex flex-grow justify-center items-center text-sm px-3 py-2 text-slate-200 font-medium hover:bg-hovering rounded-lg">
                            <img src="https://cdn-icons-png.flaticon.com/128/3049/3049386.png" alt=""
                                width="26" height="26">
                            Feeling Activity
                        </div>
                        <div
                            class="flex flex-grow justify-center items-center text-sm px-3 py-2 text-slate-200 font-medium hover:bg-hovering rounded-lg">
                            <img src="https://cdn-icons-png.flaticon.com/128/2659/2659360.png" alt=""
                                width="26" height="26">
                            Foto/video
                        </div>
                        <div
                            class="flex flex-grow justify-center items-center text-sm px-3 py-2 text-slate-200 font-medium hover:bg-hovering rounded-lg">
                            <img src="https://cdn-icons-png.flaticon.com/128/7088/7088112.png" alt=""
                                width="26" height="26">
                            Feeling/Activity
                        </div>
                    </div>
                </div>

                <div class="bg-card m-2 w-3/4 rounded-md">
                    <div class="mb-12">
                        <div class="flex pt-4 pl-4">
                            <img src="https://mejakita.com/assets/images/profile_default.png" width="42"
                                height="42" class="rounded-md" alt="">
                            <div class="px-2 text-white">
                                Ahmad Nur Fauzi
                                <div class="text-xs text-slate-400">
                                    Postingan 16 jam lalu . 🌍
                                </div>
                            </div>
                            <button class="ml-auto mr-8 hover:bg-slate-200 rounded-lg cursor-pointer">
                                <img src="./assets/img/icons/svg/dot.svg" width="20" height="20"
                                    alt="">
                            </button>
                        </div>
                        <div class="mt-2">
                            <div class="block pl-4 text-slate-200">
                                Saya izin bertanya, apakah ini termasuk nilai X dan Y.
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="w-full">
                                <img src="./assets/img/icons/svg/xdany.png" alt="">
                            </div>
                        </div>
                        <div class="flex flex-row w-full py-3 pl-4">
                            <button>
                                <img class="h-6 w-6" src="./assets/img/icons/svg/Vector.svg" alt="">
                            </button>
                            <span class="ml-2 font-semibold text-white">71</span>
                            <div class="ml-auto mr-8 text-gray-300 text-md">
                               24 Komentar
                            </div>
                        </div>
                        <div class="flex flex-nowrap justify-center">
                            <div class="bg-red-100">
                                Hello
                            </div>
                        </div>
                    </div>
                </div>


                {{--  Section End Middle  --}}

                {{--  Section Side RighT Start  --}}
            </div>
            <div class="w-1/5 h-screen">
                <div class="mt-6 ml-5 font-semibold text-lg text-white">
                    Siswa Online
                </div>
                <div class="px-4 mt-2 flex flex-row">
                    <img class="mb-2 p-1 w-10 h-10 rounded-full ring-2 ring-green-600" width="42" height="42"
                        src="./assets/img/avatar-new/rokigarong.svg">
                    </a>
                    <p class="px-2 py-2 text-white">Ahmad Nur Fauzi</p>
                </div>
                <div class="px-4 mt-2 flex flex-row">
                    <img class="mb-2 p-1 w-10 h-10 rounded-full ring-2 ring-green-600" width="42" height="42"
                        src="data:image/jpeg;base64,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">
                    </a>
                    <p class="px-2 py-2 text-white">Justinus L</p>
                </div>
                <div class="px-4 mt-2 flex flex-wrap">
                    <img class="mb-2 p-1 w-10 h-10 rounded-full ring-2  ring-green-600 hover: delay-100"
                        width="42" height="42"
                        src="https://mejakita.com/assets/images/profile_default.png"></a>
                    <p class="px-2 py-2 text-white">Siswa Online</p>
                </div>
                <div class="px-4 mt-2 flex flex-wrap opacity-20 hover:opacity-100">
                    <img class="mb-2 p-1 w-10 h-10 rounded-full ring-2 ring-slate-500" width="42" height="42"
                        src="https://mejakita.com/assets/images/profile_default.png"></a>
                    <p class="px-2 py-2 text-white">Siswa Offline</p>
                </div>
            </div>
        </div>
    </section>

    {{--  End Comment And Reply  --}}

</body>

</html>
