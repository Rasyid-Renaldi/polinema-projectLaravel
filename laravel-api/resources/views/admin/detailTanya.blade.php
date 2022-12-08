<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <!-- import flowbite -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.js"></script>
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
    <aside class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-primary border-0 shadow-xl dark:shadow-none dark:bg-slate-850 max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0" aria-expanded="false">
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
                    <a class="text-white font-medium py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="/admin">
                        <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-white ni ni-tv-2"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Dashboard</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 bg-blue-500/13 dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-white transition-colors" href="/forumadmin">
                        <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-white ni ni-world-2"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Forum</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class=" text-white font-medium py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="/datasiswa">
                        <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-white ni ni-world-2"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Data Siswa</span>
                    </a>
                </li>


                <li class="w-full mt-4">
                    <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase text-white">Support pages</h6>
                </li>

                <li class="mt-0.5 w-full">
                    <a class=" text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="/dataLaporan">
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
                                <h5 class="mb-0 pt-6 font-bold text-black capitalize">Topik Pembahasan 1</h5>

                                <!-- start card -->
                                <div class="block w-full p-6 mt-4 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 dark:bg-gray-800 ">
                                    <div class="py-2 mt-2">
                                        <img class="-mt-3" width="35" height="35" src="./assets/img/avatar-new/rokigarong.svg"></a>
                                        <div class="ml-12 justify-between -mt-10">
                                            <h1 class="font-bold text-base md:text-1xl lg:text-2xl text-left md:text-left space-x-10">Nur Kamdi Albaron</h1>
                                            <h1 class="font-medium text-sm md:text-1xl lg:text-2xl -mt-2 text-left md:text-left space-x-10 opacity-50">2 Menit Yang Lalu</h1>
                                            <div class="flex ml-12 justify-right">
                                                <div class="mt- md:absolute -mt-10 md:mt right-0 -z-1 mr-20">
                                                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
                                                        <img width="20" height="20" src="./assets/img/newimages/sett.svg"></a>
                                                    </button>
                                                    <!-- Dropdown menu -->
                                                    <div id="dropdownDots" class="hidden z-10 w-35 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
                                                            <li>
                                                                <button class="bg-transparant text-black opacity-80 active:bg-red-300 font-medium text-sm px-4 py-2 rounded hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear text-left transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
                                                                    Hapus Postingan
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <a href="/editpostingan" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- end dropdown menu -->
                                                </div>
                                            </div>
                                        </div>
                                        <p class="font-normal text-sm text-gray-700">halo teman teman minta pendapat aku lagi ngerjain tugas ini,
                                            enaknya dikerjakan pake bahasa pemrograman apa ya
                                        </p>
                                        <img class="-mt-3" width="400" height="400" src="./assets/img/newimages/soalforum.png"></a>
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
                                        <div class="py-2 ml-4 mt-2">
                                            <img class="-mt-3" width="30" height="30" src="./assets/img/avatar-new/habib2.svg"></a>
                                            <div class="ml-12 justify-between -mt-9">
                                                <h1 class="font-bold text-sm md:text-1xl lg:text-2xl text-left md:text-left space-x-10">Habib Muhammad Rieziq bin Syihab</h1>
                                                <h1 class="font-medium text-xs md:text-1xl lg:text-2xl -mt-2 text-left md:text-left space-x-10 opacity-50">1 Menit Yang Lalu</h1>
                                                <div class="mt- md:absolute -mt-10 md:mt right-0 -z-1 mr-20">
                                                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDotss" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
                                                        <img width="20" height="20" src="./assets/img/newimages/sett.svg"></a>
                                                    </button>
                                                    <!-- Dropdown menu -->
                                                    <div id="dropdownDotss" class="hidden z-10 w-35 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
                                                            <li>
                                                                <button class="bg-transparant text-black opacity-80 active:bg-red-300 font-medium text-sm px-4 py-2 rounded hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear text-left transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
                                                                    Hapus Komentar
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <a href="/editkomentar" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- end dropdown menu -->
                                                </div>
                                            </div>
                                            <p class="font-normal text-sm text-gray-700">Pertanyaan antum tidak nyambung.
                                            </p>
                                        </div>
                                        <div class="py-2 ml-4 mt-2">
                                            <img class="-mt-3" width="30" height="30" src="./assets/img/avatar-new/profile.svg"></a>
                                            <div class="ml-12 justify-between -mt-9">
                                                <form>
                                                    <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                                                        <div class="flex items-center justify-between px-3 py-2 border-b dark:border-gray-600">
                                                            <div class="flex flex-wrap items-center divide-gray-200 sm:divide-x dark:divide-gray-600">
                                                                <div class="flex items-center space-x-1 sm:pr-4">
                                                                    <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path>
                                                                        </svg>
                                                                        <span class="sr-only">Attach file</span>
                                                                    </button>
                                                                    <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                                                        </svg>
                                                                        <span class="sr-only">Embed map</span>
                                                                    </button>
                                                                    <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                                                                        </svg>
                                                                        <span class="sr-only">Upload image</span>
                                                                    </button>
                                                                    <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                                        </svg>
                                                                        <span class="sr-only">Format code</span>
                                                                    </button>
                                                                    <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-.464 5.535a1 1 0 10-1.415-1.414 3 3 0 01-4.242 0 1 1 0 00-1.415 1.414 5 5 0 007.072 0z" clip-rule="evenodd"></path>
                                                                        </svg>
                                                                        <span class="sr-only">Add emoji</span>
                                                                    </button>
                                                                </div>
                                                                <div class="flex flex-wrap items-center space-x-1 sm:pl-4">
                                                                    <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                                                        </svg>
                                                                        <span class="sr-only">Add list</span>
                                                                    </button>
                                                                    <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                                                                        </svg>
                                                                        <span class="sr-only">Settings</span>
                                                                    </button>
                                                                    <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                                                        </svg>
                                                                        <span class="sr-only">Timeline</span>
                                                                    </button>
                                                                    <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                                        </svg>
                                                                        <span class="sr-only">Download</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <button type="button" data-tooltip-target="tooltip-fullscreen" class="p-2 text-gray-500 rounded cursor-pointer sm:ml-auto hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 11-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4zm9 1a1 1 0 010-2h4a1 1 0 011 1v4a1 1 0 01-2 0V6.414l-2.293 2.293a1 1 0 11-1.414-1.414L13.586 5H12zm-9 7a1 1 0 012 0v1.586l2.293-2.293a1 1 0 111.414 1.414L6.414 15H8a1 1 0 010 2H4a1 1 0 01-1-1v-4zm13-1a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 010-2h1.586l-2.293-2.293a1 1 0 111.414-1.414L15 13.586V12a1 1 0 011-1z" clip-rule="evenodd"></path>
                                                                </svg>
                                                                <span class="sr-only">Full screen</span>
                                                            </button>
                                                            <div id="tooltip-fullscreen" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                                Show full screen
                                                                <div class="tooltip-arrow" data-popper-arrow></div>
                                                            </div>
                                                        </div>
                                                        <div class="px-4 py-2 bg-white rounded-b-lg dark:bg-gray-800">
                                                            <label for="editor" class="sr-only">Publish post</label>
                                                            <textarea id="editor" rows="8" class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Komentar sebagai admin................" required></textarea>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="inline-flex items-center px-5 py-2.5 text-sm font-semibold text-center text-white bg-red-500 rounded-lg hover:bg-red-300">
                                                        Submit
                                                    </button>
                                                    <!-- pop up hapus postingan -->
                                                    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id">
                                                        <div class="relative w-auto my-6 mx-auto max-w-3xl">
                                                            <!--content-->
                                                            <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                                                <!--header-->
                                                                <div class="flex items-start justify-between p-5 border-b border-solid border-slate-200 rounded-t">
                                                                    <h3 class="text-3xl font-semibold">
                                                                        Peringatan
                                                                    </h3>
                                                                    <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('modal-id')">
                                                                        <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                                                                            ×
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                                <!--body-->
                                                                <div class="relative p-6 flex-auto">
                                                                    <p class="my-4 text-slate-500 text-lg leading-relaxed">
                                                                        Apakah anda yakin ingin menghapus?
                                                                    </p>
                                                                </div>
                                                                <!--footer-->
                                                                <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                                                                    <button class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
                                                                        Tidak
                                                                    </button>
                                                                    <button class="bg-red-500 text-white active:bg-red-300 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
                                                                        Hapus Postingan
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="hidden opacity-50 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>
                                                    <script type="text/javascript">
                                                        function toggleModal(modalID) {
                                                            document.getElementById(modalID).classList.toggle("hidden");
                                                            document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
                                                            document.getElementById(modalID).classList.toggle("flex");
                                                            document.getElementById(modalID + "-backdrop").classList.toggle("flex");
                                                        }
                                                    </script>
                                                    <!-- end pop up -->
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->
                                <div class="block w-full p-6 mt-4 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 dark:bg-gray-800 ">
                                    <div class="py-2 mt-2">
                                        <img class="-mt-3" width="35" height="35" src="./assets/img/avatar-new/rokigarong.svg"></a>
                                        <div class="ml-12 justify-between -mt-10">
                                            <h1 class="font-bold text-base md:text-1xl lg:text-2xl text-left md:text-left space-x-10">Nur Kamdi Albaron</h1>
                                            <h1 class="font-medium text-sm md:text-1xl lg:text-2xl -mt-2 text-left md:text-left space-x-10 opacity-50">2 Menit Yang Lalu</h1>
                                            <div class="flex ml-12 justify-right">
                                                <div class="mt- md:absolute -mt-10 md:mt right-0 -z-1 mr-20">
                                                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
                                                        <img width="20" height="20" src="./assets/img/newimages/sett.svg"></a>
                                                    </button>
                                                    <!-- Dropdown menu -->
                                                    <div id="dropdownDots" class="hidden z-10 w-35 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
                                                            <li>
                                                                <button class="bg-transparant text-black opacity-80 active:bg-red-300 font-medium text-sm px-4 py-2 rounded hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear text-left transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
                                                                    Hapus Postingan
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <a href="/editpostingan" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- end dropdown menu -->
                                                </div>
                                            </div>
                                        </div>
                                        <p class="font-normal text-sm text-gray-700">halo teman teman minta pendapat aku lagi ngerjain tugas ini,
                                            enaknya dikerjakan pake bahasa pemrograman apa ya
                                        </p>
                                        <img class="-mt-3" width="400" height="400" src="./assets/img/newimages/soalforum.png"></a>
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
                                        <div class="py-2 ml-4 mt-2">
                                            <img class="-mt-3" width="30" height="30" src="./assets/img/avatar-new/habib2.svg"></a>
                                            <div class="ml-12 justify-between -mt-9">
                                                <h1 class="font-bold text-sm md:text-1xl lg:text-2xl text-left md:text-left space-x-10">Habib Muhammad Rieziq bin Syihab</h1>
                                                <h1 class="font-medium text-xs md:text-1xl lg:text-2xl -mt-2 text-left md:text-left space-x-10 opacity-50">1 Menit Yang Lalu</h1>
                                                <div class="mt- md:absolute -mt-10 md:mt right-0 -z-1 mr-20">
                                                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDotss" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
                                                        <img width="20" height="20" src="./assets/img/newimages/sett.svg"></a>
                                                    </button>
                                                    <!-- Dropdown menu -->
                                                    <div id="dropdownDotss" class="hidden z-10 w-35 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
                                                            <li>
                                                                <button class="bg-transparant text-black opacity-80 active:bg-red-300 font-medium text-sm px-4 py-2 rounded hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear text-left transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
                                                                    Hapus Komentar
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <a href="/editkomentar" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- end dropdown menu -->
                                                </div>
                                            </div>
                                            <p class="font-normal text-sm text-gray-700">Pertanyaan antum tidak nyambung.
                                            </p>
                                        </div>
                                        <div class="py-2 ml-4 mt-2">
                                            <img class="-mt-3" width="30" height="30" src="./assets/img/avatar-new/profile.svg"></a>
                                            <div class="ml-12 justify-between -mt-9">
                                                <form>
                                                    <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                                                        <div class="flex items-center justify-between px-3 py-2 border-b dark:border-gray-600">
                                                            <div class="flex flex-wrap items-center divide-gray-200 sm:divide-x dark:divide-gray-600">
                                                                <div class="flex items-center space-x-1 sm:pr-4">
                                                                    <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path>
                                                                        </svg>
                                                                        <span class="sr-only">Attach file</span>
                                                                    </button>
                                                                    <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                                                        </svg>
                                                                        <span class="sr-only">Embed map</span>
                                                                    </button>
                                                                    <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                                                                        </svg>
                                                                        <span class="sr-only">Upload image</span>
                                                                    </button>
                                                                    <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                                        </svg>
                                                                        <span class="sr-only">Format code</span>
                                                                    </button>
                                                                    <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-.464 5.535a1 1 0 10-1.415-1.414 3 3 0 01-4.242 0 1 1 0 00-1.415 1.414 5 5 0 007.072 0z" clip-rule="evenodd"></path>
                                                                        </svg>
                                                                        <span class="sr-only">Add emoji</span>
                                                                    </button>
                                                                </div>
                                                                <div class="flex flex-wrap items-center space-x-1 sm:pl-4">
                                                                    <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                                                        </svg>
                                                                        <span class="sr-only">Add list</span>
                                                                    </button>
                                                                    <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                                                                        </svg>
                                                                        <span class="sr-only">Settings</span>
                                                                    </button>
                                                                    <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                                                        </svg>
                                                                        <span class="sr-only">Timeline</span>
                                                                    </button>
                                                                    <button type="button" class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                                        </svg>
                                                                        <span class="sr-only">Download</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <button type="button" data-tooltip-target="tooltip-fullscreen" class="p-2 text-gray-500 rounded cursor-pointer sm:ml-auto hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 11-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4zm9 1a1 1 0 010-2h4a1 1 0 011 1v4a1 1 0 01-2 0V6.414l-2.293 2.293a1 1 0 11-1.414-1.414L13.586 5H12zm-9 7a1 1 0 012 0v1.586l2.293-2.293a1 1 0 111.414 1.414L6.414 15H8a1 1 0 010 2H4a1 1 0 01-1-1v-4zm13-1a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 010-2h1.586l-2.293-2.293a1 1 0 111.414-1.414L15 13.586V12a1 1 0 011-1z" clip-rule="evenodd"></path>
                                                                </svg>
                                                                <span class="sr-only">Full screen</span>
                                                            </button>
                                                            <div id="tooltip-fullscreen" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                                Show full screen
                                                                <div class="tooltip-arrow" data-popper-arrow></div>
                                                            </div>
                                                        </div>
                                                        <div class="px-4 py-2 bg-white rounded-b-lg dark:bg-gray-800">
                                                            <label for="editor" class="sr-only">Publish post</label>
                                                            <textarea id="editor" rows="8" class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Komentar sebagai admin................" required></textarea>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="inline-flex items-center px-5 py-2.5 text-sm font-semibold text-center text-white bg-red-500 rounded-lg hover:bg-red-300">
                                                        Submit
                                                    </button>
                                                    <!-- pop up hapus postingan -->
                                                    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id">
                                                        <div class="relative w-auto my-6 mx-auto max-w-3xl">
                                                            <!--content-->
                                                            <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                                                <!--header-->
                                                                <div class="flex items-start justify-between p-5 border-b border-solid border-slate-200 rounded-t">
                                                                    <h3 class="text-3xl font-semibold">
                                                                        Peringatan
                                                                    </h3>
                                                                    <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('modal-id')">
                                                                        <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                                                                            ×
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                                <!--body-->
                                                                <div class="relative p-6 flex-auto">
                                                                    <p class="my-4 text-slate-500 text-lg leading-relaxed">
                                                                        Apakah anda yakin ingin menghapus?
                                                                    </p>
                                                                </div>
                                                                <!--footer-->
                                                                <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                                                                    <button class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
                                                                        Tidak
                                                                    </button>
                                                                    <button class="bg-red-500 text-white active:bg-red-300 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
                                                                        Hapus Postingan
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="hidden opacity-50 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>
                                                    <script type="text/javascript">
                                                        function toggleModal(modalID) {
                                                            document.getElementById(modalID).classList.toggle("hidden");
                                                            document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
                                                            document.getElementById(modalID).classList.toggle("flex");
                                                            document.getElementById(modalID + "-backdrop").classList.toggle("flex");
                                                        }
                                                    </script>
                                                    <!-- end pop up -->
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>
                </div>
                <!-- endtable -->
            </div>
    </main>
</body>
</body>
<!-- plugin for charts  -->
<script src="./assets/js/plugins/chartjs.min.js" async></script>
<!-- plugin for scrollbar  -->
<script src="./assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- main script file  -->
<script src="./assets/js/argon-dashboard-tailwind.js?v=1.0.1" async></script>