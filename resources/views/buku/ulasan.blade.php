@extends('layouts.app')
@section('konten')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Ulasan Buku</title>
        <!-- Memasukkan file CSS Bootstrap -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>

        <div class="container mt-5">
            <h2>Form Ulasan Buku</h2>
            <form>
                <div class="form-group">
                    <label for="judul">Judul Buku:</label>
                    <input type="text" class="form-control" id="judul" placeholder="Hujan" readonly>
                </div>

                <div class="form-group">
                    <label for="penulis">Penulis:</label>
                    <input type="text" class="form-control" id="penulis" placeholder="Tere Liye" readonly>
                </div>

               

                <div class="form-group">
                    <label for="ulasan">Ulasan:</label>
                    <textarea class="form-control" id="ulasan" rows="5" placeholder="Tulis ulasan Anda"></textarea>
                </div>
                <div class="form-group">
                    <label for="rating">Rating:</label>
                    <select class="form-control" id="rating">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <!-- Memasukkan file JavaScript Bootstrap (opsional, hanya dibutuhkan jika Anda menggunakan komponen yang memerlukan JavaScript) -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>

    </html>
@endsection
