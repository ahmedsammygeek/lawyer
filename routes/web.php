<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Board\UserController;
use App\Http\Controllers\Board\OfferController;
use App\Http\Controllers\Board\ProductController;
use App\Http\Controllers\Board\ServiceController;
use App\Http\Controllers\Board\ProjectController;
use App\Http\Controllers\Board\ReviewController;
use App\Http\Controllers\Board\SettingsController;
use App\Http\Controllers\Board\TermsController;
use App\Http\Controllers\Board\AboutController;
use App\Http\Controllers\Board\LoginController;
use App\Http\Controllers\Board\BoardController;
use App\Http\Controllers\Board\AreaController;
use App\Http\Controllers\Board\TagController;
use App\Http\Controllers\Board\TopicController;
use App\Http\Controllers\Board\GoalController;
use App\Http\Controllers\Board\CategoryController;
use App\Http\Controllers\Board\SlideController;
use App\Http\Controllers\Board\CertificateController;
use App\Http\Controllers\Board\ProjectReservationController;
use App\Http\Controllers\Board\ProjectMessageController;
use App\Http\Controllers\Board\CaseStepController;
use App\Http\Controllers\Board\PageSeoController;

Route::get('/' , function(){

	return view('welcome');
});
Route::get('Board/login' , [LoginController::class , 'form' ] )->name('board.login.form');
Route::post('Board/login' , [LoginController::class , 'login' ] )->name('board.login.post');
Route::group(['prefix' => 'Board' , 'as' => 'board.' , 'middleware' => 'admin' ], function() {
	Route::get('/' , [BoardController::class , 'index'] )->name('index'); // done
	Route::get('/logout' , [BoardController::class , 'logout'] )->name('logout'); // done
	Route::resource('users', UserController::class ); // done
	Route::resource('services', ServiceController::class ); // done
	Route::resource('areas', AreaController::class ); // done
	Route::resource('reviews', ReviewController::class ); // done
	Route::resource('tags', TagController::class );  // done
	Route::resource('topics', TopicController::class );  // done
	Route::resource('goals', GoalController::class );  // done
	Route::resource('categories', CategoryController::class ); 
	Route::resource('case_steps', CaseStepController::class ); 


	Route::resource('slides' , SlideController::class );
	Route::resource('certificates' , CertificateController::class );

	Route::resource('offers', OfferController::class );
	Route::resource('products', ProductController::class );
	Route::resource('projects', ProjectController::class );
	Route::resource('projects.reservations', ProjectReservationController::class );
	Route::resource('projects.messages', ProjectMessageController::class );


	Route::get('settings/edit'  , [SettingsController::class , 'edit'] )->name('settings.edit'); // done
	Route::patch('settings'  , [SettingsController::class , 'update'] )->name('settings.update'); // done
	Route::get('page_seo/edit'  , [PageSeoController::class , 'edit'] )->name('page_seo.edit'); // done
	Route::patch('page_seo'  , [PageSeoController::class , 'update'] )->name('page_seo.update'); // done


	Route::get('terms/edit'  , [TermsController::class , 'edit'] )->name('terms.edit');
	Route::patch('terms'  , [TermsController::class , 'update'] )->name('terms.update');
	Route::get('about/edit'  , [AboutController::class , 'edit'] )->name('about.edit');
	Route::patch('about'  , [AboutController::class , 'update'] )->name('about.update');
	Route::get('/profile' , [BoardController::class , 'show_profile'] )->name('profile.show');
	Route::patch('/profile' , [BoardController::class , 'update_profile'] )->name('profile.update');
	Route::get('/password' , [BoardController::class , 'show_password'] )->name('password.show');
	Route::patch('/password' , [BoardController::class , 'update_password'] )->name('password.update');
});



















