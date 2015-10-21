<?php
namespace App\Model\Behavior;

use Cake\ORM\Behavior;
use Cake\ORM\Table;
use Cake\Event\Event;


/**
 * Formatable behavior
 */
class FormatableBehavior extends Behavior
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];
    
    public function beforeMarshal(Event $event, ArrayObject $data, ArrayObject $options){
        pr($options);
        die('we are here from Behaviour');
    }
    
}
