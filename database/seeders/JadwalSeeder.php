<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // ✅ WAJIB

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jadwal')->insert([
            [
                'kode_matakuliah' => 'MK001',
                'nidn' => 'D001',
                'kelas' => 'A',
                'hari' => 'Senin',
                'jam' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_matakuliah' => 'MK002',
                'nidn' => 'D002',
                'kelas' => 'B',
                'hari' => 'Selasa',
                'jam' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
