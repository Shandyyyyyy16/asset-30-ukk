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
            'stok' => 'required',
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
    public function show(Buku $buku)
    {

        $post = Buku::findOrFail($buku);
        return view('buku.detail', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        
        return view('buku.edit', [
            'buku' => $buku
            , 'kategori' => Kategori::pluck('nm_kategori', 'id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        $this->validate($request, [
            'judul' => 'required',
            'id_kategori' => 'required',
            'deskripsi' => 'required',
            'penerbit' => 'required',
            'penulis' => 'required',
            'thn_terbit' => 'required',
            'gambar' => 'image:jpeg,jpg,png',
            'stok' => 'required',
        ]);


      
      $buku->update([
         'judul' => $request->judul,
            'id_kategori' => $request->id_kategori,
            'deskripsi' =>  $request->deskripsi,
            'penerbit' =>   $request->penerbit,
            'penulis' =>    $request->penulis,
            'thn_terbit' =>     $request->thn_terbit,
            'stok' =>     $request->stok,
      ]);

      if($request->hasFile('gambar')){

        $gambar = $request->file('gambar');
        // $gambar ->storeAs('public/img/buku/', $gambar);
        $namaGambar= $request -> judul . '.' . $gambar ->extension();
        $gambar-> move(public_path('img/buku'), $namaGambar);

        Storage::delete('public/img/buku/'.$buku->gambar);

        $buku->update([
            'gambar' => $namaGambar
        ]);
      }

      
        return redirect()->route('buku.index')->with('success', 'Data Berhasil diubah.     ');
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

    public function daftarBuku()
    {
        $buku = Buku::latest()->paginate(10);
        return view('peminjam.buku', compact('buku'));
    }
}