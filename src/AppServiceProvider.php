<?php

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Artisan;

class AppServiceProvider extends ServiceProvider
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
