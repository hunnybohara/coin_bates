<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

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
        'email'             => true,
        'password'          => true,
        'first_name'        => true,
        'last_name'         => true,
        'full_name'         => true,
        'role'              => false,
        'fb_connect'        => false,
        'tw_connect'        => false,
        'gp_connect'        => false,
        'bitcoin_accounts'  => true,
    ];
    
    protected function _setFullName($full_name){
        $name = explode(" ", $full_name);
        if(count($name) == 2){
            $this->first_name = $name[0];
            $this->last_name  = $name[1];
        }else{
            $this->first_name = $full_name;                        
        }
        
        return $full_name;
    }


    protected function _setPassword($password){
        return (new DefaultPasswordHasher)->hash($password);
    }
}
