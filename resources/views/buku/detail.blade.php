@extends('layouts.app')
@section('konten')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detail Buku</title>
        <!-- Memasukkan file CSS Bootstrap -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>

        <div class="container mt-5">
            <div class="card" style="width: 300px;">
                <div class="card-body">
                    <h5 class="card-title">Hujan</h5>
                    <p class="card-text"><strong>Kategori:</strong> Novel</p>
                    <p class="card-text"><strong>Penerbit:</strong> Gramedia</p>
                    <p class="card-text"><strong>Penulis:</strong> Tere Liye</p>
                    <p class="card-text"><strong>Tahun Terbit:</strong> 2024</p>
                    <p class="card-text"><strong>Sinopsis:</strong>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Error fugiat nesciunt temporibus, quia sapiente voluptas accusamus odit. Odit quidem minus, placeat
                        eos reprehenderit nobis debitis, id provident maxime ad facere.</p>
                    <div class="col">
                        <a href="/buku.ulasan" type="button" class="btn-sm btn btn-primary "
                            style="width: 80px;">Ulasan</a>
                        <a href="/buku.buku" type="button" class="btn-sm btn btn-danger " style="width: 80px;">Kembali</a>
                    </div>

                </div>
            </div>
        </div>

        <table class="table table-dark" id="table1">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Kategori</th>
                    <th>ulasan</th>
                    <th>rating</th>
                    <th>pemberi ulasan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Novel</td>
                    <td>Novelnya sedih bgt aduh</td>
                    <td>9</td>
                    <td>
                        Yaksha
                    </td>

                </tr>
            </tbody>
        </table>

        <!-- Memasukkan file JavaScript Bootstrap (opsional, hanya dibutuhkan jika Anda menggunakan komponen yang memerlukan JavaScript) -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>

    </html>
@endsection
