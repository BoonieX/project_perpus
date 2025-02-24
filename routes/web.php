<?php
use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

Route::resource('buku', BukuController::class);
