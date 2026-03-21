@props(['num' => 1])

<div class="flex flex-col justify-center items-center gap-4">
    <div class="rounded-full w-67 h-3.75 bg-white" style="box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.48);">
        <div id="home-progress-fill" class="rounded-full bg-royal h-full  transition-all duration-500" style="width: {{ ($num / 3) * 100 }}%;"></div>
    </div>
    <p id="home-progress-text" class="font-bold">{{ $num }} of 3</p>
</div>