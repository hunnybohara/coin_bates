<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Datasource\Exception\RecordNotFoundException;

/**
 * Merchants Controller
 *
 * @property \App\Model\Table\MerchantsTable $Merchants
 */
class MerchantsController extends AppController
{
    
    public function beforeFilter(Event $event) {
        $this->Auth->allow();
        parent::beforeFilter($event);
    }


    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['AffiliateNetworks']
        ];
        $this->set('merchants', $this->paginate($this->Merchants));
        $this->set('_serialize', ['merchants']);
    }

    /**
     * View method
     *
     * @param string|null $id Merchant id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        
        try{
            $merchant = $this->Merchants->get($id, [
                'contain' => ['AffiliateNetworks', 'Categories', 'Tags']
            ]);
        }  catch (RecordNotFoundException $ex){
            return $this->redirect(['action'=>'index']);
        }
        
        $this->set('merchant', $merchant);
        $this->set('_serialize', ['merchant']);
    }       
}
