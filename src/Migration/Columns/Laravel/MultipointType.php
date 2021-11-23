<?php

namespace Puins\MigrateGenerator\Migration\Columns\Laravel;

class MultipointType extends AbstractType
{

    public function migrateColumn():string
    {
        return $this->getParsedField('multipoint');
    }
}