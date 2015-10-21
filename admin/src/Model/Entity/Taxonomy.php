<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Taxonomy Entity.
 */
class Taxonomy extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'slug' => true,
        'parent' => true,
        'type' => true,
    ];
}
