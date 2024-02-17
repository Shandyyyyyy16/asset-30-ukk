@extends('layouts.app')
@section('konten')
    <div class="container ">
        <table class="table table-dark" id="table1">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Judul Buku</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal dikembalikan</th>
                    <th>status</th>
                    <th>tindakan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Hujan</td>
                    <td>2024-02-14</td>
                    <td>2024-02-18</td>
                    <td>belum dikembalikan</td>
                    <td>
                        <a href="#"> <button type="button" class="btn btn-primary">kembalikan</button></a>

                    </td>

                </tr>
            </tbody>
        </table>
    </div>
@endsection
