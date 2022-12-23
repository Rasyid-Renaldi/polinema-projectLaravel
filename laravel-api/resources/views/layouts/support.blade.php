<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Support</title>
</head>

<body>
    {{--  Navbar Start  --}}
    @include('layouts/navbar')
    @yield('navbar')
    {{--  Navbar End  --}}

    {{--  Hero Section Start  --}}

    <section class="w-screen">
        <div class="flex flex-nowrap bg-secondary1">

            {{--  Sidebar Start  --}}
            @include('layouts/sidebar_support')
            @yield('sidebar')
            {{--  Sidebar End  --}}

            {{--  Content Start  --}}

            <div class="block bg-secondary1 px-8 py-8 w-full">
                <h1 class="text-white text-3xl font-semibold mb-2">Apa yang bisa kami bantu?</h1>
                <label class="mb-14">
                    <input type="text" name="text"
                        class="mt-1 px-3 py-2 text-white h-16 bg-slate-900 border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-1/2 rounded-md sm:text-sm focus:ring-1"
                        placeholder="Cari artikel bantuan" />
                </label>
                <div class="container flex flex-nowrap gap-8 mt-6">
                    <div class="flex flex-nowrap justify-start mt-8 ">
                        <div class="rounded-lg shadow-lg bg-white w-64 ">
                            <a href="#!">
                                <img class="rounded-md w-full"
                                    src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8YWNjb3VudHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                    alt="" />
                            </a>
                            <div class="p-6">
                                <h5 class="text-gray-900 text-xl font-medium mb-2">Halaman</h5>
                                <p class="text-gray-700 text-sm mb-4">
                                    Some quick example text to build on the card title and make up the bulk of the cards
                                    content.
                                </p>
                                <button type="button"
                                    class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Button</button>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-nowrap justify-start mt-8">
                        <div class="rounded-lg shadow-lg bg-white w-64 ">
                            <a href="#!">
                                <img class="rounded-md w-full"
                                    src="https://images.unsplash.com/photo-1512314889357-e157c22f938d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8bm90ZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                    alt="" />
                            </a>
                            <div class="p-6 relative">
                                <h5 class="text-gray-900 text-xl font-medium mb-2">Form Laporan</h5>
                                <p class="text-gray-700 text-sm mb-4">
                                    Laporkan kepada help-desk apabila terkait bug platform & etc, maka akan ditindak lanjuti
                                </p>
                                <a href="/formlaporan" type="button"
                                    class="static inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Button</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--  Content End  --}}
    </section>


</body>

</html>
