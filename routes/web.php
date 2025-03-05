<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('home');
});

Route::resource('buku', BukuController::class);
Route::resource('home', DashboardController::class);
Route::resource('anggota', AnggotaController::class);

Route::get('/admin-category', [KategoriController::class, 'index'])->name('admin.category');
Route::get('/add-category', [KategoriController::class, 'create'])->name('add.category');
    
Route::get('/admin-anggota', [AnggotaController::class, 'index'])->name('admin.anggota');

Route::controller(PeminjamanController::class)->group(function () {
    Route::get('/peminjaman', 'index')->name('peminjaman.index');
    Route::get('/peminjaman/create', 'create')->name('peminjaman.create');
    Route::post('/peminjaman', 'store')->name('peminjaman.store');
    Route::get('/peminjaman/{id}/edit', 'edit')->name('peminjaman.edit');
    Route::put('/peminjaman/{id}', 'update')->name('peminjaman.update');
    Route::delete('/peminjaman/{id}', 'destroy')->name('peminjaman.destroy');
});

Route::get('/pengembalian', [PengembalianController::class, 'index'])->name('pengembalian.index');
