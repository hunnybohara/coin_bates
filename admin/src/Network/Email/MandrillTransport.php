<?php

namespace App\Network\Email;

use Cake\Network\Email\AbstractTransport; 
use Cake\Network\Email\Email;

class MandrillTransport extends AbstractTransport {
    
    public $mandrill;


    public function __construct($config = array()) {
        
        $this->mandrill = new \Mandrill($config['mandrill_api_key']);
        
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
            pr($email);
            die('we are here');
            $message = array(
                'html' => '<p>Example HTML content</p>',
                'text' => 'Example text content',
                'subject' => 'example subject',
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
            throw $e;
        }
    }
}
