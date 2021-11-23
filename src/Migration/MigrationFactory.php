<?php

namespace Puins\MigrateGenerator\Migration;

class MigrationFactory
{
    public static function create($migrate)
    {
        return [
            'laravel'  => new LaravelMigration(),
            'thinkphp' => new ThinkPHPMigration(),
        ][strtolower($migrate)];
    }
}
