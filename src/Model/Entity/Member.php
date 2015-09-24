<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Member Entity.
 */
class Member extends Entity
{
    public $imageFields = [
        'image' => [
            'size' => 3145728, //3*1024*1024 B
            'extensions' => ['Jpg', 'Png', 'Gif'],
            'required' => false
        ],
        'image_product_1' => [
            'size' => 3145728, //3*1024*1024 B
            'extensions' => ['Jpg', 'Png', 'Gif'],
            'required' => false
        ],
        'image_product_2' => [
            'size' => 3145728, //3*1024*1024 B
            'extensions' => ['Jpg', 'Png', 'Gif'],
            'required' => false
        ],
        'image_product_3' => [
            'size' => 3145728, //3*1024*1024 B
            'extensions' => ['Jpg', 'Png', 'Gif'],
            'required' => false
        ],
        'image_product_4' => [
            'size' => 3145728, //3*1024*1024 B
            'extensions' => ['Jpg', 'Png', 'Gif'],
            'required' => false
        ],
        'image_product_5' => [
            'size' => 3145728, //3*1024*1024 B
            'extensions' => ['Jpg', 'Png', 'Gif'],
            'required' => false
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
