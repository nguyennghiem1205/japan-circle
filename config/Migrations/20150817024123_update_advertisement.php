<?php

use Phinx\Migration\AbstractMigration;

class UpdateAdvertisement extends AbstractMigration
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
        $table = $this->table('advertisements');
        $table->addColumn('name_vie', 'string')
            ->addColumn('name_eng', 'string')
            ->addColumn('name_jpn', 'string')
            ->removeColumn('name')
            ->save();
    }
}
