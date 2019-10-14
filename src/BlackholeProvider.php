<?php

namespace Realtebo\Blackhole;

use Illuminate\Support\ServiceProvider;
use Log;

class BlackholeProvider extends ServiceProvider
{
    public function register()
    {
        $this->registerControllers();
    }

    public function boot()
    {
        $this->loadRoutes();
        $this->loadMigrations();
        $this->loadViews();
    }

    private function loadRoutes()
    {
        include __DIR__.'/routes.php';
    }

    private function registerControllers()
    {
        $this->app->make('Realtebo\Blackhole\BlackholeController');
    }

    /**
     * Once your package's migrations have been registered, they 
     * will automatically be run when the php artisan migrate command is 
     * executed. You do not need to export them to the application's 
     * main database/migrations directory.
     */
    private function loadMigrations()
    {
        $this->loadMigrationsFrom(__DIR__.'/migrations');
    }

    private function loadViews()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'blackhole:');
    }
}
