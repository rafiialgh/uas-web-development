<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DetailTransaksiController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ValasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// konfigurasi URL untuk API
Route::get('valas/getValasId',[ValasController::class,'getValasId'])->name('valas.getValasId');
Route::get('customer/getCustomerId',[CustomerController::class,'getCustomerId'])->name('customer.getCustomerId');
Route::get('membership/getMembershipId',[MembershipController::class,'getMembershipId'])->name('membership.getMembershipId');
Route::get('transaksi/getTransaksiId',[TransaksiController::class,'getTransaksiId'])->name('transaksi.getTransaksiId');
Route::get('detailTransaksi/getDetailTransaksiId',[DetailTransaksiController::class,'getDetailTransaksiId'])->name('detailTransaksi.getDetailTransaksiId');
