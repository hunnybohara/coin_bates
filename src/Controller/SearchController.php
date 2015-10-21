<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class SearchController extends AppController
{
    public function beforeFilter(Event $event) 
    {        
        $this->Auth->allow(['result']);        
        parent::beforeFilter($event);
    }

    public function result()
    {
        $params = $this->request->query;
        $term = $params['q'];
        $submit = $params['submit'];        
        $this->merchants = TableRegistry::get('Merchants');
        $this->offers = TableRegistry::get('Offers');
        if(isset($submit) && $submit == 'A-Z')
        {
            $atozmerchant = array();
            $featuredMerchants = $this->merchants->find()
                                ->where(['Merchants.name LIKE'=> $term.'%'])
                                ->all();

            foreach ($featuredMerchants as $mer)
            {
                $id = $mer->id;            
                $atozmerchant[] = $this->merchants->get($id, [
                    'contain' => ['AffiliateNetworks', 'Categories', 'Tags']
                ]);           
            }             
            $this->set(compact('atozmerchant'));  
        }
        else if(isset($submit) && $submit == 'submit')
        {            
            $featuredMerchants = $this->merchants->find()
                                ->where(['Merchants.name LIKE'=> '%'.$term.'%'])
                                ->all();
            
            foreach ($featuredMerchants as $mer)
            {
                $id = $mer->id;            
                $merchant[] = $this->merchants->get($id, [
                    'contain' => ['AffiliateNetworks', 'Categories', 'Tags']
                ]);
                $this->set('merchant', $merchant);
                $this->set('_serialize', ['merchant']);            
            }                    
        }        
    }
}
