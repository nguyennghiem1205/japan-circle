<?php

use Phinx\Migration\AbstractMigration;

class TopListInquiries extends AbstractMigration
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
        $table = $this->table('top_list_inquiries');
        $table->addColumn('title', 'string')
            ->addColumn('url', 'string')
            ->addColumn('status', 'integer',['default' => STATUS_UNAPPROVED])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime', ['null' => true, 'default' => null])
            ->save();
    }
}
