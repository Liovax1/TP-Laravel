<?php

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

Route::get('/wsBalise/all', 'App\Http\Controllers\baliseController@all');
Route::get('/wsBalise/show/{id}', 'App\Http\Controllers\baliseController@show');
Route::get('/wsBalise/delete/{id}', 'App\Http\Controllers\baliseController@delete');
Route::post('/wsBalise/add','App\Http\Controllers\baliseController@add');