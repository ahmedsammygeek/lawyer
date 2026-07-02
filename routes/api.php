<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;



Route::group(['prefix' => '/v1' , 'middleware' => ['set_local'] ], function() {
    
    Route::get('/home' , [ApiController::class , 'home'] );
    Route::get('/topics' , [ApiController::class , 'topics'] );
    Route::get('/topics/{topic}' , [ApiController::class , 'show_topic'] );
    Route::get('/contact_us' , [ApiController::class , 'contact_us'] );
    Route::post('/send_email' , [ApiController::class , 'send_email'] );


});