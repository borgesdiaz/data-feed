<?php

Route::group(['namespace' => 'Pages'], function() {
    
    Route::group(['namespace' => 'Landing'], function() {
        Route::get('/', 'HomeController@index');
    });
    
    Route::group(['namespace' => 'Admin'], function() {
        
    });
});
