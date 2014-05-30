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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/jerome', function()
{
	return 'Jerome';
});
Route::resource('/blog', 'BlogController');

Route::get('login', array('uses' => 'HomeController@showLogin'));

Route::post('login', array('uses' => 'HomeController@doLogin'));

Route::get('logout', array('uses' => 'HomeController@doLogout'));

/*
Route::get('/eloquent', function()
{
	$names = Name::find(2);
	return $names->name;
});
Route::get('/dbmysql', function()
{
	$posts = DB::table('posts')->where('id','!=',3)->get();
	dd($posts);
});
Route::get('/view', 'TestController@view');
Route::get('/view2', 'TestController@view2');
*/
/*Route::get('/view3', function()
{
	return View::make('view3');
});

https://github.com/rendonjerome14/simple-laravel-crud.gitRoute::get('/about', function()
{
	$data  = array(
		'firstname' => 'Jerome',
		'lastname' => 'Rendon'
	);
	return View::make('about', $data);
});

Route::get('/view', function()
{
	$view = View::make('view');
	$view->x = 'Hello';
	$view->y = 'World';

	return $view;
});

Route::get('/view2', function()
{
	//$data  = array(
	//	'firstname' => 'Jun',
	//	'lastname' => 'Rendon'
	//);
	return View::make('view2', array(
		'items' => array('item1','item2','item3','item4')
	));
});*/
