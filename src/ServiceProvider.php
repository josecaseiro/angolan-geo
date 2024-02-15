<?php

namespace Josecaseiro\AngolanGeo;

use Illuminate\Support\ServiceProvider as Provider;
use Illuminate\Support\Facades\Artisan;

class ServiceProvider extends Provider
{
    public function boot()
    {
        //Artisan::call('db:seed', ['--class' => 'AngolanGeoDatabaseSeeder']);
        $this->loadMigrationsFrom(__DIR__ . '/migrations');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/migrations' => database_path('migrations'),
            ], 'migrations');
        }

        // Executar o seeder aqui
        $this->app->booted(function () {
            // Executar as migrações antes do seeder
            Artisan::call('migrate');

            // Executar o seeder aqui
            Artisan::call('db:seed', ['--class' => 'Josecaseiro\\AngolanGeo\\Seeders\\AngolanGeoDatabaseSeeder']);
        });
    }

    public function register()
    {
        //
    }
}
