<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
        Paginator::useBootstrap();
        // View::composer('*', function ($view) {
        //     // Check if the user is authenticated before accessing user data
        //     $userData = auth()->check() ? auth()->user() : null;

        //     $view->with('userData', $userData);
        // });
    }
}
