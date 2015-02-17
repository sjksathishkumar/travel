<?php
/**
 * Footer used to dispaly footer part containing Logo,Primary Navigation etc. for front-end.
 */
class Footer extends CWidget{
    public $arrConfigDetails;
    public function run(){  
        $this->render('footer');
    }
    
}
?>
