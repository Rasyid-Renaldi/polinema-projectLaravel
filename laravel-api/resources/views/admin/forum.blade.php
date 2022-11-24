<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <!-- import flowbite -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
    <!-- import flowbite -->
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
    <title>Forum</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link href="./assets/css/argon-dashboard-tailwind.css?v=1.0.1" rel="stylesheet" />
</head>

<body class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
    <div class="absolute w-full bg-primary dark:hidden min-h-75"></div>
    <!-- sidebar  -->
    <!-- sidenav  -->
    <aside class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-primary    border-0 shadow-xl dark:shadow-none dark:bg-slate-850 max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0" aria-expanded="false">
        <div class="h-19">
            <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times dark:text-white text-slate-400 xl:hidden" sidenav-close></i>
            <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap dark:text-white text-white" href="https://demos.creative-tim.com/argon-dashboard-tailwind/pages/dashboard.html" target="_blank">
                <img src="./assets/img/newimages/logomejakita.png" class="inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8" alt="main_logo" />
            </a>
        </div>
        <li class="w-full mt-4">
            <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase text-white">Forum pages</h6>
        </li>
        <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />

        <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
            <ul class="flex flex-col pl-0 mb-0">
                <li class="mt-0.5 w-full">
                    <a class="text-white font-medium py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="./pages/tables.html">
                        <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-white ni ni-tv-2"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Dashboard</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 bg-blue-500/13 dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-white transition-colors" href="./pages/dashboard.html">
                        <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-white ni ni-world-2"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Forum</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class=" text-white font-medium py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="./pages/rtl.html">
                        <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-white ni ni-world-2"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Data Siswa</span>
                    </a>
                </li>
                <li class="mt-0.5 w-full">
                    <a class=" text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="./pages/virtual-reality.html">
                        <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-white ni ni-app"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Data Pertanyaan</span>
                    </a>
                </li>
                <li class="mt-0.5 w-full">
                    <a class=" text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="./pages/rtl.html">
                        <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-white ni ni-world-2"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Data Jawaban</span>
                    </a>
                </li>
                <li class="w-full mt-4">
                    <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase text-white">Support pages</h6>
                </li>
                <li class="mt-0.5 w-full">
                    <a class=" text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="./pages/profile.html">
                        <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-white ni ni-tv-2"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Dashboard Support</span>
                    </a>
                </li>
                <li class="mt-0.5 w-full">
                    <a class=" text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="./pages/rtl.html">
                        <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-white ni ni-world-2"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Data Laporan</span>
                    </a>
                </li>

            </ul>
        </div>
    </aside>
    <!-- end sidenav -->
    <!-- end sidebar -->
    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
        <!-- Header -->
        @include('layouts/header')
        @yield('header')
        <!-- end Header -->
        <div class="w-full px-6 py-6 mx-auto">
            <!-- table -->
            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-full max-w-full px-3">
                    <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                            <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                                <li class="text-base leading-normal">
                                    <a class="text-black opacity-50" href="javascript:;">Pages</a>
                                </li>
                                <!-- <li class="text-sm pl-2 capitalize leading-normal text-black before:float-left before:pr-2 before:text-black before:content-['/']">Detail Laporan</li> -->
                                <li class="text-base leading-normal ml-1">
                                    <a class="text-black opacity-80" href="/dataLaporan"> / Forum</a>
                                </li>
                            </ol>
                            <h5 class="mb-0 font-bold text-black capitalize">Forum</h5>
                            <div class="mb-6">
                                <h5 class="mb-0 pt-6 font-bold text-black capitalize">Forum Diskusi MejaKita</h5>
                                <div class="py-4">
                                    <!-- <button type="submit" class="py-1 px-3 text-sm font-medium text-center text-white rounded-lg bg-red-500 sm:w-fit hover:bg-red-400 focus:ring-4 focus:outline-none focus:ring-primary-300">Yuk Tanya</button> -->
                                    <a href="/admintanya" class="bg-red-500 hover:bg-red-400 text-white font-medium py-2 px-4 rounded-lg">
                                        Sampaikan Informasi
                                    </a>
                                </div>

                                <!-- start card -->
                                <div class="block w-full p-6 mt-4 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 dark:bg-gray-800 ">
                                    <div class="py-2 mt-2">
                                        <img class="-mt-3" width="35" height="35" src="./assets/img/avatar-new/rokigarong.svg"></a>
                                        <div class="ml-12 justify-between -mt-10">
                                            <h5 class="mb-2 mt-1 text-lg font-bold tracking-tight text-gray-600">
                                                <a href="/detailtanya" class="text-gray-600">Nur Kamdi Albaron</a>
                                            </h5>
                                            <h1 class="font-medium text-sm md:text-1xl lg:text-2xl -mt-2 text-left md:text-left space-x-10 opacity-50">2 Menit Yang Lalu</h1>
                                            <div class="flex ml-12 justify-right">
                                                <!-- <img class="mt- md:absolute -mt-10 md:mt right-0 -z-1 mr-20" width="20" height="35" src="./assets/img/newimages/sett.svg"></a> -->
                                                <div class="mt- md:absolute -mt-10 md:mt right-0 -z-1 mr-20">
                                                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
                                                        <img width="20" height="20" src="./assets/img/newimages/sett.svg"></a>
                                                    </button>
                                                    <!-- Dropdown menu -->
                                                    <div id="dropdownDots" class="hidden z-10 w-35 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
                                                            <li>
                                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Hapus Postingan</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="font-normal text-sm text-gray-700">halo teman teman minta pendapat aku lagi ngerjain tugas ini,
                                            enaknya dikerjakan pake bahasa pemrograman apa ya
                                        </p>
                                        <div class="flex mt-4 space-x-6">
                                            <a href="#">
                                                <img class="" src="../assets/img/icons/btn/love-btn.svg" width="15" height="15">
                                                <p class="flex flex-wrap -mt-5 ml-5 font-normal text-sm text-black opacity-50 justify-end">200 Suka</p>
                                            </a>
                                            <a href="#">
                                                <img src="../assets/img/icons/btn/coment-btn.svg" width="15" height="15">
                                                <p class="flex flex-wrap -mt-5 ml-5 font-normal text-sm text-black opacity-50 justify-end">1 Komentar</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="block w-full p-6 mt-4 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 dark:bg-gray-800 ">
                                    <div class="py-2 mt-2">
                                        <img class="-mt-3" width="35" height="35" src="./assets/img/avatar-new/rokigarong.svg"></a>
                                        <div class="ml-12 justify-between -mt-10">
                                            <h5 class="mb-2 mt-1 text-lg font-bold tracking-tight text-gray-600">
                                                <a href="/detailtanya" class="text-gray-600">Roki Garong</a>
                                            </h5>
                                            <h1 class="font-medium text-sm md:text-1xl lg:text-2xl -mt-2 text-left md:text-left space-x-10 opacity-50">2 Menit Yang Lalu</h1>
                                            <div class="flex ml-12 justify-right">
                                                <!-- <img class="mt- md:absolute -mt-10 md:mt right-0 -z-1 mr-20" width="20" height="35" src="./assets/img/newimages/sett.svg"></a> -->
                                                <div class="mt- md:absolute -mt-10 md:mt right-0 -z-1 mr-20">
                                                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
                                                        <img width="20" height="20" src="./assets/img/newimages/sett.svg"></a>
                                                    </button>
                                                    <!-- Dropdown menu -->
                                                    <div id="dropdownDots" class="hidden z-10 w-35 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
                                                            <li>
                                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Hapus Postingan</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="font-normal text-sm text-gray-700">halo teman teman minta pendapat aku lagi ngerjain tugas ini,
                                            enaknya dikerjakan pake bahasa pemrograman apa ya
                                        </p>
                                        <div class="flex mt-4 space-x-6">
                                            <a href="#">
                                                <img class="" src="../assets/img/icons/btn/love-btn.svg" width="15" height="15">
                                                <p class="flex flex-wrap -mt-5 ml-5 font-normal text-sm text-black opacity-50 justify-end">200 Suka</p>
                                            </a>
                                            <a href="#">
                                                <img src="../assets/img/icons/btn/coment-btn.svg" width="15" height="15">
                                                <p class="flex flex-wrap -mt-5 ml-5 font-normal text-sm text-black opacity-50 justify-end">1 Komentar</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->




                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- endtable -->
        </div>
    </main>
</body>