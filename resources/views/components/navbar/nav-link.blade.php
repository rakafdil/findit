@props(['active' => false])

<a {{ $attributes->merge([
    'class' => $active 
        ? 'bg-dawn/50 px-4 py-2 rounded-full text-white' 
        : 'text-black  px-4 py-2 '
]) }}>
    {{ $slot }}
</a>