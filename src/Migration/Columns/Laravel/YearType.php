<?php

namespace Puins\MigrateGenerator\Migration\Columns\Laravel;

class YearType extends AbstractType
{

    public function migrateColumn():string
    {
       return $this->getParsedField('year');
    }
}