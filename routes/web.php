<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MejaController;

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

Route::get('/', function () {
    return view('/auth.login');
});

Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard umum
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Khusus admin
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin', [DashboardController::class, 'admin'])->name('admin.dashboard');
         Route::resource('menu', MenuController::class);
         Route::resource('meja', MejaController::class);
    });

    // Khusus kasir
    Route::middleware(['role:kasir'])->group(function () {
        Route::get('/kasir', [DashboardController::class, 'kasir'])->name('kasir.dashboard');
    });
});
