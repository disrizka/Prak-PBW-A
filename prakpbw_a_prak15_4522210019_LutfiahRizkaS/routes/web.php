<?php

use App\Http\Controllers;
use App\Http\Middleware\HasRoleAdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', Controllers\HomeController::class)->name('home');
Route::get('/dashboard', Controllers\HomeController::class)->name('dashboard');

Route::get('stores', [Controllers\StoreController::class, 'index'])->name('stores.index');
Route::get('stores/{store:slug}/products/{product:slug}', [Controllers\ProductController::class, 'show'])->name('products.show');

Route::middleware('auth')->group(function () {
    Route::middleware(HasRoleAdminMiddleware::class)->group(function () {
        Route::get('stores/list', [Controllers\StoreController::class, 'list'])->name('stores.list');
        Route::put('stores/approve/{store}', [Controllers\StoreController::class, 'approve'])->name('stores.approve');
    });

    Route::resource('store.products', Controllers\ProductController::class)->except('show');

    Route::middleware('verified')->group(function () {
        Route::get('stores/mine', [Controllers\StoreController::class, 'mine'])->name('stores.mine');
        Route::resource('stores', Controllers\StoreController::class)->except(['index', 'show']);
    });

    Route::get('/profile', [Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('stores/{store:slug}', [Controllers\StoreController::class, 'show'])->name('stores.show');


require __DIR__ . '/auth.php';