<x-app-layout>
    <div class="p-6 text-white">
        <h1 class="text-2xl font-bold mb-4">📊 Dashboard Admin</h1>

        <div class="grid grid-cols-2 gap-4">
            <div class="bg-blue-600 p-6 rounded-xl">
                <h2>Total Mahasiswa</h2>
                <p class="text-3xl font-bold">{{ $totalMahasiswa }}</p>
            </div>

            <div class="bg-indigo-600 p-6 rounded-xl">
                <h2>Total Dosen</h2>
                <p class="text-3xl font-bold">{{ $totalDosen }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
