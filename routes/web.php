<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;


Route::resource('buku', BukuController::class);

Route::get('/', function () {
    return redirect('home');
});

Route::resource('home',DashboardController::class);
Route::get('/admin-category',[KategoriController::class,'index'])->name('admin.category');

