<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Form Laporan</title>
</head>

<body>
    {{--  Navbar Start  --}}
    @include('layouts/navbar')
    @yield('navbar')
    {{--  Navbar End  --}}

    <section class="w-screen">
        <div class="flex flex-nowrap bg-secondary1">
            {{--  Sidebar start  --}}
            @include('layouts/sidebar_support')
            @yield('sidebar')
            {{--  Sidebar End  --}}

            {{--  Form start  --}}

            <div class="container py-12 px-12 relative">

                <h3 class="mb-2 font-semibold text-2xl text-white">Jenis Laporan</h3>
                <ul
                    class="items-center w-1/2 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                        <div class="flex items-center pl-3">
                            <input id="vue-checkbox-list" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="vue-checkbox-list"
                                class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Pilihan
                                A</label>
                        </div>
                    </li>
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                        <div class="flex items-center pl-3">
                            <input id="react-checkbox-list" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="react-checkbox-list"
                                class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Pilihan
                                B</label>
                        </div>
                    </li>
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                        <div class="flex items-center pl-3">
                            <input id="angular-checkbox-list" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="angular-checkbox-list"
                                class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Pilihan
                                C</label>
                        </div>
                    </li>
                </ul>

                {{--  Bukti Laporan Start  --}}
                <div class="mt-4">
                    <h2 class="text-2xl font-semibold text-white">Bukti Laporan</h2>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        for="user_avatar">Upload
                        file</label>
                    <input
                        class="block w-1/2 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" id="user_avatar" type="file">
                </div>
                {{--  Bukti Laporan End  --}}


                <label for="message"
                    class="block mb-2 mt-4 text-2xl font-semibold text-gray-900 dark:text-white">Deskripsi</label>
                <textarea id="message" rows="4"
                    class="block p-2.5 w-1/2 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Leave a comment..."></textarea>
                {{--  Form End  --}}
                <div class="absolute right-24 top-8">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_un7IpQ.json"
                        background="transparent" speed="1" style="width: 450px; height: 400px;" loop autoplay>
                    </lottie-player>
                </div>

                <button class="text-white text-lg hover:bg-red-300  bg-primary w-1/5 mt-4 rounded-full h-8 ">
                    Submit
                </button>
            </div>
    </section>
</body>

</html>
