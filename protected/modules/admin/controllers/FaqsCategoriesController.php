<?php

class FaqsCategoriesController extends Controller
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
		$model->faqCategoryStatus = CommonFunctions::statusName($model->faqCategoryStatus);
		$model->faqCategoryIsMount = CommonFunctions::statusName($model->faqCategoryIsMount);
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
		$model=new FaqsCategories;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['FaqsCategories']))
		{
			$model->attributes=$_POST['FaqsCategories'];
			$model->faqCategoryDateAdded = date('Y-m-d H:i:s');
			if($model->save()){
				Yii::app()->user->setFlash('addCategorySuccess',true);
				$this->redirect(array('index'));
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

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['FaqsCategories']))
		{
			$model->attributes=$_POST['FaqsCategories'];
			$model->faqCategoryDateModified = date('Y-m-d H:i:s');
			if($model->save())
				Yii::app()->user->setFlash('updateCategorySuccess',true);
				$this->redirect(array('index'));
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
		$model=FaqsCategories::model()->findByPk($id);
				
				if($model->faqCategoryIsMount == '1')
				{
				    throw new CHttpException(400, "Category is Mounted to Questions. So Can't Delete now.");
				}
				else
				{	
					$model->delete();
				}
		
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new FaqsCategories('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['FaqsCategories'])){
			$model->attributes=$_GET['FaqsCategories'];
			//$modelOther->attributes=$_GET['Cms'];
		}
		$this->render('index',array(
			'model'=>$model,
		));

		/*$dataProvider=new CActiveDataProvider('FaqsCategories');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));*/
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new FaqsCategories('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['FaqsCategories']))
			$model->attributes=$_GET['FaqsCategories'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return FaqsCategories the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=FaqsCategories::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param FaqsCategories $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='faqs-categories-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	/**
	 * Performs the Group Action change.
	 */

	public function actionChangeStatus(){
		if(isset($_POST['faqCategoryStatus']) && $_POST['faqCategoryStatus']==1){
			$row = FaqsCategories::model()->updateByPk($_POST['faq-category-grid_c1'], array('faqCategoryStatus' =>1,'faqCategoryDateModified'=>date('Y-m-d H:i:s')));
			echo "activated";
		}else if(isset($_POST['faqCategoryStatus']) && $_POST['faqCategoryStatus']==0){
			$row = FaqsCategories::model()->updateByPk($_POST['faq-category-grid_c1'], array('faqCategoryStatus' =>0,'faqCategoryDateModified'=>date('Y-m-d H:i:s')));
			echo "inactivated";
		}else if(isset($_POST['faqCategoryStatus']) && $_POST['faqCategoryStatus']==2){
			$faqID = $_POST['faq-category-grid_c1']; 
			static $error = 'false';
			foreach ($faqID as $id ) {
				$model=FaqsCategories::model()->findByPk($id);
				
				if($model->faqCategoryIsMount == '1')
				{
				    $error = 'true';
				}
				else
				{	
					$row = FaqsCategories::model()->deleteByPk($id);
				}
			}
			if($error == 'true'){
				echo "error";
			}
			else{

				echo "Deleted";
			}
		}
	}
}
