<?php
Auth::routes();

Route::get('/schedule', 'ScheduleController@index');
Route::get('/product_details/{product}', 'ProductsController@index');

Route::group(['middleware' => ['auth']], function () {
	Route::view('/adminpanel', 'admin.adminpanel');
	Route::get('/add', 'ProductsController@create');
	Route::post('/addproject', 'ProductsController@store');

	Route::get('/adminpanel/schedules', 'ScheduleController@schedule');
	Route::get('/adminpanel/calls', 'ScheduleController@call');
});

Route::get('send_test_email', 'HomeController@send_test_email');
// Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');

Route::redirect('/home','/');

Route::post('/send_schedule', 'ScheduleController@send_me_schedule');
Route::post('/send_call', 'ScheduleController@send_me_call');
