<!DOCTYPE html>
<html>
<head>
    <title>Login Dosen</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-gray-900 flex items-center justify-center h-screen">

<div class="bg-white/10 backdrop-blur-lg p-8 rounded-2xl border border-white/20 w-96">

    <h2 class="text-white text-2xl font-bold text-center mb-6">
        👨‍🏫 Login Dosen
    </h2>

    @if(session('error'))
        <div class="text-red-400 mb-3">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="/dosen/login">
        @csrf

        <input type="text" name="nidn" placeholder="Masukkan NIDN"
            class="w-full mb-3 px-4 py-2 rounded bg-white/20 text-white border border-white/30">

        <input type="password" name="password" placeholder="Password"
            class="w-full mb-4 px-4 py-2 rounded bg-white/20 text-white border border-white/30">

        <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg">
            Login
        </button>
    </form>

</div>

</body>
</html>
