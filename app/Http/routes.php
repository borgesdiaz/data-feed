<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['namespace' => 'Pages'], function() {
    Route::group(['namespace' => 'Main'], function() {
        Route::get('test', 'HomeController@index');
    });
    
    Route::group(['namespace' => 'Admin'], function() {
        
    });
});

