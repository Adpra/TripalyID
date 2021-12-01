<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\TriplayController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ImageSlideController;
use App\Http\Controllers\ImageBannerController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\PulseController;
use App\Http\Controllers\PricePulseController;
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

//  General Route 
Route::get('/login/partner', function () {
    return view('/login-partner');
});
Route::get('/signup/partner', function () {
    return view('/signup');
});
Route::get('/collaboration', function () {
    return view('/collaboration');
});


// Home Route
Route::get('/' , [HomeController::class , 'homeView']);


// Checkout Page Route
Route::get('/checkout/{slug}' , [CheckoutController::class , 'index']);
Route::get('/checkout/pulsa/{slug}' , [CheckoutController::class , 'pulse']);


// Admin Page Route
Route::get('/admin' , [TriplayController::class , 'index']);
Route::get('/admin/tambah' , [TriplayController::class , 'create']);
Route::post('/admin/tambah/data' , [TriplayController::class , 'store']);
Route::get('/admin/{triplay}/edit' , [TriplayController::class , 'edit']);
Route::patch('/admin/{triplay}' , [TriplayController::class , 'update']);
Route::delete('/admin/{triplay}' , [TriplayController::class , 'destroy']);



Route::get('/admin/{triplay}/price' , [PriceController::class , 'edit']);
Route::post('/admin/{price}/price' , [PriceController::class , 'store']);
Route::patch('/admin/{price}/price' , [PriceController::class , 'update']);
Route::delete('/admin/{price}/price' , [PriceController::class , 'destroy']);



Route::get('/admin/imageslide' , [ImageSlideController::class , 'index']);
Route::get('/admin/addslide' , [ImageSlideController::class , 'create']);
Route::post('/admin/addSlide/data' , [ImageSlideController::class , 'store']);
Route::get('/admin/{imageSlide}/slideEdit' , [ImageSlideController::class , 'edit']);
Route::patch('/admin/slideEdit/{imageSlide}' , [ImageSlideController::class , 'update']);
Route::delete('/admin/imageSlide/{imageSlide}' , [ImageSlideController::class , 'destroy']);



Route::get('/admin/imagebanner' , [ImageBannerController::class , 'index']);
Route::get('/admin/addbanner' , [ImageBannerController::class , 'create']);
Route::post('/admin/addBanner/data' , [ImageBannerController::class , 'store']);
Route::get('/admin/{imageBanner}/bannerEdit' , [ImageBannerController::class , 'edit']);
Route::patch('/admin/bannerEdit/{imageBanner}' , [ImageBannerController::class , 'update']);
Route::delete('/admin/imageBanner/{imageBanner}' , [ImageBannerController::class , 'destroy']);



Route::get('/admin/video' , [VideoController::class , 'index']);
Route::get('/admin/addvideo' , [VideoController::class , 'create']);
Route::post('/admin/addVideo/data' , [VideoController::class , 'store']);
Route::get('/admin/{video}/editVideo' , [VideoController::class , 'edit']);
Route::patch('/admin/editVideo/{video}' , [VideoController::class , 'update']);
Route::delete('/admin/video/{video}' , [VideoController::class , 'destroy']);


Route::get('/admin/pulse' , [PulseController::class , 'index']);
Route::get('/admin/addPulse' , [PulseController::class , 'create']);
Route::post('/admin/addPulse/data' , [PulseController::class , 'store']);
Route::get('/admin/{pulse}/pulseEdit' , [PulseController::class , 'edit']);
Route::patch('/admin/pulseEdit/{pulse}' , [PulseController::class , 'update']);
Route::delete('/admin/pulse/{pulse}' , [PulseController::class , 'destroy']);


Route::get('/admin/{pulse}/pricePulse' , [PricePulseController::class , 'edit']);
Route::post('/admin/{pulse}/pricePulse' , [PricePulseController::class , 'store']);
Route::patch('/admin/{pricePulse}/pricePulse' , [PricePulseController::class , 'update']);
Route::delete('/admin/{pricePulse}/pricePulse' , [PricePulseController::class , 'destroy']);

