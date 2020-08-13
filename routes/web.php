<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/categories', function() {
	$c = \App\Models\Category::with('news')->get();
	dd($c);
});
Route::get('/', 'NewsController@index');
Route::get('/category/{category}', 'CategoryController@show')->name('category');
Route::get('/news/{id}.html', 'NewsController@show')
	->where('id', '\d+')
	->name('news');

//for admin
Route::group(['prefix' => 'admin'], function() {
  Route::get('/', 'Admin\IndexController@index')
	   ->name('admin');
  //news
  Route::resource('/news', 'Admin\NewsController');
});



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/collections', function() {
	$collection = collect([
		100,
		200,
		500,
		900,
		1200
	]);

	$collection->dd(1);
});