<?php

use Phinx\Migration\AbstractMigration;

class UpdateTableActivities2 extends AbstractMigration
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
        $table->addColumn('sidebar_right', 'integer',['default' => 0])
            ->update();

        $event = $this->table('events');
        $event->removeColumn('type')
            ->update();
    }
}
