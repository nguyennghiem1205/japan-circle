<?php

use Phinx\Migration\AbstractMigration;

class Suporter extends AbstractMigration
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
        $supporter = $this->table('supporters');
        $supporter->addColumn('password', 'string')
            ->addColumn('first_name', 'string')
            ->addColumn('last_name', 'string')
            ->addColumn('birthdate', 'date')
            ->addColumn('identity_card', 'string')
            ->addColumn('email', 'string')
            ->addColumn('image', 'string', ['null' => true])
            ->addColumn('phone', 'string')
            ->addColumn('category_supporter_id', 'string')
            ->addColumn('city_code', 'string')
            ->addColumn('district_code', 'string', ['null' => true])
            ->addColumn('url_facebook', 'string', ['null' => true])
            ->addColumn('site_url', 'string', ['null' => true])
            ->addColumn('company_name', 'string')
            ->addColumn('company_address', 'string')
            ->addColumn('company_site_url', 'string',['null' => true])
            ->addColumn('industry_code', 'string')
            ->addColumn('com_staff', 'string')
            ->addColumn('com_lang_chosen', 'string')
            ->addColumn('member_organize', 'text')
            ->addColumn('experience', 'text')
            ->addColumn('experience_file', 'string',['null' => true])
            ->addColumn('support_info', 'text', ['null' => true])
            ->addColumn('status', 'integer', ['default' => 0])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime', ['null' => true, 'default' => null])
            ->save();

        $categorySupporter = $this->table('category_supporters');
        $categorySupporter->addColumn('name_vie', 'string')
            ->addColumn('name_eng','string')
            ->addColumn('name_jpn', 'string')
            ->addColumn('status', 'integer', ['default' => 1])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime', ['null' => true, 'default' => null])
            ->save();

        $supporterCity = $this->table('supporter_cities');
        $supporterCity->addColumn('supporter_id', 'integer')
            ->addColumn('city_code', 'string')
            ->save();
    }
}
