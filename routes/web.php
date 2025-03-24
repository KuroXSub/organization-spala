<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\OrganizationController;

Route::get('/', [HomeController::class, 'index'])->name('welcome');

// Halaman Tentang Kami
Route::get('/tentang-kami', [HomeController::class, 'about'])->name('about');
Route::get('/organization', [HomeController::class, 'organization'])->name('organization');

// Halaman Berita
Route::get('/berita', [NewsController::class, 'index'])->name('news.index');
Route::get('/berita/{news}', [NewsController::class, 'show'])->name('news.show');

// Halaman Galeri
Route::get('/galeri', [GalleryController::class, 'index'])->name('galleries.index');
