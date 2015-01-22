<?php

class StateController extends Controller
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
		$model=new State('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['State'])){	
			$model->attributes=$_GET['State'];
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
		$model = new State();
		if(isset($_POST['State'])){
			$model->attributes = $_POST['State'];
			if($model->validate()){
				$model->save(false);
				Yii::app()->User->setFlash('addStateSuccess',true);
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
		$model = State::model()->findByPk($id);
		if(isset($_POST['State'])){
			$model->attributes = $_POST['State'];
			if($model->validate()){
				$model->update(false);
				Yii::app()->User->setFlash('updateStateSuccess',true);
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
	 * @return State the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=State::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function actionChangeStatus()
	{
		if(isset($_POST['state-status']) && $_POST['state-status']==1){
			$row = State::model()->updateByPk($_POST['state-grid_c1'], array('stateStatus' =>1,'stateDateModified'=>date('Y-m-d H:i:s')));
			echo "activated";
		}else if(isset($_POST['state-status']) && $_POST['state-status']==0){
			$row = State::model()->updateByPk($_POST['state-grid_c1'], array('stateStatus' =>0,'stateDateModified'=>date('Y-m-d H:i:s')));
			echo "inactivated";
		}
	}
}
