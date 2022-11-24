<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Forum</title>
</head>

<body class="">
    {{--  Navbar Start  --}}
    <header id="#header" class="bg-transparent items-center">
        <nav class="bg-white border-gray-200 px-2 sm:px-4 py-7 dark:bg-gray-200">
            <div class="container flex flex-wrap items-center justify-start mx-auto px-16">
                <a href="https://flowbite.com/" class="flex items-center">
                    <img src="https://www.mejakita.com/images/logo-new.png?imwidth=256" class="h-6 mr-12 sm:h-9"
                        alt="Flowbite Logo" />
                </a>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul
                        class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-200 dark:border-gray-700">
                        <li>
                            <a href="#"
                                class="text-xl font-extrabold block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-gray-800 md:p-0 dark:text-white"
                                aria-current="page">Forum</a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-xl font-extrabold block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Support</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    {{--  Navbar End  --}}

    <section>
        <div class="flex">
            <div class="w-1/5 h-screen mt-6">
                <div class="flex text-m font-semibold px-3 py-2 items-center rounded-lg m-2 hover:bg-gray-200">
                    <img src="https://cdn-icons-png.flaticon.com/128/1165/1165674.png" width="28" height="28"
                        class="mx-3" alt="">
                    <span class="px-2">Cari Teman</span>
                </div>
                <div class="flex text-m font-semibold px-3 py-2 items-center rounded-lg m-2 hover:bg-gray-200">
                    <img src="https://cdn-icons-png.flaticon.com/128/2598/2598906.png" width="28" height="28"
                        class="mx-3" alt="">
                    <span class="px-2">Messenger</span>
                </div>
                <div class="flex text-m font-semibold px-3 py-2 items-center rounded-lg m-2 hover:bg-gray-200">
                    <img src="https://cdn-icons-png.flaticon.com/128/2936/2936766.png" width="28" height="28"
                        class="mx-3" alt="">
                    <span class="px-2">Group</span>
                </div>
                <div class="flex text-m font-semibold px-3 py-2 items-center rounded-lg m-2 hover:bg-gray-200">
                    <img src="https://cdn-icons-png.flaticon.com/128/5667/5667029.png" width="28" height="28"
                        class="mx-3" alt="">
                    <span class="px-2">Tersimpan</span>
                </div>
                <div class="flex text-m font-semibold px-3 py-2 items-center rounded-lg m-2 hover:bg-gray-200">
                    <img src="https://cdn-icons-png.flaticon.com/128/3112/3112946.png" width="28" height="28"
                        class="mx-3" alt="">
                    <span class="px-2">Prestasi Siswa</span>
                </div>
                <div class="flex text-m font-semibold px-3 py-2 items-center rounded-lg m-2 hover:bg-gray-200">
                    <img src="https://cdn-icons-png.flaticon.com/128/591/591607.png" width="28" height="28"
                        class="mx-3" alt="">
                    <span class="px-2">Kalender</span>
                </div>
                <div class="flex text-m font-semibold px-3 py-2 items-center rounded-lg m-2 hover:bg-gray-200">
                    <img src="https://cdn-icons-png.flaticon.com/128/2537/2537875.png" width="28" height="28"
                        class="mx-3" alt="">
                    <span class="px-2">Pusat Iklan</span>
                </div>
                <div class="flex text-m font-semibold px-3 py-2 items-center rounded-lg m-2 hover:bg-gray-200">
                    <img src="https://cdn-icons-png.flaticon.com/128/2164/2164620.png" width="28" height="28"
                        class="mx-3" alt="">
                    <span class="px-2">Halaman</span>
                </div>
            </div>
            <div class="flex-grow h-screen flex flex-col items-center">
                <div class="shadow-sm bg-white my-3 mx-6 w-3/5 h-16 rounded-md flex items-center">
                    <div class="m-3 bg-blue-100 rounded-full">
                        <img src="https://cdn-icons-png.flaticon.com/128/2956/2956214.png" width="25" height="25"
                            alt="">
                    </div>
                    <div>
                        <h4 class="font-semibold">Create a Idea</h4>
                        <div class="text-sm text-gray-500">
                            Share your ideas if there are difficulties
                        </div>
                    </div>
                </div>
                <div class="shadow-sm bg-white m-6 w-3/5 rounded-md">

                    <div class="flex items-center">
                        <div class="flex items-center w-full p-3">
                            <div class="m-3">
                                <img src="https://mejakita.com/assets/images/profile_default.png" width="30" height="30" alt="" class="rounded-full">
                            </div>
                            <input class="bg-gray-200 rounded-full h-8 flex-grow w-4/5 full py-1 px-3 text-gray-700" type="text" placeholder="What's on your mind jay">
                        </div>
                    </div>
                    <div class="flex justify-evenly">
                        <div class="flex flex-grow justify-center items-center text-sm px-3 py-2 text-gray-400 hover:bg-gray-200">
                            <img src="https://cdn-icons-png.flaticon.com/128/3049/3049386.png" alt="" width="26" height="26">
                            Feeling Activity    
                        </div>
                        <div class="flex flex-grow justify-center items-center text-sm px-3 py-2 text-gray-400 hover:bg-gray-200">
                            <img src="https://cdn-icons-png.flaticon.com/128/2659/2659360.png" alt="" width="26" height="26">
                            Foto/video
                        </div>
                        <div class="flex flex-grow justify-center items-center text-sm px-3 py-2 text-gray-400 hover:bg-gray-200">
                            <img src="https://cdn-icons-png.flaticon.com/128/7088/7088112.png" alt="" width="26" height="26">
                            Feeling/Activity    
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/5 h-screen">Hallo3</div>
        </div>
    </section>

    {{--  End Comment And Reply  --}}

</body>

</html>
