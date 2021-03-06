<?php
namespace Admin\Model\Entity;

use Cake\ORM\Entity;

/**
 * Member Entity.
 */
class Member extends Entity
{

    public $imageFields = [
        'image' => [
            'size' => 3145728, //3*1024*1024 B
            'extensions' => ['Jpg', 'Png'],
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
