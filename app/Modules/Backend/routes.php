<?php

Route::group([
    'as' => 'backend::',
    'prefix' => 'backend'
], function () {
    Route::get('/', [
        'as' => 'home',
        'uses' => 'App\Modules\Backend\Controllers\DefaultController@index'
    ]);
    Route::get('/auth/login', [
        'as' => 'login',
        'uses' => 'App\Modules\Backend\Controllers\AuthController@getLogin'
    ]);
});
