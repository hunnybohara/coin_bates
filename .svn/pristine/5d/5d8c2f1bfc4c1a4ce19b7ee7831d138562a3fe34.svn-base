<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Controller\Component\CustomComponent;
use Cake\ORM\TableRegistry;
/**
 * Categories Controller
 *
 * @property \App\Model\Table\CategoriesTable $Categories
 */
class CategoriesController extends AppController
{
    public function initialize(){
        parent::initialize();
        $this->loadComponent('Custom');
        $this->Auth->allow('ls_category');
    }
    /* link share Api */
    public function ls_category(){
            
        $xml = $this->Custom->curl_hit('http://couponfeed.linksynergy.com/coupon?token=a7eb246bace36fed93daa2c80240b1293ab27f858a7271a1cad2d7798681545a&network=1&resultsperpage=1&pagenumber=1');
        $data = json_decode(json_encode($xml),true);
        $categories_data = $this->Categories->find('list',['fields'=>['ls_id','name']]);
        $save = array();
        $cat_id = array();
        $cat_name = array();
        if(!empty($data))
        {
            $TotalPages = $data['TotalPages'];
            $our_per_page = 100;
            $final_page_range = ceil($TotalPages / $our_per_page);
            for ($i=1; $i <= $final_page_range; $i++) 
            {    
                $xml1 = $this->Custom->curl_hit("http://couponfeed.linksynergy.com/coupon?token=a7eb246bace36fed93daa2c80240b1293ab27f858a7271a1cad2d7798681545a&network=1&resultsperpage=$our_per_page&pagenumber=$i", false);
                $p = xml_parser_create();
                xml_parse_into_struct($p, $xml1, $vals, $index);
                xml_parser_free($p);                
                foreach ($vals as $value) 
                {
                    if($value['tag'] == 'CATEGORY')
                    {
                        $cat_id[] = $value['attributes']['ID'];
                        $cat_name[] = mb_convert_encoding($value['value'], "HTML-ENTITIES", 'UTF-8');
                    }
                }
                
                 $save_cat_name = array();
                 $ls_cat = array_unique($cat_name);
                 $categories = TableRegistry::get('categories');
                 $query = $categories->find();
                 foreach ($query as $row) 
                 {
                    $save_cat_name[] = $row->name;
                 }
                 
                 foreach ($ls_cat as $ls_category) 
                 {
                    if(!in_array($ls_category, $save_cat_name))
                    {
                        $slug = strtolower(preg_replace("/&#?[a-z0-9]{2,8};/i","",$ls_category));echo '<br>';
                        $category = $this->Categories->newEntity();
                        $category->ls_id = 12;
                        $category->name = $ls_category;
                        $category->slug = $slug;
                        $this->Categories->save($category);
                    }
                 }
            }
        }        
    }
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('categories', $this->paginate($this->Categories));
        $this->set('_serialize', ['categories']);
    }

    /**
     * View method
     *
     * @param string|null $id Category id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $category = $this->Categories->get($id, [
            'contain' => []
        ]);
        $this->set('category', $category);
        $this->set('_serialize', ['category']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $category = $this->Categories->newEntity();
        if ($this->request->is('post')) {
            $category = $this->Categories->patchEntity($category, $this->request->data);
            if ($this->Categories->save($category)) {
                $this->Flash->success('The category has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The category could not be saved. Please, try again.');
            }
        }
        
        $this->set('isEdit',FALSE);
        $this->set(compact('category'));
        $this->set('_serialize', ['category']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Category id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $category = $this->Categories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $category = $this->Categories->patchEntity($category, $this->request->data);
            if ($this->Categories->save($category)) {
                $this->Flash->success('The category has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The category could not be saved. Please, try again.');
            }
        }
        
        $this->set('isEdit',TRUE);
        $this->set(compact('category'));
        $this->set('_serialize', ['category']);
        $this->render('add');
    }

    /**
     * Delete method
     *
     * @param string|null $id Category id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $category = $this->Categories->get($id);
        if ($this->Categories->delete($category)) {
            $this->Flash->success('The category has been deleted.');
        } else {
            $this->Flash->error('The category could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
    
}
