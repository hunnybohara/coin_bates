<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MerchantTaxonomy Entity.
 */
class MerchantTaxonomy extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'taxonomy_id' => true,
        'merchant_id' => true,
        'taxonomy' => true,
        'merchant'      => true,
        'taxonomy_type' => true,
    ];
}
