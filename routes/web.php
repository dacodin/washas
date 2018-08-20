<?php

use App\Service;

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

Auth::routes();
Route::resource('pages', 'PagesController');
Route::get('/', 'PagesController@index');
Route::get('/booking', 'PagesController@booking');

Route::get('register/verify/{token}', 'Auth\RegisterController@verify'); 
Route::get('/mail',function(){
	return view('/');
});

Route::get('/service/{id}/addons', function ($id) {
	$payload = Service::find($id)->addons;
	return response()->json(['payload' => $payload]);
});



// Route::get('/home', 'HomeController@index')->name('home');
