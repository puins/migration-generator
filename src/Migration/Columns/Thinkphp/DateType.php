<?php

namespace Puins\MigrateGenerator\Migration\Columns\Thinkphp;

class DateType extends AbstractType
{

    public function migrateColumn():string
    {
        return $this->getParsedField('date', $this->columnOptions());
    }
}