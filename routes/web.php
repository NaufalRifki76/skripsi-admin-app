<?php

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

Route::get('/', function () {
    return view('layout.index');
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
