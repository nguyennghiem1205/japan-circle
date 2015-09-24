<?php
// * * * * * /var/www/html/webcore/bin/cake OneMinute >> /var/www/html/webcore/tmp/logs/cron.log
namespace App\Shell;
use Cake\Console\Shell;
use Cake\Network\Email\Email;
use Cake\Utility\Security;

/**
 * OneMinute shell command.
 */
class UpdateSyncMemberShell extends Shell
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('SyncMembers');
        $this->loadModel('Members');
    }
    
    /**
     * main() method.
     *
     * @return bool|int Success or error code.
     */
    public function main()
    {
        $members = $this->SyncMembers->find('all');
        $syncMember = array();
        foreach($members as $member) {
            $syncMember[$member->member_id] = $member;
        }
        $allMembers = $this->Members->find('all');
        $count = count($allMembers->toArray());
        $index = 1;
        foreach($allMembers as $item) {
            if(isset($syncMember[$item->id])) {
                $arrMember = array();
                $arrMember['manager_eng'] = $syncMember[$item->id]['manager_eng'];
                $arrMember['manager_jpn'] = $syncMember[$item->id]['manager_jpn'];
                $arrMember['com_name_jpn'] = $syncMember[$item->id]['com_name_jpn'];
                $arrMember['com_name_eng'] = $syncMember[$item->id]['com_name_eng'];
                $member = $this->Members->patchEntity($item, $arrMember, ['validate' => false]);
                $this->Members->save($member);
                $this->out($index.' / '.$count);
                $index ++;
            }
        }
    }

}