<?php

use App\Http\Controllers\ItensController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::prefix('/itens')->group(function(){
    Route::get('/',[ItensController::class, 'index']);
    
    Route::post('/',[ItensController::class, 'store']);
   
    Route::put('/{id}',[ItensController::class, 'update']);
    Route::delete('/{id}',[ItensController::class, 'destroy']);
});