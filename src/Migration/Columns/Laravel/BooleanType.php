<?php

namespace Puins\MigrateGenerator\Migration\Columns\Laravel;

class BooleanType extends AbstractType
{
    public function migrateColumn():string
    {
        return $this->getParsedField('boolean');
    }

}