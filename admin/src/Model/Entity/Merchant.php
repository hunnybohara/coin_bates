<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;
use Cake\Datasource\Exception\RecordNotFoundException;

/**
 * Merchant Entity.
 */
class Merchant extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name'              => true,
        'logo'              => false,
        'website_link'      => true,
        
        'accept_bitcoin'    => true,
        'is_featured'       => true,
        'description'       => true,
        'default_term'      => true,
        'payment_term'      => true,
        'status'            => true,
        'network_id'        => true,
        'affiliate_network' => true,
        'tags'              => false,
        'categories'        => true,
        'rebate'            => true,
        'similar_merchant'  => true,
        'tag_line'          => true,
    ];
    
    public function getLogoFile(){
        $this->Files            = TableRegistry::get('Files');
        $file = new File();
        try {
            $logo               = $this->Files->get((int)$this->_properties['logo']);
            
            return $logo;
        } catch (RecordNotFoundException $ex) {
            try{
                $noImgFound = $this->Files->get(1);                 
                return $noImgFound;
            } catch (RecordNotFoundException $ex){
                return  $file;
            }
        }
    }
    
    public function offerCount(){
        $this->offers = TableRegistry::get('Offers');
        $query = $this->offers->find('all',[
            'conditions'    => ['Offers.merchant_id'=>$this->id],
        ]);
        return $query->count();
    }
    
    public function offers(){
        $this->offers = TableRegistry::get('Offers');
        $query = $this->offers->find('all')
                ->where(['Offers.merchant_id'=>$this->id])
                ->limit(5);
        return $query->toArray();
    }
    
    public function getPaymentTerm(){
        
        if(isset($this->_properties['default_term'])?($this->_properties['default_term'] == 1)?TRUE:FALSE:FALSE){
            $this->options = TableRegistry::get('Options');
            return $this->options->getOption('default_payment_tnc');
        }else{
            return $this->_properties['payment_term'];
        }
    }
}
