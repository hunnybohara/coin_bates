<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Core\Configure;
use Cake\Routing\Router;

/**
 * File Entity.
 */
class File extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name'          => true,
        'mime_type'     => true,
        'user_id'       => true,
        'extention'     => true,
        'user'          => true,
    ];
    
    protected function _getUrl()
    {   
        if(isset($this->_properties['id'])){
            if($this->_properties['id'] >= 0){
                $fileUrl    = Router::url('/simg/' .  md5($this->_properties['id']) . '.' . $this->_properties['extention'],true);
                return $fileUrl;
            }else{
                return '';
            }
        }
        else{
            return '';
        }
    }
    
    function getImgUrl($w = 200,$h = NUll){
        $url = $this->url . '?w=' . $w;
        if(!empty($h)){
            $url .= ("&h=" . $h);
        }
       
        return $url;
    }
}
