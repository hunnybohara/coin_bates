<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * States Controller
 *
 * @property \App\Model\Table\StatesTable $States
 */
class StatesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Countries']
        ];
        $this->set('states', $this->paginate($this->States));
        $this->set('_serialize', ['states']);
    }

    /**
     * View method
     *
     * @param string|null $id State id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $state = $this->States->get($id, [
            'contain' => ['Countries', 'Branches', 'Cities']
        ]);
        $this->set('state', $state);
        $this->set('_serialize', ['state']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $state = $this->States->newEntity();
        if ($this->request->is('post')) {
            $state = $this->States->patchEntity($state, $this->request->data);
            if ($this->States->save($state)) {
                $this->Flash->success('The state has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The state could not be saved. Please, try again.');
            }
        }
        $countries = $this->States->Countries->find('list', ['limit' => 200]);
        
        $this->set(compact('state', 'countries'));
        $this->set('_serialize', ['state']);
        $this->set('isEdit'    ,FALSE);
    }

    /**
     * Edit method
     *
     * @param string|null $id State id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $state = $this->States->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $state = $this->States->patchEntity($state, $this->request->data);
            if ($this->States->save($state)) {
                $this->Flash->success('The state has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The state could not be saved. Please, try again.');
            }
        }
        
        $countries = $this->States->Countries->find('list', ['limit' => 200]);
        
        $this->set(compact('state', 'countries'));
        $this->set('_serialize', ['state']);
        $this->set('isEdit'    ,TRUE);
        
        $this->dataState = $state;
        $this->render('add');
    }

    /**
     * Delete method
     *
     * @param string|null $id State id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $state = $this->States->get($id);
        if ($this->States->delete($state)) {
            $this->Flash->success('The state has been deleted.');
        } else {
            $this->Flash->error('The state could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
    
    public function getStates(){
        $country_id = $this->request->query['country_id'];
        
        $states = $this->States->find('list',[
            'conditions'    => [
                'States.country_id'  => $country_id
            ],
        ])->toArray();
        
        if(empty($states)){
            $response   = [
                'states'    => 'error',
                'message'   => __('Seems to be Wrong Country Id'),
                'data'      => array(),
            ];
        }else{
            $response  = [
                'status'    => 'success',
                'data'      => $states,
            ];
        }
        
        $this->set('response',$response);
        
        $this->layout = 'ajax';
        $this->render('/Element/Ajax/get');
    }


    public function beforeRender(Event $event) {
        
        $this->breadcrumbs[] = [
            'label'     => __('State'),
            'link'      => [
                'action'    => 'index',
            ]
        ];
        
        switch($this->request->params['action']){
            case 'view':
                
                $this->breadcrumbs[] = [
                    'label'     => __('Add')
                ];
                
                break;
            case 'add':
                $this->breadcrumbs[] = [
                    'label'     => __('Add')
                ];
                break;
            case 'edit':
                $this->breadcrumbs[] = [
                    'label'     => __('Edit')
                ];
                
                $this->breadcrumbs[] = [
                    'label'     => $this->dataState->name,
                ];
                break;
        }
        
        parent::beforeRender($event);
    }
}
