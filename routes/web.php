<?php

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

//Function View Web Dengan Class Index
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/beranda', [App\Http\Controllers\BerandaController::class, 'index'])->name('beranda');
Route::get('/beranda-1', [App\Http\Controllers\Beranda1Controller::class, 'index'])->name('beranda-1');
Route::get('/agenda', [App\Http\Controllers\AgendaController::class, 'index'])->name('agenda');
Route::get('/agenda-video', [App\Http\Controllers\AgendaVideoController::class, 'index'])->name('agenda-video');
Route::get('/datachart', [App\Http\Controllers\DataChartController::class, 'index'])->name('datachart');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/layanan', [App\Http\Controllers\LayananController::class, 'index'])->name('layanan');
Route::get('/layanan-umum', [App\Http\Controllers\LayananUmumController::class, 'index'])->name('layanan-umum');
Route::get('/layanan-pendaftaran', [App\Http\Controllers\LayananPendaftaranController::class, 'index'])->name('layanan-pendaftaran');