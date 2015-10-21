<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Countries Controller
 *
 * @property \App\Model\Table\CountriesTable $Countries
 */
class CountriesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('countries', $this->paginate($this->Countries));
        $this->set('_serialize', ['countries']);
    }

    /**
     * View method
     *
     * @param string|null $id Country id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $country = $this->Countries->get($id, [
            'contain' => ['Branches', 'Cities', 'States']
        ]);
        $this->set('country', $country);
        $this->set('_serialize', ['country']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $country = $this->Countries->newEntity();
        if ($this->request->is('post')) {
            $country = $this->Countries->patchEntity($country, $this->request->data);
            if ($this->Countries->save($country)) {
                $this->Flash->success('The country has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The country could not be saved. Please, try again.');
            }
        }
        
        $this->set(compact('country'));
        $this->set('_serialize'     ,['country']);
        $this->set('isEdit'         ,FALSE);
    }

    /**
     * Edit method
     *
     * @param string|null $id Country id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $country = $this->Countries->get($id, [
            'contain' => []
        ]);
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            $country = $this->Countries->patchEntity($country, $this->request->data);
            if ($this->Countries->save($country)) {
                $this->Flash->success('The country has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The country could not be saved. Please, try again.');
            }
        }
        
        $this->countryData = $country;
        
        $this->set(compact('country'));
        $this->set('_serialize', ['country']);
        $this->set('isEdit'         ,TRUE);
        
        $this->render('add');
    }

    /**
     * Delete method
     *
     * @param string|null $id Country id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $country = $this->Countries->get($id);
        if ($this->Countries->delete($country)) {
            $this->Flash->success('The country has been deleted.');
        } else {
            $this->Flash->error('The country could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
    
    /**
     * 
     * Overrides the Default beforeRednder Method To add Breadcrumbs and other
     * Stuff
     * 
     * @param Event $event
     * @return void 
     */
    public function beforeRender(Event $event) {
        
        $this->breadcrumbs[] = [
            'label' => __('Country'),
            'link'  => [
                'controller'    => 'countries',
                'action'        => 'index',
            ],
        ]; 
        
        switch ($this->request->params['action']){
            default:
            case 'index':
                break;
            case 'add':
                $this->breadcrumbs[] = [
                    'label' => __('Add'),
                    'link'  => NULL,
                ];
                break;
            case 'edit':
                $this->breadcrumbs[] = [
                    'label' => __('Edit'),
                ];
                
                $this->breadcrumbs[] = [
                    'label' => $this->countryData->name,
                ];
                
                break;
        }
        parent::beforeRender($event);
    }
}
