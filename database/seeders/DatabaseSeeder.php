<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; 

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Buat Akun Admin
        User::create([
            'name' => 'Admin Ivan Interior',
            'email' => 'admin@ivaninterior.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        // Buat Kategori Dasar
        $kategori = ['Ruang Tamu', 'Kamar Tidur', 'Ruang Makan', 'Lemari & Rak', 'Aksesoris'];
        foreach ($kategori as $kat) {
            Kategori::create(['nama_kategori' => $kat]);
        }
        $this->call([
            ProdukSeeder::class,
        ]);
    }

}