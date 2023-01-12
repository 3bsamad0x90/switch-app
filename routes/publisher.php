<?php

use Illuminate\Support\Facades\Route;

Route::get('publisher/auth/register','publishers\PublisherLoginController@register')->name('publisher.register');
Route::post('publisher/auth/register','publishers\PublisherLoginController@submitRegister')->name('publisher.register.submit');

Route::group(['prefix'=>'PublisherPanel','middleware'=>['isPublisher']], function(){

    Route::get('/','publishers\PublishersController@index')->name('publisher.index');
    Route::post('/logout','publishers\PublisherLoginController@logout')->name('publisher.logout');

    Route::get('/read-all-notifications','publishers\PublishersController@readAllNotifications')->name('publisher.notifications.readAll');
    Route::get('/notification/{id}/details','publishers\PublishersController@notificationDetails')->name('publisher.notification.details');

    Route::get('/FAQs','publishers\PublishersController@FAQs')->name('publisher.FAQs');
    Route::get('/contactUs','publishers\PublishersController@contactUs')->name('publisher.contactUs');
    Route::post('/contactUs','publishers\PublishersController@submitContactUs')->name('publisher.contactUs.submit');

    Route::get('/my-profile','publishers\PublishersController@EditProfile')->name('publisher.myProfile');
    Route::post('/my-profile','publishers\PublishersController@UpdateProfile')->name('publisher.myProfile.update');
    Route::get('/my-password','publishers\PublishersController@EditPassword')->name('publisher.myPassword');
    Route::post('/my-password','publishers\PublishersController@updatePassword')->name('publisher.myPassword.update');
    Route::get('/notifications-settings','publishers\PublishersController@EditNotificationsSettings')->name('publisher.notificationsSettings');
    Route::post('/notifications-settings','publishers\PublishersController@UpdateNotificationsSettings')->name('publisher.notificationsSettings.update');
   
    Route::get('/my-payment-method','publishers\Payment_methodController@index')->name('publisher.payment_methods');
    Route::post('my-payment-method/create','publishers\Payment_methodController@store')->name('publisher.payment_methods.store');
    Route::post('/{id}/edit','publishers\Payment_methodController@update')->name('publisher.payment_methods.update');
    Route::get('/{id}/delete','publishers\Payment_methodController@delete')->name('publisher.payment_methods.delete');
    Route::get('/my-payment-history','publishers\PublishersController@payment_history')->name('publisher.payment_history');
    Route::get('/MoneyTransfeerPolicy','publishers\PublishersController@MoneyTransfeerPolicy')->name('publisher.MoneyTransfeerPolicy');


    Route::group(['prefix'=>'books'], function(){
        Route::get('/','publishers\BooksController@index')->name('publisher.books');
        Route::get('/create','publishers\BooksController@create')->name('publisher.books.create');
        Route::post('/create','publishers\BooksController@store')->name('publisher.books.store');
        Route::post('/createBooksFromExcel','publishers\BooksController@storeExcel')->name('publisher.books.store.excel');
        Route::get('/{id}/edit','publishers\BooksController@edit')->name('publisher.books.edit');
        Route::post('/{id}/edit','publishers\BooksController@update')->name('publisher.books.update');
        Route::get('/{id}/delete','publishers\BooksController@delete')->name('publisher.books.delete');
        Route::post('/booksBulkDelete','publishers\BooksController@booksBulkDelete')->name('publisher.books.booksBulkDelete');
    });

    Route::group(['prefix'=>'clients'], function(){
        Route::get('/','publishers\ClientsController@index')->name('publisher.clients');
        Route::get('/{id}/details','publishers\ClientsController@details')->name('publisher.clients.details');
    });

    Route::group(['prefix'=>'orders'], function(){
        Route::get('/','publishers\OrdersController@index')->name('publisher.orders');
        Route::get('/{id}/details','publishers\OrdersController@details')->name('publisher.orders.details');
    });

    Route::group(['prefix'=>'writers'], function(){
        Route::get('/','publishers\WritersController@index')->name('publisher.writers');
        Route::get('/{id}/books','publishers\WritersController@books')->name('publisher.writers.books');
        Route::post('/create','publishers\WritersController@store')->name('publisher.writers.store');
        Route::post('/createWritersFromExcel','publishers\WritersController@storeExcel')->name('publisher.writers.store.excel');
    });

});
