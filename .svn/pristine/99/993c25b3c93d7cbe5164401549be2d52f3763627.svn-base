<?php

namespace App\View\Helper;

use Cake\View\Helper\HtmlHelper;
use Cake\Core\Configure;


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
    
    function getMerchantFrontUrl($merchantId){
         
        return Configure::read('options')['front_url'] . '/merchants/' . $merchantId;
    }
    
    function getOfferFrontUrl($offerId){
        
        return Configure::read('options')['front_url'] . '/offers/' . $offerId;
    }
}