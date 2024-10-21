<?php

namespace Gii\ModuleService\Commands;

class InstallMakeCommand extends EnvironmentCommand{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'module-Service:install';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command ini digunakan untuk installing awal Service module';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $provider = 'Gii\ModuleService\ModuleServiceServiceProvider';

        $this->callSilent('vendor:publish', [
            '--provider' => $provider,
            '--tag'      => 'migrations'
        ]);
        $this->info('✔️  Created migrations');

        $migrations = $this->scanMigration();
        $migrations = $this->arrayValues($this->mapArray(function($migration){
            return 'database\\'.explode('\\database\\',$migration)[1];
        }, $migrations));
        $this->callSilent('migrate', [
            '--path' => $migrations
        ]);
        $this->info('✔️  Module Card Identities tables migrated');

        $this->comment('gii/module-service installed successfully.');
    }
}