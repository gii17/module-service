<?php

namespace Gii\ModuleService;

use Gii\ModuleService\Services\Service;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ModuleServiceProvider extends EnvironmentServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerMainClass(Service::class)
             ->registerCommandService(Providers\CommandServiceProvider::class)
             ->registers([
                '*',
             ]);
    }
}
