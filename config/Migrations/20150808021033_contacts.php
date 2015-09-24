<?php

use Phinx\Migration\AbstractMigration;

class Contacts extends AbstractMigration
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
        $productions = $this->table('contacts');
        $productions->addColumn('com_name', 'string')
            ->addColumn('email', 'string')
            ->addColumn('phone', 'string')
            ->addColumn('title', 'string')
            ->addColumn('content', 'text')
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime', ['null' => true, 'default' => null])
            ->save();

    }
}
