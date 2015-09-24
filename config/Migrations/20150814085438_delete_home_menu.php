<?php

use Phinx\Migration\AbstractMigration;

class DeleteHomeMenu extends AbstractMigration
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
        $menus = $this->table('home_menus');
        $menus->addColumn('name_vie', 'string')
            ->addColumn('name_eng', 'string')
            ->addColumn('name_jpn', 'string')
            ->removeColumn('name','string')
            ->save();

        $inquiry = $this->table('company_inquiries');
        $inquiry -> changeColumn('image','string',['null' => true])
            ->save();

        $admin_inquiry  = $this->table('inquiries');
        $admin_inquiry -> changeColumn('image','string',['null' => true])
            ->save();
    }
}
