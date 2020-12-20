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


Route::get('index', 'App\Http\Controllers\KorisnikController@index')->name('index');


Route::get('show/{id}', 'App\Http\Controllers\KorisnikController@show')->name('show');


Route::get('create-korisnik', 'App\Http\Controllers\KorisnikController@create')->name('create-korisnik');
Route::post('create', 'App\Http\Controllers\KorisnikController@store')->name('create');

Route::get('update-korisnik/{id}', 'App\Http\Controllers\KorisnikController@edit')->name('update-korisnik');
Route::post('update', 'App\Http\Controllers\KorisnikController@update')->name('update');


Route::get('delete-korisnik.{id}', 'App\Http\Controllers\KorisnikController@delete')->name('delete');
