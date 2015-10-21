<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tags Controller
 *
 * @property \App\Model\Table\TagsTable $Tags
 */
class TagsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('tags', $this->paginate($this->Tags));
        $this->set('_serialize', ['tags']);
    }

    /**
     * View method
     *
     * @param string|null $id Tag id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tag = $this->Tags->get($id, [
            'contain' => []
        ]);
        $this->set('tag', $tag);
        $this->set('_serialize', ['tag']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tag = $this->Tags->newEntity();
        if ($this->request->is('post')) {
            $tag = $this->Tags->patchEntity($tag, $this->request->data);
            if ($this->Tags->save($tag)) {
                $this->Flash->success('The tag has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The tag could not be saved. Please, try again.');
            }
        }
        
        $this->set('isEdit',FALSE);
        $this->set(compact('tag'));
        $this->set('_serialize', ['tag']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tag id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tag = $this->Tags->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tag = $this->Tags->patchEntity($tag, $this->request->data);
            if ($this->Tags->save($tag)) {
                $this->Flash->success('The tag has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The tag could not be saved. Please, try again.');
            }
        }
        
        $this->set('isEdit',TRUE);
        $this->set(compact('tag'));
        $this->set('_serialize', ['tag']);
        $this->render('add');
    }

    /**
     * Delete method
     *
     * @param string|null $id Tag id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tag = $this->Tags->get($id);
        if ($this->Tags->delete($tag)) {
            $this->Flash->success('The tag has been deleted.');
        } else {
            $this->Flash->error('The tag could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
    
    public function getTokenSuggestion(){
        $terms = $this->request->query['term'];
        
        $matchedTags = $this->Tags->find('all',[
            'keyField'      => 'id',
            'valueField'    => 'name',
            'conditions'    => ['Tags.name LIKE ' => "%{$terms}%"],
        ])->toArray();
        
        if(count($matchedTags)>0){
            
            foreach ($matchedTags as $tag){
                $tags[] = [
                    'id'        => 'tag-id' . $tag->id,
                    'label'     => $tag->name,
                    'value'     => $tag->name,
                ];
            }
        }else{
            $tags = [];
        }            
            
        $this->set('response'   ,$tags);
        $this->layout   = 'ajax';
        $this->view     = 'index';    
    }
}
