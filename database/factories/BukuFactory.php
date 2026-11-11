<?php
 
namespace Database\Factories;
 
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\Factory;
 
class BukuFactory extends Factory
{
    /**
     * "Cetakan" satu data buku palsu.
     */
    public function definition(): array
    {
        return [
            'kategori_id'  => Kategori::inRandomOrder()->value('id'),
            'judul'        => fake()->randomElement(['Jejak', 'Kisah', 'Senja di', 'Rahasia', 'Panduan Wisata']) . ' ' . fake()->city(),
            'penulis'      => fake()->name(),
            'penerbit'     => fake()->randomElement(['Gramedia', 'Erlangga', 'Mizan', 'Bentang Pustaka', 'Andi Offset']),
            'tahun_terbit' => fake()->numberBetween(2000, 2025),
            'stok'         => fake()->numberBetween(0, 15),
            'cover'        => 'course/' . fake()->numberBetween(1, 6) . '.png',
        ];
    }
}
