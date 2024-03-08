@extends('layouts.app')
@section('konten')
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <strong>nama:</strong> {{ $model->name }}
                </div>
                <div class="mb-3">
                    <strong>email:</strong> {{ $model->email }}
                </div>
                <div class="mb-3">
                    <strong>telepon:</strong> {{ $model->telepon }}
                </div>
                <div class="mb-3">
                    <strong>alamat:</strong> {{ $buku->alamat }}
                </div>



            </div>
        </div>
    </div>
@endsection
