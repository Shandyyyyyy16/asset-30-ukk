<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class AdminPeminjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Peminjaman::all();
        return view('admin.peminjam', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $model = Peminjaman::findOrFail($id);
        return view('admin.peminjam_edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'tgl_pinjam' => 'required|date|after_or_equal:today',
            'status' => 'required',
        ]);

        $pinjam = Peminjaman::findOrFail($id);
        $pinjam->status = $request->status;
        $pinjam->tgl_kembali = date('Y-m-d');
        $pinjam->buku->stok++;
        $pinjam->save();
        return redirect()->route('Peminjaman.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
