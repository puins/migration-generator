<?php

namespace Puins\MigrateGenerator\Migration\Columns\Thinkphp;

class BooleanType extends AbstractType
{
    public function migrateColumn():string
    {
        return $this->getParsedField('boolean', $this->columnOptions());
    }
}