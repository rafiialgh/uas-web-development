<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DetailTransaksiController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ValasController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    
});

// Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    
    Route::prefix('admin')->middleware(['auth'])->group(function () {
        Route::resource('valas', ValasController::class);
        Route::resource('customer', CustomerController::class);
        Route::resource('transaksi', TransaksiController::class);
    });
});

// Super Admin Routes List
Route::middleware(['auth', 'user-access:super-admin'])->group(function () {
    Route::get('/super-admin/home', [HomeController::class, 'superAdminHome'])->name('super.admin.home');
    
    Route::prefix('super-admin')->middleware(['auth'])->group(function () {
        Route::resource('valas', ValasController::class);
        Route::resource('customer', CustomerController::class);
        Route::resource('membership', MembershipController::class);
        Route::resource('transaksi', TransaksiController::class);
        Route::resource('detailTransaksi', DetailTransaksiController::class);
    });
});

