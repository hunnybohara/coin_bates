<?php
namespace App\Model\Table;

use App\Model\Entity\MerchantTaxonomy;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Event\Event;


/**
 * MerchantTaxonomies Model
 */
class MerchantTaxonomiesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('merchant_taxonomies');
        $this->displayField('id');
        $this->primaryKey('id');
//        $this->belongsTo('Taxonomies', [
//            'foreignKey' => 'taxonomy_id',
//            'joinType' => 'INNER'
//        ]);
        $this->belongsTo('Merchants', [
            'foreignKey' => 'merchant_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Categories', [
            'foreignKey'    => 'taxonomy_id',
            'joinType'      => 'INNER',
            'conditions'    => ['MerchantTaxonomies.taxonomy_type'=>'category']
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
            ->allowEmpty('id', 'create');

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
        $rules->add($rules->existsIn(['taxonomy_id'], 'Taxonomies'));
        $rules->add($rules->existsIn(['merchant_id'], 'Merchants'));
        return $rules;
    }
}
