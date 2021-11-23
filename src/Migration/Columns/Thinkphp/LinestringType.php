<?php

namespace Puins\MigrateGenerator\Migration\Columns\Thinkphp;

class LinestringType extends AbstractType
{
    public function migrateColumn():string
    {
        return $this->getParsedField('linestring', $this->columnOptions());
    }
}