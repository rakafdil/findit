@props([
    'header1' => 'CARI',
    'header2' => 'BARANG TEMUAN',
    'desc' => 'Cari Barang Temuan memungkinkan pencarian barang yang telah dilaporkan ditemukan di daerah sekitar kampus. Barang yang cocok dengan deskripsi dapat langsung diklaim kepemilikannya melalui prosedur yang tersedia.',
    'gradientLoc' => '-right-40 -top-31.5',
    'imageURL' => 'zoom-dynamic-gradient',
    'imagePos' => '-top-15 -translate-x-1/2 left-1/2'
])
<div
    class="relative overflow-clip flex mt-11 mb-8 pt-28 pb-20 rounded-3xl border-3 border-royal bg-jicama justify-center min-h-[560px] lg:min-h-[500px] swipper-wrapper">
    <div
        class="absolute {{ $gradientLoc }} w-243 h-142.25 rounded-full bg-[#4983d9] blur-[254.5px] will-change-[filter] z-0">
    </div>
    <img class="absolute inset-0 h-full w-full object-cover opacity-10 pointer-events-none z-0"
        src="{{ asset("assets/bg-images/noise.png") }}" alt="" aria-hidden="true">
    <div class="flex flex-col py-10 px-10 shadow-xl w-[55%] z-2 backdrop-blur-md bg-white/10 rounded-3xl">
        <span class="font-bold">
            <h1 class="text-5xl">{{ $header1 }}</h1>
            <h2 class="text-2xl">{{ $header2 }}</h2>
        </span>
        <span>
            <p class="text-xl text-justify">{{ $desc }}</p>
        </span>
    </div>
    <div class="relative w-[45%] -mr-18">
        <img src="{{ asset('assets/home/'.$imageURL.'.png') }}"
            class="absolute z-10 w-[80%] {{ $imagePos }}">
    </div>
    {{ $slot }}
</div>