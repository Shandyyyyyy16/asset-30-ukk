<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamPetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */ 
    public function index()
    {
        $data = Peminjaman::where('status', 'pinjam')->get();
        return view('petugas.peminjaman.table', compact('data'));
    }

    public function peminjamIndex()
    {
        $data = Peminjaman::get();
        return view('petugas.data-peminjaman', compact('data'));
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
