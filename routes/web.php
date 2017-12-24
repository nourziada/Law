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

    Route::get('/aboutus/office','Admin\WebSiteContentController@showOfficeData')->name('show.admin.aboutus.office');

    Route::post('/aboutus/update/office','Admin\WebSiteContentController@updateAboutUsOfficeData')->name('update.admin.aboutus.office');

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
    | Said Routes
    |--------------------------------------------------------------------------
    */
    Route::resource('/said','Admin\saidController');

    /*
    |--------------------------------------------------------------------------
    | Statistics Routes
    |--------------------------------------------------------------------------
    */
    Route::get('/statistic','Admin\StatisticController@index')->name('show.admin.statistic');

    Route::post('/statistic/update','Admin\StatisticController@updateStatistic')->name('update.admin.statistic');

    /*
    |--------------------------------------------------------------------------
    | Settings Routes
    |--------------------------------------------------------------------------
    */
    Route::get('/setting','Admin\HomeController@showSetting')->name('show.admin.setting');

    Route::post('/setting/update','Admin\HomeController@updateSetting')->name('update.admin.setting');

    /*
    |--------------------------------------------------------------------------
    | Password Routes
    |--------------------------------------------------------------------------
    */
    Route::get('/password' ,'Admin\HomeController@showPassword')->name('show.admin.password');
    Route::post('/password/update' ,'Admin\HomeController@changePassword')->name('update.admin.password');


    /*
	|--------------------------------------------------------------------------
	| Admin Home Routes
	|--------------------------------------------------------------------------
	*/

	Route::get('/', 'Admin\HomeController@index')->name('home');

});


// All WebSite Routes

Route::group(['prefix' => LaravelLocalization::setlocale()],function(){

    /*
    |--------------------------------------------------------------------------
    | Show Index Page Routes
    |--------------------------------------------------------------------------
    */
    Route::get('/','FrontEnd\HomeController@index')->name('show.index');
    Route::get('/about','FrontEnd\HomeController@about')->name('show.about');
    Route::get('/service/{id}','FrontEnd\HomeController@services')->name('show.services');
    Route::get('/team','FrontEnd\HomeController@team')->name('show.team');
    Route::get('/agents','FrontEnd\HomeController@agents')->name('show.agents');

});





