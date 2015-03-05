<?php

class MembershipPlansController extends Controller
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
		$model->accessBooking = CommonFunctions::statusName($model->accessBooking);
		$model->addToWishgini = CommonFunctions::statusName($model->addToWishgini);
		$model->receiveCoupons = CommonFunctions::statusName($model->receiveCoupons);
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
		$model=new MembershipPlans;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['MembershipPlans']))
		{
			$model->attributes=$_POST['MembershipPlans'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->pkPlanID));
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

		if(isset($_POST['MembershipPlans']))
		{
			$model->attributes=$_POST['MembershipPlans'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->pkPlanID));
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
		$model = new MembershipPlans();
		$free = MembershipPlans::model()->findByPK('1');
		$paid = MembershipPlans::model()->findByPK('2');
		if(isset($_POST['member-fee'])){
			$paid->membershipFee = $_POST['member-fee'];
			if(isset($_POST['free-access']))
			{
				$free->accessBooking = '1';
			}
			else
			{
				$free->accessBooking = '0';	
			}
			if(isset($_POST['paid-access']))
			{
				$paid->accessBooking = '1';
			}
			else
			{
				$paid->accessBooking = '0';
			}
			if(isset($_POST['free-wish']))
			{
				$free->addToWishgini = '1';
			}
			else
			{
				$free->addToWishgini = '0';
			}
			if(isset($_POST['paid-wish']))
			{
				$paid->addToWishgini = '1';
			}
			else
			{
				$paid->addToWishgini = '0';
			}
			if(isset($_POST['free-coupon']))
			{
				$free->receiveCoupons = '1';
			}
			else
			{
				$free->receiveCoupons = '0';
			}
			if(isset($_POST['paid-coupon']))
			{
				$paid->receiveCoupons = '1';
			}
			else
			{
				$paid->receiveCoupons = '0';
			}
			if($free->save() && $paid->save())
			{		
				Yii::app()->user->setFlash('updateMemberPlanSuccess',true);
			}
		}
	
		$this->render('index',array(
			'model'=>$model,
			'free' => $free,
			'paid' => $paid,

		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new MembershipPlans('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['MembershipPlans']))
			$model->attributes=$_GET['MembershipPlans'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return MembershipPlans the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=MembershipPlans::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param MembershipPlans $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='membership-plans-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
