<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      

        $buku = Buku::latest()->paginate(5);
        return view('buku.buku', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $data = [
            'buku' => new Buku(),
            'kategori' => Kategori::pluck('nm_kategori', 'id')
        ];
        return view('buku.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $buku = $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'thn_terbit' => 'required',
            'gambar' => 'required|image:jpeg,jpg,png',
            'deskripsi' => 'required',
            'id_kategori' => 'required',
        ]);

        $image = $request ->file('gambar');
        $namaGambar= $request -> judul . '.' . $image ->extension();
        $image-> move(public_path('img/buku'), $namaGambar);
        $buku['gambar'] =$namaGambar;

        buku::create($buku);
        return redirect()->route('buku.index');


      
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('buku.edit', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'nm_buku' => 'required',
            'id_kategori' => 'required',
            'deskripsi' => 'required',
            'penerbit' => 'required',
            'penulis' => 'required',
            'thn_terbit' => 'required',
            'gambar' => 'image:jpeg,jpg,png',
        ]);

        $buku = Buku::find($id);
        $buku->update($request->all());
        return redirect()->route('buku.index')->with('success', 'Buku berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        
        
        // Delete the image file from storage
        Storage::delete('public/img/buku/'.$buku->gambar);
        
        // Delete the book record from the database
        $buku->delete();
        
        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus.');
    }
}