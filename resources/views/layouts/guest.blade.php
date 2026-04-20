<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sistem Kampus') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-900">

<div class="min-h-screen flex">

    <!-- 🔥 LEFT SIDE (ILUSTRASI) -->
    <div class="hidden lg:flex w-1/2 bg-gradient-to-br from-blue-600 to-indigo-700 text-white items-center justify-center p-10">
        <div class="text-center max-w-md">
            <h1 class="text-4xl font-bold mb-4">🎓 Sistem Kampus</h1>
            <p class="text-lg opacity-90">
                Kelola data mahasiswa, KRS, dan jadwal dengan sistem modern dan terintegrasi.
            </p>
        </div>
    </div>

    <!-- 🔥 RIGHT SIDE (FORM) -->
    <div class="flex w-full lg:w-1/2 items-center justify-center p-6">

        <div class="w-full max-w-md">

            <!-- LOGO -->
            <div class="text-center mb-6">

                <h2 class="text-2xl font-bold text-white mt-2">
                    Selamat Datang 👋
                </h2>
                <p class="text-gray-400 text-sm">
                    Silakan login ke akun Anda
                </p>
            </div>

            <!-- CARD -->
            <div class="bg-white/10 backdrop-blur-lg p-8 rounded-2xl shadow-lg border border-white/20">

                {{ $slot }}

            </div>

            <!-- FOOTER -->
            <p class="text-center text-gray-500 text-sm mt-6">
                © {{ date('Y') }} Sistem Kampus
            </p>

        </div>

    </div>

</div>

</body>
</html>
