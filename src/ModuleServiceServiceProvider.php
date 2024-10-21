<?php

namespace Gii\ModuleService;

use Gii\ModuleService\Services\Service;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ModuleServiceServiceProvider extends BaseServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('service', function ($app) {
            return new Service();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../assets/config/module-service.php' => config_path('module-service.php'),
        ], 'config');
    }
}
