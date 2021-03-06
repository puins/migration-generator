<?php

namespace Puins\MigrateGenerator\Migration\Columns\Thinkphp;

class GeometrycollectionType extends AbstractType
{
    public function migrateColumn():string
    {
        return $this->getParsedField('geometrycollection', $this->columnOptions());
    }
}