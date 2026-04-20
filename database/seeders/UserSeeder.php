<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([

            // 👨‍🏫 DOSEN
            [
                'name' => 'Dosen 1',
                'email' => 'dosen@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'role' => 'dosen',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 👨‍🎓 MAHASISWA
            [
                'name' => 'Mahasiswa 1',
                'email' => 'mahasiswa@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'role' => 'mahasiswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 👨‍🎓 MAHASISWA 2 (opsional)
            [
                'name' => 'Mahasiswa 2',
                'email' => 'mahasiswa2@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'role' => 'mahasiswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
