<?php
Auth::routes();

Route::get('/schedule', 'ScheduleController@index');
Route::get('/product_details/{product}', 'ProductsController@index');

Route::group(['middleware' => ['auth']], function () {
	Route::view('/adminpanel', 'admin.adminpanel');
	Route::get('/add', 'ProductsController@create');
	Route::post('/addproject', 'ProductsController@store');
});

Route::get('send_test_email', 'HomeController@send_test_email');
Route::get('/home', 'HomeController@index');
// Route::get('/', 'HomeController@index');

Route::redirect('/','/home');
