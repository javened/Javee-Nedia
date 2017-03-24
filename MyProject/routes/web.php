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
//route for showing
Route::prefix('Show')->group(function(){
	Route::get('/Grades/{cid}/{id}', 'Show@showGrades');//
	Route::get('/Course/{id}', 'Show@showcourse');//
	Route::get('/Add-Student-Successful','Show@showAddStudentSuccessful');//
	Route::get('/Add-Student/{id}','Show@showAddStudent');//
	Route::get('/Add-Subject','Show@showAddSubject');//
	Route::get('/Add-Course','Show@showAddCourse');//
	Route::get('/Add-Subject/{id}','Show@showAddCourseSubject');//
});
// routes for adding
Route::prefix('Add')->group(function(){
	Route::post('/Student','Add@addstudent');//
	Route::post('/Subject','Add@addsubject');//
	Route::post('/Course','Add@addcourse');//
	Route::post('/Course-Subjects/{id}','Add@addcourse_subject');//
});
// routes for deleting
Route::prefix('Delete')->group(function(){
	Route::delete('Course-Subject/{id}','Delete@deletecs');//
	Route::delete('Subject/{id}','Delete@deletesubject');//
	Route::delete('Student/{id}','Delete@deletestudent');//
	Route::delete('Course/{id}','Delete@deletecourse');//
});
// routes for showing edit pages
Route::prefix('Edit')->group(function(){
	Route::get('/Grade/{cid}/{id}', 'Edit@editgrade');//
	Route::get('/Student/{id}', 'Edit@editstudent');//
	Route::get('/Subject/{id}', 'Edit@editsubject');//
	Route::get('/Course/{id}', 'Edit@editcourse');//
});
// routes for saving edits
Route::prefix('Save')->group(function(){
	Route::post('/Grade/{cid}/{id}','Save@saveGrade');//
	Route::post('/Student/{id}','Save@saveStudent');//
	Route::post('/Subject/{id}','Save@saveSubject');//
	Route::post('/Course/{id}','Save@saveCourse');//
});
Route::prefix('User')->group(function(){
	Route::get('/Home','process@index');
	Route::get('/Show/Course/{id}','process@course');
	Route::get('/Show/Grade/{id}','process@grade');
});
//routes for admin authentication
Route::prefix('admin')->group(function(){
	Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
});