<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\HOmeController;
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