<?php

namespace App\Http\Controllers;

use App\Models\Buku as Model;

use Illuminate\Http\Request;

class PeminjamBukuController extends Controller
{
    public function index()
    {
        $buku = Model::latest()->paginate(10);
        return view('peminjam.buku', compact('buku'));
    }

    public function show($id)
    {
        $model = Model::findOrFail($id);
        return view('peminjam.buku_show', [
            'routePrefix' => 'buku',
            'title' => 'Data Buku',
        ])->with('model', $model);
    }
}
