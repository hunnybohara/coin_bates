<?php

namespace App\View\Helper;

use Cake\View\Helper\HtmlHelper;
use Cake\Routing\Router;


class AppHtmlHelper extends HtmlHelper {    
    
    /**
     * 
     * Get the Gravtar Hash based on the Users Email address
     * 
     * @param string $email
     * @return url
     */
    function gravtarImgsrc($email){
        return 'http://www.gravatar.com/avatar/' . md5(strtolower($email));
    }
   
    function getFacebookLoginUrl(){
        return Router::url([
            'controller'    => 'users',
            'action'        => 'fblogin',
            '?'             => ['fb_login'=>TRUE],
        ]);
    }
    
    function getGooglePlusLoginUrl(){
        return Router::url([
            'controller'    => 'users',
            'action'        => 'gplogin',
        ]);
    }
    
    function getMerchantUrl($merchantId){
        return Router::url('/merchants/' . $merchantId);
    }
    
    function getOfferUrl($offerId){
        return Router::url('/offers/' . $offerId);
    }
}