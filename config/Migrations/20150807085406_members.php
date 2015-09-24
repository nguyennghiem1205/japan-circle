<?php

use Phinx\Migration\AbstractMigration;

class Members extends AbstractMigration
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
        $members->addColumn('password', 'string')
            ->addColumn('com_trading_name_vie', 'string')
            ->addColumn('com_trading_name_eng', 'string')
            ->addColumn('com_trading_name_jpn', 'string')
            ->addColumn('com_short_name_vie', 'string')
            ->addColumn('com_short_name_eng', 'string')
            ->addColumn('com_short_name_jpn', 'string')
            ->addColumn('com_country', 'integer', ['comment' => '1: VN, 2: JP'])
            ->addColumn('com_lang_chosen', 'string', ['comment' => '1: VIE, 2: ENG, 3: JPN'])
            ->addColumn('com_established', 'date')
            ->addColumn('com_tax_code', 'string')
            ->addColumn('com_capital', 'string')
            ->addColumn('com_staff', 'integer')
            ->addColumn('gender', 'integer')
            ->addColumn('image', 'string',['null' =>true])
            ->addColumn('com_business_vie', 'text')
            ->addColumn('com_business_eng', 'text')
            ->addColumn('com_business_jpn', 'text')
            ->addColumn('com_note_vie','text')
            ->addColumn('com_note_eng','text')
            ->addColumn('com_note_jpn','text')
            ->addColumn('address_vie', 'string')
            ->addColumn('address_eng', 'string')
            ->addColumn('address_jpn', 'string')
            ->addColumn('com_pic_department_vie', 'string')
            ->addColumn('com_pic_department_eng', 'string')
            ->addColumn('com_pic_department_jpn', 'string')
            ->addColumn('type_company_id', 'integer')
            ->addColumn('type_business_id', 'integer')
            ->addColumn('mobile', 'string')
            ->addColumn('com_rate', 'string')
            ->addColumn('cooperation_id', 'integer')
            ->addColumn('need_id', 'integer')
            ->addColumn('com_status', 'integer')
            ->addColumn('com_inquiry_vie', 'text')
            ->addColumn('com_inquiry_eng', 'text')
            ->addColumn('com_inquiry_jpn', 'text')
            ->addColumn('com_level', 'integer', ['default' => 2,'comment' => '1: vip member, 2: default member'])
            ->addColumn('com_view', 'integer')
            ->addColumn('com_send_email','integer')
            ->addColumn('com_name_jpn','string')
            ->addColumn('com_name_eng', 'string')
            ->addColumn('manager_eng', 'string')
            ->addColumn('manager_jpn', 'string')
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime', ['null' => true, 'default' => null])
            ->save();

    }
}
