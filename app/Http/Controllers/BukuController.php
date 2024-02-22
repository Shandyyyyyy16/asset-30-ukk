<?php

namespace App\Http\Controllers;

use App\Models\Buku;

use Illuminate\Http\Request;
use Illuminate\View\View;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = Buku::get();

        $posts = Buku::latest()->paginate(5);        
        return view('buku.buku', compact('posts'));                                                                                                
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_buku' => 'required',
            'id_kategori' => 'required',
            'nm_buku' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'thn_buku' => 'required',
        ]);

        $model = Buku::create([
            'id_buku' => $request->id_buku,
            'id_kategori' => $request->id_kategori,
            'nm_buku' => $request->nm_buku,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'thn_buku' => $request->thn_buku,
        ]);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
