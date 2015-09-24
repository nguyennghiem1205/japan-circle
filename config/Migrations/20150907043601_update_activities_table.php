<?php

use Phinx\Migration\AbstractMigration;

class UpdateActivitiesTable extends AbstractMigration
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
        $table->addColumn('home_page', 'integer',['default' => 0])
            ->update();
        $inquiry = $this->table('inquiries');
        $inquiry->addColumn('home_page', 'integer',['default' => 0])
            ->update();
    }
}
