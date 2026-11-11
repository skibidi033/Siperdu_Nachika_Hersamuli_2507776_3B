<?php
 
namespace App\Http\Controllers\Admin;
 
use App\Http\Controllers\Controller;
use App\Models\Buku;
 
class BukuController extends Controller
{
    public function index()
    {
        // Ambil semua buku beserta kategorinya, urut berdasarkan judul
        $buku = Buku::with('kategori')->orderBy('judul')->get();
 
        return view('admin.data-buku', compact('buku'));
    }
}
