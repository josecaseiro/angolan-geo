<?php

namespace Josecaseiro\AngolanGeo;

use Illuminate\Support\ServiceProvider as Provider;
use Illuminate\Support\Facades\Artisan;

class ServiceProvider extends Provider
{
    public function boot()
    {
        //Artisan::call('db:seed', ['--class' => 'AngolanGeoDatabaseSeeder']);
        $this->publishes([
            __DIR__ . '/src/migrations' => database_path('migrations'),
        ], 'migrations');
    }

    public function register()
    {
        //
    }
}
