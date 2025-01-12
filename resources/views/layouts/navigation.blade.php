<nav x-data="{ open: false }">
    <!-- Primary Navigation Menu -->
    <div class="flex items-center justify-between px-6 py-4 bg-gray-800">
        <!-- Logo -->
        <div>
            <a href="{{ route('dashboard') }}" class="text-white text-lg font-semibold">
                <!-- Replace with your logo image if you have one -->
                Laravel Logo
            </a>
        </div>

        <!-- Navigation Links -->
        <div class="hidden md:flex space-x-4">
            <a href="{{ route('dashboard') }}" class="text-white hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">
                {{ __('Dashboard') }}
            </a>
        </div>

        <!-- Settings Dropdown -->
        <div class="relative">
            <button class="flex items-center space-x-2 text-white">
                <span>{{ Auth::user()->name }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </button>

            <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg">
                <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">
                    {{ __('Profile') }}
                </a>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">
                        {{ __('Log Out') }}
                    </a>
                </form>
            </div>
        </div>

        <!-- Hamburger Menu (Mobile) -->
        <div class="md:hidden">
            <button @click="open = !open" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="w-6 h-6">
                    <path d="M4 6h16M4 12h16M4 18h16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div x-show="open" class="md:hidden bg-gray-800 text-white px-6 py-4">
        <a href="{{ route('dashboard') }}" class="block py-2 px-3 rounded-md hover:bg-gray-700">
            {{ __('Dashboard') }}
        </a>

        <div class="mt-4">
            <div class="text-sm text-gray-300">{{ Auth::user()->name }}</div>
            <div class="text-xs text-gray-500">{{ Auth::user()->email }}</div>
        </div>

        <!-- Responsive Settings Options -->
        <a href="{{ route('profile.edit') }}" class="block py-2 px-3 mt-4 rounded-md hover:bg-gray-700">
            {{ __('Profile') }}
        </a>

        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="block py-2 px-3 mt-4 rounded-md hover:bg-gray-700">
                {{ __('Log Out') }}
            </a>
        </form>
    </div>
</nav>
