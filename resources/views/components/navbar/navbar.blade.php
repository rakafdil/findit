<nav class="flex justify-between bg-china text-black items-center">
    <img src="{{ asset('assets/logo.png') }}" class="logo h-16">
    <div class="flex items-center gap-4 px-10">
        <x-navbar.nav-link :href="route('home')" :active="request()->routeIs('home')" class="nav-link">
            Home
        </x-navbar.nav-link>
        @auth
            <x-navbar.nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="nav-link">
                Dashboard
            </x-navbar.nav-link>
        @endauth
        <x-navbar.nav-link :href="route('about')" :active="request()->routeIs('about')" class="nav-link">
            About
        </x-navbar.nav-link>
        @auth
            <div class="relative group">
                <button type="button"
                    class="navbar-link inline-flex items-center rounded-full p-1 transition hover:bg-dawn/40 focus:bg-dawn/40"
                    aria-label="Open profile menu">
                    <svg width="74" height="42" viewBox="0 0 74 42" fill="none" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true">
                        <circle cx="21" cy="21" r="18" fill="#F3F8FF" stroke="#081F5C" stroke-width="2" />
                        <circle cx="21" cy="16" r="5" stroke="#081F5C" stroke-width="2" />
                        <path d="M11.5 30C13.7 25.8 17 23.7 21 23.7C25 23.7 28.3 25.8 30.5 30" stroke="#081F5C"
                            stroke-width="2" stroke-linecap="round" />
                        <rect x="44" y="10" width="28" height="22" rx="11" fill="#D0E3FF" />
                        <path d="M54 18L58 22L62 18" stroke="#081F5C" stroke-width="2.4" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
                <div
                    class="absolute right-0 mt-2 hidden w-44 rounded-xl border border-china/20 bg-midnight text-asian-pear p-2 shadow-lg group-hover:block group-focus-within:block">
                    <a href="{{ route('dashboard') }}"
                        class="block rounded-lg px-3 py-2 text-sm hover:bg-dawn/30">Profile</a>
                    <a href="{{ route('about') }}" class="block rounded-lg px-3 py-2 text-sm hover:bg-dawn/30">Help</a>
                    <a href="{{ route('logout-test') }}" class="block rounded-lg px-3 py-2 text-sm hover:bg-dawn/30">Logout</a>
                </div>
            </div>
        @else
            <a href="{{ route('auth', ['mode' => 'login']) }}" class="btn-glow navbar-link">
                Login
            </a>
        @endauth
    </div>
</nav>