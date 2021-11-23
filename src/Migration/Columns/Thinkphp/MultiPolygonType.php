<?php

namespace Puins\MigrateGenerator\Migration\Columns\Thinkphp;

class MultiPolygonType extends AbstractType
{
    public function migrateColumn():string
    {
        return $this->getParsedField('multipolygon', $this->columnOptions());
    }
}