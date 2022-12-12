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
                        <li><a class="hover:text-primary text-gray-900" href="/forum">Beranda</a></li>
                        <li><a class="hover:text-primary text-gray-300" href="#">Contact</a></li>
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
                <a href="#"
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
                    <h4 class="font-semibold text-4xl text-secondary1 mb-2">Contact</h4>
                    <h2 class="font-bold text-secondary text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white ">Hubungi
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
    <section class=" pt-24">
        <div class="container">
            <div class="flex flex-wrap" data-aos="fade-up-right" data-aos-duration="600">
                <div class="w-full px-4 mb-12 text-secondary dark:text-slate-300 font-medium md:w-1/3">
                    <img class="w-64 mb-3" src="https://www.mejakita.com/images/logo-new.png?imwidth=256"
                        alt="">
                    <h3 class="font-semibold text-slate-500 text-2xl mb-2">Hubungi Kami</h3>
                    <p class="text-slate-700">admin@mejakita.com</p>
                    <p class="text-slate-700">Jl. Simpang Janti Barat I C/10, <span class="block"> Sukun, Kec. Sukun,
                            Kota Malang, Jawa Timur 65147</span></p>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl text-secondary1 mb-2">Tentang Kami</h3>
                    <ul class="text-secondary">
                        <li>
                            <a href="#" class="inline-block text-base hover:text-primary mb-3">MejaKita</a>
                        </li>
                        <li>
                            <a href="#" class="inline-block text-base hover:text-primary mb-3">Forums</a>
                        </li>
                        <li>
                            <a href="#" class="inline-block text-base hover:text-primary mb-3">Support</a>
                        </li>
                    </ul>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl text-secondary1 mb-2">MejaKita</h3>
                    <ul class="text-secondary1">
                        <li>
                            <a href="#" class="inline-block text-base hover:text-primary mb-3">Langganan</a>
                        </li>
                        <li>
                            <a href="#" class="inline-block text-base hover:text-primary mb-3">Konsultasi</a>
                        </li>
                        <li>
                            <a href="#" class="inline-block text-base hover:text-primary mb-3">Privacy
                                Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full pt-10 border-t border-secondary1">
                <div class="flex items-center justify-center mb-5">
                    <!-- INSTAGRAM -->
                    <a href="https://www.instagram.com/mejakita/" target="_blank"
                        class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-gray-900 hover:border-primary hover:bg-primary hover:text-white">
                        <svg role="img" width="20" height="20" class="fill-current" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>Instagram</title>
                            <path
                                d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                        </svg>
                    </a>

                    <!-- Twitter -->
                    <a href="https://twitter.com/mejakita" target="_blank"
                        class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-gray-900 hover:border-primary hover:bg-primary hover:text-white">
                        <svg role="img" width="20" height="20" class="fill-current" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>Twitter</title>
                            <path
                                d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                        </svg>
                    </a>
                </div>
                <p class="font-medium text-sm text-slate-600 text-center">Dibuat dengan <span
                        class="text-red-500">❤</span> oleh <a href="https://www.instagram.com/mejakita/"
                        target="_blank" class="text-primary font-bold"> Internship MejaKita</a>, menggunakan <a
                        href="https://tailwindcss.com/" target="_blank" class="text-tailwind">Tailwind CSS.</a></p>
            </div>
        </div>
    </section>
    {{--  <!-- Footer End -->  --}}


</body>

</html>
