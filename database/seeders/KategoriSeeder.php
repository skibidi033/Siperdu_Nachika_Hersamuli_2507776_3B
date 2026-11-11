<?php
 	
namespace Database\Seeders;
 
use App\Models\Kategori;
use Illuminate\Database\Seeder;
 
class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $daftarKategori = ['Novel', 'Pengembangan Diri', 'Teknologi', 'Sejarah', 'Sains'];
 
        foreach ($daftarKategori as $nama) {
            Kategori::create(['nama_kategori' => $nama]);
        }
    }
}
