<?php

namespace Puins\MigrateGenerator\Provider;

use Puins\MigrateGenerator\Command\ThinkPHPCommand;
use think\Service;

class ThinkphpMigrateGeneratorService extends Service
{
    public function boot()
    {
        $this->commands([
            ThinkPHPCommand::class,
        ]);
    }
}