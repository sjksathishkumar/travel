<?php

 /*PropertyPartner controller is used to perform the member related information like singin and singup members*/

class BasicController extends Controller {

	/**
	 * This is the default 'signin' action that is invoked
	 * when an action is not explicitly requested by users.
	 */

	public function actionLogin() {
		$modelUsersLogin = new UsersLogin;
		if (isset($_POST['partnerEmail']) && isset($_POST['partnerPassword'])) {
		    $partnerDetails = $modelUsersLogin->getPartnerDetails($_POST);
		    if (count($partnerDetails) > 0) {
		        $varCookieValue = base64_encode($_POST['partnerEmail']."!@#$%^".$_POST['partnerPassword']);                                   
				if(isset($_POST['remember'])){
				    $varCookie = new CHttpCookie('partnerDetails',$varCookieValue);
				    $varCookie->expire = time() + (60*60*24*15); // 15 days
				    Yii::app()->request->cookies['partnerDetails'] = $varCookie;
				} else {
				    unset(Yii::app()->request->cookies['partnerDetails']);
				}
				if($partnerDetails->userType == 'CP')
				{
					$partnerDetails->login($userType = 'CP');
		        	echo "city-success";
		        }
		        elseif($partnerDetails->userType == 'PP'){
		        	$partnerDetails->login($userType = 'PP');
		        	echo "property-success";
		        }
		        else{
		        	echo "error";
		        }
		    } else {
		        echo "Username and Password Invalid !";
		    }
		}
	}

	/**
	 * This is the default 'signin' action that is invoked 
	 * when an action is not explicitly requested by users.
	 */

	public function actionMemberSignup() {
		$this->render('memberSignup');
	}


	/**
	 * This is the default 'signin' action that is invoked 
	 * when an action is not explicitly requested by users.
	 */

	public function actionMemberFreeSignup() {
		$model = new Users;
		$modelUsersLogin = new UsersLogin;
		$model->scenario = 'front_end_user_registration';
		$modelUsersLogin->scenario = 'create_user_front';
		if(isset($_POST['Users']) && isset($_POST['UsersLogin'])){
			$model->attributes = $_POST['Users'];
			$model->customerEmail = $_POST['UsersLogin']['userEmail'];
			$model->customerUserName = $_POST['UsersLogin']['userName'];
        	$modelUsersLogin->attributes = $_POST['UsersLogin'];
        	$modelUsersLogin->userEmail = $model->customerEmail;
        	$modelUsersLogin->userName = $model->customerUserName;
			$modelUsersLogin->userType = 'C';
			$model->customerUniqueID = CommonFunctions::uniqueIDGenerator('CUS');
			if($model->validate() & $modelUsersLogin->validate()){
        		$transaction=$model->dbConnection->beginTransaction();
        		$password = $modelUsersLogin->userPassword;
        		$modelUsersLogin->userPassword = md5($modelUsersLogin->userPassword);
        		try{
        			$modelUsersLogin->save(false);
        			$model->fkUserLoginID = $modelUsersLogin->primaryKey;
        			//$model->customerStatus = '0';
        			$model->customerDateAdded = date('Y-m-d H:i:s');
        			//$model->customerDateModified = date('Y-m-d H:i:s');
        			$model->customerAccountActivationToken = base64_encode(uniqid(microtime()));
        			$model->save();
        			$transaction->commit();
        			Yii::app()->user->setFlash('addCustomerSuccess',true);
        			
	                $varMailTo = trim($model->customerEmail);
	                $activationLink = Yii::app()->getBaseUrl(true)."/member/activateAccount?userID=".base64_encode($model->pkCustomerID)."&token=".$model->customerAccountActivationToken."&type=".base64_encode('free');
	                $varKeywordContent = array('{to_name}','{site_url}','{login_email}','{login_password}');
	                $varKeywordValueContent = array(ucfirst($model->customerFirstName),$activationLink,$model->customerEmail,$password);
	                CommonFunctions::sendMail('5',$varMailTo,$varKeywordContent,$varKeywordValueContent,'','','','');
	                Yii::app()->user->setState("message","mail-success");
        			$this->redirect('pageLanding');
        		}catch(Exception $e){
        			 $transaction->rollBack();
        		}
        	}
		}
		$this->render('memberFreeSignup', array('model' => $model,'loginModel'=>$modelUsersLogin));
	}

	/**
	 * This is the default 'signin' action that is invoked 
	 * when an action is not explicitly requested by users.
	 */

	public function actionMemberPaidSignup() {
		$model = new Users;
		$modelUsersLogin = new UsersLogin;
		$model->scenario = 'front_end_user_registration';
		$modelUsersLogin->scenario = 'create_user_front';
		if(isset($_POST['Users']) && isset($_POST['UsersLogin'])){
			$model->attributes = $_POST['Users'];
			$model->customerEmail = $_POST['UsersLogin']['userEmail'];
			$model->customerUserName = $_POST['UsersLogin']['userName'];
        	$modelUsersLogin->attributes = $_POST['UsersLogin'];
        	$modelUsersLogin->userEmail = $model->customerEmail;
        	$modelUsersLogin->userName = $model->customerUserName;
			$modelUsersLogin->userType = 'C';
			$model->customerUniqueID = CommonFunctions::uniqueIDGenerator('CUS');
			if($model->validate() & $modelUsersLogin->validate()){
        		$transaction=$model->dbConnection->beginTransaction();
        		$password = $modelUsersLogin->userPassword;
        		$modelUsersLogin->userPassword = md5($modelUsersLogin->userPassword);
        		try{
        			$modelUsersLogin->save(false);
        			$model->fkUserLoginID = $modelUsersLogin->primaryKey;
        			//$model->customerStatus = '0';
        			$model->customerDateAdded = date('Y-m-d H:i:s');
        			//$model->customerDateModified = date('Y-m-d H:i:s');
        			$model->customerAccountActivationToken = base64_encode(uniqid(microtime()));
        			$model->save();
        			$transaction->commit();
        			Yii::app()->user->setFlash('addCustomerSuccess',true);
        			
	                $varMailTo = trim($model->customerEmail);
	                $activationLink = Yii::app()->getBaseUrl(true)."/member/activateAccount?userID=".base64_encode($model->pkCustomerID)."&token=".$model->customerAccountActivationToken."&type=".base64_encode('paid');
	                $varKeywordContent = array('{to_name}','{site_url}','{login_email}','{login_password}');
	                $varKeywordValueContent = array(ucfirst($model->customerFirstName),$activationLink,$model->customerEmail,$password);
	                CommonFunctions::sendMail('5',$varMailTo,$varKeywordContent,$varKeywordValueContent,'','','','');
  					Yii::app()->user->setState("message","mail-success");
  					//Yii::app()->user->setState("signup","paid");
        			$this->redirect('pageLanding');
        		}catch(Exception $e){
        			 $transaction->rollBack();
        		}
        	}
		}
		$this->render('memberPaidSignup', array('model' => $model,'loginModel'=>$modelUsersLogin));
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
			$model->scenario = 'update_user_front_end';
			if(isset($_POST['Users']) && isset($_POST['UsersLogin'])){
				$model->attributes = $_POST['Users'];
				$model->customerDateOfBirth = date('Y-m-d',strtotime($_POST['Users']['customerDateOfBirth']));
				$model->customerDateModified = date('Y-m-d H:i:s');
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
	 * This action is used to show information.
	 */

	public function actionPageLanding()
	{	
		if(Yii::app()->user->hasState("message"))
		{
			$message = Yii::app()->user->getState("message");
			$this->render('pageLanding', array('message' => $message));
			unset(Yii::app()->session['message']);
		}
		else
		{
			$this->render('pageLanding', array('message' => 'default-error'));	
		}
	}

	
	/*
	 * This action is used to logout to user.
	 */

	public function actionLogout() {
	    Yii::app()->user->logout();
	    $this->redirect(array('/homepage/index'));
	}


	/**
	* Section that will recover password for customer.
	*/
	public function actionRecovery()
	{
		$model = new UsersLogin();
		$model->unsetAttributes();  // clear any default values
		if (isset($_POST['forgotEmail'])) {
			$email =trim($_POST['forgotEmail']);
			$arrRecord =$model->findByAttributes(array('userEmail'=>$email, 'userType'=>'C'));
				if(count($arrRecord) >0 )
				{
					$varTokenCreated = time();
					$varTokenCode = CommonFunctions::generateRandomAlphaNumericCode(10).$varTokenCreated; // calling common functions calss
					$TBL_ResetPasswordToken = new ResetPassword;
					$TBL_ResetPasswordToken->fkUserID = $arrRecord['pkUserLoginID'];
					$TBL_ResetPasswordToken->passResetToken = $varTokenCode;
					$TBL_ResetPasswordToken->passResetCreated = $varTokenCreated;
					$TBL_ResetPasswordToken->passResetStatus = '1';
					$TBL_ResetPasswordToken->passResetDateAdded = date('Y-m-d H:i:s');
					$TBL_ResetPasswordToken->save();					
					$varMailTo = trim($arrRecord['userEmail']);
					$resetLink = Yii::app()->getBaseUrl(true)."/member/resetPassword?tokenID=".base64_encode($arrRecord['pkUserLoginID'])."&token=".base64_encode($varTokenCode);
					$varKeywordContent = array('{to_name}','{password_reset_link}');
					$varKeywordValueContent = array(ucfirst($arrRecord['userEmail']),$resetLink);
					CommonFunctions::sendMail('1',$varMailTo,$varKeywordContent,$varKeywordValueContent,'','','','');
					echo "Success";
				}else{
					echo "email-invalid";
				}
		}
		else{
			echo "error";
		}
	}


	/**
	 * Function : actionResetPassword
	 * reset password action perform
	 * @access public
	 */
	public function actionResetPassword()
	{			
		if(isset($_GET['tokenID']) && $_GET['tokenID'] != '' && isset($_GET['token']) && $_GET['token'] != ''){
			$token = base64_decode($_GET['token']);
			$customerID = base64_decode($_GET['tokenID']);
			$model = new UsersLogin();
			$model->scenario = 'reset_password_front';
			$TBL_ResetPasswordToken = new ResetPassword;	

			$checkValidToken =$TBL_ResetPasswordToken->findByAttributes(array('passResetToken'=>$token, 'passResetStatus'=>'1'));

			if($checkValidToken)
			{
				//echo "first time reset"; die();
			
			if(isset($_POST['UsersLogin']))
				{						
					// getting records from reset password token
					//$TBL_ResetPasswordToken = new ResetPassword;	
					$arrResetTokenVal = UsersLogin::model()->with('resetPassTokenTable')->findAll(array('condition'=>'userType=:userType AND fkUserID=:userID AND passResetToken=:userTokenNum AND passResetExpires=:userTokenExpiry AND 
					passResetStatus<>:userTokenStatus', 'params'=>array(':userType'=>'C',':userID'=>$customerID,':userTokenNum'=>$token, ':userTokenExpiry'=>'0', ':userTokenStatus'=>'0')));					
					if(count($arrResetTokenVal) > 0){							
						$model->attributes=$_POST['UsersLogin'];						
						$password = md5($_POST['UsersLogin']['userPassword']);
						$repassword = md5($_POST['UsersLogin']['repassword']);
						//$model->scenario = 'reset_password_front';
						$varTokenExpiry = time();
						if($model->validate()){	
							if(UsersLogin::model()->updateByPk($customerID,array('userPassword'=>$password,'customerDateModified'=>date('Y-m-d H:i:s')))) //updating member password
							{									
								$TBL_ResetPasswordToken->updateAll(array('passResetExpires'=>$varTokenExpiry,'passResetStatus'=>'0'),'fkUserID='.$customerID.' AND passResetExpires=0');
								$varMailTo = trim($arrResetTokenVal[0]->userEmail);
								$varKeywordContent = array('{to_name}','{new_password}');
								$varKeywordValueContent = array(ucfirst($arrResetTokenVal[0]->userEmail),$_POST['UsersLogin']['userPassword']);
								CommonFunctions::sendMail('2',$varMailTo,$varKeywordContent,$varKeywordValueContent,'','','','');
								Yii::app()->user->setState("message","password-reset-success");
			        			$this->redirect('pageLanding');
							}else{
								Yii::app()->user->setState("message","password-reset-faild");
			        			$this->redirect('pageLanding');
							}
						}
						else
						{
							Yii::app()->user->setState("message","password-reset-faild");
			        		$this->redirect('pageLanding');
						}
					}else{
						Yii::app()->user->setState("message","password-reset-faild");
			        	$this->redirect('pageLanding');
					} 
				}
				$this->render('resetPassword',array('model'=>$model));
				}
			else
			{
				Yii::app()->user->setState("message","password-reset-link-used");
			    $this->redirect('pageLanding');
			}
		}
		else{
			Yii::app()->user->setState("message","password-reset-link-invalid");
			$this->redirect('pageLanding');
		}
	}


	/*
     * This action is used to activate the user account.
     */

    public function actionActivateAccount() {
		if (isset($_GET['userID']) && isset($_GET['token']) && isset($_GET['type'])) {
			$type = base64_decode($_GET['type']);
			if($type == 'paid')
			{
				$customerID = base64_decode($_GET['userID']);
				$userModel = Users::model()->findByAttributes(array('pkCustomerID' => base64_decode($_GET['userID']),'customerAccountActivationToken' => $_GET['token'], 'customerStatus' => '0'));
				$userModelNonPaid = Users::model()->findByAttributes(array('pkCustomerID' => base64_decode($_GET['userID']),'customerAccountActivationToken' => $_GET['token'], 'customerStatus' => '1','customerFeePaid' => '0'));
	            $userAlreadyActivated = Users::model()->findByAttributes(array('pkCustomerID' => base64_decode($_GET['userID']),'customerAccountActivationToken' => $_GET['token'], 'customerStatus' => '1','customerFeePaid' => '1'));
	            if ($userModel) {
	                $userModel->customerStatus = 1;
	                $userModel->save();
	                
	                $varMailTo = trim($userModel->customerEmail);
	                $varSiteUrl = Yii::app()->getBaseUrl(true);
	                $varKeywordContent = array('{to_name}', '{site_url}');
	                $varKeywordValueContent = array(ucfirst($userModel->customerFirstName), $varSiteUrl);
	                CommonFunctions::sendMail('4', $varMailTo, $varKeywordContent, $varKeywordValueContent, '', '', '', '');
	                $this->render('/payment/paymentPage', array('pkCustomerID' => $customerID));
	            } 
	            elseif ($userModelNonPaid) {
	                $this->render('/payment/paymentPage', array('pkCustomerID' => $customerID));
	            }
	            elseif ($userAlreadyActivated) {
	            	$this->render('pageLanding', array('message' => 'already-active'));
	            }
	            else {
	                $this->render('pageLanding', array('message' => 'faild'));
	            }
			}
			else{
	            $userModel = Users::model()->findByAttributes(array('pkCustomerID' => base64_decode($_GET['userID']),'customerAccountActivationToken' => $_GET['token'], 'customerStatus' => '0'));
	            $userAlreadyActivated = Users::model()->findByAttributes(array('pkCustomerID' => base64_decode($_GET['userID']),'customerAccountActivationToken' => $_GET['token'], 'customerStatus' => '1'));
	            if ($userModel) {
	                $userModel->customerStatus = 1;
	                $userModel->save();
	                $varMailTo = trim($userModel->customerEmail);
	                $varSiteUrl = Yii::app()->getBaseUrl(true);
	                $varKeywordContent = array('{to_name}', '{site_url}');
	                $varKeywordValueContent = array(ucfirst($userModel->customerFirstName), $varSiteUrl);
	                CommonFunctions::sendMail('4', $varMailTo, $varKeywordContent, $varKeywordValueContent, '', '', '', '');
	                $this->render('pageLanding', array('message' => 'success'));
	            } 
	            elseif ($userAlreadyActivated) {
	            	$this->render('pageLanding', array('message' => 'already-active'));
	            }
	            else {
	                $this->render('pageLanding', array('message' => 'faild'));
	            }
        	}
    	}
	}


	/*
     * This action is used to process for paid member.
     */

	public function actionPaymentProcess()
	{
		$memberID = $_GET['id'];
		$status = $_GET['status'];
		$model = Users::model()->findByPK($memberID);
		$model->customerSubscriptionPlan = '1';
		$model->customerFeePaid = '1';
		if($model->save()){
			$this->render('pageLanding', array('message' => 'payment-success'));
		}
		else
		{
			$this->render('pageLanding', array('message' => 'payment-faild'));
		}
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
