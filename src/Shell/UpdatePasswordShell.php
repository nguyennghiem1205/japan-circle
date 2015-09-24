<?php
// * * * * * /var/www/html/webcore/bin/cake OneMinute >> /var/www/html/webcore/tmp/logs/cron.log
namespace App\Shell;
use Cake\Console\Shell;
use Cake\Network\Email\Email;
use Cake\Utility\Security;

/**
 * OneMinute shell command.
 */
class UpdatePasswordShell extends Shell
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Passwords');
        $this->loadModel('Members');
    }
    
    /**
     * main() method.
     *
     * @return bool|int Success or error code.
     */
    public function main()
    {
        $members = $this->Passwords->find('list',['keyField' => 'id','valueField' => 'password']);
        if($members) $members = $members->toArray();
        $allMembers = $this->Members->find('all');
        $count = count($allMembers->toArray());
        $index = 1;
        foreach($allMembers as $item) {
            if($members[$item->id]) {
                $password = $members[$item->id];
            } else {
                $password = 'hw12345678';
            }
            $password = Security::hash($password, 'sha1', true);
            $member = $this->Members->patchEntity($item, ['password' => $password], ['validate' => false]);
            $this->Members->save($member);
            $this->out($index.' / '.$count);
            $index ++;
        }
    }

}