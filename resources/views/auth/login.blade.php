<x-guest-layout>

    <!-- STATUS -->
    <x-auth-session-status class="mb-4 text-green-400 text-center" :status="session('status')" />

    <!-- TITLE -->
    <div class="text-center mb-6">
        <h2 class="text-2xl font-bold text-white">
            Login Sistem
        </h2>
        <p class="text-gray-400 text-sm">
            Silakan masuk ke akun Anda
        </p>
    </div>

<form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- NPM / NIDN -->
    <div>
        <label class="text-sm text-gray-300">NPM / NIDN</label>
        <input type="text" name="identifier" required
            class="w-full py-2 px-3 rounded bg-gray-800 text-white"
            placeholder="Masukkan NPM atau NIDN">
    </div>

    <!-- PASSWORD -->
    <div class="mt-3">
        <label class="text-sm text-gray-300">Password</label>
        <input type="password" name="password" required
            class="w-full py-2 px-3 rounded bg-gray-800 text-white"
            placeholder="Masukkan password">
    </div>

    <button type="submit"
        class="mt-4 w-full bg-blue-600 text-white py-2 rounded">
        Login
    </button>
</form>

</x-guest-layout>
