<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class KategoriController extends Controller
{
    // public function index() {
    //     return view('kategori.kategori');
    // }

    

    public function index()
    {

        $kategori = Kategori::get();

        $posts = Kategori::latest()->paginate(5);
        return view('kategori.kategori', compact('posts'));
    }


    public function create(): View
    {

        return view('kategori.create');
    }

    public function Store(Request $request)
    {
        $this->validate($request, [
            'nm_kategori' => 'required',
        ]);

        $model = Kategori::create([
            'nm_kategori' => $request->nm_kategori,
        ]);

        return redirect()->route('kategori.index', $model)->with('success', 'Data Berhasiltambah.'); {
        }


     
    }
    public function destroy(Kategori $kategori)
    {
        $kategori->delete();

        return redirect()->route('kategori.index')->with('success', 'Data Berhasil dihapus.');
    }

   public function edit(Kategori $kategori): View
   {
       return view('kategori.edit', compact('kategori'));
   }


   public function update(Request $request, Kategori $kategori)
   {
       $this->validate($request, [
           'nm_kategori' => 'required',
       ]);
       $kategori->update($request->all());
       return redirect()->route('kategori.index')->with('success', 'Data Berhasiltambah.');
   }


}