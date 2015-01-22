<?php
class CouponsController extends Controller
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
	 * Lists all coupons.
	 */
	public function actionIndex()
	{
		$model=new Coupons('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Coupons'])){	
			$model->attributes=$_GET['Coupons'];
		}
		
		$this->render('index',array(
			'model'=>$model,
		));
	}
	/**
	 * To create new coupon.
	 */
	public function actionCreate()
	{
		$model = new Coupons();
		if(isset($_POST['Coupons'])){
			$model->attributes = $_POST['Coupons'];
			$model->couponAddDate = time();
			$model->couponModifyDate = time();
			if($model->validate()){
				$model->save(false);
				Yii::app()->User->setFlash('addCouponsSuccess',true);
				$this->redirect(array('index'));
			}
		}
		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * To update new coupon.
	 */
	public function actionUpdate($id)
	{
		$model = Coupons::model()->findByPk($id);
		if(isset($_POST['Coupons'])){
			$model->attributes = $_POST['Coupons'];
			$model->couponModifyDate = time();
			if($model->validate()){
				$model->update(false);
				Yii::app()->User->setFlash('updateCouponsSuccess',true);
				$this->redirect(array('index'));
			}
		}
		$this->render('update',array(
			'model'=>$model,
		));
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
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Coupons the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Coupons::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * To change status of a coupon.
	 */
	public function actionChangeStatus()
	{
		if(isset($_POST['coupons-status']) && $_POST['coupons-status']==1){
			$row = Coupons::model()->updateByPk($_POST['coupons-grid_c1'], array('couponStatus' =>1,'couponsModifyDate'=>time()));
			echo "activated";
		}else if(isset($_POST['coupons-status']) && $_POST['coupons-status']==0){
			$row = Coupons::model()->updateByPk($_POST['coupons-grid_c1'], array('couponStatus' =>0,'couponModifyDate'=>time()));
			echo "inactivated";
		}
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
}
