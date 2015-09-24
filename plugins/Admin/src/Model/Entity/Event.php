<?php
namespace Admin\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity.
 */
class Event extends Entity
{

    public $imageFields = [
        'image' => [
            'size' => 3145728, //3*1024*1024 B
            'extensions' => ['Jpg', 'Png', 'Gif'],
            'required' => true
        ],
        'file' => [
            'size' => 10485760, //10*1024*1024 B
            'extensions' => ['Pdf'],
            'required' => true
        ],
    ];
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
