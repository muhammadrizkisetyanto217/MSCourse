<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>

</head>

<body class="bg-gray-100">

    {{-- ! NAVBAR --}}
    {{-- ~ --}}

    {{-- ! Alpine JS  --}}
    {{-- * x-data disimpan di div/bagian parent yang akan ditekan  --}}
    {{-- * @clik bagian yang diklik  --}}
    {{-- * x-show bagian yang akan berpengaruh saat diklik  --}}

    <nav class="py-9 px-4" x-data="{ navOpen: true }">
        {{-- * Menggunakan container maka ada celah kosong kanan kiri  --}}
        {{-- * MX-Auto berguna supaya container seimbang kanan kiri  --}}
        <div class="container mx-auto">
            {{-- ? Kasih items-center supaya seluruh navbar sama-sama ditengah  --}}
            <div class="flex justify-between items-center">

                {{-- * Order untuk urutan --}}
                <img class="h-12 w-36 order-1 sm:order-2" src="assets/logo/MSFix(1).svg" alt="Logo MS" srcset="">
                {{-- * Artinya saat di lg akan dihidden  --}}
                <img @click="navOpen = !navOpen" class="lg:hidden size-12 order-2 sm:order-1" src="assets/icon/menu.svg"
                    alt="Menu Nav" srcset="">

                {{-- ! Menu untuk PC  --}}
                <div class="order-2 hidden lg:block">
                    <ul class="flex gap-20">
                        {{-- * Text sm artinya ukurannya 14 px  --}}
                        <li class="text-grey font-bold text-sm"><a href="http://">Home</a></li>
                        <li class="text-grey font-bold text-sm opacity-50"><a href="http://">Home</a></li>
                        <li class="text-grey font-bold text-sm opacity-50"><a href="http://">Home</a></li>
                        <li class="text-grey font-bold text-sm opacity-50"><a href="http://">Home</a></li>
                        <li class="text-grey font-bold text-sm opacity-50"><a href="http://">Home</a></li>
                    </ul>
                </div>


                {{-- ! Tombol Login & Sign Up  --}}
                {{-- * sm:block artinya saat ukuran sm keatas maka akan ditampilkan  --}}
                {{-- * Jika ukuran sm kebawah maka ikut hukum asal yaitu di hidden  --}}
                <div class="order-3 hidden sm:block">
                    <button class="grow bg-zinc-100 px-8 py-4 font-black text-grey rounded-full text-sm">Login</button>
                    <button class="grow bg-purple-400 px-8 py-4 font-black text-white rounded-full text-sm">Sign
                        Up</button>
                </div>
            </div>
        </div>

        {{-- ! Tombol navbar bawah  --}}
        {{-- * Fixed agar jika discrool ttp ada  --}}
        {{-- * Kalau dipakai w-full maka disebelah kiri ada margin  --}}
        {{-- * right-0 dan left-0 akan menyebabkan saling tarik menarik  --}}
        {{-- ? Kasih border untuk mengetahui seberapa besar  --}}
        {{-- ? x-data adalah syntax dari Alpine.Js  --}}
        <div x-show="navOpen" x-data="{ open: false }"
            class="lg:hidden fixed bottom-0 right-0 left-0 bg-white p-4 border"
            x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">

            {{-- * flex supaya horizontal  --}}
            {{-- ? Flek bisa mengatur secara vertikal atau horizontal  --}}
            {{-- * Justify between supaya antar icon ada jarak  --}}
            <ul class="flex justify-between">
                <li>
                    {{-- * Pakai flex supaya vertikal  --}}
                    {{-- * Untuk justify center dan felx col belum ada efek  --}}
                    {{-- *  Pada percobaan pertama supaya bisa ketengah harus pakai a herf bukan button --}}
                    {{-- ? Gap digunakan untuk mengatur gap vertikal  --}}
                    <button class="flex justify-center flex-col items-center gap-1 text-purple-400 ">
                        {{-- * Untuk mengatur ukuran icon bisa menggunakan font size  --}}
                        <ion-icon name="home-outline" class="text-2xl"></ion-icon>
                        {{-- * Font-base opsional  --}}
                        <span class="font-base font-light">Home</span>
                    </button>
                </li>
                <li>
                    <button class="flex justify-center flex-col items-center gap-1 ">
                        {{-- * Icon juga bisa diberikan warna  --}}
                        <ion-icon name="laptop-outline" class="text-2xl text-grey opacity-50"></ion-icon>
                        {{-- * Ubah warna text beserta kadar ketebalannya  --}}
                        <span class="text-grey opacity-50 font-base font-light">E-Learning</span>
                    </button>
                </li>
                <li>
                    <button class="flex justify-center flex-col items-center gap-1 ">
                        <ion-icon name="school-outline" class="text-2xl text-grey opacity-50"></ion-icon>
                        <span class="text-grey opacity-50 font-base font-light">Kls Intensif</span>
                    </button>
                </li>
                <li>
                    <button class="flex justify-center flex-col items-center gap-1 ">
                        <ion-icon name="pencil-outline" class="text-2xl text-grey opacity-50"></ion-icon>
                        <span class="text-grey opacity-50 font-base font-light">Artikel</span>
                    </button>
                </li>
                <li>
                    {{-- * Supaya hasilnya saling berlawanan  --}}
                    <button @click="open = !open" class="flex justify-center flex-col items-center gap-1 ">
                        <ion-icon name="person-circle-outline" class="text-2xl text-grey opacity-50"></ion-icon>
                        <span class="text-grey opacity-50 font-base font-light">Akun</span>
                    </button>
                </li>
            </ul>

            {{-- * Tombol akan naik 7 rem dari bawah --}}
            {{-- * Harus pakai w-3/4/full supaya icon ketengah  --}}
            {{-- * Pakai right-1/2 dan translate-x-1/2 supaya ketengah  --}}
            {{-- ! Tombol Login & Sign Up Khusus mobile --}}
            <div x-show="open" class="absolute bottom-24  right-1/2 translate-x-1/2 flex gap-4 w-3/4"
                {{-- ? Animasi fade in fade out dari alpine  --}} x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-90">
                {{-- * Text sm digunakan untuk mengatur ukuran font  --}}
                {{-- * Grow supaya melebar  --}}
                <button class="grow bg-zinc-100 px-8 py-4 font-black text-grey rounded-full text-sm">Login</button>
                <button class="grow bg-purple-400 px-8 py-4 font-black text-white rounded-full text-sm">Sign Up</button>
            </div>
        </div>
    </nav>


    {{-- ! Hero section  --}}
    <section class="mb-24">
        <div class="container mx-auto p-4">
            {{-- * Cols maksimal 12. Pembagiannya tinggal dibagi aja  --}}
            <div class="grid grid-cols-12">
                {{-- * Kalau tidak diberikan col-span-2,3,4 dll maka otomatis dihitung cols-1  --}}
                {{-- * Col mobile dan pc dibedakan  --}}
                <div class="col-span-12 lg:col-span-4 order-2 lg:order-1">
                    <button class="mt-4 px-8 py-4 bg-white flex gap-2 text-sm font-bold rounded-full mx-auto">
                        Jelajahi Madinah Salam
                        <img src="assets/icon/explore.svg" class="text-blue-700" alt="" srcset="">
                    </button>
                    {{-- * Leading adalah pembahasan dari line-height  --}}
                    {{-- * Tujuannya agar jarak antar font lebih mepet  --}}
                    <h1
                        class="mt-4 mb-6 font-bold text-[40px] md:text-[52px] lg:[60px] text-gray-700 leading-tight text-center">
                        Menuntut Ilmu
                        <span class="text-green-400">Jalan Menuju Surga</span>
                    </h1>
                    <p class="text-gray-500 text-center">Belajar bahasa arab dan ilmu syar'i terstruktur dengan metode
                        terbaik</p>
                    <div class="flex flex-col gap-6">
                        <button class="mt-4 py-6 px-8 bg-purple-500 text-white rounded-full text-sm font-bold">Mulai
                            belajar</button>
                        <button
                            class="justify-center flex gap-2 py-6 px-8 bg-white border-[#EEEEEE] rounded-full text-sm font-bold">
                            <img src="assets/icon/watch.svg" alt="" srcset="">
                            Lihat demo
                        </button>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-8 order-1 mx-auto lg:order-2">
                    <div>
                        <img src="assets/background/imageHero.png" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>


</html>
