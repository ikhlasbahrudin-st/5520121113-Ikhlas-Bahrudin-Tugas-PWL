<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">
            📝 Data KRS
        </h2>
    </x-slot>

    <div class="p-6">
        <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
            <table class="min-w-full border">
                <thead class="bg-gray-200 dark:bg-gray-700">
                    <tr>
                        <th class="px-4 py-2 border">Mahasiswa</th>
                        <th class="px-4 py-2 border">Mata Kuliah</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $k)
                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                        <td class="px-4 py-2 border">
                            {{ $k->mahasiswa->nama ?? '-' }}
                        </td>
                        <td class="px-4 py-2 border">
                            {{ $k->matakuliah->nama_matakuliah ?? '-' }}
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="2" class="text-center py-4">Data kosong</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
