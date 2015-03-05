<?php

 /*Member controller is used to perform the member related information like singin and singup members*/

class MemberController extends Controller {

	/**
	 * This is the default 'signin' action that is invoked
	 * when an action is not explicitly requested by users.
	 */

	public function actionLogin() {
		$model = new Users;
		$modelUsersLogin = new UsersLogin;
		if (isset($_POST['memberEmail']) && isset($_POST['memberPassword'])) {
		    $customerDetails = $modelUsersLogin->getMemberDetails($_POST);
		    if (count($customerDetails) > 0) {
		        $customerDetails->login($userType = 'C');
		        //echo "<pre>";
		        //print_r($customersDetails); 
		        $varCookieValue = base64_encode($_POST['memberEmail']."!@#$%^".$_POST['memberPassword']);                                   
				if(isset($_POST['remember'])){
				    $varCookie = new CHttpCookie('memberDetails',$varCookieValue);
				    $varCookie->expire = time() + (60*60*24*15); // 15 days
				    Yii::app()->request->cookies['memberDetails'] = $varCookie;
				} else {
				    unset(Yii::app()->request->cookies['memberDetails']);
				}
		        echo "Success";
		    } else {
		        echo "error";
		    }
		}
	}


	/**
	 * This is the default 'signin' action that is invoked
	 * when an action is not explicitly requested by users.
	 */

	public function actionMemberSingup() {
		$this->render('memberSingup');
		
		/*$model = new Users;
		$modelUsersLogin = new UsersLogin;
		if (isset($_POST['memberEmail']) && isset($_POST['memberPassword'])) {
		    $customerDetails = $modelUsersLogin->getMemberDetails($_POST);
		    if (count($customerDetails) > 0) {
		        $customerDetails->login($userType = 'C');
		        $this->redirect(array('dashboard'));
		    } else {
		    	//die('login faild');
		        //Yii::app()->user->setFlash('login_error', AJAX_LOGIN_FAILED);
		        $this->redirect(Yii::app()->baseUrl);
		        //$this->render('homepage/index', array('model' => $model, 'loginModel' => $modelUsersLogin));
		    }
		}*/
	}


	/*
	 * This action display the dashboard
	 */

	public function actionDashboard() {
	    if (isset(Yii::app()->user->isCustomer)) {
	        $customer = new Users();
	        $data = array();
	        $data['usrId'] = Yii::app()->user->userId;
	        $data['customersDetails'] = $customer->getUserDetails($data['usrId']);
	        $this->render('dashboard', array('data' => $data));
	    } else {
	    	//die('faild');
	        $this->redirect(Yii::app()->baseUrl);
	    }
	}

	/*
	 * This action manage the user profile
	 */

	public function actionProfile() {
	    if (isset(Yii::app()->user->isCustomer)) {
	    	$id = Yii::app()->user->userId;
            $model = $this->loadModel($id);
			$loginModel = UsersLogin::model()->findByPk($model->fkUserLoginID);
			$model->customerDateOfBirth = date('m/d/Y',strtotime($model->customerDateOfBirth));
			$oldPassword = $loginModel->userPassword;
			$model->scenario = 'update_user_from_admin';
			if(isset($_POST['Users']) && isset($_POST['UsersLogin'])){
				$model->attributes = $_POST['Users'];
				$model->customerDateOfBirth = date('Y-m-d',strtotime($_POST['Users']['customerDateOfBirth']));
				$model->customerDateModified = date('Y-m-d H:i:s');
				/*echo "<pre>";
				print_r($_POST); 
				echo "<pre>";
				print_r($model->attributes); die();*/
				if(isset($_POST['offer']))
				{
					$model->customerSpecialOfferSubscription = '1';
				}
				else
				{
					$model->customerSpecialOfferSubscription = '0';	
				}
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
					Yii::app()->user->setFlash('updateMemberSuccess',true);
	    			$this->redirect(array('profile'));
				}else{
						$model->stateOptions = CHtml::listData(State::model()->findAll('fkCountryID=:fkCountryID',array(':fkCountryID'=>(int) $_POST['Users']['customerCountry'])),'pkStateID', 'stateName');
						$model->cityOptions = CHtml::listData(City::model()->findAll('fkStateID=:fkStateID',array(':fkStateID'=>(int) $_POST['Users']['customerState'])),'pkCityID', 'cityName');
				} 
			}else{
				$model->stateOptions = CHtml::listData(State::model()->findAll('fkCountryID=:fkCountryID',array(':fkCountryID'=>$model->customerCountry)),'pkStateID', 'stateName');
				$model->cityOptions = CHtml::listData(City::model()->findAll('fkStateID=:fkStateID',array(':fkStateID'=>$model->customerState)),'pkCityID', 'cityName');
				$loginModel->userPassword = '';
			}
			$this->render('profile',array(
					'model'=>$model,
					'loginModel'=>$loginModel
				));
	    } else {
	        $this->redirect(Yii::app()->baseUrl);
	    }
	}

	/*
	 * This action is used to logout to user.
	 */

	public function actionLogout() {
	    Yii::app()->user->logout();
	    $this->redirect(array('homepage/index'));
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

	  /*
     * This action is used to login user.
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


}
