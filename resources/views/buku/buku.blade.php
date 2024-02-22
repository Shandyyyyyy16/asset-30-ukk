    @extends('layouts.app')
    @section('konten')
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Buku</h3>



                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                            </ol>
                            <a href="/buku.create" type="button" class="btn btn-secondary mb-4">Tambah Buku </a>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <a href="/kategori.create" type="button" class="btn btn-secondary mb-4">Cetak Laporan </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-dark" id="table1">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th> kategori</th>
                                    <th>judul buku</th>
                                    <th>penulis</th>
                                    <th>penulis</th>
                                    <th>tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>novel</td>
                                    <td>hujan</td>
                                    <td>Tere Liye</td>
                                    <td>

                                        <a href="/buku.detail"> <button type="button"
                                                class="btn btn-info">detail</button></a>

                                        <a href="/"> <button type="button"
                                                class="btn btn-success">Peminjam</button></a>



                                        <button type="button" class="btn btn-warning">Tambah ke koleksi</button>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </section>
        </div>
    @endsection
