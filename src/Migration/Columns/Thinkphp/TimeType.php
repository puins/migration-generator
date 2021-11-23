<?php

namespace Puins\MigrateGenerator\Migration\Columns\Thinkphp;

class TimeType extends AbstractType
{
    public function migrateColumn():string
    {
       return $this->getParsedField('time', $this->columnOptions());
    }
}