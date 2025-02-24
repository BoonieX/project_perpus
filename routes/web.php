<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PeminjamanController;
Route::get('/', function () {
    return redirect('home');
});



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