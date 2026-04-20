<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            [
                'npm' => 'M001',
                'nidn' => 'D001',
                'password' => bcrypt('123456'),
                'nama' => 'Andi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'npm' => 'M002',
                'nidn' => 'D002',
                'password' => bcrypt('123456'),
                'nama' => 'Budi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
