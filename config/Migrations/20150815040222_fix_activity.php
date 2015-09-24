<?php

use Phinx\Migration\AbstractMigration;

class FixActivity extends AbstractMigration
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
        $table->changeColumn('image', 'string',['null' => true])
            ->save();
    }
}
