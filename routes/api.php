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
    Route::get('/orders', 'api\OrdersController@orders');
    Route::post('/makeorder', 'api\OrdersController@index');
    Route::get('/products', 'api\ProductsController@index');
    Route::get('/social', 'api\AppsController@social');
    Route::get('/music', 'api\AppsController@music');
    Route::get('/creative', 'api\AppsController@creative');
    Route::get('/business', 'api\AppsController@business');
    Route::post('/addAccount', 'api\AccountsController@addAccount');
    Route::post('/updateAcc/{account}', 'api\AccountsController@updateAcc');
    Route::get('/show', 'api\AccountsController@showAccount');
    Route::post('/changeStatus/{account}', 'api\AccountsController@changeStatus');
    Route::post('/sendContactMessage','api\ContactMessagesController@sendContactMessage');

    //edit account
    Route::get('/editAccount/{user}', 'api\AccountsController@editAccount');
    Route::post('/updateAccount', 'api\AccountsController@updateAccount');
    Route::post('/logout', 'api\AuthinticationController@logout');
    Route::post('/deleteAccount', 'api\AuthinticationController@deleteAccount');
    //change password
    Route::post('/changePassword', 'api\AuthinticationController@changePassword');
    //serial number
    Route::post('/serialNumber', 'api\SerialNumberController@serialNumber');
});

Route::group(['middleware'=> ['api']], function () {

    Route::get('/user/{id}','api\UserController@myProfile');

    Route::post('/sendmessage','api\ContactMessagesController@sendContactMessage');

    Route::get('/exchange','api\ContactMessagesController@exchange');
    Route::post('/exchangeStatus/{id}','api\ContactMessagesController@exchangeStatus');
    Route::get('/userconnection','api\ContactMessagesController@userconnection');
    Route::post('/DeleteUserConnection/{contact}','api\ContactMessagesController@DeleteUserConnection');
    Route::post('/favorite/{id}','api\ContactMessagesController@favorite');
    Route::get('/favoriteShow','api\ContactMessagesController@favoriteShow');
    //socail media
    Route::get('/media', 'api\StaticPagesController@media');
    Route::get('/faqs', 'api\StaticPagesController@faqs');
    //static pages for web landing page
    Route::get('/landingPage', 'api\StaticPagesController@landingPage');
    //products for web landing page
    Route::get('/products', 'api\ProductsController@index');
});


