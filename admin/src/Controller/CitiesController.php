<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * Cities Controller
 *
 * @property \App\Model\Table\CitiesTable $Cities
 */
class CitiesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['States', 'Countries']
        ];
        $stateId = $this->request->query('state_id');
        if(!empty($stateId)){
            $this->States = TableRegistry::get('States');
            $state = $this->States->get($stateId,[
                'contain'   => []
            ]);
            if(!empty($state))
                $this->paginate['conditions'] = ['Cities.state_id' => $stateId]; 
        }
        
        $this->set('cities', $this->paginate($this->Cities));
        $this->set('_serialize', ['cities']);
    }

    /**
     * View method
     *
     * @param string|null $id City id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $city = $this->Cities->get($id, [
            'contain' => ['States', 'Countries', 'Branches']
        ]);
        $this->set('city', $city);
        $this->set('_serialize', ['city']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $city = $this->Cities->newEntity();
        if ($this->request->is('post')) {
            $city = $this->Cities->patchEntity($city, $this->request->data);
            if ($this->Cities->save($city)) {
                $this->Flash->success('The city has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The city could not be saved. Please, try again.');
            }
        }
        $states = $this->Cities->States->find('list', ['limit' => 200]);
        $countries = $this->Cities->Countries->find('list', ['limit' => 200]);
        
        $this->set(compact('city', 'states', 'countries'));
        $this->set('_serialize', ['city']);
        $this->set('isEdit',FALSE);
    }

    /**
     * Edit method
     *
     * @param string|null $id City id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $city = $this->Cities->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $city = $this->Cities->patchEntity($city, $this->request->data);
            if ($this->Cities->save($city)) {
                $this->Flash->success('The city has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The city could not be saved. Please, try again.');
            }
        }
        $states = $this->Cities->States->find('list', ['limit' => 200]);
        $countries = $this->Cities->Countries->find('list', ['limit' => 200]);
        $this->set(compact('city', 'states', 'countries'));
        $this->set('_serialize', ['city']);
        $this->set('isEdit',TRUE);
        
        $this->cityData = $city;
        
        $this->render('add');
    }

    /**
     * Delete method
     *
     * @param string|null $id City id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $city = $this->Cities->get($id);
        if ($this->Cities->delete($city)) {
            $this->Flash->success('The city has been deleted.');
        } else {
            $this->Flash->error('The city could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
    
    function getCities(){
        
        $country_id = $this->request->query['state_id'];
        $cities     = $this->Cities->find('list',[
            'conditions'    => [
                'Cities.state_id'  => $country_id
            ],
        ])->toArray();
        
        if(empty($cities)){
            $response   = [
                'states'    => 'error',
                'message'   => __('Seems to be Wrong Country Id'),
                'data'      => array(),
            ];
        }else{
            $response  = [
                'status'    => 'success',
                'data'      => $cities
            ];
        }
        
        $this->set('response',$response);
        $this->layout = 'ajax';
        $this->render('/Element/Ajax/get');
        
    }
    
    public function beforeRender(Event $event) {
        
        $this->breadcrumbs[] = [
            'label' => __('City'),
            'link'  => [
                'action'        => 'index',
            ],
        ]; 
        
        switch ($this->request->params['action']){
            case 'view':
                
                $this->breadcrumbs[] = [
                    'label' => __('View'),
                ];
                
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
                    'label' => $this->cityData->name,
                ];
                
                break;
        }
        
        parent::beforeRender($event);
    }
}
