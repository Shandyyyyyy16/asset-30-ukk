@extends('layouts.app')

@section('konten')
    <div class="page-heading">
        <h3>Dashboard Peminjam</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-9">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-pody px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon purple mb-2">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Buku</h6>
                                        <h6 class="font-extrabold mb-0">{{ $buku }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon blue mb-2">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Kategori Buku</h6>
                                        <h6 class="font-extrabold mb-0">{{ $kategori }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card" style="width: 200px; height:150px;">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon green mb-2">
                                            <i class="iconly-boldAdd-User"></i>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <h6 class="text-muted font-semibold">Buku yang dipinjam</h6>
                                        <h6 class="font-extrabold mb-0">{{ $dipinjam }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <style>
                        .kotak {
                            width: 200px;
                            height: 100px;
                            background-color: rgb(133, 143, 162);
                            border-radius: 20px;
                            position: fixed;
                            top: 10px;
                            right: 10px;
                        }

                        .kotak p {
                            color: white;
                            margin-top: 10px;
                        }
                    </style>




                    <div class="kotak">
                        <p>Nama: {{ Auth::user()->name }}</p>
                        <p>Role: {{ Auth::user()->role }}</p>
                    </div>
                </div>


            </div>

        </section>
    </div>
@endsection
