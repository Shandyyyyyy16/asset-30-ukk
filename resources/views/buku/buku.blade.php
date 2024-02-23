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
                            <a href="{{route('buku.create')}}" type="button" class="btn btn-secondary mb-4">Tambah Buku </a>
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
                                    <th>tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($buku as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->kategori->nm_kategori}}</td>
                                    <td>{{$item->judul}}</td>
                                    <td>{{$item->penulis}}</td>
                                    <td>{{$item->penerbit}}</td>
                                    <td>{{$item->thn_terbit}}</td>
                                    <td><img src="{{ asset('img/buku/'.$item->gambar) }}" alt="" width="250" height="250"></td>
                                   
                                    <td>
                                        <div class="col-4">
                                            
                                        </div>
                                        <a href="/buku.detail"> <button type="button"
                                                class="btn btn-info">detail</button></a>
                                                <a href="{{ route('buku.edit', $item->id) }}" class="btn btn-secondary">Edit</a>

                                                <form onsubmit="return confirm('Apakah Anda Yakin ?')" action="{{ route('buku.destroy', $item->id) }}" method="POST">
                                                            @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-primary">Hapus</button>
                                                   
                
                                            </form>


                                        
                                    </td>

                                </tr>
                                @empty
                                    
                                @endforelse
                                
                            </tbody>
                        </table>
                    </div>
                </div>

            </section>
        </div>
    @endsection
