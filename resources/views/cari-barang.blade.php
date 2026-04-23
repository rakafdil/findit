<x-layout.layout class="px-23 bg-dawn/40">
    <div class="grid grid-cols-5 py-14 justify-between gap-10">
        @foreach ($data as $laporan)
            <div class="flex flex-col bg-[#7096D1]/10 border border-white rounded-2xl py-6 px-5 min-w-1/3 gap-5">
                <img class="w-full h-40 object-cover rounded-2xl" src="{{ asset('storage/' . $laporan->img_path) }}">
                <span class="flex flex-col text-center gap-1">
                    <p class="font-bold">{{ $laporan->nama_barang }}</p>
                    <p class="text-xs">{{ $laporan->lokasi ?? '-' }}</p>
                    <p class="text-xs">{{ optional($laporan->tanggal_kejadian)->translatedFormat('d F Y') }}</p>
                </span>
                <button class="bg-china text-white rounded-full">Lihat Detail</button>
            </div>
        @endforeach
    </div>
</x-layout.layout>