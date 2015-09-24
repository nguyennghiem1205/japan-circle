<?php
use Phinx\Migration\AbstractMigration;
use Cake\ORM\TableRegistry;

class Initial extends AbstractMigration
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
        $users = $this->table('users');
        $users->addColumn('email', 'string')
            ->addColumn('password', 'string')
            ->addColumn('facebook_id', 'string', ['null' => true, 'default' => null])
            ->addColumn('first_name', 'string', ['null' => true, 'default' => null])
            ->addColumn('last_name', 'string', ['null' => true, 'default' => null])
            ->addColumn('avatar', 'string', ['null' => true, 'default' => null])
            ->addColumn('smart_admin_themes', 'string', ['null' => true, 'default' => 'smart-style-0'])
            ->addColumn('auth_token', 'string', ['null' => true, 'default' => null])
            ->addColumn('extra_token', 'string', ['null' => true, 'default' => null])
            ->addColumn('group', 'integer', ['limit' => 1,'default' => 1])
            ->addColumn('status', 'integer', ['limit' => 1,'default' => 1])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime', ['null' => true, 'default' => null])
            ->save();

        /* ---------- Insert default admin data  { ---------- */
        $tblUser = TableRegistry::get('Users');
        $user = $tblUser->newEntity();
        $user->email = 'admin@hiworld.com.vn';
        $user->password = '12345678';
        $user->first_name = 'Hiworld';
        $user->last_name = 'Admin';
        $tblUser->save($user);
        /* ---------- Insert default admin data  } ---------- */

        $user_auths = $this->table('user_auths');
        $user_auths->addColumn('group', 'integer', ['limit' => 1,'default' => 1])
            ->addColumn('plugin', 'string', ['null' => true, 'default' => null])
            ->addColumn('controller', 'string')
            ->addColumn('action', 'string')
            ->save();

        $email_stacks = $this->table('email_stacks');
        $email_stacks->addColumn('email', 'string')
            ->addColumn('subject', 'string')
            ->addColumn('content', 'text')
            ->addColumn('sent', 'boolean', ['default' => 0])
            ->addColumn('created', 'datetime')
            ->save();

        $email_templates = $this->table('email_templates');
        $email_templates->addColumn('subject', 'string')
            ->addColumn('content', 'text')
            ->save();

        $menus = $this->table('menus');
        $menus->addColumn('parent_id', 'integer', ['default' => null])
            ->addColumn('name', 'string', ['null' => true,'default' => null])
            ->addColumn('icon', 'string')
            ->addColumn('group', 'integer', ['limit' => 1,'default' => 1])
            ->addColumn('plugin', 'string', ['null' => true, 'default' => null])
            ->addColumn('controller', 'string')
            ->addColumn('action', 'string')
            ->addColumn('param', 'string')
            ->addColumn('display', 'boolean', ['default' => 1])
            ->addColumn('display_order', 'integer')
            ->save();

        $pages = $this->table('pages');
        $pages->addColumn('code', 'string')
            ->addColumn('title', 'string')
            ->addColumn('content', 'text')
            ->save();

        $news_categories = $this->table('news_categories');
        $news_categories->addColumn('name_vie', 'string')
            ->addColumn('name_eng', 'string')
            ->addColumn('name_jpn', 'string')
            ->addColumn('status', 'integer', ['limit' => 1,'default' => 1])
            ->addColumn('order', 'integer')
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime', ['null' => true, 'default' => null])
            ->save();

        $news = $this->table('news');
        $news->addColumn('name_vie', 'string')
            ->addColumn('name_eng', 'string')
            ->addColumn('name_jpn', 'string')
            ->addColumn('description_jpn', 'string')
            ->addColumn('description_eng', 'string')
            ->addColumn('description_vie', 'string')
            ->addColumn('content_vie', 'text')
            ->addColumn('content_eng', 'text')
            ->addColumn('content_jpn', 'text')
            ->addColumn('news_category_id','integer')
            ->addColumn('company_id','integer')
            ->addColumn('image','string',['null'=>true])
            ->addColumn('status', 'integer', ['limit' => 1,'default' => 1])
            ->addColumn('home_page', 'integer', ['limit' => 1,'default' => 0])
            ->addColumn('news_meta_desc','string')
            ->addColumn('news_meta_keyword','string')
            ->addColumn('new', 'integer', ['limit' => 1,'default' => 1,'comment' => '1. true, 2. false'])
            ->addColumn('total_view','integer')
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime', ['null' => true, 'default' => null])
            ->save();

        $banners = $this->table('banners');
        $banners->addColumn('image', 'string')
            ->addColumn('url', 'string')
            ->addColumn('text', 'string')
            ->addColumn('position', 'integer', ['limit' => 1,'default' => 1,'comment' => '1. top, 2. bottom'])
            ->addColumn('status', 'integer', ['limit' => 1,'default' => 1])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime', ['null' => true, 'default' => null])
            ->save();

        $advertisement = $this->table('advertisements');
        $advertisement->addColumn('content', 'text')
            ->addColumn('name', 'string')
            ->addColumn('position', 'integer', ['limit' => 1,'default' => 1,'comment' => '1. top, 2. right'])
            ->addColumn('status', 'integer', ['limit' => 1,'default' => 1])
            ->addColumn('order', 'integer')
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime', ['null' => true, 'default' => null])
            ->save();

        $activities = $this->table('activities');
        $activities->addColumn('name_vie', 'string')
            ->addColumn('name_eng', 'string')
            ->addColumn('name_jpn', 'string')
            ->addColumn('content_vie', 'text')
            ->addColumn('content_eng', 'text')
            ->addColumn('content_jpn', 'text')
            ->addColumn('image', 'string')
            ->addColumn('activity_category_id', 'integer')
            ->addColumn('description_vie', 'string')
            ->addColumn('description_eng', 'string')
            ->addColumn('description_jpn', 'string')
            ->addColumn('short_description_vie', 'string')
            ->addColumn('short_description_eng', 'string')
            ->addColumn('short_description_jpn', 'string')
            ->addColumn('new', 'integer', ['limit' => 1,'default' => 1])
            ->addColumn('status', 'integer', ['limit' => 1,'default' => 1])
            ->addColumn('total_view','integer')
            ->addColumn('order', 'integer')
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime', ['null' => true, 'default' => null])
            ->save();

        $company_inquiries = $this->table('company_inquiries');
        $company_inquiries->addColumn('industry_code', 'string')
            ->addColumn('title', 'string')
            ->addColumn('description', 'string')
            ->addColumn('content', 'text')
            ->addColumn('type', 'integer')
            ->addColumn('image', 'string',['null' => true])
            ->addColumn('status', 'string')
            ->addColumn('member_id','integer')
            ->addColumn('order', 'integer')
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime', ['null' => true, 'default' => null])
            ->save();

        $inquiries = $this->table('inquiries');
        $inquiries->addColumn('industry_code', 'string')
            ->addColumn('title_vie', 'string')
            ->addColumn('title_eng', 'string')
            ->addColumn('title_jpn', 'string')
            ->addColumn('content_vie', 'text')
            ->addColumn('content_eng', 'text')
            ->addColumn('content_jpn', 'text')
            ->addColumn('image','string',['null' => true])
            ->addColumn('date_start','date')
            ->addColumn('date_end','date')
            ->addColumn('description_vie','string')
            ->addColumn('description_eng','string')
            ->addColumn('description_jpn','string')
            ->addColumn('company','string')
            ->addColumn('type','integer',['limit' => 1,'default' => 1,'comment' => '1: Japan, 2: Vietnam'])
            ->addColumn('total_view','integer')
            ->addColumn('inquiry_meta_desc','string')
            ->addColumn('inquiry_meta_keyword','string')
            ->addColumn('status', 'integer', ['limit' => 1,'default' => 1,'comment'=>'1: show, 2: had partners, 3: hidden'])
            ->addColumn('order', 'integer')
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime', ['null' => true, 'default' => null])
            ->save();

        $type_companies = $this->table('type_companies');
        $type_companies->addColumn('type_name_vie', 'string')
            ->addColumn('type_name_eng', 'string')
            ->addColumn('type_name_jpn', 'string')
            ->addColumn('order', 'integer')
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime', ['null' => true, 'default' => null])
            ->save();
    }

    public function down()
    {

    }
}