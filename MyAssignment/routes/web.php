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

Route::get('/','Controller@getData');

Route::get('/', function(){
	return view('welcome');
});


Auth::routes();
Route::get('/Register', 'process@showRegistration');
// Route::get('/form', 'process@showform');
Route::post('/insert','process@insert');
// Route::get('/Project', 'process@home');
// Route::post('/Main','process@showProject');
// Route::post('/Compute','process@compute');
Route::get('/myhome', 'process@showhome');
Route::put('/myhome/{id}','process@foredit');
Route::get('/Edit/{id}', 'process@showedit');
Route::post('/myhome','process@addtable');
// Route::post('/Edit', 'process@foredit');
// Route::get('/home', 'process@showRegistration');
Route::delete('/delete/{id}','process@deletetable');


Route::get('/home', 'HomeController@index');


// Route::get('/',['as'=>'/','uses'=>'LoginContoller@getLogin']);
// Route::post('/login',['as'=>'login','uses'=>'LoginContoller@postLogin']);
// 	Route::get('/logout',['as'=>'logout','uses'=>'LoginContoller@getLogout']);


// Route::group(['middleware'=>['authen','roles']],function(){
// 	Route::get('/process',['as'=>'process','uses'=>'processContoller@process']);
// });

Auth::routes();

Route::prefix('admin')->group(function(){
	Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
});
