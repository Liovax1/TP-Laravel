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
     'App\Http\Controllers\PagesController@aPropos')->name('aPropos') ;

Route::get('/balises',
     'App\Http\Controllers\PagesBaliseController@balises')->name('balises') ;

Route::get('/balise/{id}',
     'App\Http\Controllers\PagesBaliseController@balise')->name('balise') ;

Route::get('/formAddBalise',
     'App\Http\Controllers\PagesBaliseController@create')->name('formAddBalise') ;

Route::post('/formAddBalise',
     'App\Http\Controllers\PagesBaliseController@store')->name('formAddBalise') ;

Route::get('/formEditBalise/{id}',
     'App\Http\Controllers\PagesBaliseController@edit')->name('formEditBalise') ;

Route::post('/formEditBalise',
     'App\Http\Controllers\PagesBaliseController@upDate')->name('formEditBalise') ;

Route::get('/deleteBalise/{id}',
     'App\Http\Controllers\PagesBaliseController@delete')->name('deleteBalise') ;


Route::get('/releveBalise/{id}',
'App\Http\Controllers\PagesController@releveBalise')->name('releveBalise') ;