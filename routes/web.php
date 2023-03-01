<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class,'index'])->name('index');

Route::get('/pricing-page', [HomeController::class,'pricingpage'])->name('pricingpage');

Route::post('/submit/final', [HomeController::class,'finalstore'])->name('finalsub');

Route::get('/viewform', [HomeController::class,'formviewdata'])->name('formview');
// Route::get('/viewform', [HomeController::class,'formviewdata'])->name('formview')->middleware('ipcheck');