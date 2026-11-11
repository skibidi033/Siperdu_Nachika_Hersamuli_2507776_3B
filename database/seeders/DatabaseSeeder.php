<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
 
class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Urutan penting: kategori harus ada sebelum buku
        $this->call([
            KategoriSeeder::class,
            BukuSeeder::class,
        ]);
    }
}
