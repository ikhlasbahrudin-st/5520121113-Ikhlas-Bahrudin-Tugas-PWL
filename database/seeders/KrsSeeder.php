<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KrsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('krs')->insert([
            [
                'npm' => 'M001',
                'kode_matakuliah' => 'MK001',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'npm' => 'M002',
                'kode_matakuliah' => 'MK002',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
