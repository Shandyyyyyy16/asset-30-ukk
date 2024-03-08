@extends('layouts.app')
@section('konten')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Peminjaman</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </head>

    <body>
        <div class="container">
            <h2 class="mt-5">Edit Peminjaman</h2>
            <form action="{{ route('Peminjaman.update', $model->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="kategori">Tanggal Pengembalian</label>
                    <input type="date" class="form-control" id="kategori" name="return_date"
                        value="{{ $model->tgl_pinjam }}">
                </div>
                <div class="form-group">
                    <label for="status">Status Peminjaman</label>
                    <select class="form-select" aria-label="Default select example" name="status">
                        <option selected>Status Peminjaman</option>
                        <option value="pinjam" {{ $model->status == 'pinjam' ? 'selected' : '' }}>dipinjam</option>
                        <option value="kembali" {{ $model->status == 'kembali' ? 'selected' : '' }}>dikembalikan</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">edit</button>
            </form>
        </div>
    </body>

    </html>
@endsection
