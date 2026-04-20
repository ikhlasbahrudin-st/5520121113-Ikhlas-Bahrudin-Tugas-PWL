<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <!-- LEFT -->
            <div class="flex">

                <!-- LOGO -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ url('/') }}">
                        <span class="text-lg font-bold text-gray-800 dark:text-white">
                            MyApp
                        </span>
                    </a>
                </div>

                <!-- MENU DESKTOP -->
                <div class="hidden space-x-8 sm:flex sm:ml-10">

                    <!-- DASHBOARD ROLE -->
                    @auth
                        @if(auth()->user() instanceof App\Models\Mahasiswa)
                            <a href="{{ route('mahasiswa.dashboard') }}"
                                class="text-gray-700 dark:text-gray-200 hover:text-blue-500">
                                Dashboard
                            </a>

                            <a href="{{ route('mahasiswa.krs') }}"
                                class="text-gray-700 dark:text-gray-200 hover:text-blue-500">
                                KRS
                            </a>

                            <a href="{{ route('mahasiswa.jadwal') }}"
                                class="text-gray-700 dark:text-gray-200 hover:text-blue-500">
                                Jadwal
                            </a>

                        @elseif(auth()->user() instanceof App\Models\Dosen)
                            <a href="{{ route('dosen.dashboard') }}"
                                class="text-gray-700 dark:text-gray-200 hover:text-blue-500">
                                Dashboard
                            </a>

                            <a href="{{ route('dosen.nilai') }}"
                                class="text-gray-700 dark:text-gray-200 hover:text-blue-500">
                                Nilai
                            </a>
                        @endif
                    @endauth

                </div>
            </div>

            <!-- RIGHT USER -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">

                @auth
                <div class="relative">
                    <button @click="open = !open"
                        class="flex items-center text-sm font-medium text-gray-600 dark:text-gray-300 hover:text-blue-500">

                        <!-- NAMA SESUAI ROLE -->
                        @if(auth()->user() instanceof App\Models\Mahasiswa)
                            {{ auth()->user()->nama }} (Mahasiswa)
                        @elseif(auth()->user() instanceof App\Models\Dosen)
                            {{ auth()->user()->nama }} (Dosen)
                        @else
                            User
                        @endif

                        <svg class="ml-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M5.293 7.293L10 12l4.707-4.707 1.414 1.414L10 14.828 3.879 8.707z"/>
                        </svg>
                    </button>

                    <!-- DROPDOWN -->
                    <div x-show="open"
                        @click.away="open = false"
                        class="absolute right-0 mt-2 w-40 bg-white dark:bg-gray-700 rounded shadow">

                        <a href="{{ url('/profile') }}"
                            class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                            Profile
                        </a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button
                                class="w-full text-left px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 text-red-500">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
                @endauth

                @guest
                <a href="{{ route('login') }}"
                    class="text-gray-700 dark:text-gray-200 hover:text-blue-500">
                    Login
                </a>
                @endguest

            </div>

        </div>
    </div>

    <!-- MOBILE -->
    <div x-show="open" class="sm:hidden px-4 pb-3 space-y-1">

        @auth

            @if(auth()->user() instanceof App\Models\Mahasiswa)
                <a href="{{ route('mahasiswa.dashboard') }}" class="block">Dashboard</a>
                <a href="{{ route('mahasiswa.krs') }}" class="block">KRS</a>
                <a href="{{ route('mahasiswa.jadwal') }}" class="block">Jadwal</a>

            @elseif(auth()->user() instanceof App\Models\Dosen)
                <a href="{{ route('dosen.dashboard') }}" class="block">Dashboard</a>
                <a href="{{ route('dosen.nilai') }}" class="block">Nilai</a>
            @endif

            <div class="border-t pt-2">
                <div class="text-sm">
                    {{ auth()->user()->nama }}
                </div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="mt-2 text-red-500">Logout</button>
                </form>
            </div>

        @endauth

    </div>
</nav>
