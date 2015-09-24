<?php

use Phinx\Migration\AbstractMigration;

class UpdateProductImage extends AbstractMigration
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
        $productions = $this->table('productions');
        $productions->changeColumn('image', 'string', ['null' => true])
            ->save();
    }
}
