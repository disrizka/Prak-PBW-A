<?php


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Middleware\HasRoleAdminMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', Controllers\HomeController::class)->name('home');

Route::get('/dashboard', Controllers\DashboardController::class)->name('dashboard');



Route::get('stores', [Controllers\StoreController::class, 'index'])->name('stores.index');


Route::middleware('auth')->group(function () {

    Route::middleware(HasRoleAdminMiddleware::class)->group(function () {
        Route::get('stores/list', [Controllers\StoreController::class, 'list'])->name('stores.list');
        Route::put('stores/approve/{store}', [Controllers\StoreController::class, 'approve'])->name('stores.approve');

    });

    Route::middleware(['verified'])->group(function () {
        Route::resource('stores', Controllers\StoreController::class)->except('index', 'show');
    });


    Route::get('/profile', [Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';