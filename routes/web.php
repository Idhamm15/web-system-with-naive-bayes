<?php

use App\Http\Controllers\DatasetController;
use App\Http\Controllers\DiseaseScreeningController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::prefix('dataset')->name('dataset.')->group(function () {
    Route::get('/', [DatasetController::class, 'index'])->name('index');
    Route::post('/add', [DatasetController::class, 'add'])->name('add');
});
Route::prefix('skrining-penyakit')->name('disesase_screening.')->group(function () {
    Route::get('/', [DiseaseScreeningController::class, 'index'])->name('index');
    Route::post('/', [DiseaseScreeningController::class, 'screening'])->name('screening');
});
Route::get('/prediksi-penyakit', [PredictController::class, 'classify'])->name('classify');

