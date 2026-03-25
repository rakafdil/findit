<nav class="flex justify-between bg-china text-black items-center">
    <img src="{{ asset('assets/logo.png') }}" class="logo h-16">
    <div class="flex items-center gap-4 px-10">
        <x-navbar.nav-link :href="route('home')" :active="request()->routeIs('home')" class="nav-link">
            Home
        </x-navbar.nav-link>
        <x-navbar.nav-link :href="route('about')" :active="request()->routeIs('about')" class="nav-link">
            About
        </x-navbar.nav-link>
        @auth
        <a href="{{ route('auth') }}" class="btn-glow navbar-link">
            Profile
        </a>
        @endauth
        <a href="{{ route('auth') }}" class="btn-glow navbar-link">
            Login
        </a>
    </div>
</nav>