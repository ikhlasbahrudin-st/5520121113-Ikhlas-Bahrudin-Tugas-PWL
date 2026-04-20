<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-white leading-tight">
                📚 Data Mahasiswa
            </h2>

            <!-- 🔥 TOMBOL HOME -->
            <a href="/dashboard"
                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg shadow transition">
                🏠 Home
            </a>
        </div>
    </x-slot>

    <div class="p-6">

        <!-- 🔥 CARD STYLE LOGIN -->
        <div class="bg-white/10 backdrop-blur-lg border border-white/20 shadow-xl rounded-2xl p-6">

            <div class="overflow-x-auto">
                <table class="min-w-full text-sm text-white">

                    <!-- HEADER -->
                    <thead>
                        <tr class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white">
                            <th class="px-4 py-3 text-left">NPM</th>
                            <th class="px-4 py-3 text-left">Nama</th>
                            <th class="px-4 py-3 text-left">Dosen</th>
                        </tr>
                    </thead>

                    <!-- BODY -->
                    <tbody>
                        @forelse($data as $m)
                        <tr class="border-b border-white/10 hover:bg-white/10 transition">
                            <td class="px-4 py-3 font-semibold">
                                {{ $m->npm }}
                            </td>

                            <td class="px-4 py-3">
                                {{ $m->nama }}
                            </td>

                            <td class="px-4 py-3 text-blue-300">
                                {{ $m->dosen->nama ?? '-' }}
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-center py-6 text-gray-300">
                                ⚠️ Data masih kosong
                            </td>
                        </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>

        </div>

    </div>
</x-app-layout>