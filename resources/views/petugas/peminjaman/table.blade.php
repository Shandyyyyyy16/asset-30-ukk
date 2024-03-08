@extends('layouts.app')
@section('konten')
    <div class="container ">
        <table class="table table-dark" id="table1">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Cover</th>
                    <th>Judul Buku</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Kembali</th>
                    <th>status</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="{{ asset('img/buku/' . $item->buku->gambar) }}" alt="" width="230"
                                height="200"></td>
                        <td>{{ $item->buku->judul }}</td>
                        <td>{{ $item->tgl_pinjam }}</td>
                        <td>{{ $item->tgl_kembali }}</td>
                        <td>{{ $item->status }}</td>
                        <td>
                            <form action="{{ route('buku.kembali', $item->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">Kembalikan</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
