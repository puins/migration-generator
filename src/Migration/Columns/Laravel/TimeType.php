<?php

namespace Puins\MigrateGenerator\Migration\Columns\Laravel;

class TimeType extends AbstractType
{

    public function migrateColumn():string
    {
        return $this->getParsedField('time');
    }
}