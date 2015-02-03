<?php

class FaqsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='../layouts/main';
	public $varAction='settings';		//variable to make menu as active in layout

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		if( !isset(Yii::app()->user->isAdmin) )
		{
			Yii::app()->user->setFlash('invalid_login',true);
			$this->redirect( array('/admin') );
		}
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('allow',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$model = $this->loadModel($id);
		$model->faqStatus = CommonFunctions::statusName($model->faqStatus);
		$model->faqAnswer = strip_tags($model->faqAnswer);
		$categoryModel =  FaqsCategories::model()->findByPk($model->attributes['fkCategoryID']);
		$model->fkCategoryID = $categoryModel->attributes['faqCategoryName'];
		$model->faqHelpTopics=$this->getHelpTopics($id);
		$this->render('view',array(
			'model'=>$model,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Faqs;
		$model->scenario = 'add_faq';
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['Faqs']))
		{
			$model->attributes=$_POST['Faqs'];
			$model->faqDateAdded = date('Y-m-d H:i:s');
			$model->faqHelpTopics = implode(",",$_POST['Faqs']['faqHelpTopics']);
			$categoryModel =  FaqsCategories::model()->findByPk($model->attributes['fkCategoryID']);
			$categoryModel->faqCategoryIsMount = '1';
			$categoryModel->save();
			if($_FILES['Faqs']['name']['faqAttachment']){			
				if($model->validate()){
					$model->faqAttachment=CUploadedFile::getInstance($model,'faqAttachment');
					if($model->save()){					
						$model->faqAttachment->saveAs(FAQ_PATH.$model->faqAttachment);								
						Yii::app()->user->setFlash('addFAQSuccess',true);
						$this->redirect(array('index'));
					}
				}
			}else{
				if($model->validate()){
					if($model->save()){					
						Yii::app()->user->setFlash('addFAQSuccess',true);
						$this->redirect(array('index'));
					}
				}
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$model->scenario = 'update_faq';
		$model->faqHelpTopics=explode(',',$model->faqHelpTopics);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['Faqs']))
		{
			$model->attributes=$_POST['Faqs'];
			$model->faqDateModified = date('Y-m-d H:i:s');
			$model->faqHelpTopics = implode(",",$_POST['Faqs']['faqHelpTopics']);
			$categoryModel =  FaqsCategories::model()->findByPk($model->attributes['fkCategoryID']);
			$categoryModel->faqCategoryIsMount = '1';
			$categoryModel->save();

			if($_FILES['Faqs']['name']['faqAttachment']){	
				if($model->validate()){
					$model->faqAttachment=CUploadedFile::getInstance($model,'faqAttachment');
					if($model->save()){					
						$model->faqAttachment->saveAs(FAQ_PATH.$model->faqAttachment);								
						Yii::app()->user->setFlash('updateFAQSuccess',true);
						$this->redirect(array('index'));
					}
				}

			}else{
				if($model->validate()){
					$model->faqAttachment = $_POST['Faqs']['faqAttachment'];			
					if($model->save()){		
						Yii::app()->user->setFlash('updateFAQSuccess',true);
						$this->redirect(array('index'));
					}
				}

			}
		}
		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$model=Faqs::model()->findByPk($id);

		$model->delete();
				
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new Faqs('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Faqs'])){
			$model->attributes=$_GET['Faqs'];
	}
		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Faqs('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Faqs']))
			$model->attributes=$_GET['Faqs'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Faqs the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Faqs::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Faqs $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='faqs-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	/**
	 * Performs the Group Action change.
	 */

	public function actionChangeStatus(){
		if(isset($_POST['faqStatus']) && $_POST['faqStatus']==1){
			$row = Faqs::model()->updateByPk($_POST['faq-grid_c1'], array('faqStatus' =>1,'faqDateModified'=>date('Y-m-d H:i:s')));
			echo "activated";
		}else if(isset($_POST['faqStatus']) && $_POST['faqStatus']==0){
			$row = Faqs::model()->updateByPk($_POST['faq-grid_c1'], array('faqStatus' =>0,'faqDateModified'=>date('Y-m-d H:i:s')));
			echo "inactivated";
		}else if(isset($_POST['faqStatus']) && $_POST['faqStatus']==2){
			$row = Faqs::model()->deleteByPk($_POST['faq-grid_c1']);
			echo "deleted";
		}
	}

	/**
	 * Get Helptopics.
	 */

	public function getHelpTopics($id){
		$model=Faqs::model()->findByPk($id);
		$topicArray=explode(',',$model->faqHelpTopics);
		foreach ($topicArray as $topicID) {
			$test=Faqs::model()->findByPk($topicID);
			$topic[$topicID] = $test->faqQuestion;
		}
		return implode("||",$topic);;
	}
}
