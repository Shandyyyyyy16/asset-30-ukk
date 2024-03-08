<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'tgl_pinjam' => 'required|date|after_or_equal:today'
        ]);

        $buku = Buku::findOrFail($id);
        if ($buku->stok < 1) {
            return redirect()->route('pustaka.index');
        }

        $pinjam = new Peminjaman();
        $pinjam->user_id = auth()->id(); // ID pengguna yang melakukan peminjaman
        $pinjam->buku_id = $id;
        $pinjam->tgl_pinjam = $request->tgl_pinjam;
        $pinjam->status = 'pinjam';
        $pinjam->save();

        $buku->stok--;
        $buku->save();
        return redirect()->route('pustaka.index');
    }

    public function kembalikan($id)
    {
        $pinjam = Peminjaman::findOrFail($id);
        $pinjam->status = 'kembali';
        $pinjam->tgl_kembali = date('Y-m-d');
        $pinjam->buku->stok++;
        $pinjam->save();
        return redirect()->back();
    }

    public function petugasKembali($id)
    {
        $pinjam = Peminjaman::findOrFail($id);
        $pinjam->status = 'kembali';
        $pinjam->tgl_kembali = date('Y-m-d');
        $pinjam->buku->stok++;
        $pinjam->save();
        return redirect()->back();
    }

    public function dataPeminjaman()
    {
        $userId = Auth::id();
        $data = Peminjaman::with('buku', 'user')->where('user_id', $userId)->get();
        return view('peminjaman.table', compact('data'));
    }
}
