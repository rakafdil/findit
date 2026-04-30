@props([
    'title' => 'Cari Barang Temuan',
    'detail' => 'Lihat daftar barang yang telah dilaporkan ditemukan di kampus. Gunakan filter untuk mempermudah
            pencarian berdasarkan deskripsi, kategori, atau lokasi. Jika ingin mengajukan klaim atas barang
            tersebut, gunakan Klaim Kepemilikan.',
    'button' => ['name'=>'Mulai Cari', 'linkTo' => 'dashboard.cari-barang.index'],
    'imgName' => 'zoom-dynamic-gradient.png'
])

<div class="flex bg-white w-full rounded-xl py-6 px-8 justify-between items-center">
    <div class="flex flex-col gap-3.5 max-w-[80%]">
        <h1 class="font-semibold text-xl"> {{ $title }} </h1>
        <p>{{ $detail }}</p>
            <a href="{{ route($button['linkTo']) }}" class="rounded-full bg-dawn font-bold px-6.5 py-3 w-fit cursor-pointer hover:bg-midnight hover:text-white hover:scale-102 transition-all duration-300"> {{ $button['name'] }} </a>
    </div>
    <img src="{{ asset('assets/dashboard/' . $imgName) }}" class="h-50">
</div>