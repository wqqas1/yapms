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

Route::get('/admin/drips', 'Admin\DripController@index')->name('drips.index');
Route::get('/admin/drips/create', 'Admin\DripController@create')->name('drips.create');
Route::post('/admin/drips', 'Admin\DripController@store')->name('drips.store');
Route::get('/admin/drips/{id}', 'Admin\DripController@show')->name('drips.show');
Route::get('/admin/drips/{id}/edit', 'Admin\DripController@edit')->name('drips.edit');
Route::put('/admin/drips/{id}', 'Admin\DripController@update')->name('drips.update');
Route::delete('/admin/drips/{id}', 'Admin\DripController@delete')->name('drips.delete');

Route::get('/admin/fees', 'Admin\FeeController@index')->name('fees.index');
Route::get('/admin/fees/create', 'Admin\FeeController@create')->name('fees.create');
Route::post('/admin/fees', 'Admin\FeeController@store')->name('fees.store');
Route::get('/admin/fees/{id}', 'Admin\FeeController@show')->name('fees.show');
Route::get('/admin/fees/{id}/edit', 'Admin\FeeController@edit')->name('fees.edit');
Route::put('/admin/fees/{id}', 'Admin\FeeController@update')->name('fees.update');
Route::delete('/admin/fees/{id}', 'Admin\FeeController@delete')->name('fees.delete');

Route::get('/admin/guests', 'Admin\GuestController@index')->name('guests.index');
Route::get('/admin/guests/create', 'Admin\GuestController@create')->name('guests.create');
Route::post('/admin/guests', 'Admin\GuestController@store')->name('guests.store');
Route::get('/admin/guests/{id}', 'Admin\GuestController@show')->name('guests.show');
Route::get('/admin/guests/{id}/edit', 'Admin\GuestController@edit')->name('guests.edit');
Route::put('/admin/guests/{id}', 'Admin\GuestController@update')->name('guests.update');
Route::delete('/admin/guests/{id}', 'Admin\GuestController@delete')->name('guests.delete');

Route::get('/admin/leads', 'Admin\LeadController@index')->name('leads.index');
Route::get('/admin/leads/create', 'Admin\LeadController@create')->name('leads.create');
Route::post('/admin/leads', 'Admin\LeadController@store')->name('leads.store');
Route::get('/admin/leads/{id}', 'Admin\LeadController@show')->name('leads.show');
Route::get('/admin/leads/{id}/edit', 'Admin\LeadController@edit')->name('leads.edit');
Route::put('/admin/leads/{id}', 'Admin\LeadController@update')->name('leads.update');
Route::delete('/admin/leads/{id}', 'Admin\LeadController@delete')->name('leads.delete');

Route::get('/admin/messages', 'Admin\MessageController@index')->name('messages.index');
Route::get('/admin/messages/create', 'Admin\MessageController@create')->name('messages.create');
Route::post('/admin/messages', 'Admin\MessageController@store')->name('messages.store');
Route::get('/admin/messages/{id}', 'Admin\MessageController@show')->name('messages.show');
Route::get('/admin/messages/{id}/edit', 'Admin\MessageController@edit')->name('messages.edit');
Route::put('/admin/messages/{id}', 'Admin\MessageController@update')->name('messages.update');
Route::delete('/admin/messages/{id}', 'Admin\MessageController@delete')->name('messages.delete');

Route::get('/admin/owners', 'Admin\OwnerController@index')->name('owners.index');
Route::get('/admin/owners/create', 'Admin\OwnerController@create')->name('owners.create');
Route::post('/admin/owners', 'Admin\OwnerController@store')->name('owners.store');
Route::get('/admin/owners/{id}', 'Admin\OwnerController@show')->name('owners.show');
Route::get('/admin/owners/{id}/edit', 'Admin\OwnerController@edit')->name('owners.edit');
Route::put('/admin/owners/{id}', 'Admin\OwnerController@update')->name('owners.update');
Route::delete('/admin/owners/{id}', 'Admin\OwnerController@delete')->name('owners.delete');

Route::get('/admin/promos', 'Admin\PromoController@index')->name('promos.index');
Route::get('/admin/promos/create', 'Admin\PromoController@create')->name('promos.create');
Route::post('/admin/promos', 'Admin\PromoController@store')->name('promos.store');
Route::get('/admin/promos/{id}', 'Admin\PromoController@show')->name('promos.show');
Route::get('/admin/promos/{id}/edit', 'Admin\PromoController@edit')->name('promos.edit');
Route::put('/admin/promos/{id}', 'Admin\PromoController@update')->name('promos.update');
Route::delete('/admin/promos/{id}', 'Admin\PromoController@delete')->name('promos.delete');

Route::get('/admin/properties', 'Admin\PropertyController@index')->name('properties.index');
Route::get('/admin/properties/create', 'Admin\PropertyController@create')->name('properties.create');
Route::post('/admin/properties', 'Admin\PropertyController@store')->name('properties.store');
Route::get('/admin/properties/{id}', 'Admin\PropertyController@show')->name('properties.show');
Route::get('/admin/properties/{id}/edit', 'Admin\PropertyController@edit')->name('properties.edit');
Route::put('/admin/properties/{id}', 'Admin\PropertyController@update')->name('properties.update');
Route::delete('/admin/properties/{id}', 'Admin\PropertyController@delete')->name('properties.delete');

Route::get('/admin/property-amenities', 'Admin\PropertyAmenityController@index')->name('property_amenities.index');
Route::get('/admin/property-amenities/create', 'Admin\PropertyAmenityController@create')->name('property_amenities.create');
Route::post('/admin/property-amenities', 'Admin\PropertyAmenityController@store')->name('property_amenities.store');
Route::get('/admin/property-amenities/{id}', 'Admin\PropertyAmenityController@show')->name('property_amenities.show');
Route::get('/admin/property-amenities/{id}/edit', 'Admin\PropertyAmenityController@edit')->name('property_amenities.edit');
Route::put('/admin/property-amenities/{id}', 'Admin\PropertyAmenityController@update')->name('property_amenities.update');
Route::delete('/admin/property-amenities/{id}', 'Admin\PropertyAmenityController@delete')->name('property_amenities.delete');

Route::get('/admin/property-images', 'Admin\PropertyImageController@index')->name('property_images.index');
Route::get('/admin/property-images/create', 'Admin\PropertyImageController@create')->name('property_images.create');
Route::post('/admin/property-images', 'Admin\PropertyImageController@store')->name('property_images.store');
Route::get('/admin/property-images/{id}', 'Admin\PropertyImageController@show')->name('property_images.show');
Route::get('/admin/property-images/{id}/edit', 'Admin\PropertyImageController@edit')->name('property_images.edit');
Route::put('/admin/property-images/{id}', 'Admin\PropertyImageController@update')->name('property_images.update');
Route::delete('/admin/property-images/{id}', 'Admin\PropertyImageController@delete')->name('property_images.delete');

Route::get('/admin/property-promos', 'Admin\PropertyPromoController@index')->name('property_promos.index');
Route::get('/admin/property-promos/create', 'Admin\PropertyPromoController@create')->name('property_promos.create');
Route::post('/admin/property-promos', 'Admin\PropertyPromoController@store')->name('property_promos.store');
Route::get('/admin/property-promos/{id}', 'Admin\PropertyPromoController@show')->name('property_promos.show');
Route::get('/admin/property-promos/{id}/edit', 'Admin\PropertyPromoController@edit')->name('property_promos.edit');
Route::put('/admin/property-promos/{id}', 'Admin\PropertyPromoController@update')->name('property_promos.update');
Route::delete('/admin/property-promos/{id}', 'Admin\PropertyPromoController@delete')->name('property_promos.delete');

Route::get('/admin/property-rates', 'Admin\PropertyRateController@index')->name('property_rates.index');
Route::get('/admin/property-rates/create', 'Admin\PropertyRateController@create')->name('property_rates.create');
Route::post('/admin/property-rates', 'Admin\PropertyRateController@store')->name('property_rates.store');
Route::get('/admin/property-rates/{id}', 'Admin\PropertyRateController@show')->name('property_rates.show');
Route::get('/admin/property-rates/{id}/edit', 'Admin\PropertyRateController@edit')->name('property_rates.edit');
Route::put('/admin/property-rates/{id}', 'Admin\PropertyRateController@update')->name('property_rates.update');
Route::delete('/admin/property-rates/{id}', 'Admin\PropertyRateController@delete')->name('property_rates.delete');

Route::get('/admin/rates', 'Admin\RateController@index')->name('rates.index');
Route::get('/admin/rates/create', 'Admin\RateController@create')->name('rates.create');
Route::post('/admin/rates', 'Admin\RateController@store')->name('rates.store');
Route::get('/admin/rates/{id}', 'Admin\RateController@show')->name('rates.show');
Route::get('/admin/rates/{id}/edit', 'Admin\RateController@edit')->name('rates.edit');
Route::put('/admin/rates/{id}', 'Admin\RateController@update')->name('rates.update');
Route::delete('/admin/rates/{id}', 'Admin\RateController@delete')->name('rates.delete');

Route::get('/admin/reports', 'Admin\ReportController@index')->name('reports.index');
Route::get('/admin/reports/create', 'Admin\ReportController@create')->name('reports.create');
Route::post('/admin/reports', 'Admin\ReportController@store')->name('reports.store');
Route::get('/admin/reports/{id}', 'Admin\ReportController@show')->name('reports.show');
Route::get('/admin/reports/{id}/edit', 'Admin\ReportController@edit')->name('reports.edit');
Route::put('/admin/reports/{id}', 'Admin\ReportController@update')->name('reports.update');
Route::delete('/admin/reports/{id}', 'Admin\ReportController@delete')->name('reports.delete');

Route::get('/admin/reviews', 'Admin\ReviewController@index')->name('reviews.index');
Route::get('/admin/reviews/create', 'Admin\ReviewController@create')->name('reviews.create');
Route::post('/admin/reviews', 'Admin\ReviewController@store')->name('reviews.store');
Route::get('/admin/reviews/{id}', 'Admin\ReviewController@show')->name('reviews.show');
Route::get('/admin/reviews/{id}/edit', 'Admin\ReviewController@edit')->name('reviews.edit');
Route::put('/admin/reviews/{id}', 'Admin\ReviewController@update')->name('reviews.update');
Route::delete('/admin/reviews/{id}', 'Admin\ReviewController@delete')->name('reviews.delete');

Route::get('/admin/support', 'Admin\SupportController@index')->name('support.index');
Route::get('/admin/support/create', 'Admin\SupportController@create')->name('support.create');
Route::post('/admin/support', 'Admin\SupportController@store')->name('support.store');
Route::get('/admin/support/{id}', 'Admin\SupportController@show')->name('support.show');
Route::get('/admin/support/{id}/edit', 'Admin\SupportController@edit')->name('support.edit');
Route::put('/admin/support/{id}', 'Admin\SupportController@update')->name('support.update');
Route::delete('/admin/support/{id}', 'Admin\SupportController@delete')->name('support.delete');

Route::get('/admin/taxes', 'Admin\TaxController@index')->name('taxes.index');
Route::get('/admin/taxes/create', 'Admin\TaxController@create')->name('taxes.create');
Route::post('/admin/taxes', 'Admin\TaxController@store')->name('taxes.store');
Route::get('/admin/taxes/{id}', 'Admin\TaxController@show')->name('taxes.show');
Route::get('/admin/taxes/{id}/edit', 'Admin\TaxController@edit')->name('taxes.edit');
Route::put('/admin/taxes/{id}', 'Admin\TaxController@update')->name('taxes.update');
Route::delete('/admin/taxes/{id}', 'Admin\TaxController@delete')->name('taxes.delete');

Route::get('/admin/vendors', 'Admin\VendorController@index')->name('vendors.index');
Route::get('/admin/vendors/create', 'Admin\VendorController@create')->name('vendors.create');
Route::post('/admin/vendors', 'Admin\VendorController@store')->name('vendors.store');
Route::get('/admin/vendors/{id}', 'Admin\VendorController@show')->name('vendors.show');
Route::get('/admin/vendors/{id}/edit', 'Admin\VendorController@edit')->name('vendors.edit');
Route::put('/admin/vendors/{id}', 'Admin\VendorController@update')->name('vendors.update');
Route::delete('/admin/vendors/{id}', 'Admin\VendorController@delete')->name('vendors.delete');

Route::get('/admin/work-orders', 'Admin\WorkOrderController@index')->name('work_orders.index');
Route::get('/admin/work-orders/create', 'Admin\WorkOrderController@create')->name('work_orders.create');
Route::post('/admin/work-orders', 'Admin\WorkOrderController@store')->name('work_orders.store');
Route::get('/admin/work-orders/{id}', 'Admin\WorkOrderController@show')->name('work_orders.show');
Route::get('/admin/work-orders/{id}/edit', 'Admin\WorkOrderController@edit')->name('work_orders.edit');
Route::put('/admin/work-orders/{id}', 'Admin\WorkOrderController@update')->name('work_orders.update');
Route::delete('/admin/work-orders/{id}', 'Admin\WorkOrderController@delete')->name('work_orders.delete');
