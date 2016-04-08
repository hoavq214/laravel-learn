<?php

Route::group([
    'as' => 'backend::',
    'prefix' => 'backend'
        ], function () {
    
    Route::controllers([
        'auth' => 'App\Modules\Backend\Controllers\Auth\AuthController',
    ]);

    Route::group(['middleware' => 'auth.admin'], function() {
        Route::get('/', [
            'as' => 'home',
            'uses' => 'App\Modules\Backend\Controllers\DefaultController@index'
        ]);

//        Route::get('/auth/login', [
//            'as' => 'login',
//            'uses' => 'App\Modules\Backend\Controllers\AuthController@getLogin'
//        ]);

//        Route::post('/auth/login', 'App\Modules\Backend\Controllers\AuthController@postLogin');

//        Route::get('/auth/logout', [
//            'as' => 'logout',
//            'uses' => 'App\Modules\Backend\Controllers\AuthController@getLogout'
//        ]);
    });
});
