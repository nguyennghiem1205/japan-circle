<?php

use Phinx\Migration\AbstractMigration;

class UpdateTableActivities extends AbstractMigration
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
        $table = $this->table('activities');
        $table->addColumn('description_vie', 'string')
            ->addColumn('description_eng', 'string')
            ->addColumn('description_jpn', 'string')
            ->addColumn('short_description_vie', 'string')
            ->addColumn('short_description_eng', 'string')
            ->addColumn('short_description_jpn', 'string')
            ->removeColumn('description')
            ->removeColumn('short_description')
            ->save();
    }
}
