<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::any('/payments/confirmation', 'TransactionsController@confirmation_url');
Route::any('/payments/validation', 'TransactionsController@validation_url');
Route::any('/payments/register', 'TransactionsController@register_url');
Route::any('/payments', 'TransactionsController@c2b_transaction');
Route::any('/payments/lipa_na_mpesa', 'TransactionsController@lipa_na_mpesa_online_url');
