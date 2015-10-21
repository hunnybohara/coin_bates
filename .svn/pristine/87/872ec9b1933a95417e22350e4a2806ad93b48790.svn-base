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

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
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

    /**
     * Displays a view
     *
     * @return void|\Cake\Network\Response
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
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
        $this->set(compact('page', 'subpage'));

        try {
            /**
             * 
             * @todo we can have the custom Sql Query here fired over the database
             * which will give all the required result in the single Query should 
             * be considered for the optimization phase.
             */
            
            $offers             = TableRegistry::get('Offers');
            $merchants          = TableRegistry::get('Merchants');
            $users              = TableRegistry::get('Users');
            $redirections       = TableRegistry::get('Redirections');
            
            $totalOffers        = $offers->find()->where(['Offers.status'=>'active'])->all()->count();
            $totalMerchants     = $merchants->find()->where(['Merchants.status'=>'active'])->all()->count();
            $totalusers         = $users->find()->where(['Users.status'=>'active','Users.role'=>'customer'])->all()->count();
            $totalRedirections  = $redirections->find()->all()->count();
            
            $this->set('total',[
                'offers'        => $totalOffers,
                'merchants'     => $totalMerchants,
                'users'         => $totalusers,
                'redirections'  => $totalRedirections,
            ]);
            
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $e) {
            if (Configure::read('debug')) {
                throw $e;
            }
            throw new NotFoundException();
        }
    }
}
