<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'main'])->name('pages.main');
Route::get('/about', [PageController::class, 'about'])->name('pages.about');
Route::get('/privacy', [PageController::class, 'privacy'])->name('pages.privacy');
Route::get('/sitemap', [PageController::class, 'sitemap'])->name('pages.sitemap');

Route::get('/call', [PhoneController::class, 'index'])->name('phones.index');
Route::get('/create', [PhoneController::class, 'create'])->name('phones.create');
Route::get('/card', [PhoneController::class, 'show'])->name('phones.show');
Route::get('/qr', [PhoneController::class, 'qrcode'])->name('phones.qrcode');