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
            <h2>Form edit</h2>
            {{-- <form action="{{ route('buku.update') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="judul">judul buku</label>
                    <input type="text" class="form-control" value="{{ $buku->judul }}" id="nomor" name="judul">
                  
                </div>
                <div class="form-group">
                    <label for="judul">penulis</label>
                    <input type="text" class="form-control" id="nomor" value="{{ $buku->penulis }}" name="penulis">
                   
                </div>
                <div class="form-group">
                    <label for="judul">penerbit</label>
                    <input type="text" class="form-control" id="nomor" value="{{ $buku->penerbit }}" name="penerbit">
                  
                </div>
                <div class="form-group">
                    <label for="judul">thn terbit</label>
                    <input type="date" class="form-control" id="nomor" value="{{ $buku->thn_terbit }}" name="thn_terbit">
                    
                </div>
                <div class="form-group">
                    <label for="judul">DESKRIPSI</label>
                    <input type="text" class="form-control" id="nomor" value="{{ $buku->deskripsi }}" name="deskripsi">
                    
                </div>
                <div class="form-group">
                    <label for="penulis">gambar:</label>
                    <input type="file" class="form-control" id="nama" value="{{ $buku->gambar }}" name="gambar">
                    
                </div>
                <div class="form-group">
                    <label for="ulasan">kategori:</label>

                    {!! Form::select('id_kategori', $kategori, null, ['class' => 'form-control', 'placeholder' => 'Pilih Kategori']) !!}
                </div>
                <a href=""><button type="submit" class="btn btn-primary">tambah</button></a>

            </form> --}}

            <!-- Begin Edit Form -->
            <form action="{{ route('buku.update', $buku->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="judul">Judul Buku:</label>
                    <input type="text" class="form-control" id="judul" value="{{ $buku->judul }}" name="judul">
                </div>
                <div class="form-group">
                    <label for="penulis">Penulis:</label>
                    <input type="text" class="form-control" id="penulis" value="{{ $buku->penulis }}" name="penulis">
                </div>
                <div class="form-group">
                    <label for="penerbit">Penerbit:</label>
                    <input type="text" class="form-control" id="penerbit" value="{{ $buku->penerbit }}" name="penerbit">
                </div>
                <div class="form-group">
                    <label for="thn_terbit">Tahun Terbit:</label>
                    <input type="date" class="form-control" id="thn_terbit" value="{{ $buku->thn_terbit }}" name="thn_terbit">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi:</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi">{{ $buku->deskripsi }}</textarea>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar:</label>
                    <input type="file" class="form-control" id="gambar" value="{{ $buku->gambar }}" name="gambar">
                    
                </div>
                <div class="form-group">
                    <label for="Stok">Stok:</label>
                    <input type="file" class="form-control" id="stok" value="{{ $buku->stok }}" name="stok">
                    
                </div>
                <div class="form-group">
                    <label for="id_kategori">Kategori:</label>
                   
                      
                            {{-- <option value="{{ $category->id }}" {{ $buku->id_kategori == $category->id ? 'selected' : '' }}>{{ $category->nama_kategori }}</option> --}}
                  
                        
                     
                      {!! Form::select('id_kategori', $kategori, $buku->id_kategori, ['class' => 'form-control', 'placeholder' => 'Pilih Kategori']) !!}
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
            <!-- End Edit Form -->

        </div>


    </body>

    </html>
@endsection