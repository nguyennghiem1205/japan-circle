<?php
namespace Admin\Model\Entity;

use Cake\ORM\Entity;

/**
 * Banner Entity.
 */
class Banner extends Entity
{

    public $imageFields = [
        'image' => [
            'size' => 3145728, //3*1024*1024 B
            'extensions' => ['Jpg', 'Png', 'Gif'],
            'required' => true
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
