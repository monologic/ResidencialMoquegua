<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=> 'admin', 'middleware' => 'web'], function(){

	Route::resource('clientes', 'ClientesController');

	Route::resource('servicios', 'ServiciosController');

	Route::resource('empleadoTipos', 'EmptiposController');
	
	Route::get('/', function(){
		return view('admin.templates.control');
	});

	Route::get('clientes/{id}/destroy',[
		'uses' => 'ClientesController@destroy',
		'as'   => 'admin.clientes.destroy'
	]);

	Route::get('servicios/{id}/destroy',[
		'uses' => 'ServiciosController@destroy',
		'as'   => 'admin.servicios.destroy'
	]);

	Route::get('empleadoTipos/{id}/destroy',[
		'uses' => 'EmptiposController@destroy',
		'as'   => 'admin.empleadoTipos.destroy'
	]);
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
