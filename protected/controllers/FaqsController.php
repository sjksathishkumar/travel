<?php

class FaqsController extends Controller {

    /**
     * This is the default 'contact' action that is invoked
     */

    public function actionIndex()
    {
    	$criteria=new CDbCriteria();
    	$criteria->condition = 'faqStatus = :status';
    	$criteria->order = 'faqDisplayOrder ASC';
    	$criteria->params = array('status' => '1');
	    $count=Faqs::model()->count($criteria);
	    $pages=new CPagination($count);

	    // results per page
	    $pages->pageSize=2;
	    $pages->applyLimit($criteria);
	    $models=Faqs::model()->findAll($criteria);

	    $this->render('index', array(
	    'models' => $models,
	         'pages' => $pages
	    ));
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
