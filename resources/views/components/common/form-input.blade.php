@props(['title' => '', 'id' => '', 'name' => '', 'placeholder' => '', 'class' => '', 'type' => 'text', 'accept' => ''])

@php
    $resolvedPlaceholder = $placeholder ?: $title;
    $resolvedName = $name ?: $id;
@endphp

<span class="flex flex-col">
    <label for="{{ $id }}" class="text-lg">{{ $title }}</label>
    @if ($type === 'password')
        <div class="relative w-full">
            <input required id="{{ $id }}" name="{{ $resolvedName }}"
                class="border-3 border-china w-full rounded-md px-2 py-1 pr-10 focus:border-royal focus:ring-2 focus:ring-royal/30 focus:outline-none transition-colors {{ $class }} placeholder:font-medium"
                type="password" placeholder="{{ $resolvedPlaceholder }}">
            <button type="button"
                class="absolute inset-y-0 right-2 my-auto h-7 w-7 rounded-md text-midnight/70 transition-colors hover:text-midnight focus:outline-none focus:ring-0 cursor-pointer"
                aria-label="Show password" aria-pressed="false"
                onclick="(function(btn){const input=btn.previousElementSibling;const willShow=input.type==='password';input.type=willShow?'text':'password';btn.setAttribute('aria-label',willShow?'Hide password':'Show password');btn.setAttribute('aria-pressed',willShow?'true':'false');btn.querySelector('[data-eye]').classList.toggle('hidden',!willShow);btn.querySelector('[data-eye-off]').classList.toggle('hidden',willShow);})(this)">
                <svg data-eye xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
                    stroke="currentColor" class="h-5 w-5 mx-auto">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.964-7.178z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <svg data-eye-off xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
                    stroke="currentColor" class="hidden h-5 w-5 mx-auto">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3l18 18" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10.477 10.485A3 3 0 0013.5 13.5m3.886 3.886A10.46 10.46 0 0112 19.5c-4.638 0-8.573-3.007-9.964-7.178a1.02 1.02 0 010-.639 10.477 10.477 0 012.362-3.944M6.228 6.228A10.45 10.45 0 0112 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639a10.48 10.48 0 01-1.53 2.876" />
                </svg>
            </button>
        </div>
    @elseif ($type === 'file')
        <div class="flex items-center gap-3 w-full">
            <input id="{{ $id }}" name="{{ $resolvedName }}"
                class="border-3 border-china w-full rounded-md px-2 py-1 focus:border-royal focus:ring-2 focus:ring-royal/30 focus:outline-none transition-colors {{ $class }} file:mr-4 file:rounded-full file:border-0 file:bg-royal file:px-4 file:py-2 file:font-bold file:text-white hover:file:bg-midnight"
                type="file" @if ($accept) accept="{{ $accept }}" @endif>
            <button type="button"
                class="shrink-0 rounded-full border-2 bg-red-600 px-4 py-2 text-white transition-colors hover:bg-red-500"
                onclick="(
                function(btn){
                    const input=btn.parentElement.querySelector('input[type=file]');
                    if(input){
                        input.value='';
                    }
                }
                )(this)">Remove</button>
        </div>
    @elseif ($type === 'textarea')
        <textarea id="{{ $id }}" name="{{ $resolvedName }}"
            class="placeholder:font-medium border-3 border-china w-full rounded-md px-2 py-1 focus:border-royal focus:ring-2 focus:ring-royal/30 focus:outline-none transition-colors {{ $class }}"
            placeholder="{{ $resolvedPlaceholder }}">{{ old($resolvedName) }}</textarea>
    @else
        <input id="{{ $id }}" name="{{ $resolvedName }}"
            class="placeholder:font-medium border-3 border-china w-full rounded-md px-2 py-1 focus:border-royal focus:ring-2 focus:ring-royal/30 focus:outline-none transition-colors {{ $class }}"
            type="{{ $type }}" placeholder="{{ $resolvedPlaceholder }}" value="{{ old($resolvedName) }}">
    @endif
</span>