<x-layout.layout class="px-23 bg-dawn/40">
    @php
        // dd($data);
    @endphp

    <div class="grid grid-cols-5 py-14 justify-between gap-10">
        @foreach ($data as $key => $value)
            <div class="flex flex-col bg-[#7096D1]/10 border border-white rounded-2xl py-6 px-5 min-w-1/3 gap-5">
                <img class="w-full h-40 object-cover rounded-2xl" src="{{ asset('storage/' . $value['bukti_pendukung']) }}">
                <span class="flex flex-col text-center gap-1">
                    <p class="font-bold">{{$value['nama_barang']}}</p>
                    <p class="text-xs">{{$value['lokasi_kehilangan']}}</p>
                    <p class="text-xs">{{ \Carbon\Carbon::parse($value['waktu_kehilangan'])->translatedFormat('d F Y, H:i') }}</p>
                </span>
                <button class="bg-china text-white rounded-full">Lihat Detail</button>
            </div>
        @endforeach
    </div>
</x-layout.layout>