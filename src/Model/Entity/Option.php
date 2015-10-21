<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Option Entity.
 */
class Option extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'id'            => true,
        'option_name'   => true,
        'option_value'  => true,
    ];
}
