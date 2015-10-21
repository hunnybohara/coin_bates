<?php

namespace App\Network\Email;

use Cake\Network\Email\AbstractTransport; 
use Cake\Network\Email\Email;
use Cake\ORM\TableRegistry;

/**
 * 
 * @property OptionsTable $options 
 */
class MandrillTransport extends AbstractTransport {
    
    public $mandrill;


    public function __construct($config = array()) {
        
        $this->options  = TableRegistry::get('Options'); 
        $this->mandrill = new \Mandrill($this->options->getOptions()['mandril_api_key']);
        
        parent::__construct($config);
    }

    /**
     * 
     * @author Anand Thakkar <anand@phpconsultant.co>
     * @param Email $email
     * @throws \App\Network\Email\Mandrill_ErrorS
     */
    public function send(Email $email) {
        $headers = $email->getHeaders(['from', 'sender', 'replyTo', 'to', 'cc', 'bcc']);
        try {
            
            $message = array(
                'html' => '<p>This is the body of the Email</p>',
                'text' => 'This is the body of the Email',
                'subject' => 'Testing mandrill Application',
                'from_email' => $headers['From'],
                'from_name' => $headers['Sender'],
                'to' => array(
                    array(
                        'email' => $headers['To'],
                        'type' => 'to'
                    )
                ),
                'headers' => array('Reply-To' => $headers['Reply-To']),
                'important' => false,
            );
            $async      = false;
            $ip_pool    = 'Main Pool';
            $send_at    = FALSE;
            $result     = $this->mandrill->messages->send($message, $async, $ip_pool, $send_at);

        } catch(Mandrill_Error $e) {
            echo 'A mandrill error occurred: ' . get_class($e) . ' - ' . $e->getMessage();
            //throw $e;
        }
    }
}
