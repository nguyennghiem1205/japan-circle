<?php

use Phinx\Migration\AbstractMigration;

class UpdateMember extends AbstractMigration
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
        $members = $this->table('members');
        $members->changeColumn('image', 'string',['null' => true])
            ->update();
    }
}
