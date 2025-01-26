<?php

use App\Http\Controllers\PredictController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::get('/', function () {
    return view('pages.Beranda');
});

Route::get('/dataset', function () {
    return view('pages.Dataset');
});

Route::get('/skrining-penyakit', function () {
    return view('pages.SkriningPenyakitDataDiri');
});

Route::get('/soal-skrining-penyakit', function () {
    return view('pages.SkriningPenyakit');
});

Route::get('/hasil-skrining-penyakit', function () {
    return view('pages.HasilSkriningPenyakit');
});

// Route::get('/prediksi-penyakit', function () {
//     return view('pages.PrediksiPenyakit
//     ');
// });


Route::get('/prediksi-penyakit', [PredictController::class, 'classify'])->name('classify');
