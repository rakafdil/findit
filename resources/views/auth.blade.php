<x-layout.main-form header="Login">
    @if ($mode === 'login')
        <x-auth.login-form></x-auth.login-form>
    @elseif ($mode === 'register')
        <x-auth.register-form></x-auth.register-form>
    @endif
</x-layout.main-form>