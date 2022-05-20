<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',                [HomeController::class, 'index'])->name('home');
Route::get('/haqqimizda',      [HomeController::class, 'about_us'])->name('about_us');
Route::get('/xammal',          [HomeController::class, 'xammal'])->name('xammal');
Route::get('/mehsullar',       [HomeController::class, 'product'])->name('product');
Route::get('/catdirilma',      [HomeController::class, 'delivery'])->name('delivery');
Route::get('/istehsal-prosesi',[HomeController::class, 'production'])->name('production');
Route::get('/qalereya',        [HomeController::class, 'gallery'])->name('gallery');
Route::get('/elaqe',           [HomeController::class, 'contact'])->name('contact');
Route::post('/elaqe',          [HomeController::class, 'contactPost'])->name('contact-post');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});