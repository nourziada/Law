<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->group(function(){
    /*
	|--------------------------------------------------------------------------
	| Auth Routes
	|--------------------------------------------------------------------------
	*/
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\LoginController@login');
    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

    /*
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    */

    /*
    |--------------------------------------------------------------------------
    | Slider Routes
    |--------------------------------------------------------------------------
    */

    Route::resource('/slider','Admin\SliderController');

    /*
    |--------------------------------------------------------------------------
    | About Us Routes
    |--------------------------------------------------------------------------
    */
    // Show the index content of About Us Page
    Route::get('/aboutus','Admin\WebSiteContentController@index')->name('show.admin.aboutus');

    Route::post('/aboutus/update','Admin\WebSiteContentController@updateAboutUs')->name('update.admin.aboutus');

    /*
    |--------------------------------------------------------------------------
    | Services Routes
    |--------------------------------------------------------------------------
    */
    Route::resource('/services','Admin\ServicesController');

    /*
    |--------------------------------------------------------------------------
    | Team Routes
    |--------------------------------------------------------------------------
    */
    Route::resource('/team','Admin\TeamController');

    /*
    |--------------------------------------------------------------------------
    | Team Routes
    |--------------------------------------------------------------------------
    */
    Route::resource('/parteners','Admin\PartenerController');




    /*
	|--------------------------------------------------------------------------
	| Admin Home Routes
	|--------------------------------------------------------------------------
	*/

	Route::get('/', 'Admin\HomeController@index')->name('home');

});


// All WebSite Routes

Route::group(['prefix' => LaravelLocalization::setlocale()],function(){

    Route::get('/', function () {
        return view('welcome');
    });

});





