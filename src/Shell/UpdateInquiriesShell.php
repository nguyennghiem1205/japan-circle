<?php
// * * * * * /var/www/html/webcore/bin/cake OneMinute >> /var/www/html/webcore/tmp/logs/cron.log
namespace App\Shell;
use Cake\Console\Shell;
use Cake\Network\Email\Email;

/**
 * OneMinute shell command.
 */
class UpdateInquiriesShell extends Shell
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Inquiries');
        $this->loadModel('Activities');
    }
    
    /**
     * main() method.
     *
     * @return bool|int Success or error code.
     */
    public function main()
    {
        $inquiries = $this->Inquiries->find('all');
        $activities = $this->Activities->find('all');
        $countIn = count($inquiries->toArray());
        $countAc = count($activities->toArray());
        $index = 1;
        $this->out('Activity');
        foreach($inquiries as $inquiry) {
            $item = $this->Inquiries->newEntity();
            $item = $this->Inquiries->patchEntity($item, array(
                'id' => $inquiry->id,
                'title_eng' => $inquiry->title_vie,
                'title_jpn' => $inquiry->title_vie,
                'content_eng' => $inquiry->content_vie,
                'content_jpn' => $inquiry->content_vie,
                'description_eng' => $inquiry->description_vie,
                'description_jpn' => $inquiry->description_vie,
            ));

            $this->Inquiries->save($item);
            $this->out($index.' / '.$countIn);
            $index ++;
        }
        $this->out('Activity');
        $index = 1;
        foreach($activities as $activity) {
            $item = $this->Activities->newEntity();
            $item = $this->Activities->patchEntity($item,array(
                'id' => $activity->id,
                'name_eng' => $activity->name_vie,
                'name_jpn' => $activity->name_vie,
                'content_eng' => $activity->content_vie,
                'content_jpn' => $activity->content_vie,
                'description_eng' => $activity->description_vie,
                'description_jpn' => $activity->description_vie,
                'short_description_eng' => $activity->short_description_vie,
                'short_description_jpn' => $activity->short_description_vie,
            ));
            $this->Activities->save($item);
            $this->out($index.' / '.$countAc);
            $index ++;
        }
    }

}