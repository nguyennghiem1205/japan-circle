<?php

use Phinx\Migration\AbstractMigration;

class Events extends AbstractMigration
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
        $table = $this->table('events');
        $table->addColumn('title_vie', 'string')
            ->addColumn('title_eng', 'string')
            ->addColumn('title_jpn', 'string')
            ->addColumn('image', 'string')
            ->addColumn('file', 'string')
            ->addColumn('created', 'datetime')
            ->addColumn('active', 'integer',['default' => 0])
            ->addColumn('modified', 'datetime', ['null' => true, 'default' => null])
            ->save();
    }
}
