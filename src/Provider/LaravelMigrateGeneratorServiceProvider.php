<?php

namespace Puins\MigrateGenerator\Provider;

use Illuminate\Support\ServiceProvider;
use Puins\MigrateGenerator\Command\LaravelCommand;

class LaravelMigrateGeneratorServiceProvider extends ServiceProvider
{

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->commands([
            LaravelCommand::class
        ]);
    }
}
