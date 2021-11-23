<?php

namespace Puins\MigrateGenerator\Migration\Columns\Thinkphp;

class MultipointType extends AbstractType
{
    public function migrateColumn():string
    {
       return $this->getParsedField('multipoint', $this->columnOptions());
    }
}