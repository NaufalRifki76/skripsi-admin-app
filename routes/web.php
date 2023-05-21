<?php

use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Features\CompetitionController;
use App\Http\Controllers\Features\MitraController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Auth
Route::get('login.index', [LoginController::class, 'index'])->name('login.index');
Route::post('login.store', [LoginController::class, 'login'])->name('login.store');
Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

// Turnamen
Route::get('tournament.sekolah', [CompetitionController::class, 'sekolah'])->name('tournament.sekolah');
Route::get('add.sekolah', [CompetitionController::class, 'addsekolah'])->name('add.tournament.sekolah');
Route::get('tournament.umur', [CompetitionController::class, 'umur'])->name('tournament.umur');
Route::get('add.umur', [CompetitionController::class, 'addumur'])->name('add.tournament.umur');
Route::post('tournament.store', [CompetitionController::class, 'store'])->name('tournament.store');
Route::get('edit.sekolah', [CompetitionController::class, 'editsekolah'])->name('edit.tournament.sekolah');
Route::get('edit.umur', [CompetitionController::class, 'editumur'])->name('edit.tournament.umur');

// Mitra
Route::get('index-sewa', [MitraController::class, 'index'])->name('index-sewa');
Route::get('acc-mitra/{id}', [MitraController::class, 'accmitra'])->name('acc-mitra');
Route::get('deny-mitra/{id}', [MitraController::class, 'denymitra'])->name('deny-mitra');
Route::get('detail-show/{id}', [MitraController::class, 'detail'])->name('detail-show');

/*---------------- BUAT TESTING DI BAWAH --------------------*/
// Route::get('/', function () {
//     return view('layout.index');
// });

Route::get('/login', function () {
    return view('auth.login');
});

// lapangan
Route::get('/lapangan', function () {
    return view('lapangan.index');
})->name('lapangan.index');

Route::get('/jam-operasional-lapangan', function () {
    return view('lapangan.jam-operasional');
})->name('lapangan.jam-operasional');

Route::get('/edit-lapangan', function () {
    return view('lapangan.edit');
})->name('lapangan.edit');


Route::get('/kompetisi-sekolah', function () {
    return view('pengembangan-bakat.kompetisi-sekolah');
})->name('pengembangan-bakat.kompetisi-sekolah');


// sewa perlengkapan
Route::get('/sewa-perlengkapan', function () {
    return view('sewa-perlengkapan.index');
})->name('sewa-perlengkapan.index');

Route::get('/tambah-sewa-perlengkapan', function () {
    return view('sewa-perlengkapan.tambah');
})->name('sewa-perlengkapan.tambah');

Route::get('/edit-sewa-perlengkapan', function () {
    return view('sewa-perlengkapan.edit');
})->name('sewa-perlengkapan.edit');

// Data User
Route::get('/data-user', function () {
    return view('data-user.index');
})->name('data-user.index');

Route::get('/edit-user', function () {
    return view('data-user.edit');
})->name('data-user.edit');

// Pengembalian Dana
Route::get('/pengembalian-dana', function () {
    return view('pengembalian-dana.index');
})->name('pengembalian-dana.index');

Route::get('/detail-pengembalian-dana', function () {
    return view('pengembalian-dana.detail');
})->name('pengembalian-dana.detail');


// Data pemesanan
Route::get('/data-pemesanan', function () {
    return view('data-pemesanan.index');
})->name('data-pemesanan.index');

Route::get('/detail-data-pemesanan', function () {
    return view('data-pemesanan.detail');
})->name('data-pemesanan.detail');

// Persetujuan Pendaftaran Mitra
// Route::get('/persetujuan-mitra', function () {
//     return view('persetujuan-mitra.index');
// })->name('persetujuan-mitra.index');

// Route::get('/detail-persetujuan-mitra', function () {
//     return view('persetujuan-mitra.detail');
// })->name('persetujuan-mitra.detail');