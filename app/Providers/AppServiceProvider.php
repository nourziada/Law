<?php

namespace App\Providers;

use App\Services;
use App\Setting;
use App\WebSiteContent;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        View::share('settings' , Setting::first());
        View::share('aboutOffice' , WebSiteContent::where('title','aboutusOffice')->first());
        View::share('servicesFooter' , Services::orderBy('created_at','desc')->take(10)->get());
        View::share('allServices' , Services::all());


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
