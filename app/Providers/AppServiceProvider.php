<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('activeIfInRouteGroup', function ($expression) {
            return "Route::currentRouteNamed($expression) ? 'kt-menu__item--open kt-menu__item--here' : 'hannah'";
        });

        Blade::directive('getRouteName', function () {
            return "Request::segment(1) ? Request::segment(1) : Route::current()->getName()";
        });

        Blade::directive('getTime', function ($expression) {
            return "($expression)->format('h:i')";
        });
    }
}
