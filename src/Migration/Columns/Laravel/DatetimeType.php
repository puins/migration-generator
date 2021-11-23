<?php

namespace Puins\MigrateGenerator\Migration\Columns\Laravel;

class DatetimeType extends AbstractType
{
    public function migrateColumn():string
    {
       return $this->getParsedField('datetime');
    }

}