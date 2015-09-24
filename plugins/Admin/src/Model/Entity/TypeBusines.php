<?php
namespace Admin\Model\Entity;

use Cake\ORM\Entity;

/**
 * TypeBusines Entity.
 */
class TypeBusines extends Entity
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
