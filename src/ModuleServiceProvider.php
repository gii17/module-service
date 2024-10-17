<?php

namespace Aibnuhibban\BitbucketLaravel;

use Gii\ModuleService\Services\Service;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ModuleServiceProvider extends BaseServiceProvider
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
            __DIR__.'/../assets/config/config.php' => config_path('config.php'),
        ], 'config');
    }
}
