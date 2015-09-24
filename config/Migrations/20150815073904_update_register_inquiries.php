<?php

use Phinx\Migration\AbstractMigration;

class UpdateRegisterInquiries extends AbstractMigration
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
        $register_inquiries = $this->table('register_inquiries');
        $register_inquiries->addColumn('capital','string', ['null' => true])
            ->removeColumn('com_business')
            ->save();
    }
}
