<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/aPropos',
'App\Http\Controllers\pagesController@aPropos')->name('aPropos') ;

Route::get('/balises',
'App\Http\Controllers\pagesBaliseController@balises')->name('balises') ;

Route::get('/balise/{id}', 'App\Http\Controllers\pagesBaliseController@balise')->name('balise');

Route::get('/releveBalise/{id}', 'App\Http\Controllers\pagesBaliseController@releveBalise')->name('releveBalise');

Route::get('/formAddBalise', 'App\Http\Controllers\pagesBaliseController@create')->name('formAddBalise');

Route::post('/formAddBalise', 'App\Http\Controllers\pagesBaliseController@store')->name('formAddBalise');

Route::get('/formEditBalise/{id}', 'App\Http\Controllers\pagesBaliseController@edit')->name('formEditBalise');

Route::post('/formAddBalise', 'App\Http\Controllers\pagesBaliseController@update')->name('formAddBalise');