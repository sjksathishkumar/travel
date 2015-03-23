<?php

class FaqsController extends Controller {

    /**
     * This is the default 'contact' action that is invoked
     */

    public function actionIndex()
    {
        $search=new Faqs('search'); 
        $search->unsetAttributes();  // clear any default values
        if(isset($_GET['Faqs'])){
           $search->attributes=$_GET['Faqs'];
        }
        $this->render('index', array(
        'search' => $search));
   }

    /*  This action is used fo give detail view of faq page*/

    public function actionSingle($id)
    {
    	$criteria=new CDbCriteria();
    	$criteria->condition = 'pkFaqID=:id AND faqStatus=:status';
		$criteria->params = array(':id'=>$id, ':status'=>'1');
    	$criteria->order = 'faqDisplayOrder ASC';
    	$pageData=Faqs::model()->findAll($criteria);
    	if(!empty((array) $pageData))
    	{
	    	$this->render('single', array('model' => $pageData));
    	}
    	else{
    		Yii::app()->user->setState("message","error");
			$this->redirect('../site/notification');
    	}
    }

    /* Passing array to this function and get related objects*/

    public function getRelatedTopics($help)
    {
    	foreach ($help as $id) {
    			$criteria=new CDbCriteria();
		    	$criteria->condition = 'pkFaqID=:id AND faqStatus=:status';
				$criteria->params = array(':id'=>$id, ':status'=>'1');
		    	$criteria->order = 'faqDisplayOrder ASC';
		    	$topics[]=Faqs::model()->findAll($criteria);
    		}	

    		return $topics;
    }

}
