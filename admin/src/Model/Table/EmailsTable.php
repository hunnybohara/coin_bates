<?php
namespace App\Model\Table;

use App\Model\Entity\Email;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Emails Model
 */
class EmailsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('emails');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->hasMany('EmailParams', [
            'foreignKey' => 'email_id'
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
            ->requirePresence('code', 'create')
            ->notEmpty('code')
            ->requirePresence('subject', 'create')
            ->notEmpty('subject')
            ->requirePresence('message', 'create')
            ->notEmpty('message')
            ->requirePresence('params', 'create')
            ->notEmpty('params');

        return $validator;
    }
}
