<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Sistem Kampus') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Tailwind -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-white min-h-screen flex flex-col">

    <!-- 🔥 NAVBAR -->
    <header class="w-full bg-white dark:bg-gray-800 shadow">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

            <h1 class="text-lg font-bold text-blue-600">
                🎓 Sistem Kampus
            </h1>

            <nav class="flex gap-3">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="px-4 py-2 border rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        Login
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        </div>
    </header>

    <!-- 🔥 HERO -->
    <main class="flex-1 flex items-center justify-center px-6">

        <div class="text-center max-w-2xl">

            <h1 class="text-4xl font-bold mb-4">
                Sistem Informasi Akademik
            </h1>

            <p class="text-gray-600 dark:text-gray-300 mb-6">
                Kelola data Mahasiswa, KRS, dan Jadwal dengan mudah, cepat, dan terintegrasi.
            </p>

            <div class="flex justify-center gap-4">
                @auth
                    <a href="/dashboard"
                        class="px-6 py-3 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700">
                        Masuk Dashboard
                    </a>
                @else
                    <a href="/login"
                        class="px-6 py-3 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700">
                        Mulai Sekarang
                    </a>
                @endauth
            </div>

        </div>

    </main>

    <!-- 🔥 FITUR -->
    <section class="bg-white dark:bg-gray-800 py-10">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-3 gap-6">

            <div class="p-6 bg-gray-100 dark:bg-gray-700 rounded-xl shadow">
                <h3 class="font-bold text-lg mb-2">📊 Data Mahasiswa</h3>
                <p class="text-sm text-gray-600 dark:text-gray-300">
                    Kelola data mahasiswa dengan sistem relasi dosen.
                </p>
            </div>

            <div class="p-6 bg-gray-100 dark:bg-gray-700 rounded-xl shadow">
                <h3 class="font-bold text-lg mb-2">📝 KRS</h3>
                <p class="text-sm text-gray-600 dark:text-gray-300">
                    Pengambilan mata kuliah secara digital.
                </p>
            </div>

            <div class="p-6 bg-gray-100 dark:bg-gray-700 rounded-xl shadow">
                <h3 class="font-bold text-lg mb-2">📅 Jadwal</h3>
                <p class="text-sm text-gray-600 dark:text-gray-300">
                    Jadwal kuliah terintegrasi dengan dosen dan kelas.
                </p>
            </div>

        </div>
    </section>

    <!-- 🔥 FOOTER -->
    <footer class="text-center py-4 text-sm text-gray-500">
        © {{ date('Y') }} Sistem Kampus | Laravel + Tailwind
    </footer>

</body>
</html>
