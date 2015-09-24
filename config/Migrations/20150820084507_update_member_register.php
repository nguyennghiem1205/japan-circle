<?php

use Phinx\Migration\AbstractMigration;

class UpdateMemberRegister extends AbstractMigration
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
        $table = $this->table('members');
        $table->addColumn('contact_email', 'string')
            ->addColumn('image_product_1', 'string',['null' => true])
            ->addColumn('image_product_2', 'string',['null' => true])
            ->addColumn('image_product_3', 'string',['null' => true])
            ->addColumn('image_product_4', 'string',['null' => true])
            ->addColumn('image_product_5', 'string',['null' => true])
            ->update();
    }
}
