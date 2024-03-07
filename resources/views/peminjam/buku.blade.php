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
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <a href="{{ route('buku.create') }}" type="button" class="btn btn-secondary mb-4">Tambah Buku </a>
            <div class="card">

                <div class="card-header">
                    <a href="#" type="button" class="btn btn-secondary mb-4">Cetak Laporan </a>
                </div>
                <div class="card-body">
                    <table class="table table-dark border-dark" id="table1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th> kategori</th>
                                <th>judul buku</th>
                                <th>penulis</th>
                                <th>penerbit</th>
                                <th>tahun_terbit</th>
                                <th>gambar</th>
                                <th>stok</th>
                                <th>tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($buku as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->kategori->nm_kategori }}</td>
                                    <td>{{ $item->judul }}</td>
                                    <td>{{ $item->penulis }}</td>
                                    <td>{{ $item->penerbit }}</td>
                                    <td>{{ $item->thn_terbit }}</td>
                                    <td>{{ $item->stok }}</td>
                                    <td><img src="{{ asset('img/buku/' . $item->gambar) }}" alt="" width="230"
                                            height="200"></td>
                                    <td>
                                        @if (Auth::user()->role == 'admin' || Auth::user()->role == 'petugas')
                                            <a href="{{ route('buku.edit', $item->id) }}" class="btn btn-secondary">Edit</a>
                                            <a href="{{ route('buku.edit', $item->id) }}"
                                                class="btn btn-secondary mt-3">detail</a>
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?')"
                                                action="{{ route('buku.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-primary mt-3">Hapus</button>
                                            </form>
                                        @else
                                            <a href="{{ route('buku.edit', $item->id) }}"
                                                class="btn btn-secondary">minjem</a>
                                            <a href="{{ route('buku.edit', $item->id) }}" class="btn btn-secondary">Koleksi
                                            </a>
                                            <a href="{{ route('buku.edit', $item->id) }}"
                                                class="btn btn-secondary">detail</a>
                                        @endif
                                    </td>

                                </tr>
                            @empty
                            @endforelse

                        </tbody>
                    </table>
                    {{ $buku->links() }}
                </div>
            </div>

        </section>
    </div>
@endsection
