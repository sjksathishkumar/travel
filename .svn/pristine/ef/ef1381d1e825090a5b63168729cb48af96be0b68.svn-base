<?php

class CityController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/nain', meaning
	 * using two-column layout. See 'protected/views/layouts/main.php'.
	 */
	public $layout='main';
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
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new City('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['City'])){	
			$model->attributes=$_GET['City'];
		}

		$this->render('index',array(
			'model'=>$model,
		));
	}
	/**
	 * Lists all models.
	 */
	public function actionCreate()
	{
		$model = new City();
		if(isset($_POST['City'])){
			$model->attributes = $_POST['City'];
			if($model->validate()){
				$model->save(false);
				Yii::app()->User->setFlash('addCitySuccess',true);
				$this->redirect(array('index'));
			}
		}
		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Lists all models.
	 */
	public function actionUpdate($id)
	{
		$model = City::model()->findByPk($id);
		if(isset($_POST['City'])){
			$model->attributes = $_POST['City'];
			if($model->validate()){
				$model->update(false);
				Yii::app()->User->setFlash('updateCitySuccess',true);
				$this->redirect(array('index'));
			}
		}
		$this->render('update',array(
			'model'=>$model,
		));
	}
	
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return City the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=City::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function actionChangeStatus()
	{
		if(isset($_POST['city-status']) && $_POST['city-status']==1){
			$row = City::model()->updateByPk($_POST['city-grid_c1'], array('cityStatus' =>1,'cityDateModified'=>date('Y-m-d H:i:s')));
			echo "activated";
		}else if(isset($_POST['city-status']) && $_POST['city-status']==0){
			$row = City::model()->updateByPk($_POST['city-grid_c1'], array('cityStatus' =>0,'cityDateModified'=>date('Y-m-d H:i:s')));
			echo "inactivated";
		}
	}
}
