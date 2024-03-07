@extends('layouts.app')
@section('konten')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Form</title>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </head>

    <body>
        <div class="container mt-5">
            <h2>Form Tambah data petugas</h2>
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="penulis">Nama Lengkap:</label>
                    <input type="text" name="name" class="form-control" id="nama">
                </div>
                <div class="form-group">
                    <label for="ulasan">Alamat:</label>
                    <textarea class="form-control" name="alamat" id="alamat" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="rating">Password:</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="form-group">
                    <label for="rating">Telepon</label>
                    <input type="text" class="form-control" name="telepon" id="password">
                </div>
                <div class="form-group">
                    <label for="rating">Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <div class="form-group">
                    <select class="form-select mt-3" aria-label="Default select example" name="role">
                        <option selected>Role</option>
                        <option value="admin">admin</option>
                        <option value="petugas">petugas</option>
                        <option value="peminjam">peminjam</option>
                    </select>
                </div>
                <a href=""><button type="submit" class="btn btn-primary">tambah</button></a>

            </form>
        </div>


    </body>

    </html>
@endsection
