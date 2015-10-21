<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MerchantTag Entity.
 */
class MerchantTag extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'merchant_id' => true,
        'tag_id' => true,
        'merchant' => true,
        'tag' => true,
    ];
}
