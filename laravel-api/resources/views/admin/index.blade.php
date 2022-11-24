<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
    <title>Dashboard Admin</title>
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
    <!-- sidenav  -->
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
                    <a class="text-white font-medium py-2.7 bg-blue-500/13 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="/admin">
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
    <!-- @yield('content') -->
    <!-- end sidenav -->
    <!-- end sidenav -->

    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
        <!-- Navbar -->
        @include('layouts/header')
        @yield('header')
        <!-- end Navbar -->

        <!-- cards -->
        <div class="w-full px-6 py-6 mx-auto">
            <!-- row 1 -->
            <div class="flex flex-wrap -mx-3">
                <!-- card1 -->
                <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        <div class="flex-auto p-4">
                            <div class="flex flex-row -mx-3">
                                <div class="flex-none w-2/3 max-w-full px-3">
                                    <div>
                                        <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase text-gray-500">Anggota Baru Forum</p>
                                        <h5 class="mb-2 font-bold text-black opacity-80">+100</h5>
                                        <p class="mb-0 text-black opacity-60">
                                            <span class="text-sm font-bold leading-normal text-emerald-500">+55%</span>
                                            since yesterday
                                        </p>
                                    </div>
                                </div>
                                <div class="px-3 text-right basis-1/3">
                                    <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-blue-500 to-violet-500">
                                        <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card2 -->
                <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        <div class="flex-auto p-4">
                            <div class="flex flex-row -mx-3">
                                <div class="flex-none w-2/3 max-w-full px-3">
                                    <div>
                                        <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase text-gray-500">Komentar Masuk</p>
                                        <h5 class="mb-2 font-bold text-black opacity-80">+200</h5>
                                        <p class="mb-0 text-black opacity-60">
                                            <span class="text-sm font-bold leading-normal text-emerald-500">+55%</span>
                                            since yesterday
                                        </p>
                                    </div>
                                </div>
                                <div class="px-3 text-right basis-1/3">
                                    <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-red-600 to-orange-600">
                                        <i class="ni leading-none ni-world text-lg relative top-3.5 text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card3 -->
                <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        <div class="flex-auto p-4">
                            <div class="flex flex-row -mx-3">
                                <div class="flex-none w-2/3 max-w-full px-3">
                                    <div>
                                        <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase text-gray-500">LIKE</p>
                                        <h5 class="mb-2 font-bold text-black opacity-80">+100</h5>
                                        <p class="mb-0 text-black opacity-60">
                                            <span class="text-sm font-bold leading-normal text-emerald-500">+55%</span>
                                            since yesterday
                                        </p>
                                    </div>
                                </div>
                                <div class="px-3 text-right basis-1/3">
                                    <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-emerald-500 to-teal-400">
                                        <i class="ni leading-none ni-paper-diploma text-lg relative top-3.5 text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card4 -->
                <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
                    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        <div class="flex-auto p-4">
                            <div class="flex flex-row -mx-3">
                                <div class="flex-none w-2/3 max-w-full px-3">
                                    <div>
                                        <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase text-gray-500">TOTAL SISWA</p>
                                        <h5 class="mb-2 font-bold text-black opacity-80">2000</h5>
                                        <p class="mb-0 text-black opacity-60">
                                            <span class="text-sm font-bold leading-normal text-emerald-500">+55%</span>
                                            since yesterday
                                        </p>
                                    </div>
                                </div>
                                <div class="px-3 text-right basis-1/3">
                                    <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-orange-500 to-yellow-500">
                                        <i class="ni leading-none ni-cart text-lg relative top-3.5 text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



            <!-- cards row 3 -->

            <div class="flex flex-wrap mt-6 -mx-3">
                <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
                    <div class="relative flex flex-col min-w-0 break-words bg-white border-0 border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl dark:bg-gray-950 border-black-125 rounded-2xl bg-clip-border">
                        <div class="p-4 pb-0 mb-0 rounded-t-4">
                            <div class="flex justify-between">
                                <h6 class="mb-2 text-semibold text-black">Sales by Country</h6>
                            </div>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="items-center w-full mb-4 align-top border-collapse border-gray-200 dark:border-white/40">
                                <tbody>
                                    <tr>
                                        <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                            <div class="flex items-center px-2 py-1">
                                                <div>
                                                    <img src="./assets/img/icons/flags/US.png" alt="Country flag" />
                                                </div>
                                                <div class="ml-6">
                                                    <p class="mb-0 text-xs font-semibold leading-tight text-black opacity-60">Country:</p>
                                                    <h6 class="mb-0 text-sm leading-normal text-black ">United States</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                            <div class="text-center">
                                                <p class="mb-0 text-xs font-semibold leading-tight text-black opacity-60">Sales:</p>
                                                <h6 class="mb-0 text-sm leading-normal text-black">2500</h6>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                            <div class="text-center">
                                                <p class="mb-0 text-xs font-semibold leading-tight text-black opacity-60">Value:</p>
                                                <h6 class="mb-0 text-sm leading-normal text-black">$230,900</h6>
                                            </div>
                                        </td>
                                        <td class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                            <div class="flex-1 text-center">
                                                <p class="mb-0 text-xs font-semibold leading-tight text-black opacity-60">Bounce:</p>
                                                <h6 class="mb-0 text-sm leading-normal text-black">29.9%</h6>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                            <div class="flex items-center px-2 py-1">
                                                <div>
                                                    <img src="./assets/img/icons/flags/DE.png" alt="Country flag" />
                                                </div>
                                                <div class="ml-6">
                                                    <p class="mb-0 text-xs font-semibold leading-tight text-black opacity-60">Country:</p>
                                                    <h6 class="mb-0 text-sm leading-normal text-black">Germany</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                            <div class="text-center">
                                                <p class="mb-0 text-xs font-semibold leading-tight text-black opacity-60">Sales:</p>
                                                <h6 class="mb-0 text-sm leading-normal text-black">3.900</h6>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                            <div class="text-center">
                                                <p class="mb-0 text-xs font-semibold leading-tight text-black opacity-60">Value:</p>
                                                <h6 class="mb-0 text-sm leading-normal text-black">$440,000</h6>
                                            </div>
                                        </td>
                                        <td class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                            <div class="flex-1 text-center">
                                                <p class="mb-0 text-xs font-semibold leading-tight text-black opacity-60">Bounce:</p>
                                                <h6 class="mb-0 text-sm leading-normal text-black">40.22%</h6>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                            <div class="flex items-center px-2 py-1">
                                                <div>
                                                    <img src="./assets/img/icons/flags/GB.png" alt="Country flag" />
                                                </div>
                                                <div class="ml-6">
                                                    <p class="mb-0 text-xs font-semibold leading-tight text-black opacity-60">Country:</p>
                                                    <h6 class="mb-0 text-sm leading-normal text-black">Great Britain</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                            <div class="text-center">
                                                <p class="mb-0 text-xs font-semibold leading-tight text-black opacity-60">Sales:</p>
                                                <h6 class="mb-0 text-sm leading-normal text-black">1.400</h6>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                            <div class="text-center">
                                                <p class="mb-0 text-xs font-semibold leading-tight text-black opacity-60">Value:</p>
                                                <h6 class="mb-0 text-sm leading-normal text-black">$190,700</h6>
                                            </div>
                                        </td>
                                        <td class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                            <div class="flex-1 text-center">
                                                <p class="mb-0 text-xs font-semibold leading-tight text-black opacity-60">Bounce:</p>
                                                <h6 class="mb-0 text-sm leading-normal text-black">23.44%</h6>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 align-middle bg-transparent border-0 w-3/10 whitespace-nowrap">
                                            <div class="flex items-center px-2 py-1">
                                                <div>
                                                    <img src="./assets/img/icons/flags/BR.png" alt="Country flag" />
                                                </div>
                                                <div class="ml-6">
                                                    <p class="mb-0 text-xs font-semibold leading-tight text-black opacity-60">Country:</p>
                                                    <h6 class="mb-0 text-sm leading-normal text-black">Brasil</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                                            <div class="text-center">
                                                <p class="mb-0 text-xs font-semibold leading-tight text-black opacity-60">Sales:</p>
                                                <h6 class="mb-0 text-sm leading-normal text-black">562</h6>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                                            <div class="text-center">
                                                <p class="mb-0 text-xs font-semibold leading-tight text-black opacity-60">Value:</p>
                                                <h6 class="mb-0 text-sm leading-normal text-black">$143,960</h6>
                                            </div>
                                        </td>
                                        <td class="p-2 text-sm leading-normal align-middle bg-transparent border-0 whitespace-nowrap">
                                            <div class="flex-1 text-center">
                                                <p class="mb-0 text-xs font-semibold leading-tight text-black opacity-60">Bounce:</p>
                                                <h6 class="mb-0 text-sm leading-normal text-black">32.14%</h6>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="w-full max-w-full px-3 mt-0 lg:w-5/12 lg:flex-none">
                    <div class="border-black/12.5 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                        <div class="p-4 pb-0 rounded-t-4">
                            <h6 class="mb-0 text-black">Categories</h6>
                        </div>
                        <div class="flex-auto p-4">
                            <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                                <li class="relative flex justify-between py-2 pr-4 mb-2 border-0 rounded-t-lg rounded-xl text-inherit">
                                    <div class="flex items-center">
                                        <div class="inline-block w-8 h-8 mr-4 text-center text-black bg-center shadow-sm fill-current stroke-none bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 rounded-xl">
                                            <i class="text-white ni ni-mobile-button relative top-0.75 text-xxs"></i>
                                        </div>
                                        <div class="flex flex-col">
                                            <h6 class="mb-1 text-sm leading-normal text-slate-700 dark:text-white">Devices</h6>
                                            <span class="text-xs leading-tight text-black opacity-40">250 in stock, <span class="font-semibold">346+ sold</span></span>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <button class="group ease-in leading-pro text-xs rounded-3.5xl p-1.2 h-6.5 w-6.5 mx-0 my-auto inline-block cursor-pointer border-0 bg-transparent text-center align-middle font-bold text-slate-700 shadow-none transition-all dark:text-white"><i class="ni ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200" aria-hidden="true"></i></button>
                                    </div>
                                </li>
                                <li class="relative flex justify-between py-2 pr-4 mb-2 border-0 rounded-xl text-inherit">
                                    <div class="flex items-center">
                                        <div class="inline-block w-8 h-8 mr-4 text-center text-black bg-center shadow-sm fill-current stroke-none bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 rounded-xl">
                                            <i class="text-white ni ni-tag relative top-0.75 text-xxs"></i>
                                        </div>
                                        <div class="flex flex-col">
                                            <h6 class="mb-1 text-sm leading-normal text-slate-700 dark:text-white">Tickets</h6>
                                            <span class="text-xs leading-tight text-black opacity-40">123 closed, <span class="font-semibold">15 open</span></span>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <button class="group ease-in leading-pro text-xs rounded-3.5xl p-1.2 h-6.5 w-6.5 mx-0 my-auto inline-block cursor-pointer border-0 bg-transparent text-center align-middle font-bold text-slate-700 shadow-none transition-all dark:text-white"><i class="ni ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200" aria-hidden="true"></i></button>
                                    </div>
                                </li>
                                <li class="relative flex justify-between py-2 pr-4 mb-2 border-0 rounded-b-lg rounded-xl text-inherit">
                                    <div class="flex items-center">
                                        <div class="inline-block w-8 h-8 mr-4 text-center text-black bg-center shadow-sm fill-current stroke-none bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 rounded-xl">
                                            <i class="text-white ni ni-box-2 relative top-0.75 text-xxs"></i>
                                        </div>
                                        <div class="flex flex-col">
                                            <h6 class="mb-1 text-sm leading-normal text-slate-700 dark:text-white">Error logs</h6>
                                            <span class="text-xs leading-tight text-black opacity-40">1 is active, <span class="font-semibold">40 closed</span></span>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <button class="group ease-in leading-pro text-xs rounded-3.5xl p-1.2 h-6.5 w-6.5 mx-0 my-auto inline-block cursor-pointer border-0 bg-transparent text-center align-middle font-bold text-slate-700 shadow-none transition-all dark:text-white"><i class="ni ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200" aria-hidden="true"></i></button>
                                    </div>
                                </li>
                                <li class="relative flex justify-between py-2 pr-4 border-0 rounded-b-lg rounded-xl text-inherit">
                                    <div class="flex items-center">
                                        <div class="inline-block w-8 h-8 mr-4 text-center text-black bg-center shadow-sm fill-current stroke-none bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 rounded-xl">
                                            <i class="text-white ni ni-satisfied relative top-0.75 text-xxs"></i>
                                        </div>
                                        <div class="flex flex-col">
                                            <h6 class="mb-1 text-sm leading-normal text-slate-700 dark:text-white">Happy users</h6>
                                            <span class="text-xs leading-tight text-black opacity-40"><span class="font-semibold">+ 430 </span></span>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <button class="group ease-in leading-pro text-xs rounded-3.5xl p-1.2 h-6.5 w-6.5 mx-0 my-auto inline-block cursor-pointer border-0 bg-transparent text-center align-middle font-bold text-slate-700 shadow-none transition-all dark:text-white"><i class="ni ease-bounce text-2xs group-hover:translate-x-1.25 ni-bold-right transition-all duration-200" aria-hidden="true"></i></button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end cards -->
    </main>

</body>
<!-- plugin for charts  -->
<script src="./assets/js/plugins/chartjs.min.js" async></script>
<!-- plugin for scrollbar  -->
<script src="./assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- main script file  -->
<script src="./assets/js/argon-dashboard-tailwind.js?v=1.0.1" async></script>

</html>