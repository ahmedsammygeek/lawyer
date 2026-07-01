<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;



Route::group(['prefix' => '/v1'], function() {
    
    Route::get('/home' , [ApiController::class , 'home'] );
    Route::get('/topics' , [ApiController::class , 'topics'] );
    // Route::get('/home' , [ApiController::class , 'home'] );
    // Route::get('/home' , [ApiController::class , 'home'] );
    // Route::get('/home' , [ApiController::class , 'home'] );
    // Route::get('/home' , [ApiController::class , 'home'] );

});