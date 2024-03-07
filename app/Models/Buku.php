<?php

namespace App\Models;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    
    protected $fillable = [
        'id_kategori',
        'judul',
        'deskripsi',
        'penulis',
        'penerbit',
        'thn_terbit',
        'gambar',
        'stok',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'id_buku');
    }
}