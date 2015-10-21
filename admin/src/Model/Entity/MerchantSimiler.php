<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MerchantCategory Entity.
 */
class MerchantSimiler extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'merchant_id' => true,
        'merchant' => true,        
    ];
}
