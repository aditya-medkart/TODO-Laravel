<?php

use App\Http\Controllers\ComponentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ConfigController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoTaskController;
use App\Models\Component;

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

Route::get('v1',[TodoTaskController::class,'showAll']);
Route::get('v1/{id}',[TodoTaskController::class,'show']);
Route::post('v1/store',[TodoTaskController::class,'store']);
Route::put('v1/update/{id}',[TodoTaskController::class,'update']);
Route::delete('v1/delete/{id}',[TodoTaskController::class,'delete']);
Route::get('page/index/{id}',[PageController::class,'index']);
Route::post('page/create',[PageController::class,'create']);
Route::put('page/update/{id}',[PageController::class,'update']);
Route::delete('page/destroy/{id}',[PageController::class,'destroy']);
Route::get('Component/index/{page_id}',[ComponentController::class,'index']);
Route::post('Component/create',[ComponentController::class,'create']);
Route::put('Component/update/{id}',[ComponentController::class,'update']);
Route::delete('Component/destroy/{id}',[ComponentController::class,'destroy']);
Route::get('Config/index/{component_id}',[ConfigController::class,'index']);
Route::post('Config/create',[ConfigController::class,'create']);
Route::put('Config/update/{id}',[ConfigController::class,'update']);
Route::delete('Config/destroy/{id}',[ConfigController::class,'destroy']);