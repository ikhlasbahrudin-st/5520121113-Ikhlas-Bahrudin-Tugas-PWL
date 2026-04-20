<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">
            📅 Jadwal Kuliah
        </h2>
    </x-slot>

    <div class="p-6">
        <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
            <table class="min-w-full border">
                <thead class="bg-gray-200 dark:bg-gray-700">
                    <tr>
                        <th class="px-4 py-2 border">Mata Kuliah</th>
                        <th class="px-4 py-2 border">Dosen</th>
                        <th class="px-4 py-2 border">Kelas</th>
                        <th class="px-4 py-2 border">Hari</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $j)
                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                        <td class="px-4 py-2 border">
                            {{ $j->matakuliah->nama_matakuliah ?? '-' }}
                        </td>
                        <td class="px-4 py-2 border">
                            {{ $j->dosen->nama ?? '-' }}
                        </td>
                        <td class="px-4 py-2 border">{{ $j->kelas }}</td>
                        <td class="px-4 py-2 border">{{ $j->hari }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center py-4">Data kosong</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
