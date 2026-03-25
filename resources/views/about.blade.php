<x-layout.layout class="relative items-start pb-30">
    <div class="absolute inset-0 -z-10 bg-linear-to-b from-porcelain to-[#1d3167]/60"></div>
    <div class="mx-20 mt-12 flex justify-center flex-col items-center gap-7">
        <h1 class="font-bold text-5xl">What is FindIt?</h1>

        <div class="px-11 pt-10 pb-12" style="
        border-radius: 20px;
border: 1px solid rgba(255, 255, 255, 0.10);
background: rgba(255, 255, 255, 0.05);
box-shadow: 1px 2px 9px 0 rgba(0, 0, 0, 0.25);
backdrop-filter: blur(7.5px);">
            <p class="text-center text-xl"><span class="font-bold">FindIt</span> adalah platform berbasis web yang
                mempermudah
                pelaporan dan pencarian barang hilang di kampus.
                Dengan menggantikan sistem manual, <span class="font-bold">FindIt</span> memungkinkan mahasiswa dan staf
                melaporkan barang hilang atau
                ditemukan melalui formulir digital yang praktis. Informasi barang tersimpan secara terorganisir,
                sehingga proses pelaporan menjadi lebih cepat dan efisien. <span class="font-bold">FindIt</span> hadir
                untuk menciptakan solusi modern
                yang mendukung pengelolaan barang hilang di lingkungan kampus.
            </p>

            @php
                $items = [
                    ['num' => '300+', 'text' => 'Barang hilang di Fakultas Ilmu Komputer'],
                    ['num' => '150+', 'text' => 'Barang ditemukan dan menunggu untuk diklaim oleh pemiliknya.'],
                    ['num' => '3500+', 'text' => 'Mahasiswa dan staf Fakultas Ilmu Komputer menggunakan FindIt.'],
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8 px-20">
                @foreach ($items as $item)
                    <x-about.card :num="$item['num']" :text="$item['text']" />
                @endforeach
            </div>
        </div>
    </div>
    <img src="{{asset('assets/shapes/shapes1.svg')}}" class="absolute left-0 bottom-30 -z-5">
    <img src="{{ asset('assets/shapes/line.svg') }}" class="absolute bottom-0 left-1/2 -translate-x-1/2 -z-5">
    <img src="{{asset('assets/shapes/shapes2.svg')}}" class="absolute right-0 bottom-30 -z-5">
    <img src="{{asset('assets/bg-images/camera-dynamic-gradient.png')}}" class="absolute left-10 bottom-30 -z-4">
    <img src="{{asset('assets/bg-images/copy-dynamic-gradient.png')}}" class="absolute right-5 bottom-30 -z-4">
    <img src="{{asset('assets/bg-images/dollar-dollar-gradient.png')}}" class="absolute right-120 bottom-30 -z-4">
    <img src="{{asset('assets/bg-images/map-pin-iso-gradient.png')}}" class="absolute left-50 bottom-90 -z-4">
    <img src="{{asset('assets/bg-images/megaphone-dynamic-gradient.png')}}" class="absolute left-120 bottom-0 -z-4">
    <img src="{{asset('assets/bg-images/pin-dynamic-gradient.png')}}" class="absolute -translate-x-1/2 left-1/2 bottom-100 -z-4">
    <img src="{{asset('assets/bg-images/wallet-dynamic-gradient.png')}}" class="absolute left-150 bottom-60 -z-4">
    <img src="{{asset('assets/bg-images/zoom-dynamic-gradient.png')}}" class="absolute right-100 bottom-80 -z-4">

</x-layout.layout>