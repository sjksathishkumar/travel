<?php

class CountryController extends Controller
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
		$model=new Country('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Country'])){	
			$model->attributes=$_GET['Country'];
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
		$model = new Country();
		if(isset($_POST['Country'])){
			$model->attributes = $_POST['Country'];
			if($model->validate()){
				$model->save(false);
				Yii::app()->User->setFlash('addCountrySuccess',true);
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
		$model = Country::model()->findByPk($id);
		if(isset($_POST['Country'])){
			$model->attributes = $_POST['Country'];
			if($model->validate()){
				$model->update(false);
				Yii::app()->User->setFlash('updateCountrySuccess',true);
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
	 * @return Country the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Country::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function actionChangeStatus()
	{
		if(isset($_POST['country-status']) && $_POST['country-status']==1){
			$row = Country::model()->updateByPk($_POST['country-grid_c1'], array('countryStatus' =>1,'countryDateModified'=>date('Y-m-d H:i:s')));
			echo "activated";
		}else if(isset($_POST['country-status']) && $_POST['country-status']==0){
			$row = Country::model()->updateByPk($_POST['country-grid_c1'], array('countryStatus' =>0,'countryDateModified'=>date('Y-m-d H:i:s')));
			echo "inactivated";
		}
	}
}
