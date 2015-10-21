<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Options Controller
 *
 * @property \App\Model\Table\OptionsTable $Options
 */
class OptionsController extends AppController
{
    
    public function beforeFilter(Event $event) {
        if($this->request->param('action') != 'index'){
            $this->redirect(['action'=>'index']);
        }
        parent::beforeFilter($event);
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index(){
        
        if ($this->request->is('post')) {
            $OptionId = $this->Options->find('list',[
                'keyField'      => 'option_name',
                'valueField'    => 'id',
            ])->toArray();
            foreach($this->request->data as $key => $value){
                $data         = [
                    'id'            => $OptionId[$key],
                    'option_name'   =>  $key,
                    'option_value'  =>  $value,
                ];
                $updatedOption = $this->Options->patchEntity($this->Options->newEntity(),$data);
                $this->Options->save($updatedOption);
                
            }
            $this->Flash->success('Options Has been Updated Succesfully !');
        }
        
        $this->set('options', $this->Options->getOptions());
        $this->set('_serialize', ['options']);
    }

    /**
     * View method
     *
     * @param string|null $id Option id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $option = $this->Options->get($id, [
            'contain' => []
        ]);
        $this->set('option', $option);
        $this->set('_serialize', ['option']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $option = $this->Options->newEntity();
        if ($this->request->is('post')) {
            $option = $this->Options->patchEntity($option, $this->request->data);
            if ($this->Options->save($option)) {
                $this->Flash->success('The option has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The option could not be saved. Please, try again.');
            }
        }
        $this->set(compact('option'));
        $this->set('_serialize', ['option']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Option id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $option = $this->Options->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $option = $this->Options->patchEntity($option, $this->request->data);
            if ($this->Options->save($option)) {
                $this->Flash->success('The option has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The option could not be saved. Please, try again.');
            }
        }
        $this->set(compact('option'));
        $this->set('_serialize', ['option']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Option id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $option = $this->Options->get($id);
        if ($this->Options->delete($option)) {
            $this->Flash->success('The option has been deleted.');
        } else {
            $this->Flash->error('The option could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
