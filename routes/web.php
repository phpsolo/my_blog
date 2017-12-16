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

Route::namespace('Home')->group(function () {
	// Route::get('/Home/Login', 'LoginController@index');
	// Route::get('/Home/Register', 'LoginController@Register');
	// Route::post('/Home/doRegister', 'LoginController@doRegister');
	// Route::post('/Home/doLogin', 'LoginController@doLogin');
	// Route::get('/Home/buildCode', 'LoginController@buildCode');
	Route::get('/Home/Index/index', 'IndexController@index');
	Route::get('/Home/Index', 'IndexController@index');
	Route::get('/Home', 'IndexController@index');
	Route::get('/', 'IndexController@index');
});

Route::namespace('Admin')->group(function () {
	Route::get('/Admin/Index/shops_index', 'IndexController@shops_index');
	Route::get('/Admin/Index/index', 'IndexController@index');
	Route::get('/Admin/Index', 'IndexController@index');
	Route::get('/Admin', 'IndexController@index');
	Route::get('/Admin/Article/index', 'ArticleController@index');
	Route::get('/Admin/Article/create', 'ArticleController@create');
	Route::post('/Admin/Article/doCreate', 'ArticleController@doCreate');
	Route::get('/Admin/User/index', 'UserController@index');
	Route::get('/Admin/User/create', 'UserController@create');
	Route::post('/Admin/User/create', 'UserController@create');
	Route::get('/Admin/Assess/index', 'AssessController@index');
	Route::get('/Admin/Type/index', 'TypeController@index');
	Route::get('/Admin/Type/create', 'TypeController@create');
	Route::post('/Admin/Type/doCreate', 'TypeController@doCreate');
});
