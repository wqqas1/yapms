<?php

Route::get('/', function () {
    return view('index');
});

Route::get('overview', function () {
    return view('overview');
});

Route::get('demo', function () {
    return view('demo');
});

Route::get('documentation', function () {
    return view('documentation');
});

Route::get('frequently-asked-questions', function () {
    return view('frequently_asked_questions');
});

Route::get('outline', function () {
    return view('outline');
});

Route::get('requested-features', function () {
    return view('requested_features');
});

Route::get('upcoming-changes', function () {
    return view('upcoming_changes');
});

Route::get('changelog', function () {
    return view('changelog');
});

Route::get('server-status', function () {
    return view('server_status');
});

Route::get('contact-us', function () {
    return view('contact_us');
});

Route::get('scheduled-maintenance', function () {
    return view('scheduled_maintenance');
});

Route::get('terms-and-conditions', function () {
    return view('terms_and_conditions');
});

Route::get('about-us', function () {
    return view('about_us');
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('testimonials', function () {
    return view('testimonials');
});

Route::get('privacy-policy', function () {
    return view('privacy_policy');
});

Auth::routes();

// TODO Sure, these could be resource routes, maybe refactor these eventually to trim it down
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
    Route::get('/accounts', 'AccountController@index')->name('accounts.index');
    Route::get('/accounts/create', 'AccountController@create')->name('accounts.create');
    Route::post('/accounts', 'AccountController@store')->name('accounts.store');
    Route::get('/accounts/{id}', 'AccountController@show')->name('accounts.show');
    Route::get('/accounts/{id}/edit', 'AccountController@edit')->name('accounts.edit');
    Route::post('/accounts/update', 'AccountController@update')->name('accounts.update');
    Route::get('/accounts/{id}/delete', 'AccountController@delete')->name('accounts.delete');

    Route::get('/agents', 'AgentController@index')->name('agents.index');
    Route::get('/agents/create', 'AgentController@create')->name('agents.create');
    Route::post('/agents', 'AgentController@store')->name('agents.store');
    Route::get('/agents/{id}', 'AgentController@show')->name('agents.show');
    Route::get('/agents/{id}/edit', 'AgentController@edit')->name('agents.edit');
    Route::post('/agents/update', 'AgentController@update')->name('agents.update');
    Route::get('/agents/{id}/delete', 'AgentController@delete')->name('agents.delete');

    Route::get('/amenities', 'AmenityController@index')->name('amenities.index');
    Route::get('/amenities/create', 'AmenityController@create')->name('amenities.create');
    Route::post('/amenities', 'AmenityController@store')->name('amenities.store');
    Route::get('/amenities/{id}', 'AmenityController@show')->name('amenities.show');
    Route::get('/amenities/{id}/edit', 'AmenityController@edit')->name('amenities.edit');
    Route::post('/amenities/update', 'AmenityController@update')->name('amenities.update');
    Route::get('/amenities/{id}/delete', 'AmenityController@delete')->name('amenities.delete');

    Route::get('/bookings', 'BookingController@index')->name('bookings.index');
    Route::get('/bookings/create', 'BookingController@create')->name('bookings.create');
    Route::post('/bookings', 'BookingController@store')->name('bookings.store');
    Route::get('/bookings/{id}', 'BookingController@show')->name('bookings.show');
    Route::get('/bookings/{id}/edit', 'BookingController@edit')->name('bookings.edit');
    Route::post('/bookings/update', 'BookingController@update')->name('bookings.update');
    Route::get('/bookings/{id}/delete', 'BookingController@delete')->name('bookings.delete');

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');

    Route::get('/documents', 'DocumentController@index')->name('documents.index');
    Route::get('/documents/create', 'DocumentController@create')->name('documents.create');
    Route::post('/documents', 'DocumentController@store')->name('documents.store');
    Route::get('/documents/{id}', 'DocumentController@show')->name('documents.show');
    Route::get('/documents/{id}/edit', 'DocumentController@edit')->name('documents.edit');
    Route::post('/documents/update', 'DocumentController@update')->name('documents.update');
    Route::get('/documents/{id}/delete', 'DocumentController@delete')->name('documents.delete');

    Route::get('/drips', 'DripController@index')->name('drips.index');
    Route::get('/drips/create', 'DripController@create')->name('drips.create');
    Route::post('/drips', 'DripController@store')->name('drips.store');
    Route::get('/drips/{id}', 'DripController@show')->name('drips.show');
    Route::get('/drips/{id}/edit', 'DripController@edit')->name('drips.edit');
    Route::post('/drips/update', 'DripController@update')->name('drips.update');
    Route::get('/drips/{id}/delete', 'DripController@delete')->name('drips.delete');

    Route::get('/fees', 'FeeController@index')->name('fees.index');
    Route::get('/fees/create', 'FeeController@create')->name('fees.create');
    Route::post('/fees', 'FeeController@store')->name('fees.store');
    Route::get('/fees/{id}', 'FeeController@show')->name('fees.show');
    Route::get('/fees/{id}/edit', 'FeeController@edit')->name('fees.edit');
    Route::post('/fees/update', 'FeeController@update')->name('fees.update');
    Route::get('/fees/{id}/delete', 'FeeController@delete')->name('fees.delete');

    Route::get('/guests', 'GuestController@index')->name('guests.index');
    Route::get('/guests/create', 'GuestController@create')->name('guests.create');
    Route::post('/guests', 'GuestController@store')->name('guests.store');
    Route::get('/guests/{id}', 'GuestController@show')->name('guests.show');
    Route::get('/guests/{id}/edit', 'GuestController@edit')->name('guests.edit');
    Route::post('/guests/update', 'GuestController@update')->name('guests.update');
    Route::get('/guests/{id}/delete', 'GuestController@delete')->name('guests.delete');

    Route::get('/leads', 'LeadController@index')->name('leads.index');
    Route::get('/leads/create', 'LeadController@create')->name('leads.create');
    Route::post('/leads', 'LeadController@store')->name('leads.store');
    Route::get('/leads/{id}', 'LeadController@show')->name('leads.show');
    Route::get('/leads/{id}/edit', 'LeadController@edit')->name('leads.edit');
    Route::post('/leads/update', 'LeadController@update')->name('leads.update');
    Route::get('/leads/{id}/delete', 'LeadController@delete')->name('leads.delete');

    Route::get('/messages', 'MessageController@index')->name('messages.index');
    Route::get('/messages/create', 'MessageController@create')->name('messages.create');
    Route::post('/messages', 'MessageController@store')->name('messages.store');
    Route::get('/messages/{id}', 'MessageController@show')->name('messages.show');
    Route::get('/messages/{id}/edit', 'MessageController@edit')->name('messages.edit');
    Route::post('/messages/update', 'MessageController@update')->name('messages.update');
    Route::get('/messages/{id}/delete', 'MessageController@delete')->name('messages.delete');

    Route::get('/owners', 'OwnerController@index')->name('owners.index');
    Route::get('/owners/create', 'OwnerController@create')->name('owners.create');
    Route::post('/owners', 'OwnerController@store')->name('owners.store');
    Route::get('/owners/{id}', 'OwnerController@show')->name('owners.show');
    Route::get('/owners/{id}/edit', 'OwnerController@edit')->name('owners.edit');
    Route::post('/owners/update', 'OwnerController@update')->name('owners.update');
    Route::get('/owners/{id}/delete', 'OwnerController@delete')->name('owners.delete');

    Route::get('/promos', 'PromoController@index')->name('promos.index');
    Route::get('/promos/create', 'PromoController@create')->name('promos.create');
    Route::post('/promos', 'PromoController@store')->name('promos.store');
    Route::get('/promos/{id}', 'PromoController@show')->name('promos.show');
    Route::get('/promos/{id}/edit', 'PromoController@edit')->name('promos.edit');
    Route::post('/promos/update', 'PromoController@update')->name('promos.update');
    Route::get('/promos/{id}/delete', 'PromoController@delete')->name('promos.delete');

    Route::get('/property-amenities', 'PropertyAmenityController@index')->name('property-amenities.index');
    Route::get('/property-amenities/create', 'PropertyAmenityController@create')->name('property-amenities.create');
    Route::post('/property-amenities', 'PropertyAmenityController@store')->name('property-amenities.store');
    Route::get('/property-amenities/{id}', 'PropertyAmenityController@show')->name('property-amenities.show');
    Route::get('/property-amenities/{id}/edit', 'PropertyAmenityController@edit')->name('property-amenities.edit');
    Route::post('/property-amenities/update', 'PropertyAmenityController@update')->name('property-amenities.update');
    Route::get('/property-amenities/{id}/delete', 'PropertyAmenityController@delete')->name('property-amenities.delete');

    Route::get('/properties', 'PropertyController@index')->name('properties.index');
    Route::get('/properties/create', 'PropertyController@create')->name('properties.create');
    Route::post('/properties', 'PropertyController@store')->name('properties.store');
    Route::get('/properties/{id}', 'PropertyController@show')->name('properties.show');
    Route::get('/properties/{id}/edit', 'PropertyController@edit')->name('properties.edit');
    Route::post('/properties/update', 'PropertyController@update')->name('properties.update');
    Route::get('/properties/{id}/delete', 'PropertyController@delete')->name('properties.delete');

    Route::get('/property-images', 'PropertyImageController@index')->name('property-images.index');
    Route::get('/property-images/create', 'PropertyImageController@create')->name('property-images.create');
    Route::post('/property-images', 'PropertyImageController@store')->name('property-images.store');
    Route::get('/property-images/{id}', 'PropertyImageController@show')->name('property-images.show');
    Route::get('/property-images/{id}/edit', 'PropertyImageController@edit')->name('property-images.edit');
    Route::post('/property-images/update', 'PropertyImageController@update')->name('property-images.update');
    Route::get('/property-images/{id}/delete', 'PropertyImageController@delete')->name('property-images.delete');

    Route::get('/property-promos', 'PropertyPromoController@index')->name('property-promos.index');
    Route::get('/property-promos/create', 'PropertyPromoController@create')->name('property-promos.create');
    Route::post('/property-promos', 'PropertyPromoController@store')->name('property-promos.store');
    Route::get('/property-promos/{id}', 'PropertyPromoController@show')->name('property-promos.show');
    Route::get('/property-promos/{id}/edit', 'PropertyPromoController@edit')->name('property-promos.edit');
    Route::post('/property-promos/update', 'PropertyPromoController@update')->name('property-promos.update');
    Route::get('/property-promos/{id}/delete', 'PropertyPromoController@delete')->name('property-promos.delete');

    Route::get('/property-rates', 'PropertyRateController@index')->name('property-rates.index');
    Route::get('/property-rates/create', 'PropertyRateController@create')->name('property-rates.create');
    Route::post('/property-rates', 'PropertyRateController@store')->name('property-rates.store');
    Route::get('/property-rates/{id}', 'PropertyRateController@show')->name('property-rates.show');
    Route::get('/property-rates/{id}/edit', 'PropertyRateController@edit')->name('property-rates.edit');
    Route::post('/property-rates/update', 'PropertyRateController@update')->name('property-rates.update');
    Route::get('/property-rates/{id}/delete', 'PropertyRateController@delete')->name('property-rates.delete');

    Route::get('/rates', 'RateController@index')->name('rates.index');
    Route::get('/rates/create', 'RateController@create')->name('rates.create');
    Route::post('/rates', 'RateController@store')->name('rates.store');
    Route::get('/rates/{id}', 'RateController@show')->name('rates.show');
    Route::get('/rates/{id}/edit', 'RateController@edit')->name('rates.edit');
    Route::post('/rates/update', 'RateController@update')->name('rates.update');
    Route::get('/rates/{id}/delete', 'RateController@delete')->name('rates.delete');

    Route::get('/reports', 'ReportController@index')->name('reports.index');
    Route::get('/reports/create', 'ReportController@create')->name('reports.create');
    Route::post('/reports', 'ReportController@store')->name('reports.store');
    Route::get('/reports/{id}', 'ReportController@show')->name('reports.show');
    Route::get('/reports/{id}/edit', 'ReportController@edit')->name('reports.edit');
    Route::post('/reports/update', 'ReportController@update')->name('reports.update');
    Route::get('/reports/{id}/delete', 'ReportController@delete')->name('reports.delete');

    Route::get('/reviews', 'ReviewController@index')->name('reviews.index');
    Route::get('/reviews/create', 'ReviewController@create')->name('reviews.create');
    Route::post('/reviews', 'ReviewController@store')->name('reviews.store');
    Route::get('/reviews/{id}', 'ReviewController@show')->name('reviews.show');
    Route::get('/reviews/{id}/edit', 'ReviewController@edit')->name('reviews.edit');
    Route::post('/reviews/update', 'ReviewController@update')->name('reviews.update');
    Route::get('/reviews/{id}/delete', 'ReviewController@delete')->name('reviews.delete');

    Route::get('/support', 'SupportController@index')->name('support.index');
    Route::get('/support/create', 'SupportController@create')->name('support.create');
    Route::post('/support', 'SupportController@store')->name('support.store');
    Route::get('/support/{id}', 'SupportController@show')->name('support.show');
    Route::get('/support/{id}/edit', 'SupportController@edit')->name('support.edit');
    Route::post('/support/update', 'SupportController@update')->name('support.update');
    Route::get('/support/{id}/delete', 'SupportController@delete')->name('support.delete');

    Route::get('/taxes', 'TaxController@index')->name('taxes.index');
    Route::get('/taxes/create', 'TaxController@create')->name('taxes.create');
    Route::post('/taxes', 'TaxController@store')->name('taxes.store');
    Route::get('/taxes/{id}', 'TaxController@show')->name('taxes.show');
    Route::get('/taxes/{id}/edit', 'TaxController@edit')->name('taxes.edit');
    Route::post('/taxes/update', 'TaxController@update')->name('taxes.update');
    Route::get('/taxes/{id}/delete', 'TaxController@delete')->name('taxes.delete');

    Route::get('/vendors', 'VendorController@index')->name('vendors.index');
    Route::get('/vendors/create', 'VendorController@create')->name('vendors.create');
    Route::post('/vendors', 'VendorController@store')->name('vendors.store');
    Route::get('/vendors/{id}', 'VendorController@show')->name('vendors.show');
    Route::get('/vendors/{id}/edit', 'VendorController@edit')->name('vendors.edit');
    Route::post('/vendors/update', 'VendorController@update')->name('vendors.update');
    Route::get('/vendors/{id}/delete', 'VendorController@delete')->name('vendors.delete');

    Route::get('/work-orders', 'WorkOrderController@index')->name('work-orders.index');
    Route::get('/work-orders/create', 'WorkOrderController@create')->name('work-orders.create');
    Route::post('/work-orders', 'WorkOrderController@store')->name('work-orders.store');
    Route::get('/work-orders/{id}', 'WorkOrderController@show')->name('work-orders.show');
    Route::get('/work-orders/{id}/edit', 'WorkOrderController@edit')->name('work-orders.edit');
    Route::post('/work-orders/update', 'WorkOrderController@update')->name('work-orders.update');
    Route::get('/work-orders/{id}/delete', 'WorkOrderController@delete')->name('work-orders.delete');
});
