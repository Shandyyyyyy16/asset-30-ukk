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
            <form>
                <div class="form-group">
                    <label for="judul">Kategori</label>
                    <input type="text" class="form-control" id="nomor">
                </div>
                <div class="form-group">
                    <label for="penulis">Judul:</label>
                    <input type="text" class="form-control" id="nama">
                </div>
                <div class="form-group">
                    <label for="ulasan">Penulis:</label>
                    <input type="text" class="form-control id">
                </div>
                <a href=""><button type="submit" class="btn btn-primary">tambah</button></a>

            </form>
        </div>


    </body>

    </html>
@endsection
