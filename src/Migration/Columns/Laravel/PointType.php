<?php

namespace Puins\MigrateGenerator\Migration\Columns\Laravel;

class PointType extends AbstractType
{

    public function migrateColumn():string
    {
        return $this->getParsedField('point');
    }
}