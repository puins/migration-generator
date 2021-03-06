<?php

namespace Puins\MigrateGenerator\Migration\Columns\Thinkphp;

class FloatType extends AbstractType
{
    public function migrateColumn():string
    {
        return $this->getParsedField('float', $this->columnOptions(0, $this->column->getPrecision(), $this->column->getScale()));
    }
}