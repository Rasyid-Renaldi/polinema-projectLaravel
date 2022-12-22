<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Contact</title>
</head>

<body>

    {{--  Navbar Start  --}}
    @include('layouts/navbar')
    @yield('navbar')
    {{--  Navbar End  --}}


    <section class="bg-white dark:bg-gradient-to-r from-orange-400  to-yellow-300 relative w-screen">
        <div class="py-8 px-4 mx-auto text-center lg:py-16 lg:px-12">
            <h1
                class="mb-4 text-xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                We invest in educational technology</h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-secondary1">
                Education is the deadliest weapon in the world, because with education you can change the world</p>
            <div class="flex flex-col mb-8 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                <a href="#"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-primary1-700 hover:bg-primary1-800 focus:ring-4 focus:ring-primary1-300 dark:focus:ring-primary1-900">
                    Learn more
                    <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="https://www.youtube.com/@Mejakita/featured" target="_blank"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    <svg class="mr-2 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                        </path>
                    </svg>
                    Watch video
                </a>
            </div>
        </div>
        </div>
    </section>
    {{--  Teams Contact Start  --}}

    <section id="#teams" class="pt-16">
        <div class="container">
            <h2 class="text-4xl font-bold text-center">Team of Internship MejaKita Framework</h2>
            <br>
            <br>
            <div class="flex flex-cols-3 gap-x-24 justify-center relative">
                <span class="absolute -z-50 right-28 bottom-16">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player src="https://assets1.lottiefiles.com/private_files/lf30_nas63do4.json"
                        background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay>
                    </lottie-player>
                </span>
                <span class="absolute -z-10 left-8 top-20">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_zt1zgu9x.json"
                        background="transparent" speed="1" style="width: 350px; height: 350px;" loop autoplay>
                    </lottie-player>
                </span>
                <div>
                    <img class="transition ease-in-out  duration-300 hover:-translate-y-1 hover:scale-110 hover:grayscale"
                        src="./assets/img/icons/svg/fauzi1.svg" width="200" height="200" alt="">
                    <h2 class="block text-xl font-medium text-center mt-2">Ahmad Nur Fauzi</h2>
                    <p class="block text-xs font-bold text-blue-600 text-center">FRONT-END DEVELOPER</p>
                </div>
                <div>
                    <img class="transition ease-in-out duration-300 hover:-translate-y-1 hover:scale-110 hover:grayscale"
                        src="./assets/img/icons/svg/rasyed1.svg" width="200" height="200" alt="">
                    <h2 class="block text-xl font-medium text-center mt-2">Rasyed Renaldi</h2>
                    <p class="block text-xs font-bold text-blue-600 text-center">BACK-END DEVELOPER</p>
                </div>
                <div>
                    <img class="transition ease-in-out duration-300 hover:-translate-y-1 hover:scale-110 hover:grayscale"
                        src="./assets/img/icons/svg/irul1.svg" width="200" height="200" alt="">
                    <h2 class="block text-xl font-medium text-center mt-2">M. Khoirul</h2>
                    <p class="block text-xs font-bold text-blue-600 text-center">FULLSTACK DEVELOPER</p>
                </div>
            </div>
            <br>
        </div>
    </section>
    {{--  Teams Contacts End  --}}


    {{--  <!-- Contact Start -->  --}}
    <section id="#contact" class="pt-36 pb-32">
        <div class="container">
            <div class="w-full px4" data-aos="fade-down" data-aos-duration="600">
                <div class=" mx-auto text-center mb-5">
                    <h4 class="font-semibold text-2xl text-primary mb-2">Contact</h4>
                    <h2 class="font-bold text-secondary text-3xl mb-4 sm:text-4xl lg:text-5xl ">Hubungi
                        Kami</h2>
                </div>
            </div>

            <form>
                <div class="w-full lg:w-2/3 lg:mx-auto" data-aos="fade-down" data-aos-duration="600">
                    <div class="w-full px-4 mb-8">
                        <label for="name" class="text-base text-secondary1 font-bold">Nama</label>
                        <input type="text" id="name"
                            class="w-full bg-slate-200 text-secondary p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
                    </div>
                    <div class="w-full px-4 mb-8">
                        <label for="email" class="text-base text-secondary1 font-bold">Email</label>
                        <input type="text" id="email"
                            class="w-full bg-slate-200 text-secondary p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
                    </div>
                    <div class="w-full px-4 mb-8">
                        <label for="pesan" class="text-base text-secondary1 font-bold">Pesan</label>
                        <input type="text" id="pesan"
                            class="w-full bg-slate-200 text-secondary p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-32">
                    </div>
                    <div class="w-full px-4">
                        <button
                            class="text-base font-semibold text-white bg-white dark:bg-gradient-to-r from-orange-400  to-yellow-300 py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500">
                            Kirim
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    {{--  <!-- Contact End -->  --}}


    {{--  <!-- Footer Start -->  --}}
    @include('layouts/footer')
    @yield('footer')
    {{--  <!-- Footer End -->  --}}


</body>

</html>
