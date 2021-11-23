<?php

namespace Puins\MigrateGenerator\Migration\Columns\Laravel;

class GeometrycollectionType extends AbstractType
{

    public function migrateColumn():string
    {
        return $this->getParsedField('geometrycollection');
    }

}