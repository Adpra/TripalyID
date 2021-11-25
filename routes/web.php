<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\TriplayController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/checkout' , [CheckoutController::class , 'index']);
Route::get('/admin' , [TriplayController::class , 'index']);
Route::get('/admin/tambah' , [TriplayController::class , 'create']);
Route::post('/admin/tambah/data' , [TriplayController::class , 'store']);
Route::get('/admin/{triplay}/edit' , [TriplayController::class , 'edit']);
Route::patch('/admin/{triplay}' , [TriplayController::class , 'update']);
Route::delete('/admin/{triplay}' , [TriplayController::class , 'destroy']);
