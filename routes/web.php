<?php

use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Features\CompetitionController;
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
Route::get('dashboard.index', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

// Turnamen
Route::get('tournament.index', [CompetitionController::class, 'index'])->name('tournament.index');

/*---------------- BUAT TESTING DI BAWAH --------------------*/
Route::get('/', function () {
    return view('layout.index');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/lapangan', function () {
    return view('lapangan.index');
})->name('lapangan.index');

Route::get('/sewa-perlengkapan', function () {
    return view('sewa-perlengkapan.index');
})->name('sewa-perlengkapan.index');

Route::get('/kompetisi-sekolah', function () {
    return view('pengembangan-bakat.kompetisi-sekolah');
})->name('pengembangan-bakat.kompetisi-sekolah');
