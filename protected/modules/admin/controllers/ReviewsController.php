<?php

class ReviewsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='main';
	public $varAction='reviews';		//variable to make menu as active in layout
	

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
		$this->render('view',array(
			'model'=>$this->loadModel($id),
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
		if(isset($_POST['Reviews']))
		{			
			$model->attributes=$_POST['Reviews'];
			if($model->validate()){
				if($model->save()){					
						Yii::app()->user->setFlash('editReviewSuccess',true);
						$this->redirect(array('index'));
				}
			}			
		}

		$this->render('update',array(
			'model'=>$model,'type'=>'edit'
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
		$model=new Reviews('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Reviews'])){			
			$model->attributes=$_GET['Reviews'];
		}

		$this->render('index',array(
			'model'=>$model,
		));
	}
	
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param Reviews $id the ID of the model to be loaded
	 * @return Reviews the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Reviews::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/*
	* Bulk Action
	*/
	public function actionChangeStatus(){
		if(isset($_POST['reviewStatus']) && $_POST['reviewStatus']==1){
			$row = Reviews::model()->updateByPk($_POST['reviews-grid_c1'], array('reviewStatus' =>1,'reviewActionDate'=>date('Y-m-d H:i:s')));
			echo "approved";
		}else if(isset($_POST['reviewStatus']) && $_POST['reviewStatus']==0){
			$row = Reviews::model()->updateByPk($_POST['reviews-grid_c1'], array('reviewStatus' =>0,'reviewActionDate'=>date('Y-m-d H:i:s')));
			echo "unapproved";
		}else if(isset($_POST['reviewStatus']) && $_POST['reviewStatus']==2){
			$row = Reviews::model()->deleteByPk($_POST['reviews-grid_c1']);
			echo "deleted";
		}
	}


	/*
	* Inline Status Change
	*/
	function actionApproveUnapprove()
	{
		if(isset($_POST['status']) && isset($_POST['id'])){
			$row = Reviews::model()->updateByPk($_POST['id'],array('reviewStatus' =>$_POST['status'],'reviewActionDate'=>date('Y-m-d H:i:s')));
			echo $_POST['status'] == '1'?'approved':'unapproved';
		}
	}
}
