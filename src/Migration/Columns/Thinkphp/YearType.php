<?php

namespace Puins\MigrateGenerator\Migration\Columns\Thinkphp;

class YearType extends AbstractType
{
    public function migrateColumn():string
    {
        return $this->getParsedField('year', $this->columnOptions());

    }
}