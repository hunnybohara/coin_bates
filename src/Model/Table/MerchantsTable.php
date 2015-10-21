<?php
namespace App\Model\Table;

use App\Model\Entity\Merchant;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Merchants Model
 */
class MerchantsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('merchants');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('AffiliateNetworks', [
            'foreignKey' => 'network_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsToMany('Categories',[
            'through' => 'MerchantCategories',
        ]);
        $this->belongsToMany('Tags',[
            'through' => 'MerchantTags',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')
            ->requirePresence('name', 'create')
            ->notEmpty('name')
            ->allowEmpty('logo')
            ->allowEmpty('website_link')
            ->requirePresence('description'     , 'create')
            ->requirePresence('payment_terms'   , 'create')
            ->notEmpty('payment_terms')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['network_id'], 'AffiliateNetworks'));
        return $rules;
    }
    
}
