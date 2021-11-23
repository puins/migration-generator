<?php

namespace Puins\MigrateGenerator\Migration\Columns\Thinkphp;

class PointType extends AbstractType
{
    public function migrateColumn():string
    {
       return $this->getParsedField('point', $this->columnOptions());
    }
}