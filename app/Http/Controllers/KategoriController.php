<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\View\View;

class KategoriController extends Controller
{
    // public function index() {
    //     return view('kategori.kategori');
    // }

    public function index() {

        $kategori = Kategori::get();
    
        $posts = Kategori::latest()->paginate(5);
        return view('kategori.kategori', compact('posts'));
    }
   
    public function Store(Request $request){
        $kategori = new Kategori();
        $kategori->nm_kategori = $request->nm_kategori;
        $kategori->save();
    }
}
