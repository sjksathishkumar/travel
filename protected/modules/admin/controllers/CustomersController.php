<?php

class CustomersController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='main';
	public $varAction='users';		//variable to make menu as active in layout
	

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
		$model->customerStatus = CommonFunctions::statusName($model->customerStatus);
		$model->customerSubscriptionPlan = CommonFunctions::subscriptionPlan($model->customerSubscriptionPlan);
		$loginModel = UsersLogin::model()->findByPk($model->fkUserLoginID);
		$this->render('view',array(
			'model'=>$model,
			'loginModel'=>$loginModel
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model = new Users;
		$loginModel = new UsersLogin;
		$model->scenario = 'add_user_from_admin';
		$loginModel->scenario = 'create_user_from_admin';
		if (isset($_POST['Users']))
        {
        	$model->attributes = $_POST['Users'];
        	//echo "<pre>";
        	//print_r($model->attributes); die();
        	$loginModel->attributes = $_POST['UsersLogin'];
        	$loginModel->userEmail = $model->customerEmail;
			$loginModel->userType = 'C';
			$model->customerUniqueID = CommonFunctions::uniqueIDGenerator('CUS');
			//$loginModel->userDateModified = date('Y-m-d H:i:s');
			/*echo "<pre>";
			print_r($model->attributes); die();*/
        	if($model->validate() & $loginModel->validate()){
        		//echo "validation complete"; die();
        		$transaction=$model->dbConnection->beginTransaction();
        		$password = $loginModel->userPassword;
        		$loginModel->userPassword = md5($loginModel->userPassword);
        		try{
        			$loginModel->save(false);
        			$model->fkUserLoginID = $loginModel->primaryKey;
        			$model->customerStatus = '1';
        			//$model->customerUniqueID = CommonFunctions::uniqueIDGenerator('CUS');
        			//echo $model->customerUniqueID; die();
        			$model->customerDateAdded = date('Y-m-d H:i:s');
        			//$model->customerDateModified = date('Y-m-d H:i:s');
        			$model->save();
        			$transaction->commit();
        			Yii::app()->user->setFlash('addCustomerSuccess',true);
        			/* generate and send Email */
	                $varMailTo = trim($model->customerEmail);
	                //$activationLink = $url=Yii::app()->params['siteURL']."customer/activateAccount?userID=".base64_encode($model->pkCustomerID)."&token=".$model->customerAccountActivationToken;
	                $varKeywordContent = array('{to_name}','{site_url}','{login_email}','{login_password}');
	                $varKeywordValueContent = array(ucfirst($model->customerFirstName),Yii::app()->params['siteURL'],$model->customerEmail,$password);
	                CommonFunctions::sendMail('5',$varMailTo,$varKeywordContent,$varKeywordValueContent,'','','','');
        			$this->redirect(array('index'));
        		}catch(Exception $e){
        			 $transaction->rollBack();
        		}

        	} 
        	//echo "validation faild"; die(); 
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
		$model->customerDateOfBirth = date('m/d/Y',strtotime($model->customerDateOfBirth));
		$oldPassword = $loginModel->userPassword;
		$model->scenario = 'update_user_from_admin';
		if(isset($_POST['Users']) && isset($_POST['UsersLogin'])){
			$model->attributes = $_POST['Users'];
			$model->customerDateOfBirth = date('Y-m-d',strtotime($model->customerDateOfBirth));
			/*echo "<pre>";
			print_r($model->customerDateOfBirth); die();*/
			$model->customerDateModified = date('Y-m-d H:i:s');
			$loginModel->attributes = $_POST['UsersLogin'];
			if($model->validate() & $loginModel->validate()){
				$model->update(false);
				if(!empty($loginModel->userPassword)){
					$loginModel->userPassword = md5($loginModel->userPassword);
				}else{
					$loginModel->userPassword = $oldPassword;
				}
				$loginModel->userEmail = $model->customerEmail;
				$loginModel->update(false);
				Yii::app()->user->setFlash('updateCustomerSuccess',true);
    			$this->redirect(array('index'));
			}else{
					$model->stateOptions = CHtml::listData(State::model()->findAll('fkCountryID=:fkCountryID',array(':fkCountryID'=>(int) $_POST['Users']['customerCountry'])),'pkStateID', 'stateName');
					$model->cityOptions = CHtml::listData(City::model()->findAll('fkStateID=:fkStateID',array(':fkStateID'=>(int) $_POST['Users']['customerState'])),'pkCityID', 'cityName');
			} 
		}else{
			$model->stateOptions = CHtml::listData(State::model()->findAll('fkCountryID=:fkCountryID',array(':fkCountryID'=>$model->customerCountry)),'pkStateID', 'stateName');
			$model->cityOptions = CHtml::listData(City::model()->findAll('fkStateID=:fkStateID',array(':fkStateID'=>$model->customerState)),'pkCityID', 'cityName');
			$loginModel->userPassword = '';
		}
		$this->render('_form_edit',array(
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
		$model=new Users('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Users'])){	
			$model->attributes=$_GET['Users'];
			/*echo "<pre>";
			print_r($model->attributes); die();*/
		}

		$this->render('index',array(
			'model'=>$model,
		));
	}
	
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Users the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Users::model()->findByPk($id);
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
	 * @param Users $model the model to be validated
	 */
	public function actionChangeStatus(){
		if(isset($_POST['customers-status']) && $_POST['customers-status']==1){
			$row = Users::model()->updateByPk($_POST['customers-grid_c1'], array('customerStatus' =>1,'customerDateModified'=>date('Y-m-d H:i:s')));
			echo "activated";
		}else if(isset($_POST['customers-status']) && $_POST['customers-status']==0){
			$row = Users::model()->updateByPk($_POST['customers-grid_c1'], array('customerStatus' =>0,'customerDateModified'=>date('Y-m-d H:i:s')));
			echo "inactivated";
		}else if(isset($_POST['customers-status']) && $_POST['customers-status']==2){
			foreach ($_POST['customers-grid_c1'] as $pkCustomerID){
				$fkUserLoginID = Users::model()->findByPk($pkCustomerID)->fkUserLoginID;
				$loginModel = UsersLogin::model()->findByPk($fkUserLoginID);
				$loginModel->delete();
				//echo $fkUserLoginID;
				//UsersLogin::model()->deleteByPk($fkUserLoginID);
				//Users::model()->deleteByPk($pkCustomerID);
			}
			echo "deleted";
		}
	}
}
