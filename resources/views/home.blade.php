<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=search" />
    <title>Testing halaman</title>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>
    <header class="relative h-svh bg-cover bg-center ">
        <div class="h-svh bg-cover bg-center "
            style="background-image: url('{{ Vite::asset('resources/img/background.png') }}');">
            <div class="absolute inset-0 bg-black/50"></div>
            <nav aria-label="Global" class="relative z-10 p-6 lg:px-8">
                <!-- Container Navigasi untuk Desktop -->
                <div class="hidden lg:flex lg:items-center lg:justify-between">
                    <!-- Logo Kiri -->
                    <div class="flex lg:flex-1">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">Your Company</span>
                            <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="Coffee Wae Logo"
                                class="h-10 w-auto" />
                        </a>
                    </div>
                    <!-- Navigasi Tengah -->
                    <div class="flex lg:gap-x-12">
                        <a href="/" class="text-sm/6 font-semibold text-white">Home</a>
                        <a href="#menu" class="text-sm/6 font-semibold text-white">Menu</a>
                        <a href="#produk" class="text-sm/6 font-semibold text-white">Product</a>
                        <a href="#about" class="text-sm/6 font-semibold text-white">About</a>
                    </div>
                    <!-- Navigasi Kanan (Location & Search) -->
                    <div class="flex flex-1 justify-end items-center gap-x-6">
                        <a href="#location" class="text-sm/6 font-semibold text-white">Location</a>
                        <div x-data="{ isOpen: false }" class="relative flex items-center">
                            <a @click.prevent="isOpen = !isOpen" href="#"
                                class="text-sm/6 font-semibold text-white">
                                <span class="material-symbols-outlined">search</span>
                            </a>
                            <input x-show="isOpen" x-transition:enter="transition ease-out duration-300 transform"
                                x-transition:enter-start="opacity-0 -translate-y-2"
                                x-transition:enter-end="opacity-100 translate-y-0" @click.outside="isOpen = false"
                                type="text" placeholder="Cari..."
                                class="absolute top-full right-0 mt-2 px-4 py-2 w-64 bg-gray-800 text-white border border-gray-700 rounded-lg shadow-lg">
                        </div>
                    </div>
                </div>

                <!-- Container Navigasi untuk Mobile -->
                <div class="flex lg:hidden items-center justify-between">
                    <!-- Tombol Menu di Kiri -->
                    <button type="button" command="show-modal" commandfor="mobile-menu"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white">
                        <span class="sr-only">Open main menu</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            data-slot="icon" aria-hidden="true" class="size-6">
                            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                    <!-- Logo di Tengah -->
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="Coffee Wae Logo"
                            class="h-10 w-auto" />
                    </a>
                    <!-- Tempat Kosong agar logo di tengah, bisa diisi ikon lain -->
                    <div class="w-6"></div>
                </div>
            </nav>

            <!-- Menu Mobile (Tersembunyi) -->
            <el-dialog>
                <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
                    <div tabindex="0" class="fixed inset-0 focus:outline-none">
                        <el-dialog-panel
                            class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                            <div class="flex items-center justify-between">
                                <a href="#" class="-m-1.5 p-1.5">
                                    <span class="sr-only">Your Company</span>
                                    <img src="{{ Vite::asset('resources/img/logo2.png') }}" alt=""
                                        class="h-10 w-auto" />
                                </a>
                                <button type="button" command="close" commandfor="mobile-menu"
                                    class="-m-2.5 rounded-md p-2.5 text-gray-700">
                                    <span class="sr-only">Close menu</span>
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        data-slot="icon" aria-hidden="true" class="size-6">
                                        <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                            <div class="mt-6 flow-root">
                                <div class="-my-6 divide-y divide-gray-500/10">
                                    <div class="space-y-2 py-6">
                                        <a href="/"
                                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray hover:bg-gray-50">Home</a>
                                        <a href="#"
                                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray hover:bg-gray-50">Menu</a>
                                        <a href="#"
                                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray hover:bg-gray-50">Product</a>
                                        <a href="#"
                                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray hover:bg-gray-50">About</a>
                                    </div>
                                    <div class="space-y-2 py-6">
                                        <a href="#"
                                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray hover:bg-gray-50">Location</a>
                                        <a href="#"
                                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray hover:bg-gray-50"><span
                                                class="material-symbols-outlined"> search </span></a>
                                    </div>
                                </div>
                            </div>
                        </el-dialog-panel>
                    </div>
                </dialog>
            </el-dialog>


            <div
                class="relative z-10 container mx-auto px-2 lg:px-18 flex flex-col md:flex-row items-center justify-between ">
                <div class="w-full md:w-1/2 flex flex-col items-start justify-center text-white p-4">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-4">START YOUR DAY WITH BLACK COFFEE</h1>
                    <p class="text-sm sm:text-base lg:text-lg mb-8 leading-relaxed max-w-lg">
                        Starting your day with black coffee is a common practice for several reasons. Black coffee is
                        rich in antioxidants, vitamins B2 and B3, magnesium, potassium, and sodium, all of which are
                        beneficial for your health. The caffeine in coffee can improve your mood, cognitive function,
                        and performance, and make you more alert and less tired. Additionally, black coffee can aid in
                        weight loss and protect from serious illnesses such as heart disease.
                    </p>
                    <button
                        class="bg-transparent text-white font-normal py-2 px-6 border  rounded-full  hover:bg-white hover:text-[#323232] transition-colors">
                        SEE ALL
                    </button>
                </div>
                <div class="hidden md:flex w-full md:w-1/2 lg:h-1/2 items-center justify-center">
                    <img src="{{ Vite::asset('resources/img/img-cf.png') }}" alt="Secangkir Kopi Panas"
                        class="w-3/4 md:w-full h-auto object-cover" />
                </div>
            </div>
    </header>

    <section id="about" class="relative bg-white py-12 md:py-20 mt-8">
        <div class="container mx-auto px-4 lg:px-24 flex flex-col md:flex-row items-center gap-12 md:gap-24">
            <!-- Div Gambar -->
            <div class="w-full md:w-1/2">
                <img class="w-130 h-auto rounded-lg shadow-lg" src="{{ Vite::asset('resources/img/cfw.jpeg') }}"
                    alt="Penyajian Kopi di Coffee Wae" />
            </div>

            <!-- Div Konten Teks dan Tombol -->
            <div class="w-full md:w-1/2">
                <!-- Judul dan Paragraf -->
                <h1 class="text-4xl lg:text-5xl font-bold mb-4 lg:mb-6">About Us</h1>
                <p class="text-base lg:text-lg leading-relaxed text-gray-800">
                    Every time we feel tired of our activities, of course we have thought about relaxing for a
                    moment while enjoying a cup of coffee or other refreshing drinks. One of the recommended
                    cafes in East Jogja is Coffee Wae. The specialty of this cafe is its location which is far
                    from the noise of vehicles and pollution. Being faced with a river and shady bamboo trees
                    will create a comfortable and calm atmosphere. This cafe is located at JL. Tamantirto No.
                    451F, Kasihan, Brajan, Bantul.
                </p>
            </div>
        </div>
    </section>

    <section id="menu" class="relative bg-white py-12 md:py-20">
        <div class="bg-white">
            <div x-data="{ showAll: false }" class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                <h1 class="text-4xl lg:text-5xl font-bold mb-4 lg:mb-6">New Menu</h1>
                <div class="mt-15 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                    <!-- Kartu yang Selalu Terlihat -->
                    <div class="group relative">
                        <img src="{{ Vite::asset('resources/img/05.png') }}"
                            alt="Front of men&#039;s Basic Tee in black."
                            class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80" />
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700 font-bold">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        Local Platter
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">Otak - otak, Pisang Coklat, Tahu Tuna</p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">20K</p>
                        </div>
                    </div>
                    <div class="group relative">
                        <img src="{{ Vite::asset('resources/img/03.png') }}"
                            alt="Front of men&#039;s Basic Tee in white."
                            class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80" />
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        Ramen Noodles
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">Spicy Kare, Original Kare, Spicy Dry</p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">20K</p>
                        </div>
                    </div>
                    <div class="group relative">
                        <img src="{{ Vite::asset('resources/img/07.png') }}"
                            alt="Front of men&#039;s Basic Tee in dark gray."
                            class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80" />
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700 font-bold">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        Choco Nut
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">Espresso, Chocolate, Hazelnut, Fullcream</p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">20K</p>
                        </div>
                    </div>
                    <div class="group relative">
                        <img src="{{ Vite::asset('resources/img/08.png') }}"
                            alt="Front of men&#039;s Basic Tee in dark gray."
                            class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80" />
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700 font-bold">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        Pink Sundays
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">Soda, Kombucha, Mojito</p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">$35</p>
                        </div>
                    </div>
                </div>
                <template x-if="showAll">
                    <div x-show="showAll" x-transition:enter="transition ease-out duration-300 transform"
                        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                        class="contents lg:contents">
                        <section class="relative bg-white py-12 md:py-12">
                            <div class="container mx-auto px-4">
                                <!-- Judul Bagian Menu -->
                                <div class="text-center mb-8">
                                    <h2 class="text-3xl font-bold text-gray-800">Our Menu</h2>
                                    <p class="text-gray-600 mt-2">Browse our full menu here!</p>
                                </div>

                                <!-- Div untuk menyematkan menu dari Flip HTML -->
                                <div class="w-full rounded-lg overflow-hidden shadow-lg" style="height: 600px;">
                                    <!-- Tempelkan kode iframe dari Flip HTML di sini -->
                                    <!-- Ganti src dengan link yang Anda dapatkan dari Flip HTML -->
                                    <iframe src="https://online.fliphtml5.com/qoxlq/fdda/" width="100%"
                                        height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                                    </iframe>
                                </div>
                            </div>
                        </section>

                    </div>
                </template>
                <div class="mt-8 flex justify-center">
                    <button @click="showAll = !showAll"
                        class="bg-white text-gray-800 font-semibold py-2 px-6 rounded-full shadow-md hover:bg-gray-100 transition-colors flex items-center gap-2">
                        <span x-text="showAll ? 'Show less' : 'See all'"></span>
                        <template x-if="!showAll">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m19.5 4.5-15 15m0 0h11.25m-11.25 0V8.25" />
                            </svg>

                        </template>
                        <template x-if="showAll">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                            </svg>
                        </template>
                    </button>
                </div>
            </div>
        </div>
    </section>



    <section id="produk" class="relative bg-white py-12 md:py-20">
        <div class="container mx-auto px-4 lg:px-24 flex flex-col md:flex-row items-center gap-12 md:gap-24">
            <div class="w-full md:w-1/2">
                <!-- Judul dan Paragraf -->
                <h1 class="text-4xl lg:text-5xl font-bold mb-4 lg:mb-6">What is it?</h1>
                <p class="lg:mb-15">
                    BlackAnswer
                </p>
                <p class="text-base lg:text-lg leading-relaxed text-gray-800 mb-7 ">
                    BlackAnswer is a manual espresso coffee maker created by Noor Asif. It is designed to operate
                    without electricity and can be used on a stove or fire pit. Black Answer has become popular for its
                    convenience and has been exported to many countries, including Germany2. It is an example of
                    innovation in the coffee industry that allows espresso to be made in areas without electricity2.
                </p>
                <P></P>
                <a href="#">
                    <p class="text-black hover:text-gray-400 transition-colors duration-200">Interested in buying?
                        Contact us</p>
                </a>


            </div>
            <!-- Div Gambar -->

            <div class="w-full md:w-1/2 lg:justi">
                <img class="w-130 h-auto rounded-3x1 " src="{{ Vite::asset('resources/img/BD.png') }}"
                    alt="Penyajian Kopi di Coffee Wae" />
            </div>

            <!-- Div Konten Teks dan Tombol -->

        </div>
    </section>
    <section id="location" class="relative bg-white px-4 lg:px-24 py-12 md:py-20">
        <div class="container mx-auto px-4">
            <!-- Judul Peta -->
            <div class="text-center mb-12 justify-items-start">
                <h2 class="text-5xl font-bold text-gray-800">I'm here</h2>
                <p class="text-gray-600 mt-2">Find us on the map below!</p>
            </div>

            <!-- Div untuk Google Maps Iframe -->
            <div class="w-full h-96 rounded-xl overflow-hidden shadow-lg">
                <!-- Iframe dari Google Maps akan ditempel di sini -->
                <!-- Ganti src dengan link yang Anda dapatkan dari Google Maps -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.7807660231333!2d110.3286718744086!3d-7.813016792207538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57e1fc72ac09%3A0xd0b1d610e1e8ccd7!2sCoffee%20Wae!5e0!3m2!1sen!2sid!4v1756977874591!5m2!1sen!2sid"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>
    <section id="location" class="relative bg-white px-4 lg:px-24 py-12 md:py-20">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide data-swiper-autoplay="2000"">
                    <div class="flex justify-center">
                        <img class="w-110 h-auto rounded-lg shadow-lg"
                            src="{{ Vite::asset('resources/img/cfw.jpeg') }}" alt="Penyajian Kopi di Coffee Wae" />
                    </div>
                </div>
                <div class="swiper-slide ">
                    <div class="flex justify-center">
                        <img class="w-110 h-auto rounded-lg shadow-lg"
                            src="{{ Vite::asset('resources/img/cfw.jpeg') }}" alt="Penyajian Kopi di Coffee Wae" />
                    </div>
                </div>
                <div class="swiper-slide ">
                    <div class="flex justify-center">
                        <img class="w-110 h-auto rounded-lg shadow-lg"
                            src="{{ Vite::asset('resources/img/cfw.jpeg') }}" alt="Penyajian Kopi di Coffee Wae" />
                    </div>
                </div>
                <div class="swiper-slide ">
                    <div class="flex justify-center">
                        <img class="w-110 h-auto rounded-lg shadow-lg"
                            src="{{ Vite::asset('resources/img/cfw.jpeg') }}" alt="Penyajian Kopi di Coffee Wae" />
                    </div>
                </div>
                <div class="swiper-slide ">
                    <div class="flex justify-center">
                        <img class="w-110 h-auto rounded-lg shadow-lg"
                            src="{{ Vite::asset('resources/img/cfw.jpeg') }}" alt="Penyajian Kopi di Coffee Wae" />
                    </div>
                </div>
                <div class="swiper-slide ">
                    <div class="flex justify-center">
                        <img class="w-110 h-auto rounded-lg shadow-lg"
                            src="{{ Vite::asset('resources/img/cfw.jpeg') }}" alt="Penyajian Kopi di Coffee Wae" />
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 2500, // Atur delay dalam milidetik
                    disableOnInteraction: false, // Autoplay akan terus berjalan meskipun pengguna berinteraksi
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
            });
        </script>
    </section>
    <footer class="bg-[#1e1e1e] text-white">
        <!-- Main container div -->
        <div class="container mx-auto px-4 lg:px-24 py-12 flex flex-col md:flex-row justify-between gap-8 md:gap-24">
            <!-- Kolom Kiri: Informasi Kafe dan Media Sosial -->
            <div class="flex flex-col items-center md:items-start text-center md:text-left md:w-1/2">
                <div class="mb-6">
                    <h1 class="font-bold text-2xl lg:text-3xl mb-1">Coffee Wae</h1>
                    <p class="text-sm text-gray-400">Open from 10:00 AM to 22:00 PM</p>
                </div>
                <!-- Ikon Media Sosial -->
                <div class=" flex space-x-4 mb-4 item-center justify-center">
                    <!-- Instagram -->
                    <a class="item-center" href="https://www.instagram.com/coffeewae_jogja" target="_blank"
                        aria-label="Instagram">
                        <svg class="text-white h-10 w-10 fill-current   hover:text-gray-400 transition-colors duration-200"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path
                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                        </svg>
                    </a>
                    <!-- YouTube -->
                    <a href="https://www.youtube.com/@coffeewae5383" target="_blank" aria-label="YouTube">
                        <svg class="text-white h-10 w-10 fill-current  hover:text-gray-400 transition-colors duration-200"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                            <path
                                d="M581.7 188.1C575.5 164.4 556.9 145.8 533.4 139.5C490.9 128 320.1 128 320.1 128C320.1 128 149.3 128 106.7 139.5C83.2 145.8 64.7 164.4 58.4 188.1C47 231 47 320.4 47 320.4C47 320.4 47 409.8 58.4 452.7C64.7 476.3 83.2 494.2 106.7 500.5C149.3 512 320.1 512 320.1 512C320.1 512 490.9 512 533.5 500.5C557 494.2 575.5 476.3 581.8 452.7C593.2 409.8 593.2 320.4 593.2 320.4C593.2 320.4 593.2 231 581.8 188.1zM264.2 401.6L264.2 239.2L406.9 320.4L264.2 401.6z" />
                        </svg>
                    </a>
                    <!-- WhatsApp -->
                    <a href="https://wa.me/+628973456078" target="_blank" aria-label="WhatsApp">
                        <svg class="text-white h-10 w-10 fill-current  hover:text-gray-400 transition-colors duration-200"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                            <path
                                d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Kolom Kanan: Informasi Navigasi -->
            <div class="flex flex-col  md:items-start text-center md:text-left md:w-1/2 mt-8 md:mt-0">
                <h6 class="font-bold text-lg mb-4">Information</h6>
                <ul class="space-y-2">
                    <li><a href="/"
                            class="text-white hover:text-gray-400 transition-colors duration-200">Home</a></li>
                    <li><a href="#"
                            class="text-white hover:text-gray-400 transition-colors duration-200">Menu</a></li>
                    <li><a href="#"
                            class="text-white hover:text-gray-400 transition-colors duration-200">Product</a></li>
                    <li><a href="#"
                            class="text-white hover:text-gray-400 transition-colors duration-200">About</a></li>
                </ul>
            </div>
        </div>

        <!-- Copyright -->
        <div class="bg-black/20 p-6 text-start  text-sm px-4 lg:px-24 md:items-start sm">
            <p>&copy; 2025 Copyright: Coffee Wae</p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
</body>

</html>
