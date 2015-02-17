<?php
/**
 * Header used to dispaly header part containing Logo,Primary Navigation etc. for front-end.
 */

class Header extends CWidget{
    public $arrConfigDetails;
    public function run(){  
        $socalLinks = Configurations::model()->getSocialMediaLinks();
        $this->render('header',array('socalLinks'=>$socalLinks));
    }
    
}
?>
