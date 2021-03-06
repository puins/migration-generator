<?php

namespace Puins\MigrateGenerator\Migration\Columns\Laravel;

class GeometryType extends AbstractType
{

    public function migrateColumn():string
    {
        return $this->getParsedField('geometry');
    }
}