<?php
namespace Admin\Model\Entity;

use Cake\ORM\Entity;

/**
 * Activity Entity.
 */
class Activity extends Entity
{
    public $imageFields = [
        'image' => [
            'size' => 3145728, //3*1024*1024 B
            'extensions' => ['Jpg', 'Png', 'Gif'],
            'required' => false
        ]
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
