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

/*Event::listen('illuminate.query', function($sql){
 	var_dump($sql);
});*/


Event::listen('Magars.*', 'Magars\Users\Listeners\EmailNotifier@whenUserHasSubscribed');

# Static pages 

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);
Route::get('/contacte', ['as' => 'contact', 'uses' => 'PagesController@contact']);
Route::get('/empresa', ['as' => 'empresa', 'uses' => 'PagesController@empresa']);
Route::get('/companyia', ['as' => 'companyia', 'uses' => 'PagesController@companyia']);
Route::get('/escola', ['as' => 'escola', 'uses' => 'PagesController@escola']);
Route::get('/agenda', ['as' => 'agenda', 'uses' => 'CitesController@index']);

#Newsletters

Route::get('/subscribe', '$this->execute(SubscribeUserCommand::class);');

#Registration

Route::get('/register', 'UsersController@create')->before('guest');
Route::post('/register', ['as' => 'users.store', 'uses' => 'UsersController@store'])->before('csrf');
Route::get('/user', ['as' => 'users.index', 'uses' => 'UsersController@index'])->before('auth');
Route::post('/clients.store', 'UsersController@store')->before('csrf');


# Authentication 

Route::get('login', ['as' => 'login', 'uses' => 'SessionsController@create'])->before('guest');
Route::get('logout', ['as' => 'logout', 'uses' => 'SessionsController@destroy'])->before('auth');
Route::resource('sessions', 'SessionsController', ['only' => ['create', 'store', 'destroy']]);

# Espectacles
Route::resource('espectacles','EspectaclesController');
Route::resource('sales','SalesController');
Route::resource('cites', 'CitesController');
Route::resource('comunicacions', 'ComunicacionsController');
Route::resource('consums', 'ConsumsController');
Route::resource('incidencies', 'IncidenciesController');
Route::resource('observacions', 'ObservacionsController');

#Remember password

Route: Route::controller('password', 'RemindersController');




Route::group(array('before' => 'auth'), function()
{
	# Clients

	Route::get('/clients', ['as' => 'clients', 'uses' => 'ClientsController@index']);
	Route::resource('clients', 'ClientsController');

	# Reports and financials

	Route::get('/reports', ['as' => 'reports', 'uses' => 'PagesController@report'])->before('role:owner');

	# Profile
	Route::resource('profiles','ProfilesController', ['only' => ['show','update','edit']]);
	Route::get('/{profile}', ['as' => 'dashboard', 'uses' => 'ProfilesController@show']);
	Route::get('/profiles/{profile}/edit', 'ProfilesController@edit');
	Route::patch('/profiles/{profile}/edit', 'ProfilesController@store');

	#Users


});



