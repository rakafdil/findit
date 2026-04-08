@props(['header' => 'FINDIT'])

<x-layout.layout header="{{ $header }}" class="overflow-clip">
    <div class="relative flex justify-center items-start min-h-screen bg-[radial-gradient(circle,rgba(8,31,92,0.5)_10%,rgba(112,150,209,0.2)_110%)] py-12 overflow-clip">
        {{ $slot }}
        <img src="{{ asset('assets/auth/camera-iso-gradient.png') }}" class="absolute z-0 -left-20">
        <img src="{{ asset('assets/auth/trophy-iso-gradient.png') }}" class="absolute z-0 right-40">
        <img src="{{ asset('assets/auth/money-dynamic-gradient.png') }}" class="absolute z-0 -right-20 bottom-0">
        <img src="{{ asset('assets/auth/wallet-dynamic-gradient.png') }}" class="absolute z-0 left-20 bottom-10">
    </div>
</x-layout.layout>