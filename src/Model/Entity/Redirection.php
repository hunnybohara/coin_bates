<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Redirection Entity.
 */
class Redirection extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'signature' => true,
        'offer_id' => true,
        'link' => true,
        'user' => true,
        'offer' => true,
    ];
}
