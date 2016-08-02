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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'personas'=>'PersonasController',
	'users'=>'UsersController',
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',

]);
Route::group(['prefix'=>'admin','middleware'=>['auth','is_admin'], 'namespace' =>'Admin'],function(){
	Route::resource('users','UserController');

});

Route::get('login',function ()
{
	return view('auth.index');	
});

Route::get('crear-cuenta',[
	'uses'	=> 'Auth\AuthController@getRegister',
	'as'	=>'registro'
	]);

//****integrantes
	Route::get('/crear-integrante/',[//mostrar formulario para crear un nuevo beneficiado
	'uses'	=>'CrudController@create_integrantes',
	'as'	=>'integrantes.create'
	]);

	Route::post('/crear-integrante/',[//mostrar formulario para crear un nuevo beneficiado
	'uses'	=>'CrudController@store_integrantes',
	'as'	=>'integrantes.store'
	]);

	Route::get('/ver-detalles-integrante/{id}',[//ver el detalle de cada beneficiado
	'uses'	=>'CrudController@edit_integrantes',
	'as'	=>'integrantes.edit'
	]);

	Route::patch('/ver-detalles-integrante/{id}',[
	'uses'	=>'CrudController@update_integrantes',
	'as'	=>'integrantes.update'
	]);

	Route::get('/integrantes',[//mostrar listado de integrantes
	'uses'	=>'CrudController@show_integrantes',
	'as'	=>'integrantes'
	]);
//****proyectos
	Route::get('/crear-proyecto/',[//mostrar formulario para crear un nuevo proyectos
	'uses'	=>'CrudController@create_proyectos',
	'as'	=>'proyectos.create'
	]);

	Route::post('/crear-proyecto/',[//mostrar formulario para crear un nuevo integrantes
	'uses'	=>'CrudController@store_proyectos',
	'as'	=>'proyectos.store'
	]);

	Route::get('/ver-detalles-proyecto/{id}',[//ver el detalle de cada integrantes
	'uses'	=>'CrudController@edit_proyectos',
	'as'	=>'proyectos.edit'
	]);

	Route::patch('/ver-detalles-proyecto/{id}',[
	'uses'	=>'CrudController@update_proyectos',
	'as'	=>'proyectos.update'
	]);

	Route::get('/proyectos',[//mostrar listado de integrantes
	'uses'	=>'CrudController@show_proyectos',
	'as'	=>'proyectos'
	]);