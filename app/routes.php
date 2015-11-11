<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::group(array('before' => 'auth'), function()
{
    Route::get('/',[
	'as'=>'home',
 	'uses'=>'ClientsController@index'
 ]);
	

    ///
	//Registration///
	///
	Route::get('register', [
		'as'=>'register',
		'uses'=>'RegistrationController@create'
	]);
	Route::post('register', [
		'as'=>'register',
		'uses'=>'RegistrationController@store'
	]);


	/**
	 * Sessions
	 */

	
	Route::get('logout', [
		'as'=>'logout',
		'uses'=>'SessionsController@destroy'
	]);

	/**
	 * Services
	 */
	
	Route::get('add_service',[
		'as'=>'add_service',
		'uses'=>'ServicesController@create'
	]);
	Route::post('add_service',[
		'as'=>'add_service',
		'uses'=>'ServicesController@store'
	]);
	Route::get('services', [
		'as' => 'services',
		'uses' => 'ServicesController@index'
	]);

		/**
	 * Clients
	 */
	
	Route::get('add_client',[
		'as'=>'add_client',
		'uses'=>'ClientsController@create'
	]);
	Route::post('add_client',[
		'as'=>'add_client',
		'uses'=>'ClientsController@store'
	]);
	Route::get('clients', [
		'as' => 'clients',
		'uses' => 'ClientsController@index'
	]);
		/**
	 * Projects
	 */
	
	Route::get('add_project',[
		'as'=>'add_project',
		'uses'=>'ProjectsController@create'
	]);
	Route::post('add_project',[
		'as'=>'add_project',
		'uses'=>'ProjectsController@store'
	]);
	Route::get('projects', [
		'as' => 'projects',
		'uses' => 'ProjectsController@index'
	]);
	Route::get('show_projects',[
		'as' => 'show_projects',
		'uses' => 'ProjectsController@show'
		]);

	/**
	 * Users
	 */
	Route::get('users',[
		'as' => 'users',
		'uses' => 'RegistrationController@index'
	]);
	Route::get('users/{id}/edit', 'RegistrationController@edit');
	Route::get('users/{id}/delete', 'RegistrationController@destroy');
	Route::resource('users', 'RegistrationController');

	/*Route::get('clients/{id}','ClientsController@show');

	Route::get('clients/{id}/edit', 'ClientsController@edit');

	Route::put('clients.update', 'ClientsController@update');

	Route::delete('clients/{id}', 'ClientsController@destroy');*/
	Route::get('clients/{id}/delete', 'ClientsController@destroy');
	Route::get('users/{id}/delete', 'RegistrationController@destroy');
	Route::get('services/{id}/delete', 'ServicesController@destroy');
	Route::get('projects/{id}/delete', 'ProjectsController@destroy');

	Route::resource('clients', 'ClientsController');
	Route::resource('services', 'ServicesController');
	Route::resource('projects', 'ProjectsController');
	
	});

Route::get('login', [
		'as'=>'login',
		'uses'=>'SessionsController@create'
	]);
	Route::post('login', [
		'as'=>'login',
		'uses'=>'SessionsController@store'
	]);

	Route::get('clients/{id}/print' , 'ClientsController@printClient' 
		
	);

	Route::get('clients/{id}/csv', 'ClientsController@csvClient');