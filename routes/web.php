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
    return view('template');
});

Route::get('/{name}', function () {
    return redirect('/');
})->where('name','[A-Za-z]+');


Auth::routes();

//Route::get('/', 'HomeController@index')->name('home');
//Route::Resource('albums','Api\AlController');
