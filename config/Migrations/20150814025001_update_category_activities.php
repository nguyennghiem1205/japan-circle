<?php

use Phinx\Migration\AbstractMigration;

class UpdateCategoryActivities extends AbstractMigration
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
        $activity_categories = $this->table('activity_categories');
        $activity_categories->addColumn('name_vie', 'string')
            ->addColumn('name_eng', 'string')
            ->addColumn('name_jpn', 'string')
            ->addColumn('order', 'integer',['null' =>true])
            ->addColumn('status', 'integer',['default' => 0])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime', ['null' => true, 'default' => null])
            ->save();
    }
}
