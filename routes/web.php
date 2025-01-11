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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages.Beranda');
});

Route::get('/akun-perawat', function () {
    return view('pages.AkunPerawat');
});

Route::get('/data-latih', function () {
    return view('pages.DataLatih');
});

Route::get('/data-soal', function () {
    return view('pages.DataSoal');
});

Route::get('/uji-akurasi', function () {
    return view('pages.UjiAkurasi');
});

Route::get('/hasil-klasifikasi', function () {
    return view('pages.HasilKlasifikasi');
});
