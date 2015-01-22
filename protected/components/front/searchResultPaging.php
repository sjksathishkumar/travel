<?php
/**
 * Header used to dispaly header part containing Logo,Primary Navigation etc. for front-end.
 */

class searchResultPaging extends CWidget{
    
    public $pages;
    public function run(){    
        $this->render('searchResultPaging',array('pages'=>$this->pages));
    }
    
}
?>
