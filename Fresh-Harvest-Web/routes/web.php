<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login-proses', [LoginController::class. 'login_proses'])->name('login.proses');

Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');

Route::get('/pengguna', [UserController::class, 'index'])->name('pengguna.index');
Route::get('/create', [UserController::class, 'create'])->name('pengguna.create');
Route::post('/store', [UserController::class, 'store'])->name('pengguna.store');
Route::get('/show/{id}', [UserController::class, 'show'])->name('pengguna.show');
Route::get('/edit/{id}', [UserController::class, 'edit'])->name('pengguna.edit');
Route::put('/update/{id}', [UserController::class, 'update'])->name('pengguna.update');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
