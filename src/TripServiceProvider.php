<?php

namespace leon\trip;

use Illuminate\Support\ServiceProvider;

class TripServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'category');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'category');
         $this->loadMigrationsFrom(__DIR__.'/database/migrations');
         $this->loadRoutesFrom(__DIR__.'/../src/routes/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/trip.php', 'trip');

        $this->app->make('Leon\Trip\TripsController');

        // Register the service the package provides.
        $this->app->singleton('trip', function ($app) {
            return new Trip;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['trip'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/trip.php' => config_path('trip.php'),
        ], 'trip.config');
    }
}
