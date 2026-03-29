
<x-layout.layout class="relative items-center pb-30 bg-porcelain">
    <div class="flex items-stretch gap-2">
        <button id="prev-page-btn" type="button" class="px-10">
            <svg class="cursor-pointer hover:scale-110 duration-300 transition-all" width="41" height="42" viewBox="0 0 41 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                <ellipse cx="20.4474" cy="21" rx="20.4474" ry="21" fill="#334EAC" />
                <path d="M29.5889 21.0004H13.2555M13.2555 21.0004L21.4222 29.1671M13.2555 21.0004L21.4222 12.8338"
                    stroke="white" stroke-width="2.33333" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
        <div id="home-pagination-zone" class="swiper overflow-hidden flex-1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <x-home.content>
                        <img src="{{ asset('assets/shapes/shape-home1.svg') }}" class="absolute z-1 w-[35%] right-0 bottom-0">
                        <img src="{{ asset('assets/home/lines-bg.svg') }}" class="absolute z-1 w-[35%] left-8 top-0">
                        <img src="{{ asset('assets/home/headphone-dynamic-gradient-bg.png') }}" class="absolute z-1 left-20 top-0">
                        <img src="{{ asset('assets/home/wallet-dynamic-gradient-bg.png') }}" class="absolute z-1 left-90 bottom-5">
                        <img src="{{ asset('assets/home/key-dynamic-gradient-bg.png') }}" class="absolute z-1 right-115">
                    </x-home.content>
                </div>
                <div class="swiper-slide">
                    <x-home.content header1="LAPOR" header2="BARANG HILANG" desc="Melalui Lapor Barang Hilang, barang yang hilang dapat dilaporkan dengan mudah menggunakan formulir yang tersedia. Laporan akan diverifikasi, dan jika barang ditemukan, notifikasi akan diberikan untuk proses klaim." imageURL="map-pin-dynamic-gradient" imagePos="-top-30 -translate-x-1/2 left-1/2" gradientLoc="-bottom-100">
                        <img src="{{ asset('assets/shapes/shape-home1.svg') }}" class="absolute z-1 w-[35%] right-0 bottom-0">
                        <img src="{{ asset('assets/home/lines-bg.svg') }}" class="absolute z-1 w-[35%] left-8 top-0">
                        <img src="{{ asset('assets/home/headphone-dynamic-gradient-bg.png') }}" class="absolute z-1 left-20 top-0">
                        <img src="{{ asset('assets/home/wallet-dynamic-gradient-bg.png') }}" class="absolute z-1 left-90 bottom-5">
                        <img src="{{ asset('assets/home/key-dynamic-gradient-bg.png') }}" class="absolute z-1 right-115">
                    </x-home.content>
                </div>
                 <div class="swiper-slide" >
                    <x-home.content header1="LAPOR" header2="BARANG TEMUAN" desc="Lapor Barang Temuan memfasilitasi pelaporan barang yang ditemukan di kampus. Barang yang dilaporkan akan diinformasikan, sehingga pemiliknya dapat mengetahui keberadaannya dan mengklaimnya kembali." imageURL="doc" imagePos="-top-30 -translate-x-1/2 left-1/2" gradientLoc="-left-100 -top-31.5" scale="scale-80">
                        <img src="{{ asset('assets/shapes/shape-home1.svg') }}" class="absolute z-1 w-[35%] right-0 bottom-0">
                        <img src="{{ asset('assets/home/lines-bg.svg') }}" class="absolute z-1 w-[35%] left-8 top-0">
                        <img src="{{ asset('assets/home/headphone-dynamic-gradient-bg.png') }}" class="absolute z-1 left-20 top-0">
                        <img src="{{ asset('assets/home/wallet-dynamic-gradient-bg.png') }}" class="absolute z-1 left-90 bottom-5">
                        <img src="{{ asset('assets/home/key-dynamic-gradient-bg.png') }}" class="absolute z-1 right-115">
                    </x-home.content>
                </div>
            </div>
        </div>
        <button id="next-page-btn" type="button" class="px-10">
            <svg class="cursor-pointer hover:scale-110 duration-300 transition-all" width="41" height="42" viewBox="0 0 41 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                <ellipse cx="20.4474" cy="21" rx="20.4474" ry="21" fill="#334EAC" />
                <path d="M13.2549 21H29.5882M29.5882 21L21.4216 12.8333M29.5882 21L21.4216 29.1667" stroke="white"
                    stroke-width="2.33333" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
    </div>
    <x-home.progress-bar />
</x-layout.layout>