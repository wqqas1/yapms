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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/accounts', 'AccountController@index')->name('accounts.index');
Route::get('/admin/accounts/create', 'AccountController@create')->name('accounts.create');
Route::post('/admin/accounts', 'AccountController@store')->name('accounts.store');
Route::get('/admin/accounts/{id}', 'AccountController@show')->name('accounts.show');
Route::get('/admin/accounts/{id}/edit', 'AccountController@edit')->name('accounts.edit');
Route::put('/admin/accounts/{id}', 'AccountController@update')->name('accounts.update');
Route::delete('/admin/accounts/{id}', 'AccountController@delete')->name('accounts.delete');

Route::get('/admin/agents', 'AgentController@index')->name('agents.index');
Route::get('/admin/agents/create', 'AgentController@create')->name('agents.create');
Route::post('/admin/agents', 'AgentController@store')->name('agents.store');
Route::get('/admin/agents/{id}', 'AgentController@show')->name('agents.show');
Route::get('/admin/agents/{id}/edit', 'AgentController@edit')->name('agents.edit');
Route::put('/admin/agents/{id}', 'AgentController@update')->name('agents.update');
Route::delete('/admin/agents/{id}', 'AgentController@delete')->name('agents.delete');

Route::get('/admin/amenities', 'AmenityController@index')->name('amenities.index');
Route::get('/admin/amenities/create', 'AmenityController@create')->name('amenities.create');
Route::post('/admin/amenities', 'AmenityController@store')->name('amenities.store');
Route::get('/admin/amenities/{id}', 'AmenityController@show')->name('amenities.show');
Route::get('/admin/amenities/{id}/edit', 'AmenityController@edit')->name('amenities.edit');
Route::put('/admin/amenities/{id}', 'AmenityController@update')->name('amenities.update');
Route::delete('/admin/amenities/{id}', 'AmenityController@delete')->name('amenities.delete');

Route::get('/admin/bookings', 'BookingController@index')->name('bookings.index');
Route::get('/admin/bookings/create', 'BookingController@create')->name('bookings.create');
Route::post('/admin/bookings', 'BookingController@store')->name('bookings.store');
Route::get('/admin/bookings/{id}', 'BookingController@show')->name('bookings.show');
Route::get('/admin/bookings/{id}/edit', 'BookingController@edit')->name('bookings.edit');
Route::put('/admin/bookings/{id}', 'BookingController@update')->name('bookings.update');
Route::delete('/admin/bookings/{id}', 'BookingController@delete')->name('bookings.delete');

Route::get('/admin/dashboard', 'DashboardController@index')->name('dashboard.index');

Route::get('/admin/documents', 'DocumentController@index')->name('documents.index');
Route::get('/admin/documents/create', 'DocumentController@create')->name('documents.create');
Route::post('/admin/documents', 'DocumentController@store')->name('documents.store');
Route::get('/admin/documents/{id}', 'DocumentController@show')->name('documents.show');
Route::get('/admin/documents/{id}/edit', 'DocumentController@edit')->name('documents.edit');
Route::put('/admin/documents/{id}', 'DocumentController@update')->name('documents.update');
Route::delete('/admin/documents/{id}', 'DocumentController@delete')->name('documents.delete');

Route::get('/admin/drips', 'DripController@index')->name('drips.index');
Route::get('/admin/drips/create', 'DripController@create')->name('drips.create');
Route::post('/admin/drips', 'DripController@store')->name('drips.store');
Route::get('/admin/drips/{id}', 'DripController@show')->name('drips.show');
Route::get('/admin/drips/{id}/edit', 'DripController@edit')->name('drips.edit');
Route::put('/admin/drips/{id}', 'DripController@update')->name('drips.update');
Route::delete('/admin/drips/{id}', 'DripController@delete')->name('drips.delete');

Route::get('/admin/fees', 'FeeController@index')->name('fees.index');
Route::get('/admin/fees/create', 'FeeController@create')->name('fees.create');
Route::post('/admin/fees', 'FeeController@store')->name('fees.store');
Route::get('/admin/fees/{id}', 'FeeController@show')->name('fees.show');
Route::get('/admin/fees/{id}/edit', 'FeeController@edit')->name('fees.edit');
Route::put('/admin/fees/{id}', 'FeeController@update')->name('fees.update');
Route::delete('/admin/fees/{id}', 'FeeController@delete')->name('fees.delete');

Route::get('/admin/guests', 'GuestController@index')->name('guests.index');
Route::get('/admin/guests/create', 'GuestController@create')->name('guests.create');
Route::post('/admin/guests', 'GuestController@store')->name('guests.store');
Route::get('/admin/guests/{id}', 'GuestController@show')->name('guests.show');
Route::get('/admin/guests/{id}/edit', 'GuestController@edit')->name('guests.edit');
Route::put('/admin/guests/{id}', 'GuestController@update')->name('guests.update');
Route::delete('/admin/guests/{id}', 'GuestController@delete')->name('guests.delete');

Route::get('/admin/leads', 'LeadController@index')->name('leads.index');
Route::get('/admin/leads/create', 'LeadController@create')->name('leads.create');
Route::post('/admin/leads', 'LeadController@store')->name('leads.store');
Route::get('/admin/leads/{id}', 'LeadController@show')->name('leads.show');
Route::get('/admin/leads/{id}/edit', 'LeadController@edit')->name('leads.edit');
Route::put('/admin/leads/{id}', 'LeadController@update')->name('leads.update');
Route::delete('/admin/leads/{id}', 'LeadController@delete')->name('leads.delete');

Route::get('/admin/messages', 'MessageController@index')->name('messages.index');
Route::get('/admin/messages/create', 'MessageController@create')->name('messages.create');
Route::post('/admin/messages', 'MessageController@store')->name('messages.store');
Route::get('/admin/messages/{id}', 'MessageController@show')->name('messages.show');
Route::get('/admin/messages/{id}/edit', 'MessageController@edit')->name('messages.edit');
Route::put('/admin/messages/{id}', 'MessageController@update')->name('messages.update');
Route::delete('/admin/messages/{id}', 'MessageController@delete')->name('messages.delete');

Route::get('/admin/owners', 'OwnerController@index')->name('owners.index');
Route::get('/admin/owners/create', 'OwnerController@create')->name('owners.create');
Route::post('/admin/owners', 'OwnerController@store')->name('owners.store');
Route::get('/admin/owners/{id}', 'OwnerController@show')->name('owners.show');
Route::get('/admin/owners/{id}/edit', 'OwnerController@edit')->name('owners.edit');
Route::put('/admin/owners/{id}', 'OwnerController@update')->name('owners.update');
Route::delete('/admin/owners/{id}', 'OwnerController@delete')->name('owners.delete');

Route::get('/admin/promos', 'PromoController@index')->name('promos.index');
Route::get('/admin/promos/create', 'PromoController@create')->name('promos.create');
Route::post('/admin/promos', 'PromoController@store')->name('promos.store');
Route::get('/admin/promos/{id}', 'PromoController@show')->name('promos.show');
Route::get('/admin/promos/{id}/edit', 'PromoController@edit')->name('promos.edit');
Route::put('/admin/promos/{id}', 'PromoController@update')->name('promos.update');
Route::delete('/admin/promos/{id}', 'PromoController@delete')->name('promos.delete');

Route::get('/admin/properties', 'PropertyController@index')->name('properties.index');
Route::get('/admin/properties/create', 'PropertyController@create')->name('properties.create');
Route::post('/admin/properties', 'PropertyController@store')->name('properties.store');
Route::get('/admin/properties/{id}', 'PropertyController@show')->name('properties.show');
Route::get('/admin/properties/{id}/edit', 'PropertyController@edit')->name('properties.edit');
Route::put('/admin/properties/{id}', 'PropertyController@update')->name('properties.update');
Route::delete('/admin/properties/{id}', 'PropertyController@delete')->name('properties.delete');

Route::get('/admin/property-amenities', 'PropertyAmenityController@index')->name('property_amenities.index');
Route::get('/admin/property-amenities/create', 'PropertyAmenityController@create')->name('property_amenities.create');
Route::post('/admin/property-amenities', 'PropertyAmenityController@store')->name('property_amenities.store');
Route::get('/admin/property-amenities/{id}', 'PropertyAmenityController@show')->name('property_amenities.show');
Route::get('/admin/property-amenities/{id}/edit', 'PropertyAmenityController@edit')->name('property_amenities.edit');
Route::put('/admin/property-amenities/{id}', 'PropertyAmenityController@update')->name('property_amenities.update');
Route::delete('/admin/property-amenities/{id}', 'PropertyAmenityController@delete')->name('property_amenities.delete');

Route::get('/admin/property-images', 'PropertyImageController@index')->name('property_images.index');
Route::get('/admin/property-images/create', 'PropertyImageController@create')->name('property_images.create');
Route::post('/admin/property-images', 'PropertyImageController@store')->name('property_images.store');
Route::get('/admin/property-images/{id}', 'PropertyImageController@show')->name('property_images.show');
Route::get('/admin/property-images/{id}/edit', 'PropertyImageController@edit')->name('property_images.edit');
Route::put('/admin/property-images/{id}', 'PropertyImageController@update')->name('property_images.update');
Route::delete('/admin/property-images/{id}', 'PropertyImageController@delete')->name('property_images.delete');

Route::get('/admin/property-promos', 'PropertyPromoController@index')->name('property_promos.index');
Route::get('/admin/property-promos/create', 'PropertyPromoController@create')->name('property_promos.create');
Route::post('/admin/property-promos', 'PropertyPromoController@store')->name('property_promos.store');
Route::get('/admin/property-promos/{id}', 'PropertyPromoController@show')->name('property_promos.show');
Route::get('/admin/property-promos/{id}/edit', 'PropertyPromoController@edit')->name('property_promos.edit');
Route::put('/admin/property-promos/{id}', 'PropertyPromoController@update')->name('property_promos.update');
Route::delete('/admin/property-promos/{id}', 'PropertyPromoController@delete')->name('property_promos.delete');

Route::get('/admin/property-rates', 'PropertyRateController@index')->name('property_rates.index');
Route::get('/admin/property-rates/create', 'PropertyRateController@create')->name('property_rates.create');
Route::post('/admin/property-rates', 'PropertyRateController@store')->name('property_rates.store');
Route::get('/admin/property-rates/{id}', 'PropertyRateController@show')->name('property_rates.show');
Route::get('/admin/property-rates/{id}/edit', 'PropertyRateController@edit')->name('property_rates.edit');
Route::put('/admin/property-rates/{id}', 'PropertyRateController@update')->name('property_rates.update');
Route::delete('/admin/property-rates/{id}', 'PropertyRateController@delete')->name('property_rates.delete');

Route::get('/admin/rates', 'RateController@index')->name('rates.index');
Route::get('/admin/rates/create', 'RateController@create')->name('rates.create');
Route::post('/admin/rates', 'RateController@store')->name('rates.store');
Route::get('/admin/rates/{id}', 'RateController@show')->name('rates.show');
Route::get('/admin/rates/{id}/edit', 'RateController@edit')->name('rates.edit');
Route::put('/admin/rates/{id}', 'RateController@update')->name('rates.update');
Route::delete('/admin/rates/{id}', 'RateController@delete')->name('rates.delete');

Route::get('/admin/reports', 'ReportController@index')->name('reports.index');
Route::get('/admin/reports/create', 'ReportController@create')->name('reports.create');
Route::post('/admin/reports', 'ReportController@store')->name('reports.store');
Route::get('/admin/reports/{id}', 'ReportController@show')->name('reports.show');
Route::get('/admin/reports/{id}/edit', 'ReportController@edit')->name('reports.edit');
Route::put('/admin/reports/{id}', 'ReportController@update')->name('reports.update');
Route::delete('/admin/reports/{id}', 'ReportController@delete')->name('reports.delete');

Route::get('/admin/reviews', 'ReviewController@index')->name('reviews.index');
Route::get('/admin/reviews/create', 'ReviewController@create')->name('reviews.create');
Route::post('/admin/reviews', 'ReviewController@store')->name('reviews.store');
Route::get('/admin/reviews/{id}', 'ReviewController@show')->name('reviews.show');
Route::get('/admin/reviews/{id}/edit', 'ReviewController@edit')->name('reviews.edit');
Route::put('/admin/reviews/{id}', 'ReviewController@update')->name('reviews.update');
Route::delete('/admin/reviews/{id}', 'ReviewController@delete')->name('reviews.delete');

Route::get('/admin/support', 'SupportController@index')->name('support.index');
Route::get('/admin/support/create', 'SupportController@create')->name('support.create');
Route::post('/admin/support', 'SupportController@store')->name('support.store');
Route::get('/admin/support/{id}', 'SupportController@show')->name('support.show');
Route::get('/admin/support/{id}/edit', 'SupportController@edit')->name('support.edit');
Route::put('/admin/support/{id}', 'SupportController@update')->name('support.update');
Route::delete('/admin/support/{id}', 'SupportController@delete')->name('support.delete');

Route::get('/admin/taxes', 'TaxController@index')->name('taxes.index');
Route::get('/admin/taxes/create', 'TaxController@create')->name('taxes.create');
Route::post('/admin/taxes', 'TaxController@store')->name('taxes.store');
Route::get('/admin/taxes/{id}', 'TaxController@show')->name('taxes.show');
Route::get('/admin/taxes/{id}/edit', 'TaxController@edit')->name('taxes.edit');
Route::put('/admin/taxes/{id}', 'TaxController@update')->name('taxes.update');
Route::delete('/admin/taxes/{id}', 'TaxController@delete')->name('taxes.delete');

Route::get('/admin/vendors', 'VendorController@index')->name('vendors.index');
Route::get('/admin/vendors/create', 'VendorController@create')->name('vendors.create');
Route::post('/admin/vendors', 'VendorController@store')->name('vendors.store');
Route::get('/admin/vendors/{id}', 'VendorController@show')->name('vendors.show');
Route::get('/admin/vendors/{id}/edit', 'VendorController@edit')->name('vendors.edit');
Route::put('/admin/vendors/{id}', 'VendorController@update')->name('vendors.update');
Route::delete('/admin/vendors/{id}', 'VendorController@delete')->name('vendors.delete');

Route::get('/admin/work-orders', 'WorkOrderController@index')->name('work_orders.index');
Route::get('/admin/work-orders/create', 'WorkOrderController@create')->name('work_orders.create');
Route::post('/admin/work-orders', 'WorkOrderController@store')->name('work_orders.store');
Route::get('/admin/work-orders/{id}', 'WorkOrderController@show')->name('work_orders.show');
Route::get('/admin/work-orders/{id}/edit', 'WorkOrderController@edit')->name('work_orders.edit');
Route::put('/admin/work-orders/{id}', 'WorkOrderController@update')->name('work_orders.update');
Route::delete('/admin/work-orders/{id}', 'WorkOrderController@delete')->name('work_orders.delete');
