<?php

namespace Puins\MigrateGenerator\Migration\Columns\Laravel;

class DateType extends AbstractType
{
    public function migrateColumn():string
    {
        return $this->getParsedField('date');
    }

}