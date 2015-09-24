<?php
namespace Admin\Model\Entity;

use Cake\ORM\Entity;

/**
 * HomeMenu Entity.
 */
class HomeMenu extends Entity
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
