<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\HOmeController;
use  App\Http\Controllers\KategoriController;
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

Route::get('/', [HOmeController::class, 'utama']);

Route::get('/register', [HOmeController::class, 'bio']);

Route::post('/welcome', [HOmeController::class, 'kirim']);

Route::get('/data-table', function() {
    return view('halaman.table');
});
// CRUD Categorry
// form tambah kategori
Route::get('/kategori/create', [KategoriController::class, 'create']);
// untuk kirim data ke database
Route::post('/kategori', [KategoriController::class, 'store']);
// READ
// Tampil Semua
Route::get('/kategori', [KategoriController::class, 'tampil']);
// Detail kategori berdasarkan id
Route::get('/kategori/{kategori_id}', [KategoriController::class, 'show']);
