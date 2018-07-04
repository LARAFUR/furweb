<?php

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
    //return view('bienvenido');
    return view('auth/login');
});

Route::group(['prefix' => 'furweb'], function(){
	Route::resource('datos-personales','DatoPersonalController');
	Route::resource('direccion-vivienda','DirViviendaController');
	Route::resource('identificacion-geografica','IdGeograficaController');
	Route::resource('usuario','UserController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
