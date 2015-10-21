<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\TableRegistry;

/**
 * Offers Controller
 *
 * @property \App\Model\Table\OffersTable $Offers
 */
class OffersController extends AppController
{
    
    function beforeFilter(Event $event) {
        
        $this->Auth->allow(['index','view']);
        
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
            'contain' => ['Merchants']
        ];
        $this->set('offers', $this->paginate($this->Offers));
        $this->set('_serialize', ['offers']);
    }

    /**
     * View method
     *
     * @param string|null $id Offer id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $offer = $this->Offers->get($id, [
            'contain' => ['Merchants']
        ]);
        $this->set('offer', $offer);
        $this->set('_serialize', ['offer']);
    }
    
    /**
     * 
     * Redirect the User in case the Offer is not valid in that case 
     * @param type $id
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function r($id){
        try{
            $offer = $this->Offers->get($id, [
                'contain' => ['Merchants']
            ]);
            
            $this->redirections = TableRegistry::get('Redirections');
            
            $signature          = $this->redirections->getRandomSignature();
            $redirectionLink    = $offer->link . '&u1=' . $signature;
            
            $redirection = $this->redirections->newEntity([
                'user_id'   => $this->current_user['id'],
                'offer_id'  => $id,
                'link'      => $redirectionLink,
                'signature' => $signature,
            ]);
            $this->redirections->save($redirection);
            return $this->redirect($redirectionLink);
            
        }  catch (NotFoundException $ex){
            if($this->request->is('ajax')){
                /**
                 * 
                 * Change the view file here and redirect it to the home page
                 */
                return $this->redirct(['controller'=>'merchants']);    
            }else{
                return $this->redirct('/');
            }
            
        }
    }
}
