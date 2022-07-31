<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::post('setup', 'Api\SetupController@setup');
Route::post('login', 'Api\UserController@login');
Route::post('sociallogin', 'Api\UserController@login');
Route::post('register', 'Api\UserController@register');

Route::group(['middleware' => 'auth:api'], function(){
Route::post('profile', 'Api\UserController@profile');
});



// general apis
Route::get('getreportreasons/{lang}/{source}', 'Api\GeneralController@getreportreasons');
Route::get('currencylist/{lang}', 'Api\GeneralController@currencylist');
Route::get('arealist/{lang}/{city_id}', 'Api\GeneralController@arealist');
Route::get('citylist/{lang}', 'Api\GeneralController@citylist');
Route::get('countrylist/{lang}', 'Api\GeneralController@countrylist');