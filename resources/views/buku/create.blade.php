@extends('layouts.app')
@section('konten')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Form</title>

    </head>

    <body>
        <div class="container mt-5">
            <h2>Form Tambah Buku</h2>
            <form action="{{ route('buku.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="judul">judul buku</label>
                    <input type="text" class="form-control" id="nomor" name="judul">
                    <span class="text-danger">{{ $errors->first('judul') }}</span>
                </div>
                <div class="form-group">
                    <label for="judul">penulis</label>
                    <input type="text" class="form-control" id="nomor" name="penulis">
                    <span class="text-danger">{{ $errors->first('penulis') }}</span>
                </div>
                <div class="form-group">
                    <label for="judul">penerbit</label>
                    <input type="text" class="form-control" id="nomor" name="penerbit">
                    <span class="text-danger">{{ $errors->first('penerbit') }}</span>
                </div>
                <div class="form-group">
                    <label for="judul">thn terbit</label>
                    <input type="date" class="form-control" id="nomor" name="thn_terbit">
                    <span class="text-danger">{{ $errors->first('thn_terbit') }}</span>
                </div>
                <div class="form-group">
                    <label for="judul">DESKRIPSI</label>
                    <input type="text" class="form-control" id="nomor" name="deskripsi">
                    <span class="text-danger">{{ $errors->first('deskripsi') }}</span>
                </div>
                <div class="form-group">
                    <label for="penulis">gambar:</label>
                    <input type="file" class="form-control" id="nama" name="gambar">
                    <span class="text-danger">{{ $errors->first('gambar') }}</span>
                </div>
                <div class="form-group">
                    <label for="penulis">stok:</label>
                    <input type="number" class="form-control" id="stok" name="stok">
                    <span class="text-danger">{{ $errors->first('stok') }}</span>
                </div>
                <div class="form-group">
                    <label for="ulasan">kategori:</label>

                    {!! Form::select('id_kategori', $kategori, null, ['class' => 'form-control', 'placeholder' => 'Pilih Kategori']) !!}
                </div>
                <a href=""><button type="submit" class="btn btn-primary">tambah</button></a>

            </form>

        </div>


    </body>

    </html>
@endsection