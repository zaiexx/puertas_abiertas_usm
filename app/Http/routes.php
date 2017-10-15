<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');


Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');


Route::get('register', [
	'as' => 'register', 'uses' => 'Auth\AuthController@getRegister'
	]);

Route::post('register', 'Auth\AuthController@postRegister');

Route::get('/home', 'HomeController@index');
Route::resource('/sedes','SedesController');
Route::resource('/eventos','EventosController');
Route::resource('/actividades','ActividadesController');


Route::resource('dashboard','DashboardController');

Route::post('inscripciones/desinscribir',
	['as' => 'inscripciones.desinscribir', 'uses' => 'InscripcionesController@postDesinscribir'
	]);

Route::resource('inscripciones','InscripcionesController');

Route::post('inscripciones/procesar',
	['as' => 'inscripciones.procesar', 'uses' => 'InscripcionesController@postProcesar'
	]);

