<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Country Entity.
 */
class Country extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name'      => true,
        'slug'      => true,
        'branches'  => true,
        'cities'    => true,
        'states'    => true,
    ];
}