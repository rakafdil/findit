@props(['num', 'text'])

<div class="rounded-3xl backdrop-blur-4xl border border-white/40 shadow-[0_8px_30px_rgb(0,0,0,0.08)] p-6 px-10 text-center transition hover:scale-105 hover:shadow-lg py-10 space-y-4 group"
    style="background: rgba(242, 240, 222, 0.40);">

    <h1 class="text-5xl font-bold drop-shadow-[0_4px_4px_rgba(8,31,92,0.4)]" 
        style="background: linear-gradient(160deg, #081F5C 1.37%, #7096D1 20.15%, #081F5C 60.71%);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;">
        {{ $num }}
    </h1>

    <p class="group group-hover:text-black text-lg font-bold text-gray-800 mt-2 transition-all duration-300">
        {{ $text }}
    </p>

</div>