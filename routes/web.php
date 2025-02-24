<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AnggotaController;
use Illuminate\Support\Facades\Route;

Route::resource('buku', BukuController::class);
use App\Http\Controllers\PeminjamanController;
Route::get('/', function () {
    return redirect('home');
});
Route::resource('home',DashboardController::class);
Route::get('/admin-category',[KategoriController::class,'index'])->name('admin.category');

Route::resource('home',DashboardController::class);
Route::get('/admin-anggota',[AnggotaController::class,'index'])->name('admin.anggota');


Route::controller(PeminjamanController::class)->group(function () {
    Route::get('/peminjaman', 'index')->name('peminjaman.index');
    Route::get('/peminjaman/create', 'create')->name('peminjaman.create');
    Route::post('/peminjaman', 'store')->name('peminjaman.store');
    Route::get('/peminjaman/{id}/edit', 'edit')->name('peminjaman.edit');
    Route::put('/peminjaman/{id}', 'update')->name('peminjaman.update');
    Route::delete('/peminjaman/{id}', 'destroy')->name('peminjaman.destroy');
});
Route::resource('buku', BukuController::class);
Route::resource('home',DashboardController::class);
Route::resource('anggota', AnggotaController::class);

Route::get('/admin-category',[KategoriController::class,'index'])->name('admin.category');
