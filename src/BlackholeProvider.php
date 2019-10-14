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
    }

    private function loadRoutes()
    {
        include __DIR__.'/routes.php';
    }

    private function registerControllers()
    {
        $this->app->make('Realtebo\Blackhole\BlackholeController');
    }
}
