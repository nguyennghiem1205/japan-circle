<?php
namespace Admin\Model\Entity;

use Cake\ORM\Entity;

/**
 * Advertisement Entity.
 */
class Advertisement extends Entity
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
