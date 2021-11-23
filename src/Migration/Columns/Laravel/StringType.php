<?php

namespace Puins\MigrateGenerator\Migration\Columns\Laravel;

class StringType extends AbstractType
{

    public function migrateColumn():string
    {
        return sprintf("string('{$this->column->getName()}', %d)%s", (int)$this->column->getLength(), $this->options());
    }
}