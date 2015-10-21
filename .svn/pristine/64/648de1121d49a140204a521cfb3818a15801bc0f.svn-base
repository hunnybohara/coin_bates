<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Network\Email\Email;
use App\Network\Email\MandrillTransport;

/**
 * 
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @property \App\Model\Table\DevelopmentOfficersTable $DevelopmentOfficers
 * @property \App\Model\Table\AgentsTable $Agents 
 * @property \App\Model\Table\BranchesTable $Branches 
 */
class UsersController extends AppController
{
    public function beforeFilter(Event $event) {
        
        parent::beforeFilter($event);
        
        $this->Auth->allow('login','unauthorize');
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [];
        $this->set('users', $this->paginate($this->Users));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        
        $user   = $this->Users->newEntity();
        if ($this->request->is('post')) {
            
            $result     = $this->Users->save($user);
            $message    = ($result)?__('User Created Successfully !'):__('There is Some proble while createing User Account ! Please Try After Some Time');
                    
            if($result){
                $this->Flash->success($message);
                return $this->redirect(['action' => 'index']);
            }else{
                $this->Flash->error($message);
            }
        }
        
        $this->set(compact('user', 'parentUsers'));
        
        $this->set('_serialize'     , ['user']);
        $this->set('isEdit'         ,FALSE);
        
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        if(is_null($id))
            $id = $this->current_user['id'];
        
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success('The user has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The user could not be saved. Please, try again.');
            }
        }
        
        $this->set('user',$user);
        $this->set('_serialize'  ,['user']);
        $this->set('isEdit'     ,TRUE);
        
        $this->userData  = $user;
        
        $this->render('add');
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success('The user has been deleted.');
        } else {
            $this->Flash->error('The user could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
    
    
    /**
     * 
     * Upon Success redirect the User to Dashboard or Render the Login Page
     * 
     * @return void
     */
    public function login(){
        /**
         * 
         * Redirect the logged in user from this action
         */
        if($this->Auth->user()){
            $this->redirect('/');
            return ;
        }
        

        if ($this->request->is('post')) {
            $user           = $this->Auth->identify();
            $authenitcated  = FALSE;
            if(!empty($user)){
                if(in_array($user['role'],['admin']))
                    $authenitcated = TRUE;
            }
            if ($authenitcated) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('You are not authorized user'));
        }
        
        $this->layout = 'login';
    }
    public function rnd(){
        
        $this->Users->rnd();
        
        die('we are here');
        
        $email = new Email('default');
        $email->template('default')
            ->emailFormat('both')
            ->to('anand@phpconsultant.co')
            ->subject('Testing E-mail From Mandril Cakephp 3 ')
            ->viewVars(['content'=>'This is Testing E-mail From Mandril Cakephp 3 skhkshdhksh '])
            ->send();
        die('we are here');
    }
    /**
     * 
     * Redirect User back to login page and Log them out
     * 
     * @return void
     */
    public function logout(){
        return $this->redirect($this->Auth->logout());
    }
    
    public function beforeRender(Event $event) {
        
        $this->breadcrumbs[] = array(
            'label'     => __('User'),
            'link'      => array(
                'controller'    => 'Users',
                'action'        => 'index',
            ),
        );
        
        switch($this->request->params['action']){
            default:
                $this->showBreadcrumb = FALSE;
                break;
            case 'index':
                break;
            case 'add':    
                $this->breadcrumbs[] = array(
                    'label'     => __('Add'),
                );
                break;
            case 'edit':
                
                $this->breadcrumbs[] = array(
                    'label'     => __('Edit'),
                );
                
                $this->breadcrumbs[] = array(
                    'label'     => $this->userData->first_name . ' ' . $this->userData->last_name,
                );
                
                break;
        }
        
        parent::beforeRender($event);
    }
}
