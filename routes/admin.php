<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix'=>'AdminPanel','middleware'=>['isAdmin','auth']], function(){
    Route::get('/','admin\AdminPanelController@index')->name('admin.index');

    Route::get('/read-all-notifications','admin\AdminPanelController@readAllNotifications')->name('admin.notifications.readAll');
    Route::get('/notification/{id}/details','admin\AdminPanelController@notificationDetails')->name('admin.notification.details');

    Route::get('/my-profile','admin\AdminPanelController@EditProfile')->name('admin.myProfile');
    Route::post('/my-profile','admin\AdminPanelController@UpdateProfile')->name('admin.myProfile.update');
    Route::get('/my-password','admin\AdminPanelController@EditPassword')->name('admin.myPassword');
    Route::post('/my-password','admin\AdminPanelController@UpdatePassword')->name('admin.myPassword.update');
    Route::get('/notifications-settings','admin\AdminPanelController@EditNotificationsSettings')->name('admin.notificationsSettings');
    Route::post('/notifications-settings','admin\AdminPanelController@UpdateNotificationsSettings')->name('admin.notificationsSettings.update');

    Route::group(['prefix'=>'admins'], function(){
        Route::get('/','admin\AdminUsersController@index')->name('admin.adminUsers');
        Route::get('/create','admin\AdminUsersController@create')->name('admin.adminUsers.create');
        Route::post('/create','admin\AdminUsersController@store')->name('admin.adminUsers.store');
        Route::get('/{id}/block/{action}','admin\AdminUsersController@blockAction')->name('admin.adminUsers.block');
        Route::get('/{id}/edit','admin\AdminUsersController@edit')->name('admin.adminUsers.edit');
        Route::post('/{id}/edit','admin\AdminUsersController@update')->name('admin.adminUsers.update');
        Route::get('/{id}/delete','admin\AdminUsersController@delete')->name('admin.adminUsers.delete');
    });

    Route::group(['prefix'=>'faqs'], function(){
        Route::get('/','admin\FAQsController@index')->name('admin.faqs');
        Route::post('/create','admin\FAQsController@store')->name('admin.faqs.store');
        Route::post('/{id}/edit','admin\FAQsController@update')->name('admin.faqs.update');
        Route::get('/{id}/delete','admin\FAQsController@delete')->name('admin.faqs.delete');
    });


    Route::group(['prefix'=>'contact-messages'], function(){
        Route::get('/','admin\ContactMessagesController@index')->name('admin.contactmessages');
        Route::get('/{id}/details','admin\ContactMessagesController@details')->name('admin.contactmessages.details');
        Route::get('/{id}/delete','admin\ContactMessagesController@delete')->name('admin.contactmessages.delete');
    });



    Route::group(['prefix'=>'settings'], function(){
        Route::get('/','admin\SettingsController@generalSettings')->name('admin.settings.general');
        Route::post('/','admin\SettingsController@updateSettings')->name('admin.settings.update');
        Route::get('/{key}/deletePhoto','admin\SettingsController@deleteSettingPhoto')->name('admin.settings.deletePhoto');
    });

    Route::group(['prefix'=>'apps'], function(){
        Route::get('/','admin\appsController@socialMedia')->name('admin.apps.socialMedia');
        Route::post('/','admin\appsController@updateApps')->name('admin.apps.update');
    });


    Route::group(['prefix'=>'products'], function(){
        Route::get('/','admin\ProductsController@index')->name('admin.products');
        Route::post('/create','admin\ProductsController@store')->name('admin.products.store');
        Route::post('/{id}/edit','admin\ProductsController@update')->name('admin.products.update');
        Route::get('/{id}/delete','admin\ProductsController@delete')->name('admin.products.delete');
    });
    Route::group(['prefix'=>'SerialNumbers'], function(){
        Route::get('/','admin\SerialNumbersController@index')->name('admin.SerialNumbers');
        Route::post('/create','admin\SerialNumbersController@store')->name('admin.SerialNumbers.store');
        Route::post('/{id}/edit','admin\SerialNumbersController@update')->name('admin.SerialNumbers.update');
        Route::get('/{id}/delete','admin\SerialNumbersController@delete')->name('admin.SerialNumbers.delete');
    });
    Route::group(['prefix'=>'orders'], function(){
        Route::get('/','admin\ordersController@index')->name('admin.orders');
        Route::get('/{id}/details','admin\ordersController@details')->name('admin.orders.details');
        Route::post('/create','admin\ordersController@store')->name('admin.orders.store');
        Route::post('/{id}/edit','admin\ordersController@update')->name('admin.orders.update');
        Route::get('/{id}/delete','admin\ordersController@delete')->name('admin.orders.delete');
    });



});
