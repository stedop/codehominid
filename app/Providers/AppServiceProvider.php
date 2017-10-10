<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;
use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use RLStudio\Laraman\ServiceProvider as LaramanServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Passport::routes();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(
                IdeHelperServiceProvider::class
            );
        }
    }
}
