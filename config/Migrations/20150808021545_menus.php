<?php

use Phinx\Migration\AbstractMigration;

class Menus extends AbstractMigration
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
        $menus = $this->table('home_menus');
        $menus->addColumn('name', 'string')
            ->addColumn('parent_id', 'integer',['null' => true])
            ->addColumn('type', 'integer')
            ->addColumn('child_id', 'integer')
            ->addColumn('order', 'integer')
            ->addColumn('status', 'integer',['default' => 0])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime', ['null' => true, 'default' => null])
            ->save();
    }
}
