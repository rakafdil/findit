@props(['onsubmit' => '()=>{}', 'method' => 'POST', 'action' => ''])

<form onsubmit="{{ $onsubmit }}" action="{{ $action }}" enctype="multipart/form-data" method="{{ $method }}"
    class="flex flex-col w-125.75 bg-jicama rounded-2xl justify-center items-start px-10 py-8 border-[#334EAC] border-3 text-midnight font-bold z-10">
    <div class="w-full">
        <button type="button"
            class="inline-flex items-center gap-2 text-royal font-semibold hover:text-midnight transition-colors group"
            onclick="if (window.history.length > 1) { window.history.back(); } else { window.location.href='{{ route('dashboard') }}'; }"
            aria-label="Back to previous page">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="h-5 w-5 group-hover:-translate-x-4 transition-all duration-300">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
            <span>Back</span>
        </button>
    </div>
    @csrf
    {{ $slot }}
</form>