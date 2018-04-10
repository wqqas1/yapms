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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/accounts', 'Admin\AccountController@index')->name('accounts.index');
Route::get('/admin/accounts/create', 'Admin\AccountController@create')->name('accounts.create');
Route::post('/admin/accounts', 'Admin\AccountController@store')->name('accounts.store');
Route::get('/admin/accounts/{id}', 'Admin\AccountController@show')->name('accounts.show');
Route::get('/admin/accounts/{id}/edit', 'Admin\AccountController@edit')->name('accounts.edit');
Route::put('/admin/accounts/{id}', 'Admin\AccountController@update')->name('accounts.update');
Route::delete('/admin/accounts/{id}', 'Admin\AccountController@delete')->name('accounts.delete');

Route::get('/admin/agents', 'Admin\AgentController@index')->name('agents.index');
Route::get('/admin/agents/create', 'Admin\AgentController@create')->name('agents.create');
Route::post('/admin/agents', 'Admin\AgentController@store')->name('agents.store');
Route::get('/admin/agents/{id}', 'Admin\AgentController@show')->name('agents.show');
Route::get('/admin/agents/{id}/edit', 'Admin\AgentController@edit')->name('agents.edit');
Route::put('/admin/agents/{id}', 'Admin\AgentController@update')->name('agents.update');
Route::delete('/admin/agents/{id}', 'Admin\AgentController@delete')->name('agents.delete');

Route::get('/admin/amenities', 'Admin\AmenityController@index')->name('amenities.index');
Route::get('/admin/amenities/create', 'Admin\AmenityController@create')->name('amenities.create');
Route::post('/admin/amenities', 'Admin\AmenityController@store')->name('amenities.store');
Route::get('/admin/amenities/{id}', 'Admin\AmenityController@show')->name('amenities.show');
Route::get('/admin/amenities/{id}/edit', 'Admin\AmenityController@edit')->name('amenities.edit');
Route::put('/admin/amenities/{id}', 'Admin\AmenityController@update')->name('amenities.update');
Route::delete('/admin/amenities/{id}', 'Admin\AmenityController@delete')->name('amenities.delete');

Route::get('/admin/bookings', 'Admin\BookingController@index')->name('bookings.index');
Route::get('/admin/bookings/create', 'Admin\BookingController@create')->name('bookings.create');
Route::post('/admin/bookings', 'Admin\BookingController@store')->name('bookings.store');
Route::get('/admin/bookings/{id}', 'Admin\BookingController@show')->name('bookings.show');
Route::get('/admin/bookings/{id}/edit', 'Admin\BookingController@edit')->name('bookings.edit');
Route::put('/admin/bookings/{id}', 'Admin\BookingController@update')->name('bookings.update');
Route::delete('/admin/bookings/{id}', 'Admin\BookingController@delete')->name('bookings.delete');

Route::get('/admin/dashboard', 'Admin\DashboardController@index')->name('dashboard.index');

Route::get('/admin/documents', 'Admin\DocumentController@index')->name('documents.index');
Route::get('/admin/documents/create', 'Admin\DocumentController@create')->name('documents.create');
Route::post('/admin/documents', 'Admin\DocumentController@store')->name('documents.store');
Route::get('/admin/documents/{id}', 'Admin\DocumentController@show')->name('documents.show');
Route::get('/admin/documents/{id}/edit', 'Admin\DocumentController@edit')->name('documents.edit');
Route::put('/admin/documents/{id}', 'Admin\DocumentController@update')->name('documents.update');
Route::delete('/admin/documents/{id}', 'Admin\DocumentController@delete')->name('documents.delete');
