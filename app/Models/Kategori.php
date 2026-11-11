<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Kategori extends Model
{
    // Nama tabel ditulis manual karena Laravel akan menebak "kategoris"
    protected $table = 'kategori';
 
    // Kolom yang boleh diisi secara massal (create / update)
    protected $fillable = ['nama_kategori'];
 
    // Satu kategori memiliki banyak buku
    public function buku()
    {
        return $this->hasMany(Buku::class);
    }
}
