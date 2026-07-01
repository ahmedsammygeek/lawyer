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

Route::get('/' , function(){

	return view('welcome');
});

// Route::group(
// 	[
// 		'prefix' => LaravelLocalization::setLocale(),
// 		'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
// 	], function(){ 
// 		Route::get('/', [SiteController::class , 'index' ] )->name('index');
// 		Route::get('/about', [SiteController::class , 'about' ] )->name('about');
// 		Route::get('/services', [SiteController::class , 'services' ] )->name('services.index');
// 		Route::get('/projects', [SiteController::class , 'projects' ] )->name('projects.index');
// 		Route::get('/blog', [SiteController::class , 'topics' ] )->name('topics.index');
// 		Route::get('/offers', [SiteController::class , 'offers' ] )->name('offers');
// 		Route::get('/contact', [SiteController::class , 'contact' ] )->name('contact');
// 		Route::get('/blog/{topic}', [SiteController::class , 'show_topic' ] )->name('topics.show');
// 		Route::get('/services/{service}', [SiteController::class , 'show_service' ] )->name('services.show');
// 		Route::get('/projects/{project}', [SiteController::class , 'show_project' ] )->name('projects.show');
// 		Route::get('/privacy', [SiteController::class , 'privacy' ] )->name('privacy');
// 		Route::post('/send'  , [SiteController::class , 'send'] )->name('contact.send');
// 		Route::get('/shop'  , [SiteController::class , 'shop'] )->name('shop.index');
// 		Route::get('/shop/{product}'  , [SiteController::class , 'show_product'] )->name('products.show');
// 		Route::get('/shop/{product}/order'  , [SiteController::class , 'order'] )->name('products.order');
// 		Route::post('/shop/{product}/order'  , [SiteController::class , 'store_order'] )->name('products.order.store');
// 		Route::get('/covering'  , [SiteController::class , 'covering'] )->name('covering.index');
// 	});


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

	Route::resource('slides' , SlideController::class );
	Route::resource('certificates' , CertificateController::class );

	Route::resource('offers', OfferController::class );
	Route::resource('products', ProductController::class );
	Route::resource('projects', ProjectController::class );
	Route::resource('projects.reservations', ProjectReservationController::class );
	Route::resource('projects.messages', ProjectMessageController::class );

	Route::get('settings/edit'  , [SettingsController::class , 'edit'] )->name('settings.edit'); // done
	Route::patch('settings'  , [SettingsController::class , 'update'] )->name('settings.update'); // done
	Route::get('terms/edit'  , [TermsController::class , 'edit'] )->name('terms.edit');
	Route::patch('terms'  , [TermsController::class , 'update'] )->name('terms.update');
	Route::get('about/edit'  , [AboutController::class , 'edit'] )->name('about.edit');
	Route::patch('about'  , [AboutController::class , 'update'] )->name('about.update');
	Route::get('/profile' , [BoardController::class , 'show_profile'] )->name('profile.show');
	Route::patch('/profile' , [BoardController::class , 'update_profile'] )->name('profile.update');
	Route::get('/password' , [BoardController::class , 'show_password'] )->name('password.show');
	Route::patch('/password' , [BoardController::class , 'update_password'] )->name('password.update');
});



















