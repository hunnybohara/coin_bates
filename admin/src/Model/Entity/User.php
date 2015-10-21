<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\TableRegistry;

/**
 * User Entity.
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'email'         => true,
        'password'      => true,
        'role'          => true,
        'first_name'    => true,
        'last_name'     => true,
    ];
    
    protected function _setPassword($password){
        return (new DefaultPasswordHasher)->hash($password);
    }
    
    protected function _getName(){
        return $this->_properties['first_name'] . '  ' . $this->_properties['last_name'];
    }
    
}
