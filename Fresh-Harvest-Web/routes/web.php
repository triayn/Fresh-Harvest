<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'dashboard']);

Route::get('/pengguna', [UserController::class, 'index'])->name('pengguna.index');
Route::get('/create', [UserController::class, 'create'])->name('pengguna.create');
Route::post('/store', [UserController::class, 'store'])->name('pengguna.store');
Route::get('/show/{id}', [UserController::class, 'show'])->name('pengguna.show');