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

Route::post('/user/register', 'api\AuthinticationController@register');
Route::post('/user/login', 'api\AuthinticationController@login');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::post('/makeorder', 'api\OrdersController@index');
    Route::get('/products', 'api\ProductsController@index');
    Route::get('/social', 'api\AppsController@social');
    Route::get('/music', 'api\AppsController@music');
    Route::get('/creative', 'api\AppsController@creative');
    Route::get('/business', 'api\AppsController@business');
    Route::post('/addAccount', 'api\AccountsController@addAccount');
    Route::get('/show', 'api\AccountsController@showAccount');
    Route::post('/sendContactMessage','api\ContactMessagesController@sendContactMessage');

    Route::post('/logout', 'api\AuthinticationController@logout');
});






