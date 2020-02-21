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
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', function () { return redirect('authentication'); });

/* Dashboard */
Route::get('dashboard', function () { return redirect('dashboard'); });
Route::get('dashboard', 'DashboardController@index')->name('dashboard');

/* Property categories */
Route::get('property/categories', 'PropertyCategoriesController@index')->name('property.categories');
Route::post('category/save', 'PropertyCategoriesController@store')->name('category.save');
Route::post('property/categories/&id={id}', 'PropertyCategoriesController@update')->name('property.category-update');


/* Property variations */
Route::get('property/variations', 'PropertyVariationsController@index')->name('property.variations');
Route::post('variation/save', 'PropertyVariationsController@store')->name('variation.save');
Route::post('property/variations/&id={id}', 'PropertyVariationsController@update')->name('property.variation-update');


/* Property */
Route::get('property/property-list', 'PropertyController@index')->name('property.property-list');
Route::get('property/propety-create', 'PropertyController@create')->name('property.property-create');
Route::post('property/save', 'PropertyController@store')->name('property.save');
Route::any('property/edit/&id={id}', 'PropertyController@edit')->name('property.property-edit');
Route::post('property/update/&id={id}', 'PropertyController@update')->name('property.property-update');
Route::post('property/add-variation-value/&id={id}', 'PropertyController@addMoreVariationValues')->name('property.add-variation-value');
Route::any('property/manage/&id={id}', 'PropertyController@manageProperty')->name('property.property-manage');
Route::get('property/get-variation-rooms', 'PropertyController@varRoomsSelector')->name('rooms.get-variation-rooms');
Route::get('property/get-variation-rented-rooms', 'PropertyController@varRentedRoomsSelector')->name('rooms.get-variation-rooms');
Route::get('property/get-variation-values', 'PropertyController@variationValuesSelector')->name('rooms.get-variation-values');

/* Rooms */
Route::get('rooms/rooms-list', 'RoomsController@index')->name('rooms.rooms-list');
Route::get('rooms/rooms-create', 'RoomsController@create')->name('rooms.rooms-create');
Route::get('rooms/get-variation-values', 'RoomsController@variationValuesSelector')->name('rooms.get-variation-values');
Route::post('rooms/save', 'RoomsController@store')->name('rooms.save');
Route::any('room/manage/&id={id}', 'RoomsController@manageRoom')->name('rooms.manage-room');
Route::post('rooms/update/&id={id}', 'RoomsController@update')->name('rooms.room-update');

/** Room assignments */
Route::get('assignments/room-assignments', 'RoomAssignmentController@index')->name('assignments.room-assignments');
Route::post('room/assign-room', 'RoomAssignmentController@store')->name('room.assign-room');
Route::post('room/add-tenant', 'RoomAssignmentController@addAnotherTenant')->name('room.add-tenant');

/** Room adjustments */
Route::get('rooms/room-adjustments', 'RoomAdjustmentController@index')->name('rooms.room-adjustments');
Route::post('rooms/room-adjustments/save', 'RoomAdjustmentController@store')->name('rooms.rooms-adjustments.save');

/** Tenants */
Route::get('tenants/tenants-list', 'TenantsController@index')->name('tenants.tenants-list');
Route::get('tenants/tenants-create', 'TenantsController@create')->name('tenants.tenants-create');
Route::post('tenants/save', 'TenantsController@store')->name('tenants.save');
Route::get('tenants/search-tenants', 'TenantsController@searchTenants')->name('tenants.search-tenants');
Route::any('tenant/manage/&id={id}', 'TenantsController@manageTenant')->name('tenants.tenants-manage');
Route::post('tenant/update/&id={id}', 'TenantsController@update')->name('tenants.tenant-update');
Route::post('tenant/unassign-room/&id={id}', 'TenantsController@unassignRoom')->name('tenants.unassign-room');

/** Rent payments */
Route::get('rent/payments', 'TransactionsController@index')->name('rent.payments');
Route::get('rent/processed-transactions', 'TransactionsController@processedPayments')->name('rent.processed-transactions');
Route::get('rent/pending-transactions', 'TransactionsController@pendingPayments')->name('rent.pending-transactions');
Route::get('rent/get-payment-rooms', 'PropertyController@getPaymentRooms')->name('rooms.get-payment-rooms');



/** Rent payments tracker */
Route::get('rent-payments/trackers', 'MonthlyPaymentController@index')->name('rent-payments.trackers');
Route::get('rent-payments/full-payments', 'MonthlyPaymentController@fullRentPayments')->name('rent-payments.full-payments');
Route::get('rent-payments/partial-payments', 'MonthlyPaymentController@partialRentPayments')->name('rent-payments.partial-payments');
Route::get('rent-payments/rent-arrears', 'MonthlyPaymentController@rentArrears')->name('rent-payments.rent-arrears');

/* Authentication */
Route::get('authentication', function () { return redirect('authentication/login'); });
Route::get('authentication/login', 'AuthenticationController@login')->name('authentication.login');
Route::get('authentication/register', 'AuthenticationController@register')->name('authentication.register');
Route::get('authentication/lockscreen', 'AuthenticationController@lockscreen')->name('authentication.lockscreen');
Route::get('authentication/forgot-password', 'AuthenticationController@forgotPassword')->name('authentication.forgot-password');
Route::get('authentication/page404', 'AuthenticationController@page404')->name('authentication.page404');
Route::get('authentication/page403', 'AuthenticationController@page403')->name('authentication.page403');
Route::get('authentication/page500', 'AuthenticationController@page500')->name('authentication.page500');
Route::get('authentication/page503', 'AuthenticationController@page503')->name('authentication.page503');

Route::get('pages/profile1', 'PagesController@profile1')->name('pages.profile1');
Route::get('pages/profile2', 'PagesController@profile2')->name('pages.profile2');
