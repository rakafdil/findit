<x-layout.form>
    <div class="flex flex-col justify-center items-center self-center">
        <img src="{{ asset('assets/logo-var2.png') }}" class="w-40 logo"></img>
        <p class="text-base text-center">Create your account to start searching or reporting lost items!</p>
    </div>
    <div class="flex flex-col gap-5 w-full py-8">
        <x-common.form-input title="NIM" id="nim"></x-common.form-input>
        <x-common.form-input title="Password" type="password" id="password"></x-common.form-input>
        <x-common.form-input title="Confirm Password" type="password" id="password-confirm"></x-common.form-input>
    </div>
    <div class="flex flex-col w-full gap-6">
        <button class="text-white bg-china rounded-full py-2">Register</button>
        <span class="flex justify-center items-center gap-5 text-xl">
            <div class="bg-midnight h-[0.1px] w-full"></div> or <div class="bg-midnight h-[0.1px] w-full"></div>
        </span>
        <button class="text-white bg-china rounded-full py-2">Register with SSO UB</button>
    </div>
    <span class="self-center my-8">Already have an account? <a class="text-royal underline"
            href="?mode=login">Login</a></span>
</x-layout.form>