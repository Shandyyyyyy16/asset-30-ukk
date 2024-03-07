<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function pinjem(Request $request, $id)
    {
        $model = Buku::findOrFail($id);
        return view('peminjam.peminjaman_create', compact('model'));
    }
    public function pinjam(Request $request, $id)
    {
        $request->validate([
            'return_date' => 'required|date|after_or_equal:today'
        ]);

        $buku = Buku::findOrFail($id);
        if ($buku->stok < 1) {
            return redirect()->route('pustaka.index');
        }

        $pinjam = new Peminjaman();
        $pinjam->user_id = auth()->id(); // ID pengguna yang melakukan peminjaman
        $pinjam->buku_id = $id;
        $pinjam->return_date = $request->return_date;
        $pinjam->status = 'DIpinjam';
        $pinjam->save();

        $buku->stok--;
        $buku->save();
        return redirect()->route('pustaka.index');
    }
}
