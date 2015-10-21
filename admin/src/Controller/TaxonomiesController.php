<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Taxonomies Controller
 *
 * @property \App\Model\Table\TaxonomiesTable $Taxonomies
 */
class TaxonomiesController extends AppController
{

    private $types = [];
    
    
    public function initialize() {
        
        parent::initialize();
        
        $this->types = [
            'category'  => __('Categories'),
            'tag'       => __('Tags'),
        ];
        
        
    }
    public function beforeRender(Event $event) {
        
        
        $this->set('types',$this->types);
        parent::beforeRender($event);
    }


    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        if(isset($this->request->query['type'])){
            $isCategory = ($this->request->query['type'] == 'category')?TRUE:FALSE;
            $type       = ($isCategory)?'category':"tag";
            $this->paginate = [            
                'conditions'    => ['Taxonomies.type'   => $type],
            ];
        }else{
            $type       = 'category';
            $isCategory = TRUE;
        }
        
        $this->set('isCategory'     ,$isCategory);
        $this->set('type'           ,$type);
        $this->set('taxonomies'     ,$this->paginate($this->Taxonomies));
        $this->set('_serialize'     , ['taxonomies']);
    }

    /**
     * View method
     *
     * @param string|null $id Taxonomy id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $taxonomy = $this->Taxonomies->get($id, [
            'contain' => []
        ]);
        $this->set('taxonomy', $taxonomy);
        $this->set('_serialize', ['taxonomy']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $type = NULL;
        if(isset($this->request->query['type'])){
            if(in_array($this->request->query['type'], array_keys($this->types))){
                $type = $this->request->query['type'];
            }
        }
        
        $taxonomy = $this->Taxonomies->newEntity();
        if ($this->request->is('post')) {
            $taxonomy = $this->Taxonomies->patchEntity($taxonomy, $this->request->data);
            if ($this->Taxonomies->save($taxonomy)) {
                $this->Flash->success('The taxonomy has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The taxonomy could not be saved. Please, try again.');
            }
        }
        
        $this->set('isEdit' ,FALSE);
        $this->set('type'   ,$type);
        
        $this->set(compact('taxonomy'));
        $this->set('_serialize', ['taxonomy']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Taxonomy id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $taxonomy = $this->Taxonomies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $taxonomy = $this->Taxonomies->patchEntity($taxonomy, $this->request->data);
            if ($this->Taxonomies->save($taxonomy)) {
                $this->Flash->success('The taxonomy has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The taxonomy could not be saved. Please, try again.');
            }
        }
                
        $this->set('isEdit',TRUE);
        $this->set(compact('taxonomy'));
        $this->set('_serialize', ['taxonomy']);
        $this->render('add');
    }

    /**
     * Delete method
     *
     * @param string|null $id Taxonomy id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $taxonomy = $this->Taxonomies->get($id);
        if ($this->Taxonomies->delete($taxonomy)) {
            $this->Flash->success('The taxonomy has been deleted.');
        } else {
            $this->Flash->error('The taxonomy could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
