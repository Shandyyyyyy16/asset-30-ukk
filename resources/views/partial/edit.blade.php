@extends('layouts.app')
@section('konten')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Form</title>
    </head>

    <body>

        <div class="container mt-5">
            <h2>Edit form</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('user.update', $user->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nomor">Nama Lengkap:</label>
                    <input type="text" class="form-control" id="nomor" placeholder="1" name="name"
                        value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label for="nama">Email:</label>
                    <input type="text" class="form-control" id="nama" name="email" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $user->alamat }}">
                </div>
                <div class="form-group">
                    <label for="alamat">Telepon:</label>
                    <input type="text" class="form-control" id="telepon" name="telepon" value="{{ $user->telepon }}">
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <div class="form-group">
                    <label for="role">Role:</label>
                    <select class="form-select" aria-label="Default select example" name="role">
                        <option selected>{{ $user->role }}</option>
                        @if ($user->role == 'admin')
                            <option value="petugas">petugas</option>
                            <option value="peminjam">peminjam</option>
                        @elseif ($user->role == 'petugas')
                            <option value="admin">admin</option>
                            <option value="peminjam">peminjam</option>
                        @elseif ($user->role == 'peminjam')
                            <option value="admin">admin</option>
                            <option value="petugas">petugas</option>
                        @endif
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>

    </body>

    </html>
@endsection
