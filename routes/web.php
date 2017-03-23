<?php

Route::get('/' , 'BroadcastController@forGuest');
Route::get('/index',[
	'middleware'=>'auth',
	'uses' => 'BroadcastController@mylist'
	]);

Route::get('/show-schedule' , 'BroadcastController@showSchedule');
Route::post('/show-schedule' , 'BroadcastController@showSchedule');

Route::get('/auth/register','BroadcastController@register');
Route::get('/auth/login','BroadcastController@login');

Route::get('/schedule', 'BroadcastController@showSchedule');
Route::post('/add-schedule','BroadcastController@mylist');
Route::post('/done','BroadcastController@saveInfo');
Route::get('/done','BroadcastController@saveInfo');
Route::post('/add-info','BroadcastController@mylist');
Route::post('/edit/{id}' , 'BroadcastController@showUpdate');
Route::post('/delete/{id}' , 'BroadcastController@delete');
Route::post('/update' , 'BroadcastController@showEdit');








// Route::get('/', function () {
   // return view('welcome');
// });
Auth::routes();
Route::get('/home', 'HomeController@index');
Auth::routes();
Route::get('/home', 'HomeController@index');



Auth::routes();

Route::get('/home', 'HomeController@index');
