<?php
namespace App\Model\Table;

use App\Model\Entity\Option;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Options Model
 */
class OptionsTable extends Table
{
    protected $options = [];
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('options');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->requirePresence('option_name', 'create')
            ->notEmpty('option_name')
            ->requirePresence('option_value', 'create')
            ->notEmpty('option_value');

        return $validator;
    }
    
    public function getOptions(){
        if(count($this->options) == 0){
            $options = $this->find('all')->toArray();
            foreach($options as $option){
                $this->options[$option->option_name] = $option->option_value;
            }
        }
        return $this->options;
    }
    
    public function getOption($key){
        if(count($this->options) == 0){
            $this->getOptions();
        }
        return isset($this->options[$key])?$this->options[$key]:NULL;
    }
}
