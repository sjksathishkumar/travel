<?php

 /*Member controller is used to perform the member related information like singin and singup members*/

class SignupController extends Controller {

	/**
	 * This is the default 'signup' action that is invoked 
	 * when an action is not explicitly requested by users.
	 */

	
	public function actionFree() 
	{
		echo "Tested"; die();
		$model = new CityPartners;
		$modelUsersLogin = new UsersLogin;

		$model->scenario = 'city_partner_create_front';
		$modelUsersLogin->scenario = 'create_partner_front';

		if(isset($_POST['CityPartners']) && isset($_POST['UsersLogin'])){
			$model->attributes = $_POST['CityPartners'];
			$model->cityPartnerEmail = $_POST['UsersLogin']['userEmail'];
			$model->cityPartnerUserName = $_POST['UsersLogin']['userName'];
			$model->cityPartnerDateOfBirth = date('Y-m-d',strtotime($_POST['CityPartners']['cityPartnerDateOfBirth']));//date('m/d/Y',strtotime());
        	$modelUsersLogin->attributes = $_POST['UsersLogin'];
			$modelUsersLogin->userType = 'CP';
			$model->cityPartnerUniqueID = CommonFunctions::uniqueIDGenerator('CP');
			$count = sizeof($_POST['CityPartners']['cityPartnerContactMethod']);
			if($count == 2)
			{
				$model->cityPartnerContactMethod = 3;
			}
			else{
				$model->cityPartnerContactMethod = $_POST['CityPartners']['cityPartnerContactMethod']['0'];
			}
			if($model->validate() && $modelUsersLogin->validate()){
        		$transaction=$model->dbConnection->beginTransaction();
        		$password = $modelUsersLogin->userPassword;
        		$modelUsersLogin->userPassword = md5($modelUsersLogin->userPassword);
        		try{
        			$modelUsersLogin->save(false);
        			$model->fkUserLoginID = $modelUsersLogin->primaryKey;
        			$model->cityPartnerDateAdded = date('Y-m-d H:i:s');
        			$model->cityPartnerAccountActivationToken = base64_encode(uniqid(microtime()));
        			$model->save();
        			$transaction->commit();
        			
	                $varMailTo = trim($model->cityPartnerEmail);
	                $activationLink = Yii::app()->getBaseUrl(true)."/cityPartner/signup/activateAccount?userID=".base64_encode($model->pkCityPartnerID)."&token=".$model->cityPartnerAccountActivationToken."&type=".base64_encode('free');
	                $varKeywordContent = array('{to_name}','{site_url}','{login_email}','{login_password}');
	                $varKeywordValueContent = array(ucfirst($model->cityPartnerFirstName),$activationLink,$model->cityPartnerEmail,$password);
	                CommonFunctions::sendMail('5',$varMailTo,$varKeywordContent,$varKeywordValueContent,'','','','');
	                Yii::app()->user->setState("message","mail-success");
        			$this->redirect('../../site/notification');
        		}catch(Exception $e){
        			 $transaction->rollBack();
        		}
        	}
		}
	}


	/*
     * This action is used to activate the user account.
     */

    public function actionActivateAccount() {
		if (isset($_GET['userID']) && isset($_GET['token']) && isset($_GET['type'])) {
			$type = base64_decode($_GET['type']);
			//echo $type; die();
	            $userModel = CityPartners::model()->findByAttributes(array('pkCityPartnerID' => base64_decode($_GET['userID']),'cityPartnerAccountActivationToken' => $_GET['token'], 'cityPartnerStatus' => '0'));
	            $userAlreadyActivated = CityPartners::model()->findByAttributes(array('pkCityPartnerID' => base64_decode($_GET['userID']),'cityPartnerAccountActivationToken' => '1', 'cityPartnerStatus' => '1'));
	            $userAlreadyVerified = CityPartners::model()->findByAttributes(array('pkCityPartnerID' => base64_decode($_GET['userID']),'cityPartnerAccountActivationToken' => '1', 'cityPartnerStatus' => '0'));
	            if ($userModel) {
	                $userModel->cityPartnerAccountActivationToken = 1;
	                $userModel->save();
	                $varMailTo = trim($userModel->cityPartnerEmail);
	                $varSiteUrl = Yii::app()->getBaseUrl(true);
	                $varKeywordContent = array('{to_name}', '{site_url}');
	                $varKeywordValueContent = array(ucfirst($userModel->cityPartnerFirstName), $varSiteUrl);
	                CommonFunctions::sendMail('4', $varMailTo, $varKeywordContent, $varKeywordValueContent, '', '', '', '');
	                Yii::app()->user->setState("message","mail-verified");
        			$this->redirect('../../site/notification');
	            } 
	            elseif ($userAlreadyActivated) {
	            	Yii::app()->user->setState("message","already-active");
        			$this->redirect('../../site/notification');
	            }
	            elseif ($userAlreadyVerified) {
	            	Yii::app()->user->setState("message","mail-already-verified");
        			$this->redirect('../../site/notification');
	            }
	            else {
	            	Yii::app()->user->setState("message","faild");
        			$this->redirect('../../site/notification');
	            }
    	}
	}


	public function actionBasic() {
		$this->render('basic');
	}

	public function actionPro() {
		$this->render('pro');
	}




}

