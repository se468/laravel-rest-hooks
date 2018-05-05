<?php

namespace se468\RestHooks;

use Illuminate\Support\ServiceProvider;

class RestHooksServiceProvider extends ServiceProvider
{
    
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        /*
        $this->loadViewsFrom(__DIR__."/resources/views", "RestHooks");
        */
        $this->loadRoutesFrom(__DIR__."/routes/api.php");

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
    }
}
