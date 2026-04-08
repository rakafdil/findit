<x-layout.layout class="relative bg-white px-18 py-9.5 z-0 overflow-clip">
    <div class="mb-10">
        <p class="text-xl">Hello, User,</p>
        <p class="text-2xl font-bold">Welcome to Your FindIt Dashboard</p>
    </div>

    <div class="flex flex-col bg-[#081F5C]/70 w-full py-9 px-13 rounded-xl backdrop-blur-xs gap-6.5">
        <x-dashboard.card> </x-dashboard.card>
        <x-dashboard.card title="Lapor Barang Temuan"
            detail="Laporkan barang yang ditemukan di kampus agar pemiliknya dapat menemukannya dengan mudah. Isi deskripsi dan lokasi barang yang ditemukan di formulir ini."
            :button="['name' => 'Laporkan Barang', 'linkTo' => '/lapor-temu']" imgName='map-pin-dynamic-gradient.png'> </x-dashboard.card>
        <x-dashboard.card title="Lapor Barang Hilang"
            detail="Buat laporan barang yang hilang agar dapat dicatat dalam sistem. Isi detail barangmu seperti deskripsi, lokasi terakhir terlihat, dan informasi tambahan lainnya."
            :button="['name' => 'Laporkan Barang', 'linkTo' => '/lapor-hilang']" imgName='note.png'></x-dashboard.card>
    </div>

    <img src="{{ asset("assets/shapes/shapes3.svg") }}" class="bg-image absolute -z-1 blur-xs -top-50 left-100">
    <img src="{{ asset("assets/dashboard/line.svg") }}" class="bg-image absolute -z-1 blur-xs -bottom-10 -right-30">
    <img src="{{ asset("assets/dashboard/line2.svg") }}" class="bg-image absolute -z-1 blur-xs -bottom-20 -left-10">
    <img src="{{ asset("assets/dashboard/lock-dynamic-gradient.png") }}"
        class="bg-image absolute -z-1 top-10 right-100">
    <img src="{{ asset("assets/dashboard/clock-dynamic-gradient.png") }}"
        class="bg-image absolute -z-1 top-80 -right-10">
    <img src="{{ asset("assets/dashboard/headphone-dynamic-gradient.png") }}"
        class="bg-image absolute -z-1 bottom-80 -left-30">
    <img src="{{ asset("assets/dashboard/chat-text-dynamic-gradient.png") }}"
        class="bg-image absolute -z-1 -bottom-10 left-120">
</x-layout.layout>