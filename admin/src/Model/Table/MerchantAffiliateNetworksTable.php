<?php
namespace App\Model\Table;

use App\Model\Entity\MerchantAffiliateNetworks;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MerchantCategories Model
 */
class MerchantAffiliateNetworksTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('merchant_affiliate_networks');
        $this->displayField('id');
        $this->primaryKey('id');
    }
    
}
