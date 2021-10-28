<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\PlaneController;
use Illuminate\Support\Facades\Route;


Route::prefix('may-bay')->group(function () {
    Route::get('/', [PlaneController::class, 'index'])->name('plane.index');
    Route::get('them', [PlaneController::class, 'add'])->name('plane.add')->middleware('auth');
    Route::post('them', [PlaneController::class, 'saveAdd'])->middleware('auth');
    Route::get('sua/{id}', [PlaneController::class, 'edit'])->name('plane.edit')->middleware('auth');
    Route::post('sua/{id}', [PlaneController::class, 'saveEdit'])->middleware('auth');
    Route::get('xoa/{id}', [PlaneController::class, 'delete'])->name('plane.delete')->middleware('auth');
});

Route::prefix('hang')->group(function () {
    Route::get('/', [BrandController::class, 'index'])->name('brand.index');
    Route::get('them', [BrandController::class, 'add'])->name('brand.add')->middleware('auth');
    Route::post('them', [BrandController::class, 'saveAdd'])->middleware('auth');
    Route::get('sua/{id}', [BrandController::class, 'edit'])->name('brand.edit')->middleware('auth');
    Route::post('sua/{id}', [BrandController::class, 'saveEdit'])->middleware('auth');
    Route::get('xoa/{id}', [BrandController::class, 'delete'])->name('brand.delete')->middleware('auth');
});
