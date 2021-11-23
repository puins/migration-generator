<?php

namespace Puins\MigrateGenerator\Migration\Columns\Thinkphp;

class DateTimeType extends AbstractType
{
    public function migrateColumn():string
    {
       return $this->getParsedField('datetime', $this->columnOptions());
    }
}