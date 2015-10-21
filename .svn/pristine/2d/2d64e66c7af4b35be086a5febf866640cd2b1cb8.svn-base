<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EmailParams Controller
 *
 * @property \App\Model\Table\EmailParamsTable $EmailParams
 */
class EmailParamsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Emails']
        ];
        $this->set('emailParams', $this->paginate($this->EmailParams));
        $this->set('_serialize', ['emailParams']);
    }

    /**
     * View method
     *
     * @param string|null $id Email Param id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $emailParam = $this->EmailParams->get($id, [
            'contain' => ['Emails']
        ]);
        $this->set('emailParam', $emailParam);
        $this->set('_serialize', ['emailParam']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $emailParam = $this->EmailParams->newEntity();
        if ($this->request->is('post')) {
            $emailParam = $this->EmailParams->patchEntity($emailParam, $this->request->data);
            if ($this->EmailParams->save($emailParam)) {
                $this->Flash->success('The email param has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The email param could not be saved. Please, try again.');
            }
        }
        $emails = $this->EmailParams->Emails->find('list', ['limit' => 200]);
        $this->set(compact('emailParam', 'emails'));
        $this->set('_serialize', ['emailParam']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Email Param id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $emailParam = $this->EmailParams->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $emailParam = $this->EmailParams->patchEntity($emailParam, $this->request->data);
            if ($this->EmailParams->save($emailParam)) {
                $this->Flash->success('The email param has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The email param could not be saved. Please, try again.');
            }
        }
        $emails = $this->EmailParams->Emails->find('list', ['limit' => 200]);
        $this->set(compact('emailParam', 'emails'));
        $this->set('_serialize', ['emailParam']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Email Param id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $emailParam = $this->EmailParams->get($id);
        if ($this->EmailParams->delete($emailParam)) {
            $this->Flash->success('The email param has been deleted.');
        } else {
            $this->Flash->error('The email param could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
