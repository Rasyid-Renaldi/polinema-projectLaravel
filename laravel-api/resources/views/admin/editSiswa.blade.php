<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <script src="../path/to/flowbite/dist/datepicker.js"></script>
    <!-- date picker js -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
    <title>Data Siswa</title>
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
    <div class="absolute w-full bg-red-500 dark:hidden min-h-75"></div>
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
                    <a class="py-2.7 dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-white transition-colors" href="/forumadmin">
                        <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-white ni ni-world-2"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Forum</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class=" text-white font-medium py-2.7 bg-blue-500/13 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="/datasiswa">
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
    </div>
    <!-- @yield('content') -->
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

                            <!-- breadcrumb -->
                            <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                                <li class="text-sm leading-normal">
                                    <a class="text-black opacity-50" href="javascript:;">Pages</a>
                                </li>
                                <li class="text-sm pl-2 capitalize leading-normal text-black before:float-left before:pr-2 before:text-black before:content-['/']" aria-current="page">Data Siswa</li>
                            </ol>
                            <h6 class="mb-0 font-bold text-black capitalize">Edit Siswa</h6>
                            <form action="" method="POST">
                                <div class="mb-6 mt-5">
                                    <label for="namasiswa" class="block mb-2 text-sm font-bold text-gray-700">NAMA SISWA</label>
                                    <input type="namasiswa" id="namasiswa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" placeholder="nama siswa" required>
                                </div>
                                <div class="mb-6 -mt-2">
                                    <label for="forum" class="block mb-2 text-sm font-bold text-gray-700">GMAIL</label>
                                    <input type="forum" id="forum" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 placeholder=" nama siswa" required>
                                </div>
                                <div class="mb-6 -mt-2">
                                    <label for="forum" class="block mb-2 text-sm font-bold text-gray-700">STATUS</label>
                                    <input type="forum" id="forum" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 placeholder=" nama siswa" required>
                                </div>

                                <button type="submit" class="inline-flex items-center mt-2 px-5 py-2 mb-6 text-sm font-semibold text-center text-white bg-red-500 rounded-lg hover:bg-red-300">
                                    Edit Data
                                </button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- endtable -->
        </div>
    </main>

</body>
<!-- plugin for charts  -->
<script src="./assets/js/plugins/chartjs.min.js" async></script>
<!-- plugin for scrollbar  -->
<script src="./assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- main script file  -->
<script src="./assets/js/argon-dashboard-tailwind.js?v=1.0.1" async></script>
<!-- date picker -->