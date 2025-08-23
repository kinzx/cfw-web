<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=search" />
    <title>Testing halaman</title>


</head>

<body>
    <header class="arelative h-svh bg-cover bg-center ">
        <div class="h-svh bg-cover bg-center "
            style="background-image: url('{{ Vite::asset('resources/img/background.png') }}');">
            <div class="absolute inset-0 bg-black/50"></div>
            <nav aria-label="Global" class="relative z-10 flex items-center justify-between p-6 lg:px-8">
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img src="{{ Vite::asset(asset: 'resources/img/logo.png') }}" alt=""
                            class="h-10 w-auto" />
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button" command="show-modal" commandfor="mobile-menu"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white">
                        <span class="sr-only">Open main menu</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            data-slot="icon" aria-hidden="true" class="size-6">
                            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="#" class="text-sm/6 font-semibold text-white">Home</a>
                    <a href="#" class="text-sm/6 font-semibold text-white">Menu</a>
                    <a href="#" class="text-sm/6 font-semibold text-white">Product</a>
                    <a href="#" class="text-sm/6 font-semibold text-white">About</a>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end lg:gap-x-6">
                    <a href="#" class="text-sm/6 font-semibold text-white">Location</a>
                    <div x-data="{ isOpen: false }" class="relative flex items-center">
                        <a @click.prevent="isOpen = !isOpen" href="#" class="text-sm/6 font-semibold text-white">
                            <span class="material-symbols-outlined">search</span>
                        </a>

                        <input x-show="isOpen" x-transition:enter="transition ease-out duration-300 transform"
                            x-transition:enter-start="opacity-0 -translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0" @click.outside="isOpen = false"
                            type="text" placeholder="Cari..."
                            class="absolute top-full left-0 mt-2 px-4 py-2 w-64 bg-gray-800 text-white border border-gray-700 rounded-lg shadow-lg">
                    </div>
                </div>
            </nav>
            <el-dialog>
                <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
                    <div tabindex="0" class="fixed inset-0 focus:outline-none">
                        <el-dialog-panel
                            class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                            <div class="flex items-center justify-between">
                                <a href="#" class="-m-1.5 p-1.5">
                                    <span class="sr-only">Your Company</span>
                                    <img src="{{ Vite::asset(asset: 'resources/img/logo2.png') }}" alt=""
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
                                        <a href="#"
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
            <div class="relative z-10 relative isolate px-6 pt-14 lg:px-8">
                <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                    <div class="text-center">
                        <h1 class="text-5xl font-semibold tracking-tight text-balance text-white sm:text-7xl">
                            Data to
                            enrich your online business</h1>
                        <p class="mt-8 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8">Anim aute id
                            magna
                            aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet
                            fugiat
                            veniam occaecat.</p>
                        <div class="mt-10 flex items-center justify-center gap-x-6">
                            <a href="#"
                                class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                                started</a>
                            <a href="#" class="text-sm/6 font-semibold text-white">Learn more <span
                                    aria-hidden="true">→</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="relative bg-white py-20">
        <div class="container mx-auto grid grid-cols-2 gap-4 px-8">
            <div>
                <img class="w-250 " src="{{ Vite::asset(asset: 'resources/img/cfw.jpeg') }}" alt="">
            </div>
            <div class="bg-blue-200 p-6"></div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
</body>

</html>
