<?php

use Illuminate\Support\ServiceProvider as Provider;
use Illuminate\Support\Facades\Artisan;

class ServiceProvider extends Provider
{
    public function boot()
    {
        if ($this->app->environment() !== 'production') {
            Artisan::call('db:seed', ['--class' => 'DatabaseSeeder']);
        }
    }

    public function register()
    {
        //
    }
}
