<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Core\Configure; 
use Cake\Event\Event;
use Cake\Routing\Router;
use Cake\I18n\I18n;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 * @property \App\Model\Entity\User $current_user 
 */
class AppController extends Controller
{

    public $helpers                 = [
        'Html'  => [
            'className' => 'AppHtml',
        ], 
        'Url'
    ];
    public $isUserLoggedIn          = false;
    public $current_user            = [];
    public $current_lang            = '';
    public $isFrontPage             = FALSE;
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * @return void
     */
    public function initialize()
    {
        $this->loadComponent('Flash');
        $this->loadComponent('Cookie');
        $this->loadComponent('Auth', [
            'loginRedirect'     => [
                'controller'    => 'users',
                'action'        => 'login',
                'home'
            ],
            'logoutRedirect' => [
                'controller'    => 'pages',
                'action'        => 'home',
            ],
            'authenticate' => [
                'Form' => [
                    'fields'    => [
                        'username' => 'email', 
                    ]
                ]
            ],
        ]);
    }
    
    public function beforeFilter(Event $event) {
        
        if($this->Auth->user()){
            $this->current_user     = $this->Auth->user();
            $this->isUserLoggedIn   = TRUE;
        }  
        parent::beforeFilter($event);
    }
    
    /**
     * 
     * @param Event $event
     */
    public function beforeRender(Event $event) {
        
        parent::beforeRender($event);
        
        $this->Cookie->config([
            'expires'   => '+10 days',
            'path'      => '/'
        ]);
        
        $this->current_lang = 'en_US';
        if(in_array($this->Cookie->read('lang'), array_keys(Configure::read('supported_lang')))){
            I18n::locale($this->Cookie->read('lang'));
            $this->current_lang = $this->Cookie->read('lang');
        }
        $this->set('current_lang',$this->current_lang);
        /**
         * 
         * initialize the Google Client to verify the google Incomeing Stream
         */
        $client = new \Google_Client();
        $client->setClientId(Configure::read('GPLUS.client_id'));
        $client->setClientSecret(Configure::read('gplus.secret'));
        $client->setRedirectUri(Router::url(['controller'=>'users','action'=>'gpluslogin','_full'=>true]));
        $client->setScopes('email');
        
        $this->set('isFrontPage'    ,$this->isFrontPage);
        $this->set('current_user'   ,$this->current_user);
        $this->set('isUserLoggedIn' ,$this->isUserLoggedIn);
    }
    
}
