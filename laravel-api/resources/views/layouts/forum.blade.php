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

<body>
    {{--  Navbar Start  --}}
    <header id="#header" class="bg-transparent items-center">
        <nav class="bg-transparent dark:bg-transparent shadow-lg w-full">
            <div class="container flex flex-nowrap items-center justify-start mx-auto px-16">
                <a href="#" class="flex items-center">
                    <img src="https://www.mejakita.com/images/logo-new.png?imwidth=256" class="h-6 mr-12"
                        alt="" />
                </a>
                <nav id="nav-menu"
                    class="absolute py-5 bg-gray-200 rounded-lg max-w-[250px] right-4 lg:static lg:bg-transparent lg:max-w-full ">
                    <ul class="block">
                        <li>
                            <a href=""
                                class="text-lg font-medium text-slate-900 py-2 mx-8 hover:text-blue-500">Forum
                                Discussion</a>
                        </li>
                    </ul>
                </nav>
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
            <div class="flex-grow h-screen flex flex-col items-center bg-slate-200">
                <div class="shadow-sm bg-white my-3 mx-6 w-3/5 h-16 rounded-md flex items-center">
                    <div class="m-3 bg-blue-100 rounded-full">
                        <img src="https://cdn-icons-png.flaticon.com/128/2956/2956214.png" width="25" height="25"
                            alt="">
                    </div>

                    {{--  Section Middle Start  --}}
                    <div>
                        <h4 class="font-semibold">Create a Idea</h4>
                        <div class="text-sm text-gray-500">
                            Share your ideas if there are difficulties
                        </div>
                    </div>
                </div>
                <div class="shadow-md bg-white m-6 w-3/5 rounded-md">
                    <div class="flex items-center">
                        <div class="flex items-center w-full p-3">
                            <div class="m-3">
                                <img src="https://mejakita.com/assets/images/profile_default.png" width="42"
                                    height="42" alt="" class="rounded-full">
                            </div>
                            <input class="bg-gray-200 rounded-lg h-12 flex-grow w-4/5 full py-1 px-3 text-gray-700"
                                type="text" placeholder="What's on your mind jay">
                        </div>
                    </div>
                    <div class="w-full  border-t border-slate-500"></div>
                    <div class="flex justify-evenly">
                        <div
                            class="flex flex-grow justify-center items-center text-sm px-3 py-2 text-gray-400 hover:bg-gray-200 rounded-lg">
                            <img src="https://cdn-icons-png.flaticon.com/128/3049/3049386.png" alt=""
                                width="26" height="26">
                            Feeling Activity
                        </div>
                        <div
                            class="flex flex-grow justify-center items-center text-sm px-3 py-2 text-gray-400 hover:bg-gray-200 rounded-lg">
                            <img src="https://cdn-icons-png.flaticon.com/128/2659/2659360.png" alt=""
                                width="26" height="26">
                            Foto/video
                        </div>
                        <div
                            class="flex flex-grow justify-center items-center text-sm px-3 py-2 text-gray-400 hover:bg-gray-200 rounded-lg">
                            <img src="https://cdn-icons-png.flaticon.com/128/7088/7088112.png" alt=""
                                width="26" height="26">
                            Feeling/Activity
                        </div>
                    </div>
                </div>

                <div class="bg-red-100 m-2 w-3/5 rounded-md">
                    <div class="py-8">
                       <div class="top-0 left-0">
                            Ahmad Nur Fauzi
                       </div>
                    </div>
                </div>

                {{--  Section End Middle  --}}

                {{--  Section Side RighT Start  --}}
            </div>
            <div class="w-1/5 h-screen">
                <div class="mt-6 ml-6 font-semibold text-lg ">
                    Siswa Online
                </div>
                <div class="px-4 mt-2 flex flex-row">
                    <img class="-mb-6 p-1 w-10 h-10 rounded-full ring-2 ring-green-600" width="42" height="42"
                        src="./assets/img/avatar-new/rokigarong.svg"></a>
                    <p class="px-2 py-2">Ahmad Nur Fauzi</p>
                </div>
                <div class="px-4 mt-2 flex flex-row">
                    <img class="-mb-6 p-1 w-10 h-10 rounded-full ring-2 ring-green-600" width="42" height="42"
                        src="https://mejakita.com/assets/images/profile_default.png"></a>
                    <p class="px-2 py-2">Koci</p>
                </div>
            </div>
        </div>
    </section>

    {{--  End Comment And Reply  --}}

</body>

</html>
