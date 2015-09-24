<?php

use Phinx\Migration\AbstractMigration;

class Productions extends AbstractMigration
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
        $productions->addColumn('member_id', 'integer')
            ->addColumn('industry_code', 'string')
            ->addColumn('name', 'string')
            ->addColumn('code', 'string')
            ->addColumn('short_description', 'text')
            ->addColumn('price', 'string')
            ->addColumn('unit', 'string')
            ->addColumn('image', 'string')
            ->addColumn('description', 'text')
            ->addColumn('status', 'integer',['default' => STATUS_UNAPPROVED])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime', ['null' => true, 'default' => null])
            ->save();
    }
}
