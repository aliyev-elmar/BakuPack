<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\File;

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

$locale = Request::segment(1);

if(in_array($locale, ['az','en','ru'])){
    App::setLocale($locale);
}else{
    App::setLocale('az');

    $locale = '';
}

Route::group([
    'prefix' => $locale
], function(){ 
    Route::get('/',                              [HomeController::class, 'index'])->name('home');
    Route::get(__('lang.haqqimizda'),            [HomeController::class, 'about_us'])->name('about_us');
    Route::get(__('lang.xammal'),                [HomeController::class, 'xammal'])->name('xammal');
    Route::get(__('lang.mehsullar'),             [HomeController::class, 'product'])->name('product');
    Route::get(__('lang.catdirilma'),            [HomeController::class, 'delivery'])->name('delivery');
    Route::get(__('lang.istehsal-prosesi'),      [HomeController::class, 'production'])->name('production');
    Route::get(__('lang.qalereya'),              [HomeController::class, 'gallery'])->name('gallery');
    Route::get(__('lang.elaqe'),                 [HomeController::class, 'contact'])->name('contact');
    Route::get(__('lang.mehsullar').('/{slug}'), [HomeController::class, 'productSingle'])->name('product-single');
    Route::post(__('lang.mehsullar').('/{slug}'),[HomeController::class, 'productSinglePost'])->name('product-single-post');
    Route::post(__('lang.mehsullar'),            [HomeController::class, 'productPost'])->name('product-post');
    Route::post(__('lang.elaqe'),                [HomeController::class, 'contactPost'])->name('contact-post');
});

// storage link

// Route::get('/linkstorage', function () {
//              Artisan::call('storage:link');
// });
