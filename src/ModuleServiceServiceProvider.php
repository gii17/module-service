<?php

namespace Gii\ModuleService;

use Gii\ModuleService\Services\Service;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ModuleServiceServiceProvider extends EnvironmentServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerNamespace()->registerModel()->registerProvider(); 
        $this->app->singleton('service', function ($app) {
            return new Service();
        });
    }
}
