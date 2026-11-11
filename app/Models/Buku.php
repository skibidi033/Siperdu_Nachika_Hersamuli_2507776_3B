<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Buku extends Model
{
    use HasFactory;   // agar model dapat memakai BukuFactory
 
    protected $table = 'buku';
 
    protected $fillable = [
        'kategori_id',
        'judul',
        'penulis',
        'penerbit',
        'tahun_terbit',
        'stok',
        'cover',
    ];
 
    // Setiap buku dimiliki oleh satu kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
