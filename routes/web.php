<?php

use App\Http\Controllers\ShopController;
use App\Http\Controllers\SlsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('tagging.index', [ShopController::class, 'index'])->name('tagging.index');
    Route::post('tagging.edit', [ShopController::class, 'update'])->name('tagging.edit');

    Route::delete('tagging/{id}', [ShopController::class, 'destroy'])->name('tagging.delete');

    Route::get('tagging.create', [ShopController::class, 'create'])->name('tagging.create');
    Route::post('tagging.create', [ShopController::class, 'store'])->name('tagging.store');
    
});
