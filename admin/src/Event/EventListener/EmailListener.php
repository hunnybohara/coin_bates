<?php
namespace App\Event\EventListener;

use Cake\Event\EventListenerInterface;
use Cake\ORM\TableRegistry;
use Cake\Network\Email\Email;
/**
 * @property EmailsTable $emails 
 */
class EmailListener implements EventListenerInterface{
    
    public function implementedEvents() {
        return array(
            'Model.User.signup' => 'userSignupEmail',
            'Model.User.rnd'    => 'userSignupEmail',
        );
    }
    
    function userSignupEmail($event){
        
        $this->emails   = TableRegistry::get('Emails');
        
        $emailTemplate  = $this->emails->find()->where(['Emails.code'=>'signup_email'])->first();
        $user           = $event->data['user'];
        $emailAddress   = $user->email;
        $params         = [
            '%name%'      => $user->name,
            '%email%'     => $user->email,
        ];
        $subject        = str_replace(array_keys($params), array_values($params), $emailTemplate->subject);
        $content        = str_replace(array_keys($params), array_values($params), $emailTemplate->message);
      
        echo $emailAddress;
        
        $email = new Email('default');
        $email->emailFormat('both')
            ->to($emailAddress)
            ->subject($subject)
            ->viewVars(['content'=>$content])
            ->send();
    }
}