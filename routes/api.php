<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CalculationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('register',[UserController::class,'register']);
Route::post('login',[UserController::class,'login']);

Route::post('addproduct',[ProductController::class,'addProduct']);
Route::get('productlist',[ProductController::class,'index']);
Route::get('product/{id}',[ProductController::class,'getSingleProduct']);
Route::delete('product/{id}',[ProductController::class,'delete']);
Route::post('nCPr',[CalculationController::class,'nCPr']);