<?php
 
namespace App\Http\Controllers\Admin;
 
use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Kategori;
 
class DashboardController extends Controller
{
    public function index()
    {
        $totalBuku     = Buku::count();
        $bukuTersedia  = Buku::where('stok', '>', 0)->count();
        $bukuHabis     = Buku::where('stok', 0)->count();
        $totalKategori = Kategori::count();
 
        return view('admin.dashboard', compact(
            'totalBuku', 'bukuTersedia', 'bukuHabis', 'totalKategori'
        ));
    }
}

