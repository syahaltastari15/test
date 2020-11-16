<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ManagerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('layouts.master');
});


Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');




Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {

//Product
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/insert', [ProductController::class, 'create']);
Route::post('/product/store', [ProductController::class, 'store']);
Route::get('/product/{id}/edit', [ProductController::class, 'edit']);
Route::post('/product/{id}/update', [ProductController::class, 'update']);
Route::get('/product/{id}/show',[ProductController::class, 'show']);
//End Product

//Type
Route::get('/type', [TypeController::class, 'index']);
Route::get('/type/insert', [TypeController::class, 'create']);
Route::post('/type/store', [TypeController::class, 'store']);
Route::get('/type/{id}/edit', [TypeController::class, 'edit']);
Route::post('/type/{id}/update', [TypeController::class, 'update']);
Route::get('/type/{id}/delete', [TypeController::class, 'delete']);
//End Type

Route::get('/distributor', [DistributorController::class, 'index']);
Route::get('/distributor/insert', [DistributorController::class, 'create']);
Route::post('/distributor/store', [DistributorController::class, 'store']);
});



Route::group(['middleware' => ['auth', 'checkRole:kasir']], function () {
    Route::get('/transaction', [TransactionController::class, 'index']);
    Route::get('/transaction/insert', [TransactionController::class, 'create']);
    Route::post('/transaction/store', [TransactionController::class, 'store']);


    Route::get('/customer', [CustomerController::class, 'index']);
    Route::get('/customer/insert', [CustomerController::class, 'create']);
    Route::post('/customer/store', [CustomerController::class, 'store']);
});

Route::group(['middleware' => ['auth', 'checkRole:manager']], function () {
    Route::get('/laporan', [ManagerController::class, 'index']);
    Route::get('/filter', [ManagerController::class, 'index']);
    Route::get('laporan-transaksi', [ManagerController::class, 'laporanTransaksi']);
});
