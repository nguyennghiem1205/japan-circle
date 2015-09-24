<?php
namespace Admin\Model\Entity;

use Cake\ORM\Entity;

/**
 * ActivityCategory Entity.
 */
class ActivityCategory extends Entity
{

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
