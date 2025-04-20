<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\BahanController;
use App\Http\Controllers\LangkahController;
use App\Http\Controllers\WelcomeController;

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

Route::get('/',[WelcomeController::class,'index']);

Route::group(['prefix' => 'resep'], function () {
    Route::get('/resep', [ResepController::class, 'index']);        // Tampilkan semua data
    Route::get('/resep/create', [ResepController::class, 'create']); // Form tambah data
    Route::post('/resep', [ResepController::class, 'store']);        // Simpan data baru
    Route::get('/resep/{id}', [ResepController::class, 'show']);     // Tampilkan detail
    Route::get('/resep/{id}/edit', [ResepController::class, 'edit']); // Form edit
    Route::put('/resep/{id}', [ResepController::class, 'update']);   // Proses edit
    Route::delete('/resep/{id}', [ResepController::class, 'destroy']); // Hapus data
});

Route::group(['prefix' => 'Bahan'], function () {
    Route::get('/bahan', [BahanController::class, 'index']);        // Tampilkan semua data
    Route::get('/bahan/create', [BahanController::class, 'create']); // Form tambah data
    Route::post('/bahan', [BahanController::class, 'store']);        // Simpan data baru
    Route::get('/bahan/{id}', [BahanController::class, 'show']);     // Tampilkan detail
    Route::get('/bahan/{id}/edit', [BahanController::class, 'edit']); // Form edit
    Route::put('/bahan/{id}', [BahanController::class, 'update']);   // Proses edit
    Route::delete('/bahan/{id}', [BahanController::class, 'destroy']); // Hapus data
});


Route::group(['prefix' => 'Langkah'], function () {
    Route::get('/langkah', [LangkahController::class, 'index']);        // Tampilkan semua data
    Route::get('/langkah/create', [LangkahController::class, 'create']); // Form tambah data
    Route::post('/langkah', [LangkahController::class, 'store']);        // Simpan data baru
    Route::get('/langkah/{id}', [LangkahController::class, 'show']);     // Tampilkan detail
    Route::get('/langkah/{id}/edit', [LangkahController::class, 'edit']); // Form edit
    Route::put('/langkah/{id}', [LangkahController::class, 'update']);   // Proses edit
    Route::delete('/langkah/{id}', [LangkahController::class, 'destroy']); // Hapus data
});

