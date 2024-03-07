<?php

use App\Models\Kategori;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DaftarBukuController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\BerandaAdminController;
use App\Http\Controllers\PeminjamBukuController;
use App\Http\Controllers\BerandaPetugasController;
use App\Http\Controllers\BerandaPeminjamController;

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

// Route::Post('/kategori.kategori','KategoriController@kategori.kategori');


// Route::get('/', [LoginController::class, 'login'])->name('login');
// Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

// Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
// Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');




Route::get('/', function () {
    return view('index');
});


// Route::get('/kategori.kategori', function () {
//     return view('kategori.kategori');
// });

Auth::routes();

Route::get('logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'auth.admin'])->group(function () {
    Route::get('beranda', [BerandaAdminController::class, 'index'])->name('admin.beranda');
    Route::resource('user', UserController::class);
    Route::resource('buku', BukuController::class);
    Route::resource('kategori', KategoriController::class);
    Route::get('daftarBuku', [BukuController::class, 'daftarBuku'])->name('daftarBuku');
});
Route::prefix('petugas')->middleware(['auth', 'auth.petugas'])->group(function () {
    Route::get('beranda', [BerandaPetugasController::class, 'index'])->name('petugas.beranda');
});
Route::prefix('peminjam')->middleware(['auth', 'auth.peminjam'])->group(function () {
    Route::get('beranda', [BerandaPeminjamController::class, 'index'])->name('peminjam.beranda');
    Route::resource('pustaka', DaftarBukuController::class);
    Route::get('/buku/{id}/pinjem', [PeminjamanController::class, 'pinjem'])->name('buku.pinjam.create');
    Route::post('/pustaka/{id}/pinjam', [PeminjamanController::class, 'pinjam'])->name('pustaka.pinjam');
   
});
