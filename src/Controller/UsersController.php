<?php
namespace App\Controller;

use App\Controller\AppController;
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookJavaScriptLoginHelper;
use Cake\Core\Configure;
use Cake\Routing\Router;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Network\Email\Email;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
    
    public function beforeFilter(Event $event) {
        
        $this->Auth->allow(['login','signup','rnd','fblogin','changelang','gplogin','email_rnd']);
        
        parent::beforeFilter($event);
    }
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
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
            'contain' => ['BitcoinAccounts']
        ]);
        $this->set('user', $user);
        $this->set('_serialize', ['user']);
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
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }
    
    function editProfile(){
        $isPost = FALSE;
        $user   = $this->Users->get($this->current_user['id']);
        
        if($this->request->is('POST')):
            $isPost = TRUE;
            switch($this->request->data('case')){
                case 'full_name':
                    /**
                     * 
                     * @todo Add Validation here
                     */
                    $user->full_name = $this->request->data['full_name'];
                    break;
                case 'email':
                    /**
                     * 
                     * @todo Add Validation here
                     */
                    $user->email    = $this->request->data['email'];
                    break;
            }
            if($this->Users->save($user)){
                $response = [
                    'status'    => 'success',
                ];
            }else{
                $response = [
                    'status'    => 'fail',
                ];
            }
            $this->set('response',$response);
        endif;
        if($isPost){
            $this->layout = 'ajax';
            $this->render('/Element/json/response');
        }
        $this->current_user = $user->toArray();
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
    
    public function login(){
        /**
         * 
         * Redirect the logged in user from this action
         */
        if($this->Auth->user()){
            /**
             * 
             * @todo Add The proper Redirection for the JS as well as currently
             * This doesn't works well with the Ajax Based Situation.
             */
            $this->redirect('/');
            return ;
        }
        
        $user = $this->Users->newEntity($this->request->data(),['validate' => 'login']);
        
        if($user->errors(NULL,NULL,TRUE)){
            foreach($user->errors() as $field => $errors){
                $errorList[$field] = array_values($errors)[0];
            }
            $this->set('response',[
               'status'      => 'validationError',
               'errorList'   => $errorList, 
            ]);
        }elseif ($this->request->is('post')) {            
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                $this->set('response',[
                    'status'    => 'success',
                    'message'   => __('User Has Been Logged In successfully'),
                ]);
            }else{
                $this->set('response',[
                    'status'    => 'error',
                    'message'   => __('Please Provide Valid Username and password'),
                ]);
            }
        }
        
        $this->layout = 'ajax';
        $this->render('login');
    }
    
    /**
     * 
     * Handel the Ajaxbased Signup User along with Validation
     * 
     * @return void
     */
    public function signup(){
        //$this->request->is('ajax');die;
        if(!$this->request->is('ajax')){
            return $this->redirect(Router::url(['controller'=>'pages','action'=>'home']));
        }
        
        if ($this->request->is('post')) 
        {            
            $user = $this->Users->patchEntity($this->Users->newEntity(),$this->request->data,[
                'validate'      => 'signup', 
            ]);
            $user->role = 'customer';
            $validationErrors = $user->errors();
            if(!empty($validationErrors)){
                foreach($validationErrors as $field => $errors){
                    $errorList[$field] = array_values($errors)[0];
                }
                $this->set('response',[
                   'status'      => 'validationError',
                   'errorList'   => $errorList, 
                ]);
            }elseif($this->Users->save($user)) {
                $this->set('response',array(
                    'status'    => 'success',
                    'message'   => __('User Has Been Signuped successfully'),
                    'user'      => $user->toArray(),
                ));
                $this->Auth->setUser($user->toArray());
            } else {
                $this->set('response',array(
                    'status'    => 'error',
                    'message'   => __('There is some error while Creating Your Account!!'),
                ));
            }
        }
                
        $this->layout = 'ajax';
        $this->render('login');        
    }

        
    public function logout(){
        $this->Auth->logout();
        return $this->redirect(['controller'=>'pages','action'=>'index']);
    }

    public function gplogin(){
        $arr = array();
        $arr = $this->request->data('gptoken');
        if(empty($arr)){
            $this->redirect('/');
        }
        
        /**
         * 
         * @todo Verification of the Google Plus
         */
    
        // Collect the basic User details from the FB Graph Response
        $userData = array(
            'gp_id'                 => 'gp_' . $this->request->data('gpid'),
            'full_name'             => $this->request->data('full_name'),
            'email'                 => $this->request->data('email'),
        );
            
            /**
             * 
             * Checkes weather the Email already register with us in case it is
             * Register than Link the Facebook Account with the Account in case
             * the Email address isn't register with us in that case Sign up the
             * User.
             */
        $users = $this->Users->findByEmail($userData['email'])->toArray();
        if(count($users) > 0){
            $user = $users[0];
            $user->gp_connect   = $userData['gp_id'];
            $user->status       = 'active';

        }else{

            $randomPassword     = $this->Users->generateRandomString();
            $user               = $this->Users->patchEntity($this->Users->newEntity(),$userData);
            $user->password     = $randomPassword;
            $user->role         = 'customer';
            $user->status       = 'active';
            $user->gp_connect   = $userData['gp_id'];
        }
        $this->Users->save($user);
        $this->Auth->setUser($user->toArray());
        
        $this->set('response',[
            'status'    => 'success',
            'message'   => __('User Has been Signup succesfully !'),
        ]);
        
        $this->layout = 'ajax';
        $this->render('login');
        
    }

    /**
     * 
     * Handels the Facebook Login / Signup based on the Request
     * 
     * @return void
     */
   public function fblogin(){
        
        $this->request->session()->write('FB_LOGIN', 'TRUE');
        
        FacebookSession::setDefaultApplication(Configure::read('FB.appid'),Configure::read('FB.secret'));
        $fb_arr = array();
        $fb_arr = $this->request->query('fb_login');
        if(!empty($fb_arr)){
            $helper = new FacebookRedirectLoginHelper(Router::url(['action'=>'fblogin','_full'=>true]));
            $this->redirect($helper->getLoginUrl(array('email','public_profile')));
            return ;
        }
        
        if($this->request->query('fb_js_login')){
            $helper     = new FacebookJavaScriptLoginHelper();
            $session    = $helper->getSession();
            $isJSReq    = TRUE;
        }else{
            $helper     = new FacebookRedirectLoginHelper(Router::url(['action'=>'fblogin','_full'=>true]));
            $session    = $helper->getSessionFromRedirect();
        }
        
        try {
            $request        = new FacebookRequest($session, 'GET', '/me?fields=id,email,first_name,last_name');
            $response       = $request->execute();
            $graphObject    = $response->getGraphObject();
            
            // Collect the basic User details from the FB Graph Response
            $userData = array(
                'fb_id'                 => 'fb_' . $graphObject->getProperty('id'),
                'name'                  => $graphObject->getProperty('first_name').' '.$graphObject->getProperty('last_name'),
                'email'                 => $graphObject->getProperty('email'),
                'first_name'            => $graphObject->getProperty('first_name'),
                'last_name'             => $graphObject->getProperty('last_name'),         
            );
            //pr($userData);
            //die('we are here for testing');
            /**
             * 
             * Checkes weather the Email already register with us in case it is
             * Register than Link the Facebook Account with the Account in case
             * the Email address isn't register with us in that case Sign up the
             * User.
             */
            $users = $this->Users->findByEmail($userData['email'])->toArray();
            if(count($users) > 0){
                $this->Auth->setUser($users);
                $user = $users[0];
                $user->fb_connect   = $userData['fb_id'];
                $user->status       = 'active';
                
            }else{
                
                $randomPassword     = $this->Users->generateRandomString();
                $user               = $this->Users->patchEntity($this->Users->newEntity(),$userData);
                $user->password     = $randomPassword;
                $user->role         = 'customer';
                $user->status       = 'active';
                $user->fb_connect   = $userData['fb_id'];
            }
            $this->Users->save($user);
            $this->Auth->setUser($user->toArray());
            $this->redirect('/');
        } catch(\Exception $ex) {
            $this->redirect('/');
        }
    }
    
    function changelang(){
        $selected_lang = $this->request->query('lang');
        if(!in_array($selected_lang,  array_keys(Configure::read('supported_lang')))){
            $this->redirect('/');
        }
        
        $this->Cookie->write('lang',$selected_lang);
        $this->redirect('/');
    }
    
    function rnd(){
        
        $this->offers = TableRegistry::get('Offers');
               
        pr($this->offers->get(1)->toArray());
        
        die('we are here for testing purpose');
        
        $email = 'anthakkar08@gmail.co';
        
        echo count($this->Users->findByEmail($email)->toArray());
        
        pr($this->Users->findByEmail($email)->toArray());
        
        die('we are here');
    }
    
    function email_rnd(){
        
        $email = new Email('default');
        $email->emailFormat('both')
            ->to('anand@phpconsultant.co')
            ->subject('Testing E-mail From Mandril Cakephp 3 ')
            ->viewVars(['content'=>'This is Testing E-mail From Mandril Cakephp 3 skhkshdhksh '])
            ->send();
        die('we are here');
    }
    
}
