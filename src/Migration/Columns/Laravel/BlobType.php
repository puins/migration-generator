<?php

namespace Puins\MigrateGenerator\Migration\Columns\Laravel;

use Puins\MigrateGenerator\Types\DbType;

class BlobType extends AbstractType
{

    public function migrateColumn():string
    {
        return $this->getParsedField('binary');
    }

}