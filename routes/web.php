<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

Route::resource('buku', BukuController::class);
use App\Http\Controllers\PeminjamanController;
Route::get('/', function () {
    return redirect('home');
});

<<<<<<< HEAD
Route::resource('home',DashboardController::class);
Route::get('/admin-category',[KategoriController::class,'index'])->name('admin.category');
=======
>>>>>>> e13868f372bd95a0da1a422f6e909fd60fec08bb


Route::controller(PeminjamanController::class)->group(function () {
    Route::get('/peminjaman', 'index')->name('peminjaman.index');
    Route::get('/peminjaman/create', 'create')->name('peminjaman.create');
    Route::post('/peminjaman', 'store')->name('peminjaman.store');
    Route::get('/peminjaman/{id}/edit', 'edit')->name('peminjaman.edit');
    Route::put('/peminjaman/{id}', 'update')->name('peminjaman.update');
    Route::delete('/peminjaman/{id}', 'destroy')->name('peminjaman.destroy');

Route::resource('buku', BukuController::class);

Route::resource('home',DashboardController::class);
});
