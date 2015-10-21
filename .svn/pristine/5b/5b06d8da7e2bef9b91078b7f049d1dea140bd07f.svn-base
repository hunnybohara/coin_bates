<?php

namespace App\View\Helper;

use Cake\View\Helper\FormHelper;



class AppFormHelper extends FormHelper {    
    
    private $useDefaults = FALSE;
            
    function useDefaults($set = NULL){
        
        if(is_null($set))
            return $this->useDefaults;
        
        $this->useDefaults = (bool) $set;
    }
    
    public function input($fieldName, array $options = array()) {
        
        $defaultOptions = [
            'label'     => false,
            'div'       => false,
            'class'     => 'form-control'
        ];
        
        if($this->useDefaults())
            return parent::input($fieldName, (array) array_merge($defaultOptions,$options));
        else
            return parent::input($fieldName, $options);
    }
    
}