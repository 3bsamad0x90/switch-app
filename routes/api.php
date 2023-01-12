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


Route::group(['middleware' => ['auth:api', 'auth:sanctum']], function(){
    Route::get('/products', 'api\ProductsController@index');
    Route::post('/makeorder', 'api\OrdersController@index');
    Route::get('/apps', 'api\AppsController@index');
});





