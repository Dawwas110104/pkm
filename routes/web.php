<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/guru', [App\Http\Controllers\GuruController::class, 'index'])->name('guru');
Route::get('/guru/materi', [App\Http\Controllers\GuruController::class, 'materi'])->name('guru.materi');
Route::get('/guru/siswa', [App\Http\Controllers\GuruController::class, 'siswa'])->name('guru.siswa');
