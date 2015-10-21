<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Event\Event;

/**
 * Users Model
 */
class UsersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('users');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->hasMany('BitcoinAccounts', [
            'foreignKey' => 'user_id'
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
            ->allowEmpty('id', 'create')
            ->add('email', 'valid', ['rule' => 'email'])
            ->requirePresence('email', 'create')
            ->notEmpty('email')
            ->requirePresence('password', 'create')
            ->notEmpty('password')
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name')
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name')
            ->requirePresence('role', 'create')
            ->notEmpty('role');

        return $validator;
    }
    
    /**
     * 
     * Define Set of Validation Rules for Log in Process
     * 
     * @param Cake\Validation\Validator $validator
     * @return Cake\Validation\Validator
     */
    function validationLogin($validator){
        
        $validator
            ->notEmpty('email'      , __("Email Can not be Left Blank"))
            ->notEmpty('password'   , __("Password Can not Be left Blank"));
        
        return $validator;
    }
    
    /**
     * 
     * Define Set of Validation Rules For Sign up Process
     * 
     * @param Cake\Validation\Validator $validator
     * @return Cake\Validation\Validator
     */
    function validationSignup($validator){
        
        $validator
            ->notEmpty('full_name'       , __("Name Can not be Left Blank"))
            ->notEmpty('email'           , __("Email Can not Be left Blank"))
            ->add('email', 'validFormat',[ 
                'rule'      => 'email',
                'message'   => __('Please Enter Valid Email Address'),
            ])
            ->add('email', 'unique',[ 
                'rule'      => 'validateUnique',
                'provider'  => 'table',
                'message'   => __('E-mail Seems to be Already Registered With Us.'),
            ])
            ->notEmpty('password'        , __("Password Can not Be left Blank"))
            ->add('password','minLength',[
                'rule'      => ['minLength',6],
                'message'   => __('Password Needs to be Atleast 6 Character Long'),
            ]);
        
        return $validator;
    }
    
    /**
     * 
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }
    
    public function beforeMarshal(Event $event, \ArrayObject $data, \ArrayObject $options){
        /**
         * 
         * While Submitting the form Explode the First & Last name from the full_name
         * Applies with the signup form specially.
         */
        if(isset($data['full_name'])):
            $name = explode(" ", $data['full_name']);
            if(count($name) == 2){
                $data['first_name'] = $name[0];
                $data['last_name']  = $name[1];
            }else{
                $data['first_name'] = $data['full_name'];
                $data['last_name']  = '';
            }
        endif;
    }
    
    public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
