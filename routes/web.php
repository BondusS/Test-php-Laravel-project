<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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

/*
use App\Http\Controllers\MainController;
*/
Route::get('/', 'MainController@home')->name('main');
Route::get('/houses', 'HouseController@home')->name('houses');
Route::post('/houses/check', 'HouseController@check');
Route::post('/houses/delete/{adres}', 'HouseController@destroy');
Route::get('/flats/{adres}', 'FlatController@home')->name('flats');
Route::post('/flats/check', 'FlatController@check');
Route::post('/flats/delete/{id}', 'FlatController@destroy');
Route::get('/login', 'LoginController@home');
Route::post('/login/check', 'LoginController@check');
Route::get('/logout', 'LoginController@logout');
Route::get('/register', 'RegisterController@home');
Route::post('/register/check', 'RegisterController@check');

//Route::get('/', function () {
    /*
    return view('welcome');
    */ 
    //return view('home'); });