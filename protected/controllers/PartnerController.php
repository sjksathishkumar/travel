<?php

 /*Member controller is used to perform the member related information like singin and singup members*/

class PartnerController extends Controller {

	/**
	 * This is the default 'signup' action that is invoked 
	 * when an action is not explicitly requested by users.
	 */

	public function actionSignup() {
		$this->render('signup');
	}


	public function actionFree() {
		$property = new PropertyPartners;
		$city = new CityPartners;
		$modelUsersLogin = new UsersLogin;

		//$this->performAjaxValidation($property);
		//$this->performAjaxValidation($city);
		//$this->performAjaxValidation($modelUsersLogin);   

		$city->scenario = 'city_partner_create_front';
		$modelUsersLogin->scenario = 'create_partner_front';

		if(isset($_POST['ajax']) && $_POST['ajax']==='city-partner-free-signup-form')
    	{

		//if(isset($_POST['CityPartners']) && isset($_POST['UsersLogin'])){
			/*echo "<pre>";
			print_r($_POST); die();*/
			$city->attributes = $_POST['CityPartners'];
			$city->customerEmail = $_POST['UsersLogin']['userEmail'];
			$city->customerUserName = $_POST['UsersLogin']['userName'];
        	$modelUsersLogin->attributes = $_POST['UsersLogin'];
        	$modelUsersLogin->userEmail = $model->customerEmail;
        	$modelUsersLogin->userName = $model->customerUserName;
			$modelUsersLogin->userType = 'CP';
			$city->customerUniqueID = CommonFunctions::uniqueIDGenerator('CUS');
			echo CActiveForm::validate(array($city,$modelUsersLogin));
			/*if($model->validate() & $modelUsersLogin->validate()){
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

        		echo CJSON::encode(array(
                                  'status'=>'success'
                             ));
                            Yii::app()->end();
        	}
        	else{
                                $error = CActiveForm::validate($city);
                                if($error!='[]')
                                    echo $error;
                                Yii::app()->end();
                            }*/
		}
		$this->render('free', array('property' => $property,'city' => $city,'loginModel'=>$modelUsersLogin));

		//$this->render('free', array('property' => $property,'city' => $city,'loginModel'=>$modelUsersLogin));
	}


	public function actionBasic() {
		$this->render('basic');
	}

	public function actionPro() {
		$this->render('pro');
	}




}

