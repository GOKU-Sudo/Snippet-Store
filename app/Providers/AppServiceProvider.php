<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


use Illuminate\Routing\UrlGenerator;

use Illuminate\View\Compilers\BladeCompiler;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        if($this->app->environment('production')) {
            \URL::forceScheme('https');
        }
        
    }

}
