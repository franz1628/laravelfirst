<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ModelsController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [TestController::class,'test']);

Route::resource("brand",BrandController::class);
Route::resource("design",DesignController::class);
Route::resource("person",PersonController::class);
