<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration

{
    public function up(): void
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id')           // kolom relasi ke tabel kategori
                  ->constrained('kategori')
                  ->cascadeOnDelete();
            $table->string('judul', 150);
            $table->string('penulis', 100);
            $table->string('penerbit', 100);
            $table->year('tahun_terbit');
            $table->unsignedInteger('stok')->default(0);
            $table->string('cover')->nullable();       // nama file gambar sampul
            $table->timestamps();
        });
    }
 
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
