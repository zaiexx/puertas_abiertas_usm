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

Route::get('/home', [
	'as' => 'home.index', 'uses'=>'HomeController@index'
	]);

Route::get('/home/{rut}',[
	'as' => 'home.show', 'uses' => 'HomeController@show'
	]);


Route::get('/home/{rut}/asistencia/{id_taller}',
	['as' => 'home.asistencia', 'uses' => 'HomeController@postAsistencia'
	]);




Route::resource('/sedes','SedesController');
Route::resource('/eventos','EventosController');
Route::resource('/actividades','ActividadesController');


Route::post('dashboard/procesar',
	['as' => 'dashboard.procesar', 'uses' => 'DashboardController@postProcesar'
	]);

Route::resource('dashboard','DashboardController');

Route::post('inscripciones/desinscribir',
	['as' => 'inscripciones.desinscribir', 'uses' => 'InscripcionesController@postDesinscribir'
	]);


Route::get('inscripciones/{rut}/bloque/{id}','InscripcionesController@getBloques');
Route::resource('inscripciones','InscripcionesController');

Route::post('inscripciones/procesar',
	['as' => 'inscripciones.procesar', 'uses' => 'InscripcionesController@postProcesar'
	]);


Route::post('inscripciones/consultar',
	['as' => 'inscripciones.consultar', 'uses' => 'InscripcionesController@postConsultar'
	]);



Route::resource('horarios','HorariosController');
Route::resource('carreras','CarrerasController');
Route::resource('alumnos','AlumnosController');

Route::post('validacion/procesar',
	['as' => 'validacion.procesar', 'uses' => 'AsistenciasController@postProcesar'
	]);

Route::resource('validacion','AsistenciasController');

Route::resource('listas','ListasController');