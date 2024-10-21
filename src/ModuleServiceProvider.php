<?php

namespace Gii\ModuleService;

use Gii\ModuleService\Models\Service as ModelsService;
use Gii\ModuleService\Services\Service;
use Zahzah\LaravelSupport\Providers\BaseServiceProvider;

class ModuleServiceProvider extends BaseServiceProvider
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
                'Services'  => function(){
                    $this->binds([
                        Contracts\ModuleService::class => new ModelsService()
                    ]);
                },
             ]);
    }

    protected function dir(): string{
        return __DIR__.'/';
    }

    protected function migrationPath(string $path = ''): string{
        return database_path($path);
    }
}
