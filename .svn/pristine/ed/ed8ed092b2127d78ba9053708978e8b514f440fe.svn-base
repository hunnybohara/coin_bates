<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Controller\Component\CustomComponent;
/**
 * AffiliateNetworks Controller
 *
 * @property \App\Model\Table\AffiliateNetworksTable $AffiliateNetworks
 */
class AffiliateNetworksController extends AppController
{
    public function initialize(){
        parent::initialize();
        $this->loadComponent('Custom');
        $this->Auth->allow('ls_merchant');
    }
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('affiliateNetworks', $this->paginate($this->AffiliateNetworks));
        $this->set('_serialize', ['affiliateNetworks']);
    }

    /**
     * View method
     *
     * @param string|null $id Affiliate Network id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $affiliateNetwork = $this->AffiliateNetworks->get($id, [
            'contain' => []
        ]);
        $this->set('affiliateNetwork', $affiliateNetwork);
        $this->set('_serialize', ['affiliateNetwork']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $affiliateNetwork = $this->AffiliateNetworks->newEntity();
        if ($this->request->is('post')) {
            $affiliateNetwork = $this->AffiliateNetworks->patchEntity($affiliateNetwork, $this->request->data);
            if ($this->AffiliateNetworks->save($affiliateNetwork)) {
                $this->Flash->success('The affiliate network has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The affiliate network could not be saved. Please, try again.');
            }
        }
        
        $this->set('isEdit',FALSE);
        $this->set(compact('affiliateNetwork'));
        $this->set('_serialize', ['affiliateNetwork']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Affiliate Network id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $affiliateNetwork = $this->AffiliateNetworks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $affiliateNetwork = $this->AffiliateNetworks->patchEntity($affiliateNetwork, $this->request->data);
            if ($this->AffiliateNetworks->save($affiliateNetwork)) {
                $this->Flash->success('The affiliate network has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The affiliate network could not be saved. Please, try again.');
            }
        }
        
        $this->set('isEdit',TRUE);
        $this->set(compact('affiliateNetwork'));
        $this->set('_serialize', ['affiliateNetwork']);
        $this->view = 'add';
    }

    /**
     * Delete method
     *
     * @param string|null $id Affiliate Network id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $affiliateNetwork = $this->AffiliateNetworks->get($id);
        if ($this->AffiliateNetworks->delete($affiliateNetwork)) {
            $this->Flash->success('The affiliate network has been deleted.');
        } else {
            $this->Flash->error('The affiliate network could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }

    
}
