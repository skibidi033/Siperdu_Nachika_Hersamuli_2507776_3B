<?php
 
namespace Database\Seeders;
 
use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Database\Seeder;
 
class BukuSeeder extends Seeder
{
    public function run(): void
    {
        // 1) Data manual: buku yang sudah kita tampilkan pada pertemuan 10
        $novel = Kategori::where('nama_kategori', 'Novel')->first();
        $diri  = Kategori::where('nama_kategori', 'Pengembangan Diri')->first();
 
        Buku::create([
            'kategori_id'  => $novel->id,
            'judul'        => 'Laskar Pelangi',
            'penulis'      => 'Andrea Hirata',
            'penerbit'     => 'Bentang Pustaka',
            'tahun_terbit' => 2005,
            'stok'         => 7,
            'cover'        => 'course/1.png',
        ]);
 
        Buku::create([
            'kategori_id'  => $novel->id,
            'judul'        => 'Bumi Manusia',
            'penulis'      => 'Pramoedya Ananta Toer',
            'penerbit'     => 'Lentera Dipantara',
            'tahun_terbit' => 1980,
            'stok'         => 4,
            'cover'        => 'course/2.png',
        ]);
 
        Buku::create([
            'kategori_id'  => $diri->id,
            'judul'        => 'Filosofi Teras',
            'penulis'      => 'Henry Manampiring',
            'penerbit'     => 'Kompas',
            'tahun_terbit' => 2018,
            'stok'         => 0,
            'cover'        => 'course/3.png',
        ]);
 
        // 2) Data dummy: 12 buku acak dibuat oleh BukuFactory
        Buku::factory()->count(12)->create();
    }
}
