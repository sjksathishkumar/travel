<?php

class CmsController extends Controller
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
	public function actionView($id = 0)
	{
		$model = $this->loadModel($id);
		$model->cmsContent = strip_tags($model->cmsContent);
		$model->cmsStatus = CommonFunctions::statusName($model->cmsStatus);
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
		$model=new Cms;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		$model->cmsDateAdded = date('Y-m-d H:i:s');
		$model->cmsDateModified = date('Y-m-d H:i:s');
		if(isset($_POST['Cms']))
		{
			$model->attributes=$_POST['Cms'];
			$model->cmsSlug = CommonFunctions::create_slug($model->cmsSlug);
			if($model->save())
				$this->redirect(array('/admin/cms') );
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
		if($model->cmsContentAvailable){
			$model->scenario = 'cms_update';
		}
		$model->cmsDateModified = date('Y-m-d H:i:s');
		if(isset($_POST['Cms']))
		{
			$model->attributes=$_POST['Cms'];
			$model->cmsSlug = CommonFunctions::create_slug($model->cmsSlug);
			if($model->save())
			{
				Yii::app()->user->setFlash('editCmsSuccess',true);
				$this->redirect(array('index'));
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
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new Cms('search');
		$modelOther=new Cms('searchOther');
		$model->unsetAttributes();  // clear any default values
		$modelOther->unsetAttributes();  // clear any default values
		if(isset($_GET['Cms'])){
			$model->attributes=$_GET['Cms'];
			$modelOther->attributes=$_GET['Cms'];
		}
		$this->render('manage',array(
			'model'=>$model,'modelOther'=>$modelOther,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionManage()
	{
		/*$model=new Cms('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Cms']))
			$model->attributes=$_GET['Cms'];

		$this->render('manage',array(
			'model'=>$model,
		));
		*/
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Cms the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Cms::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Cms $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='cms-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionChangeStatus()
	{
		if(isset($_POST['cmsStatus']) && $_POST['cmsStatus']==1)
		{
		 $row = Cms::model()->updateByPk($_POST['cms-grid_c1'], array('cmsStatus' =>1,'cmsDateModified'=>date('Y-m-d H:i:s')));
		  
		 echo "activated";

		}
		else if(isset($_POST['cmsStatus']) && $_POST['cmsStatus']==0)
		{
		  $row = Cms::model()->updateByPk($_POST['cms-grid_c1'], array('cmsStatus' =>0,'cmsDateModified'=>date('Y-m-d H:i:s')));
		 
		  echo "inactivated";
		 
		}
		else if(isset($_POST['cmsStatus']) && $_POST['cmsStatus']==2)
		{
		  $row = Cms::model()->findByPk($_POST['cms-grid_c1']);
		  if($row->pkCmsID){
		  	$row = Cms::model()->deleteByPk($_POST['cms-grid_c1']);
		  	echo "Delete";
		  }else{
		  	echo "Not-Deleted";
		  }
		 
		}
	}
}
