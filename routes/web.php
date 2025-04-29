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
    Route::get('/edit/{id}', [DatasetController::class, 'edit'])->name('edit');
    Route::put('/update', [DatasetController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [DatasetController::class, 'delete'])->name('delete');
    Route::delete('/delete_all', [DatasetController::class, 'delete_all'])->name('delete_all');
});
Route::prefix('skrining-penyakit')->name('disesase_screening.')->group(function () {
    Route::get('/', [DiseaseScreeningController::class, 'index'])->name('index');
    Route::post('/', [DiseaseScreeningController::class, 'screening'])->name('screening');
    Route::post('/save', [DiseaseScreeningController::class, 'save_screening'])->name('save_screening');
});
Route::get('/prediksi-penyakit', [PredictController::class, 'classify'])->name('classify');

