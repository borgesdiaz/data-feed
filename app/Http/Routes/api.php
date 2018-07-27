<?php

Route::group(['namespace' => 'API'], function() {
    Route::group(['namespace' => 'User'], function() {
        
    });
    
    Route::group(['namespace' => 'ACase'], function() {
        Route::resource('cases', 'CasesController');
    });
    
    Route::group(['namespace' => 'Media'], function() {
        
    });
    
    Route::group(['namespace' => 'Shared'], function() {
        
    });
});

