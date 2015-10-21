<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MerchantAffiliateNetwork Entity.
 */
class MerchantAffiliateNetwork extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'merchant_id' => true,
        'affiliate_network_id' => true,
        'merchant' => true
    ];
}
