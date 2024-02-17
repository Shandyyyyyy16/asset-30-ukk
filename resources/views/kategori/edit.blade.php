@extends('layouts.app')
@section('konten')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Kategori</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>

        <div class="container">
            <h2 class="mt-5">Edit Kategori</h2>

            <form action="/submit_edit_kategori" method="post">
                <div class="form-group">
                    <label for="nomor">Nomor:</label>
                    <input type="text" class="form-control" id="nomor" name="nomor" placeholder="1" readonly>
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori:</label>
                    <input type="text" class="form-control" id="kategori" name="kategori">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>

    </body>

    </html>
@endsection
