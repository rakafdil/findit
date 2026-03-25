@props(['onsubmit' => '()=>{}'])

<form onsubmit="{{ $onsubmit }}"
    class="flex flex-col w-125.75 bg-jicama rounded-2xl justify-center items-start px-10 py-8 border-[#334EAC] border-3 text-midnight font-bold z-10">
    {{ $slot }}
</form>