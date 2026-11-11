<?php
 
namespace App\Http\Controllers;
 
use App\Models\Buku;
 
class HomeController extends Controller
{
    public function beranda()
    {
        return view('user.home');
    }
 
    public function katalogBuku()
    {
        // Buku terbaru tampil paling atas
        $buku = Buku::with('kategori')->latest()->get();
 
        return view('user.buku.katalog', compact('buku'));
    }
}

