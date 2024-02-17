<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/partial.table', function () {
    return view('partial.table');
});

Route::get('/partial.edit', function () {
    return view('partial.edit');
});

Route::get('/partial.create', function () {
    return view('partial.create');
});

Route::get('/kategori.kategori', function () {
    return view('kategori.kategori');
});

Route::get('/kategori.create', function () {
    return view('kategori.create');
});

Route::get('/buku.buku', function () {
    return view('buku.buku');
});

Route::get('/koleksi.koleksi', function () {
    return view('koleksi.koleksi');
});

Route::get('/buku.detail', function () {
    return view('buku.detail');
});

Route::get('/buku.ulasan', function () {
    return view('buku.ulasan');
});
Route::get('/peminjaman.table', function () {
    return view('peminjaman.table');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/buku.create', function () {
    return view('buku.create');
});
Route::get('/user.dashboard', function () {
    return view('user.dashboard');
});

Route::get('/kategori.edit', function () {
    return view('kategori.edit');
});
Route::get('/user.buku', function () {
    return view('user.buku');
});
