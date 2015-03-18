<?php

class PropertyPartnersController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='main';
	public $varAction='users';

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
		$model->propertyPartnerStatus = CommonFunctions::statusName($model->propertyPartnerStatus);
		$model->propertyPartnerSubscriptionPlan = CommonFunctions::partnerSubscriptionPlan($model->propertyPartnerSubscriptionPlan);
		$model->propertyPartnerContactMethod = CommonFunctions::contactMode($model->propertyPartnerContactMethod);
		$loginModel = UsersLogin::model()->findByPk($model->fkUserLoginID);
		$this->render('view',array(
			'model'=>$model,
			'loginModel'=>$loginModel,
		));

	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model = new PropertyPartners;
		$loginModel = new UsersLogin;
		$model->scenario = 'new_property_partner_admin';
		$loginModel->scenario = 'create_user_from_admin';
		if (isset($_POST['PropertyPartners']))
        {
        	$model->attributes = $_POST['PropertyPartners'];
        	$loginModel->attributes = $_POST['UsersLogin'];
        	$model->propertyPartnerEmail = $loginModel->userEmail; 
        	$model->propertyPartnerUserName = $loginModel->userName; 
        	$loginModel->userEmail = $model->propertyPartnerEmail;
			$loginModel->userType = 'PP';
			$model->propertyPartnerUniqueID = CommonFunctions::uniqueIDGenerator('P');
        	if($model->validate() & $loginModel->validate()){
        		$transaction=$model->dbConnection->beginTransaction();
        		$password = $loginModel->userPassword;
        		$loginModel->userPassword = md5($loginModel->userPassword);
        		try{
        			$loginModel->save(false);
        			$model->fkUserLoginID = $loginModel->primaryKey;
        			$model->propertyPartnerDateAdded = date('Y-m-d H:i:s');
        			$model->save();
        			$transaction->commit();
        			Yii::app()->user->setFlash('addPropertyPartnerSuccess',true);
        			$this->redirect(array('index'));
        		}catch(Exception $e){
        			$transaction->rollBack();
        		}
        	} 
        }
        $this->render('create',array(
									'model'=>$model,
									'loginModel'=>$loginModel
								)
		);
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model = $this->loadModel($id);
		$loginModel = UsersLogin::model()->findByPk($model->fkUserLoginID);
		$oldUserName = $loginModel->userName;
		$oldEmail = $loginModel->userEmail;
		$oldPassword = $loginModel->userPassword;
		$model->scenario = 'property_partner_update_admin';
		$loginModel->scenario = 'update_user_login_from_admin';

		if(isset($_POST['PropertyPartners']) && isset($_POST['UsersLogin'])){
			$model->attributes = $_POST['PropertyPartners'];
			$model->propertyPartnerDateModified = date('Y-m-d H:i:s');
			$loginModel->attributes = $_POST['UsersLogin'];
			if($model->validate() & $loginModel->validate()){
				$model->propertyPartnerEmail = $loginModel->userEmail;
				$model->propertyPartnerUserName = $loginModel->userName;
				if(!empty($loginModel->userPassword)){
					$loginModel->userPassword = md5($loginModel->userPassword);
				}else{
					$loginModel->userPassword = $oldPassword;
				}
				if(empty($loginModel->userEmail))
				{
					$loginModel->userEmail = $oldEmail;
					$model->propertyPartnerEmail = $loginModel->userEmail;
				}
				if(empty($loginModel->userName))
				{
					$loginModel->userName = $oldUserName;
					$model->propertyPartnerUserName = $loginModel->userName;
				}
				$model->update(false);
				$loginModel->update(false);
				Yii::app()->user->setFlash('updatePropertyPartnerSuccess',true);
    			$this->redirect(array('index'));
			}else{
					$model->stateOptions = CHtml::listData(State::model()->findAll('fkCountryID=:fkCountryID',array(':fkCountryID'=>(int) $_POST['PropertyPartners']['propertyPartnerCountry'])),'pkStateID', 'stateName');
					$model->cityOptions = CHtml::listData(City::model()->findAll('fkStateID=:fkStateID',array(':fkStateID'=>(int) $_POST['PropertyPartners']['propertyPartnerState'])),'pkCityID', 'cityName');
			} 
		}else{
			$model->stateOptions = CHtml::listData(State::model()->findAll('fkCountryID=:fkCountryID',array(':fkCountryID'=>$model->propertyPartnerCountry)),'pkStateID', 'stateName');
			$model->cityOptions = CHtml::listData(City::model()->findAll('fkStateID=:fkStateID',array(':fkStateID'=>$model->propertyPartnerState)),'pkCityID', 'cityName');
			$loginModel->userPassword = '';
		}
		$this->render('update',array(
				'model'=>$model,
				'loginModel'=>$loginModel
			));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$logID = $this->loadModel($id);
		$loginModel = UsersLogin::model()->findByPk($logID->fkUserLoginID);
		$loginModel->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new PropertyPartners('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['PropertyPartners'])){	
			$model->attributes=$_GET['PropertyPartners'];
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
		$model=new PropertyPartners('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['PropertyPartners']))
			$model->attributes=$_GET['PropertyPartners'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return PropertyPartners the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=PropertyPartners::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	
	/**
	* Function : actionDynamicstates
	* Used to get states on change of country.
	* @access public
	*/

	public function actionDynamicstates()
	{
		$data = array();
		$data=State::model()->findAll('fkCountryID=:fkCountryID', 
	                  array(':fkCountryID'=>(int) $_POST['country']));
	    
	 
	    $data=CHtml::listData($data,'pkStateID','stateName');
	    echo CHtml::tag('option',array('value'=>''),'- Select State -',true);
	    foreach($data as $value=>$name)
	    {
	        echo CHtml::tag('option',
	                   array('value'=>$value),CHtml::encode($name),true);
	    }
	}

	/**
	* Function : actionDynamicstates
	* Used to get city on change of state.
	* @access public
	*/
	public function actionDynamiccities()
	{
	    $data=City::model()->findAll('fkStateID=:fkStateID', 
	                  array(':fkStateID'=>(int) $_POST['state']));
	 
	    $data=CHtml::listData($data,'pkCityID','cityName');
	    echo CHtml::tag('option',array('value'=>''),'- Select City -',true);
	    foreach($data as $value=>$name)
	    {
	        echo CHtml::tag('option',
	                   array('value'=>$value),CHtml::encode($name),true);
	    }
	}

	/**
	 * Performs the AJAX validation.
	 * @param PropertyPartners $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='property-partners-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
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
