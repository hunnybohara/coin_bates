<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmailParam Entity.
 */
class EmailParam extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'email_id' => true,
        'key' => true,
        'desc' => true,
        'email' => true,
    ];
}
