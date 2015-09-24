<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Supporter Entity.
 */
class Supporter extends Entity
{

    public $imageFields = [
        'image' => [
            'size' => 3145728, //3*1024*1024 B
            'extensions' => ['Jpg', 'Png', 'Gif'],
            'required' => true
        ],
        'experience_file' => [
            'size' => 3145728, //3*1024*1024 B
            'extensions' => ['doc', 'pdf', 'docx', 'txt', 'xls', 'xlsx'],
            'required' => false
        ],

    ];

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     * Note that '*' is set to true, which allows all unspecified fields to be
     * mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
