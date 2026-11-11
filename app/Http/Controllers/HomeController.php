<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function beranda()
    {
        return view('user.home');
    }

    public function katalogBuku()
    {
        return view('user.buku.katalog');
    }

}
