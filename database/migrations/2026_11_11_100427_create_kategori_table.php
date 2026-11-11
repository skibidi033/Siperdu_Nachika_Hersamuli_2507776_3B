<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{
    /**
     * Dijalankan saat: php artisan migrate
     */
    public function up(): void
    {
        Schema::create('kategori', function (Blueprint $table) {
            $table->id();                              // id (primary key, auto increment)
            $table->string('nama_kategori', 100);      // VARCHAR(100)
            $table->timestamps();                      // created_at & updated_at
        });
    }
 
    /**
     * Dijalankan saat: php artisan migrate:rollback
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori');
    }
};
