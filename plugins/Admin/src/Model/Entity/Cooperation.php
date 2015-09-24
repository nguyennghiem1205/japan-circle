<?php
namespace Admin\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cooperation Entity.
 */
class Cooperation extends Entity
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
