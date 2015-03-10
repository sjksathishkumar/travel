<?php
/**
 * messagePage used to dispaly Message base on requests.
 */

class messagePage extends CWidget{
    public $messageType;
    public $message;
    public $autoRedirect=FALSE;
    public $redirectUrl;
    public function run(){
        if($this->autoRedirect){
            $this->render('messagePage',array('autoRedirect'=>true,'redirectUrl'=>$this->redirectUrl,'messageType'=>$this->messageType,'message'=>$this->message));    
        }else{
            $this->render('messagePage',array('messageType'=>$this->messageType,'message'=>$this->message));
        }
        
    }
    
}
?>