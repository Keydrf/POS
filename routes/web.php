<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\POSController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\WelcomeController;


Route::get('/', [WelcomeController::class, 'index']);

Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController :: class, 'index']);
    Route::post('/list', [UserController :: class, 'list']);
    Route::get('/create', [UserController :: class, 'create' ]);
    Route::post('/', [UserController :: class, 'store']);
    Route::get('/{id}', [UserController :: class, 'show']);
    Route::get('/{id}/edit', [UserController :: class, 'edit' ]);
    Route::put('/{id}', [UserController :: class, 'update']);
    Route::delete('/{id}', [UserController :: class, 'destroy' ]);
});

Route::get('/home', [POSController::class, 'home']);

Route::prefix('category')->group(function() {
    route::get('/food-beverage', [ProductsController::class, 'foodBeverage']);
    route::get('/beauty-health', [ProductsController::class, 'beautyHealth']);
    route::get('/home-care', [ProductsController::class, 'homeCare']);
    route::get('/baby-kid', [ProductsController::class, 'babyKid']);
});

Route::get('/penjualan', [PenjualanController::class, 'penjualan']);

Route::get('/userPOS', [UserController::class, 'user']);

Route::get('/level', [LevelController::class, 'index']);

Route::get('/kategori', [KategoriController::class, 'index']);

Route::get('/user', [UserController::class, 'index']);

Route::get('/user/tambah', [UserController::class, 'tambah']);

Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);

Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);

Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);

Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);

Route::get('/kategori/create', [KategoriController::class, 'create']);
Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.index');

Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::post('/kategori/update/{id}', [KategoriController::class, 'update'])->name('kategori.update');

Route::delete('/kategori/delete/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');
