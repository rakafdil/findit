<x-layout.form >
    <div class="flex flex-col justify-center items-center self-center">
        <img src="{{ asset('assets/logo-var2.png') }}" class="w-40 logo"></img>
        <p class="text-base">Login now to access all FindIt features!</p>
    </div>
    <div class="flex flex-col gap-5 w-full py-8">
        <x-common.form-input title="NIM" id="nim"></x-common.form-input>
        <x-common.form-input title="Password" type="password" id="nim"></x-common.form-input>
        <a class="text-base underline hover:no-underline self-end" href="/forgot-pass">Forgot Password?</a>
    </div>
    <div class="flex flex-col w-full gap-6">
        <button type="button" class="text-white bg-china rounded-full py-2" onclick="window.location.href='{{ route('login-test') }}'">Login as User</button>
        <span class="flex justify-center items-center gap-5 text-xl">
            <div class="bg-midnight h-[0.1px] w-full"></div> or <div class="bg-midnight h-[0.1px] w-full"></div>
        </span>
        <button class="text-white bg-china rounded-full py-2">Login with SSO UB</button>
    </div>
    <span class="self-center my-8">Don’t have an account yet? <a class="text-royal underline"
            href="?mode=register">Register</a></span>
    <span class="self-center"><a class="text-royal underline" href="?mode=admin">Login as Administrator</a></span>
</x-layout.form>