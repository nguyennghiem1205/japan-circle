<?php
namespace App\Shell;
use Cake\Console\Shell;
use Cake\Network\Email\Email;
use DOMDocument;

/**
 * OneMinute shell command.
 * @property Shell Productions
 * @property Shell News
 */
class UpdateNewsContentShell extends Shell
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('News');
        $this->loadModel('Activities');
        $this->loadModel('Inquiries');
    }
    
    /**
     * main() method.
     *
     * @return bool|int Success or error code.
     */
    public function main()
    {
        $activities = $this->Activities->find('all', [
            'fields' => ['content_vie'],
        ]);
        $inquiries = $this->Inquiries->find('all', [
            'fields' => ['content_vie'],
        ]);
        $images = [];
        $data = array_merge($activities->toArray(), $inquiries->toArray());
        foreach ($data as $item) {
            $item = $item->toArray();
            if (!$item['content_vie']) {
                continue;
            }
            $document = new DOMDocument();
            libxml_use_internal_errors(true);
            $document->loadHTML('<meta http-equiv="content-type" content="text/html; charset=utf-8">'.$item['content_vie']);
            foreach ($document->getElementsByTagName('img') as $img) {
                $src = $img->getAttribute('src');
                if (strpos($src, 'chrome-extension') !== false) {
                    continue;
                }
                if (strpos($src, 'http') === false) {
                    $images[] = $src;
                }
            }
        }
        $this->out('Starting upload images...');
        $index = 0;
        $countImage = count($images);
        foreach ($images as $url) {
            $index++;
            $nameImage = $this->saveImageFromUrl($url, str_replace('/'.basename($url),'', $url), basename($url));
            if ($nameImage) {
                $this->out('Uploaded '.$index.'/'.$countImage.' images: '.str_replace('/'.basename($url),'', $url).'/'.$nameImage);
            } else {
                $this->out('<warning>Error: '.$url.'</warning>');
            }
        }
        $this->out('<info>Updated successfuly</info>');
    }

    public function saveImageFromUrl($oldUrl, $path, $imageName) {
        $oldUrl = 'http://japan-circle.vn'.trim($oldUrl);

        $url = str_replace(' ', '%20', $oldUrl);
        if (!is_dir(WWW_ROOT.$path)) {
            @mkdir(WWW_ROOT.$path);
        }
        $file = @file_get_contents($url);
        if (trim($file)) {
            if (@file_put_contents(WWW_ROOT.$path.DS.$imageName, $file)) {
                @chmod(WWW_ROOT.$path.DS.$imageName, 0777);
                return $imageName;
            };
        }
        return null;
    }

}