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
//Route::get('/', function () { return redirect('/home'); })->name('login');

Route::get('/', function () {
	    return view('welcome');
});

Auth::routes();

/*
	User ログイン後
*/

Route::group(['middleware' => 'auth:user'], function() {
	    Route::get('/home', 'HomeController@index')->name('home');
});

/*
	Admin 認証不要
*/

Route::group(['prefix' => 'admin'], function() {
	Route::get('/', function () { return redirect('/admin/home'); });
	Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
	Route::post('login', 'Admin\LoginController@login');
});

/*
	Admin ログイン後
*/

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
	    Route::post('logout',   'Admin\LoginController@logout')->name('admin.logout');
		    Route::get('home',      'Admin\HomeController@index')->name('admin.home');
});


/*

Route::get('/', 'ItemController@index')->name('item.index');

<<<<<<< HEAD
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');

Route::get('/detail', 'ItemController@detail')->name('item.detail');
=======
>>>>>>> parent of 94db6c5... task32 complete

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

use App\Item;
