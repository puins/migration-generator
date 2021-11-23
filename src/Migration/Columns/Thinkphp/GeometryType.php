<?php

namespace Puins\MigrateGenerator\Migration\Columns\Thinkphp;

class GeometryType extends AbstractType
{
    public function migrateColumn():string
    {
        return $this->getParsedField('geometry', $this->columnOptions());
    }
}