<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\FrontController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'middleware'=> ['auth']], function () {
    Route::resource('kategori', KategoriController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('produk', ProdukController::class);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [FrontController::class, 'produk']);
Route::get('produk/{id}', [FrontController::class, 'detail']);
