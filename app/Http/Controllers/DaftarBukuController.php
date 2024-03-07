<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class DaftarBukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return view('buku.buku', compact('buku'));
    }
}
