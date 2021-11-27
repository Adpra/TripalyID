<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\TriplayController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\HomeController;

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


// Home Route
Route::get('/' , [HomeController::class , 'homeView']);


// Checkout Page Route
Route::get('/checkout/{slug}' , [CheckoutController::class , 'index']);


// Admin Page Route
Route::get('/admin' , [TriplayController::class , 'index']);
Route::get('/admin/tambah' , [TriplayController::class , 'create']);
Route::post('/admin/tambah/data' , [TriplayController::class , 'store']);
Route::get('/admin/{triplay}/edit' , [TriplayController::class , 'edit']);
Route::patch('/admin/{triplay}' , [TriplayController::class , 'update']);
Route::delete('/admin/{triplay}' , [TriplayController::class , 'destroy']);



Route::get('/admin/{triplay}/price' , [PriceController::class , 'edit']);
Route::get('/admin/addPrice' , [PriceController::class , 'create']);
Route::post('/admin/tambah/price' , [PriceController::class , 'store']);
Route::patch('/admin/{triplay}/price' , [PriceController::class , 'update']);
Route::delete('/admin/{price}/price' , [PriceController::class , 'destroy']);
Route::delete('/admin/{voucher}/voucher' , [VoucherController::class , 'destroy']);
