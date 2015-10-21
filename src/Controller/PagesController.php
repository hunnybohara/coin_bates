<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{
    public function beforeFilter(Event $event) {
        
        $this->Auth->allow();
        
        parent::beforeFilter($event);
    }


    public function display()
    {
        $path = func_get_args();
        
        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        
        if($page == 'home'){
            
            $this->merchants    = TableRegistry::get('Merchants');
            $this->offers       = TableRegistry::get('Offers');
            
            $featuredMerchants  = $this->merchants->find()
                            ->where(['Merchants.is_featured'=>1])
                            ->all();
            $featuredOffers     = $this->offers->find()
                            ->contain(['Merchants'])
                            ->where(['Offers.is_featured'=>1])
                            ->all();

                         
            $this->set('featuredMerchants'  , $featuredMerchants);
            $this->set('featuredOffers'     , $featuredOffers);
            
            $this->isFrontPage = TRUE;
        }
        
        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $e) {
            if (Configure::read('debug')) {
                throw $e;
            }
            throw new NotFoundException();
        }
    }
}
