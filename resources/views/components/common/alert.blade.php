@props(['type'])

@if (session($type))
    <div id="overlay" class="fixed inset-0 bg-black/50 z-40"></div>

    <div id="alert" class="fixed z-50 top-[40%] left-1/2 -translate-x-1/2 
        flex flex-col gap-10 justify-center items-center px-10 py-10 
        rounded-2xl bg-[#D9D9D9] text-midnight">

        <p class="text-center">
            Klaim Kepemilikan Anda telah diajukan. Perubahan status klaim akan diberitahukan melalui email, ya!
        </p>

        <button onclick="closeAlert()" class="w-fit bg-midnight text-white px-20 py-3 rounded-full">
            OKE
        </button>
    </div>
@endif

<script>
    function closeAlert(){
        document.getElementById('alert').style.display='none';
        document.getElementById('overlay').style.display='none';
    }
</script>