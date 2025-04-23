<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengadaanController;

// Route::get('/', function () {
//     return view('welcome');
// });

// routes home
Route::get('/', [HomeController::class, 'index'])->name('home');


// route crud penerbit
Route::resource('penerbit', PenerbitController::class);

// route crud buku
Route::resource('buku', BukuController::class);



Route::get('/pengadaan', [PengadaanController::class, 'bukuMinimum'])->name('buku.minimum');
