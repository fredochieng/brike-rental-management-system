<?php

use Kamaln7\Toastr\Facades\Toastr;

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


Route::get('/', function () {
	return redirect('authentication');
});

Auth::routes();
/* Dashboard */
Route::get('dashboard', function () {
	return redirect('dashboard');
});
Auth::routes();


Auth::routes();

Route::get('dashboard', 'DashboardController@index')->name('dashboard');

Auth::routes();


/* Property categories */
Route::get('property/categories', 'PropertyCategoriesController@index')->name('property.categories');
Route::post('category/save', 'PropertyCategoriesController@store')->name('category.save');
Route::post('property/categories/&id={id}', 'PropertyCategoriesController@update')->name('property.category-update');
Route::post('property/category/delete/&id={id}', 'PropertyCategoriesController@deleteCategory');


/* Property variations */
Route::get('property/variations', 'PropertyVariationsController@index')->name('property.variations');
Route::post('variation/save', 'PropertyVariationsController@store')->name('variation.save');
Route::post('property/variations/&id={id}', 'PropertyVariationsController@update')->name('property.variation-update');
Route::post('variation-value/update/&id={id}', 'PropertyVariationsController@updateVariationValue');
Route::post('property/variations/delete/&id={id}', 'PropertyVariationsController@deleteVariation');


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
Route::post('property/delete/&id={id}', 'PropertyController@deleteProperty');


/* Rooms */
Route::get('rooms/rooms-list', 'RoomsController@index')->name('rooms.rooms-list');
Route::get('rooms/rooms-create', 'RoomsController@create')->name('rooms.rooms-create');
Route::get('rooms/get-variation-values', 'RoomsController@variationValuesSelector')->name('rooms.get-variation-values');
Route::post('rooms/save', 'RoomsController@store')->name('rooms.save');
Route::any('room/manage/&id={id}', 'RoomsController@manageRoom')->name('rooms.manage-room');
Route::post('rooms/update/&id={id}', 'RoomsController@update')->name('rooms.room-update');
Route::post('rooms/update-rent-per-month/&id={id}', 'RoomsController@edit_rent_per_month')->name('rooms.update-rent-per-month');


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
Route::post('tenant/reactivate/&id={id}', 'TenantsController@reactivateTenant')->name('tenants.reactivate');
Route::post('tenant/add-payment', 'TenantsController@add_manual_payment')->name('tenants.add-payment');


/** Rent payments */
Route::get('rent/payments', 'TransactionsController@index')->name('rent.payments');
Route::get('rent/processed-transactions', 'TransactionsController@processedPayments')->name('rent.processed-transactions');
Route::get('rent/pending-transactions', 'TransactionsController@pendingPayments')->name('rent.pending-transactions');
Route::get('rent/get-payment-rooms', 'PropertyController@getPaymentRooms')->name('rooms.get-payment-rooms');
Route::get('property/get-transaction-rooms', 'PropertyController@getTransRooms')->name('rooms.get-trans-rooms');
Route::any('payment/manage/&id={id}', 'TransactionsController@managePayment')->name('payment.manage');
Route::post('payment/confirm', 'TransactionsController@confirmPayment')->name('payment.confirm');
Route::get('payments/get-payment-tenants', 'TransactionsController@confPaymentRooomSelector')->name('payment.get-payment-tenants');

/** Rent payments tracker */
Route::get('rent-payments/trackers', 'MonthlyPaymentController@index')->name('rent-payments.trackers');
Route::get('rent-payments/full-payments', 'MonthlyPaymentController@fullRentPayments')->name('rent-payments.full-payments');
Route::get('rent-payments/partial-payments', 'MonthlyPaymentController@partialRentPayments')->name('rent-payments.partial-payments');
Route::get('rent-payments/rent-arrears', 'MonthlyPaymentController@rentArrears')->name('rent-payments.rent-arrears');

/** SMS */
Route::get('messages/sms-list', 'MessageController@index')->name('messages.sms-list');
Route::get('messages/sms-create', 'MessageController@create')->name('messages.sms-create');
Route::get('messages/get-sms-rooms', 'PropertyController@getSMSRooms')->name('rooms.get-payment-rooms');
Route::post('messages/save', 'MessageController@store')->name('messages.save');
Route::get('messages/validate_phone', 'MessageController@validate_phone_no')->name('messages.validate_phone');

/* Expenses */
Route::get('expenses', 'ExpensesController@index')->name('expenses');
Route::post('expense/save', 'ExpensesController@store')->name('expense.save');
Route::post('expense/update/&id={id}', 'ExpensesController@update')->name('expense.expense-update');

/** User management */
Route::get('user-management/users-list', 'UsersController@index')->name('user-management.users-list');
Route::post('user-management/save-user', 'UsersController@store')->name('user-management.save-user');
Route::post('user-management/update/&id={id}', 'UsersController@update')->name('user.update-user');
Route::get('user/profile', 'UsersController@profile')->name('user.profile');
Route::post('user/update-profile/{user_id}', 'UsersController@update_profile')->name('user.update-profile');
Route::post('user/change-password/{user_id}', 'UsersController@change_password')->name('user.change-password');


// Password Reset Routes...
// Route::post('reset_password_with_token', 'PasswordResetController@reset_password')->name('password.reset');
Route::post('reset-password', 'PasswordResetController@reset_password_with_OTP')->name('reset.password-otp');
Route::get('reset-password-form', 'PasswordResetController@show_recover_password_form')->name('reset.password-form');
Route::any('recover-password', 'PasswordResetController@recover_password')->name('password.recover');


/* Authentication */
Route::get('authentication', function () {
	return redirect('authentication/login');
});
Route::get('authentication/login', 'AuthenticationController@login')->name('authentication.login');
Route::get('authentication/register', 'AuthenticationController@register')->name('authentication.register');
Route::get('authentication/lockscreen', 'AuthenticationController@lockscreen')->name('authentication.lockscreen');
Route::get('authentication/forgot-password', 'AuthenticationController@forgotPassword')->name('authentication.forgot-password');
Route::get('authentication/page404', 'AuthenticationController@page404')->name('authentication.page404');
Route::get('authentication/page403', 'AuthenticationController@page403')->name('authentication.page403');
Route::get('authentication/page500', 'AuthenticationController@page500')->name('authentication.page500');
Route::get('authentication/page503', 'AuthenticationController@page503')->name('authentication.page503');

// Route::get('pages/profile1', 'PagesController@profile1')->name('pages.profile1');
// Route::get('pages/profile2', 'PagesController@profile2')->name('pages.profile2');

Route::get('/logout', function () {
	Session::flush();
	Auth::logout();
	return Redirect::to("/authentication");
	Toastr::success('Successful login');
	return redirect('dashboard');
});
