<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SupplierController;
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
    return view('welcome');
});

Auth::routes();


Route::middleware(['auth'])->group(function () {

    // Route Supplier
    Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier.site');
    




    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.site');
    Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard.site');
});


