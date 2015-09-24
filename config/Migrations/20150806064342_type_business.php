<?php

use Phinx\Migration\AbstractMigration;

class TypeBusiness extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     */
    public function change()
    {
        $type_business = $this->table('type_business');
        $type_business->addColumn('type_name_vie', 'string')
            ->addColumn('type_name_eng', 'string')
            ->addColumn('type_name_jpn', 'string')
            ->addColumn('order', 'integer')
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime', ['null' => true, 'default' => null])
            ->save();
    }
}
