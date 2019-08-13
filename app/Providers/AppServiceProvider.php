<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\PropertyType;
use App\Observers\PropertyTypeObserver;

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
        PropertyType::observe(PropertyTypeObserver::class);
    }
}
