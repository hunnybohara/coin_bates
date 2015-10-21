<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Redirections Controller
 *
 * @property \App\Model\Table\RedirectionsTable $Redirections
 */
class RedirectionsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Offers']
        ];
        $this->set('redirections', $this->paginate($this->Redirections));
        $this->set('_serialize', ['redirections']);
    }

    /**
     * View method
     *
     * @param string|null $id Redirection id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $redirection = $this->Redirections->get($id, [
            'contain' => ['Users', 'Offers']
        ]);
        $this->set('redirection', $redirection);
        $this->set('_serialize', ['redirection']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $redirection = $this->Redirections->newEntity();
        if ($this->request->is('post')) {
            $redirection = $this->Redirections->patchEntity($redirection, $this->request->data);
            if ($this->Redirections->save($redirection)) {
                $this->Flash->success('The redirection has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The redirection could not be saved. Please, try again.');
            }
        }
        $users = $this->Redirections->Users->find('list', ['limit' => 200]);
        $offers = $this->Redirections->Offers->find('list', ['limit' => 200]);
        $this->set(compact('redirection', 'users', 'offers'));
        $this->set('_serialize', ['redirection']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Redirection id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $redirection = $this->Redirections->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $redirection = $this->Redirections->patchEntity($redirection, $this->request->data);
            if ($this->Redirections->save($redirection)) {
                $this->Flash->success('The redirection has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The redirection could not be saved. Please, try again.');
            }
        }
        $users = $this->Redirections->Users->find('list', ['limit' => 200]);
        $offers = $this->Redirections->Offers->find('list', ['limit' => 200]);
        $this->set(compact('redirection', 'users', 'offers'));
        $this->set('_serialize', ['redirection']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Redirection id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $redirection = $this->Redirections->get($id);
        if ($this->Redirections->delete($redirection)) {
            $this->Flash->success('The redirection has been deleted.');
        } else {
            $this->Flash->error('The redirection could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
