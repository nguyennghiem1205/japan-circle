<?php

use Phinx\Migration\AbstractMigration;

class RegisterInquiries extends AbstractMigration
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
        $register_inquiries->addColumn('member_id','integer', ['default' => 0])
            ->addColumn('inquiry_id','integer')
            ->addColumn('company', 'string')
            ->addColumn('address', 'string')
            ->addColumn('city_code', 'string')
            ->addColumn('prefecture', 'string', ['null' => true])
            ->addColumn('phone', 'string', ['null' => true])
            ->addColumn('fax', 'string', ['null' => true])
            ->addColumn('email', 'string', ['null' => true])
            ->addColumn('site_url', 'string',['null' => true])
            ->addColumn('com_established', 'date', ['null' => true])
            ->addColumn('com_staff', 'integer', ['default' => 0])
            ->addColumn('industry_code','string')
            ->addColumn('com_business', 'string')
            ->addColumn('com_inquiry', 'string')
            ->addColumn('contact_person', 'string')
            ->addColumn('contact_phone', 'string')
            ->addColumn('division_code', 'string')
            ->addColumn('com_department', 'string', ['null' => true])
            ->addColumn('need_info', 'string', ['null' => true])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime', ['null' => true, 'default' => null])
            ->save();
    }
}
