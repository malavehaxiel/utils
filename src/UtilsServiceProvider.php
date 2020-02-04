<?php

namespace MalaveHaxiel\Utils;

use Illuminate\Support\ServiceProvider;

class UtilsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('utils', function() {
            return new Utils($this->app->make('html'), $this->app->make('form'));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
