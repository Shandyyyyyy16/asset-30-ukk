@extends('layouts.app')
@section('konten')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tambah Kategori</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>

        <div class="container">
            <h2 class="mt-5">Tambah Kategori</h2>

            <form action="/submit_kategori" method="post">
                <div class="form-group">
                    <label for="kategori">Kategori:</label>
                    <input type="text" class="form-control" id="kategori" name="kategori">
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>

    </body>

    </html>
@endsection
