<?php

use Phinx\Migration\AbstractMigration;

class UpdateTitleBanner extends AbstractMigration
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

        $banners = $this->table('banners');
        $banners->renameColumn('text', 'text_vie')
            ->addColumn('text_eng', 'string')
            ->addColumn('text_jpn', 'string')
            ->update();
    }
}
