<?php
// * * * * * /var/www/html/webcore/bin/cake OneMinute >> /var/www/html/webcore/tmp/logs/cron.log
namespace App\Shell;
use Cake\Console\Shell;
use Cake\Network\Email\Email;

/**
 * OneMinute shell command.
 */
class OneMinuteShell extends Shell
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('EmailStacks');
    }
    
    /**
     * main() method.
     *
     * @return bool|int Success or error code.
     */
    public function main()
    {
        $this->sendMail();
        return;
    }

    /**
     * Displays a header for the shell
     *
     * @return void
     */
    protected function _welcome()
    {

    }


    /**
     * Check email in stack and send to user
     * @throws Exception
     * @return void
     */
    public function sendMail()
    {
        $mails = $this->EmailStacks->find()->where(['sent'=>false]);
        
        $dataResult = [];
        foreach ($mails as $row)
        {
            $email = new Email('default');
            if($email->emailFormat('html')->template('content')->to($row->email)->subject($row->subject)->viewVars(['content' => $row->content])->send())
            {
                $ent = $this->EmailStacks->get($row->id);
                $ent->sent = true;
                $this->EmailStacks->save($ent);
            }
        }
        return true;
    }
}