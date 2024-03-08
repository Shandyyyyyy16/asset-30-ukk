<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class BerandaPeminjamController extends Controller
{
    public function index()
    {
        $buku = Buku::count();
        $kategori = Kategori::count();
        $dipinjam = Peminjaman::where('status', 'pinjam')->count();
        return view('peminjam.Beranda_index', compact('buku', 'kategori', 'dipinjam'));

       

    }
}
