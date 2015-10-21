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
use Cake\ORM\TableRegistry;


/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 * @property App/Model/Table/OptionsTable $options 
 */
class AppController extends Controller
{
    public $showBreadcrumb          = TRUE;
    public $breadcrumbs             = []; 
    public $current_user            = NULL;
    public $helpers                 = [
        'Form'  =>[
            'className' => 'AppForm',
        ], 
        'Html'  => [
            'className' => 'AppHtml',
        ], 
        'Url'
    ];
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
        $this->loadComponent('Auth', [
            'loginRedirect'     => [
                'controller'    => 'Pages',
                'action'        => 'display',
                'home'
            ],
            'logoutRedirect' => [
                'controller'    => 'Users',
                'action'        => 'login',
            ],
            'authenticate' => [
                'Form' => [
                    'fields'    => [
                        'username' => 'email', 
                    ]
                ]
            ],
        ]);
        $this->loadComponent('RequestHandler');
    }
    
    public function beforeFilter(Event $event) {
        
        parent::beforeFilter($event);
        
        $this->initConfig();
        
        $this->roles = Configure::read('roles');
        $this->set('roles',$this->roles);
        
        $this->statuses = Configure::read('statuses');
        $this->set('statuses',$this->statuses);
        
        $this->options = TableRegistry::get('Options');
        $this->set('options',$this->options->getOptions());
        Configure::write('options',$this->options->getOptions());
        /**
         * 
         *  In case the User Is Logged in make the Information of the 
         *   User Available under the view and Controller using the 
         *  $current_user Variable 
         */
        
        if($this->Auth->user()){
            $this->current_user = $this->Auth->user();
            $this->set('current_user',$this->current_user);
        }
        
        /**
         * 
         * Default Home Page Link for the Breadcrumbs
         */
        $this->breadcrumbs[] = array(
            'label' => __('Home'),
            'link'  => [
                'controller'    => 'pages',
                'action'        => 'home',
            ],
            'class' => 'fa fa-home'
        ); 
    }
    private function initConfig(){
        
        Configure::write('roles',[
            'super_admin' => __('Super Admin'),
            'admin'       => __('Admin'),
            'customer'    => __('Customer'),
        ]);
        
        Configure::write('statuses',[
            'active'      => __('Active'),
            'inactive'    => __('Inactive'),
            'suspended'   => __('Suspended'),
        ]);
        
        Configure::write('Gender',[
            'M'     => __('Male'),
            'F'     => __('Female'),
        ]);
        
    }
    
    public function beforeRender(Event $event) {
        parent::beforeRender($event);
        
        $this->set('breadcrumbs'        ,$this->breadcrumbs);
        $this->set('showBreadcrumb'     ,$this->showBreadcrumb);
        
    }

}
