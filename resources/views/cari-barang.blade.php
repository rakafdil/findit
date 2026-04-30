<x-layout.layout class="flex flex-col items-center px-23 bg-dawn/40 gap-10">
    <h1 class="font-bold text-4xl text-center mt-10"> Cari Barang Temuan </h1>
    <form method="GET" class="flex items-center gap-2 justify-center">

        <input id="search-input" type="text" name="search" placeholder="Search..." class="px-4 py-2 w-64 border border-gray-300 
               focus:outline-none focus:ring-2 bg-china focus:ring-blue-500 
               text-white placeholder-white rounded-full">

        <button type="submit" class="px-4 py-2 rounded-lg bg-blue-600 text-white 
               hover:bg-blue-700 active:scale-95 transition-all duration-150">
            Search
        </button>

    </form>
    <div class="grid grid-cols-5 py-14 justify-between gap-10 w-full" id="item-list">
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

    <script>
        function debounce(func, delay) {
            let timeoutId;
            return function (...args) {
                const context = this;
                // Reset the timer every time the function is called
                clearTimeout(timeoutId);
                // Start a new timer
                timeoutId = setTimeout(() => {
                    func.apply(context, args);
                }, delay);
            };
        }

        const searchInput = document.getElementById('search-input');
        const itemList = document.getElementById('item-list');
        // Define your search logic (e.g., an API call)
        const performSearch = async (event) => {
            const query = event.target.value;
            itemList.replaceChildren()
            console.log(query);
            console.log('Searching for:', event.target.value);
            try {
                const response = await fetch(`/dashboard/cari-barang/search?q=${query}`)
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }

                const data = await response.json();
                console.log('Search Results:', data);

                // You would then call a function to render these results to the UI
                data.data.forEach((d) => {
                    const card = document.createElement('div');

                    card.className = `
                flex flex-col bg-[#7096D1]/10 border border-white 
                rounded-2xl py-6 px-5 gap-5
            `;

                    card.innerHTML = `
                <img class="w-full h-40 object-cover rounded-2xl" 
                     src="/storage/${d.img_path}">

                <span class="flex flex-col text-center gap-1">
                    <p class="font-bold">${d.nama_barang}</p>
                    <p class="text-xs">${d.lokasi ?? '-'}</p>
                    <p class="text-xs">${d.tanggal_kejadian ?? '-'}</p>
                </span>

                <button class="bg-china text-white rounded-full">
                    Lihat Detail
                </button>
            `;

                    itemList.appendChild(card);
                });
            } catch (error) {
                console.error('There was a problem with the fetch operation:', error);
            }
        };

        // Create the debounced version (500ms delay is standard)
        const debouncedSearch = debounce(performSearch, 500);

        // Attach to the input event
        searchInput.addEventListener('input', debouncedSearch);
    </script>
</x-layout.layout>