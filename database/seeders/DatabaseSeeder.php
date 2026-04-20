<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

// Seeder yang dipanggil
use Database\Seeders\DosenSeeder;
use Database\Seeders\MahasiswaSeeder;
use Database\Seeders\MatakuliahSeeder;
use Database\Seeders\KrsSeeder;
use Database\Seeders\JadwalSeeder;

// Model User
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 🔹 User default (login breeze)
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'), // login: admin@gmail.com / password
        ]);

        // 🔹 Jalankan seeder sesuai urutan relasi
        $this->call([
            DosenSeeder::class,        // parent
            MatakuliahSeeder::class,   // parent
            MahasiswaSeeder::class,    // butuh dosen
            JadwalSeeder::class,       // butuh dosen + matakuliah
            KrsSeeder::class,          // butuh mahasiswa + matakuliah
        ]);
    }
}
