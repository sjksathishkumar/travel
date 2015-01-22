<?php
class AdminController extends Controller
{
	/**
	* Displays the login page
	*/
	public $layout='main';
	public $varAction='admin';		//variable to make menu as active in layout
	
	public function actionIndex()
	{
		if( !isset(Yii::app()->user->isAdmin) )
		{
			$this->pageTitle = Yii::app()->params['SiteTitle']. " - Login";
		    
			$model=new Admin;
			$model->scenario ='admin_login';
			$model->unsetAttributes();  // clear any default values
			// if it is ajax validation request
			if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
			{
			    echo CActiveForm::validate($model);
			    Yii::app()->end();
			}
		
			// collect user input data
			if(isset($_POST['Admin']))
			{	
			    $model->attributes=$_POST['Admin'];

			    // validate user input and redirect to the previous page if valid
			    if($model->validate() && $model->login($userType='A'))
			    {
			       $model = $model->findByAttributes(array('userType'=>'A','userEmail'=>$model->userEmail));
			       $accessLog = new AcessLog;
			       $accessLog->fkAdminID = $model->pkUserLoginID;
			       $accessLog->adminAccessLoginIP = CHttpRequest::getUserHostAddress();
			       $accessLog->adminAccessLoginTime = date('Y-m-d H:i:s');
			       $accessLog->save();
			       //$row = Admin::model()->findByPk(1);
			       //$row->last_login = date('Y-m-d H:i:s');
			       //$row->save();		       
			       $this->redirect(array('dashboard'));
			       //$this->redirect(Yii::app()->request->urlReferrer);
			    }else{
				Yii::app()->user->setFlash('recoveryError',true);
			    }
			}
			// display the login form
			$this->layout = 'main';
			$this->render('index',array('model'=>$model));
		}else{
			$this->redirect(array('admin/dashboard'));
			//$this->redirect(Yii::app()->request->urlReferrer);
		}
	}
	
	/**
	* Displays the Dashboard page
	*/
	public function actionDashboard()
	{
		$this->pageTitle = Yii::app()->params['SiteTitle']. " - Dashboard";		
		if( !isset(Yii::app()->user->isAdmin) )
		{
			$this->redirect(array('/admin/admin/index'));
		}
		else{
			$accessLog = AcessLog::model()->find(array('order'=>'pkAdminAccessID DESC','limit'=>'1','offset'=>'1'));
			$this->render('dashboard',array('accessLog'=>$accessLog));
			
		}
	}
	
    
	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
	    Yii::app()->user->logout();
		$accessLog = AcessLog::model()->find(array('order'=>'pkAdminAccessID DESC','limit'=>'1'));
		$accessLog->adminAccessLogoutTime = date('Y-m-d H:i:s');
		$accessLog->update();
	    $this->redirect(array('admin/index'));
	}
	
	/**
	* Section that will recover password for admin.
	*/
	public function actionRecovery()
	{
		$url=Yii::app()->params['siteURL'];
		$this->pageTitle = Yii::app()->params['SiteTitle']. "Password Recovery";
		$model = new Admin();
		$model->scenario = 'recover_pass';
		$model->unsetAttributes();  // clear any default values
		if(isset($_POST['Admin']))
		{
			$model->attributes=$_POST['Admin'];
			$email =trim($_POST['Admin']['userEmail']);
			if($model->validate())
			{
				$arrRecord =$model->findByAttributes(array('userEmail'=>$email, 'userType'=>'A'));
				if(count($arrRecord) >0 )
				{
					/* Generating Token for Reset password and insert into resetpassword table */
					$varTokenCreated = time();
					$varTokenCode = CommonFunctions::generateRandomAlphaNumericCode(10).$varTokenCreated; // calling common functions calss
					$TBL_ResetPasswordToken = new ResetPassword;
					$TBL_ResetPasswordToken->fkUserID = $arrRecord['pkUserLoginID'];
					$TBL_ResetPasswordToken->passResetToken = $varTokenCode;
					$TBL_ResetPasswordToken->passResetCreated = $varTokenCreated;
					$TBL_ResetPasswordToken->passResetStatus = '1';
					$TBL_ResetPasswordToken->passResetDateAdded = date('Y-m-d H:i:s');
					$TBL_ResetPasswordToken->save();					
					/* generate and send Email */
					$varMailTo = trim($arrRecord['userEmail']);
					$resetLink = $url=Yii::app()->params['siteURL']."admin/admin/resetPassword?tokenID=".base64_encode($arrRecord['pkUserLoginID'])."&token=".base64_encode($varTokenCode);
					$varKeywordContent = array('{to_name}','{password_reset_link}');
					$varKeywordValueContent = array(ucfirst($arrRecord['userEmail']),$resetLink);
					CommonFunctions::sendMail('1',$varMailTo,$varKeywordContent,$varKeywordValueContent,'','','','');
					/* response */
					Yii::app()->user->setFlash('recoverySuccess',true);
					$this->redirect('recovery',array('model'=>$model));
				}else{
					Yii::app()->user->setFlash('recoveryError',true);
				}
			}else{
				Yii::app()->user->setFlash('recoveryError',true);
			}
		}
		$this->render('recovery',array('model'=>$model));
	}
	
	/**
	 * Function : actionResetPassword
	 * reset password action perform
	 * @access public
	 */
	public function actionResetPassword()
	{
		if( !isset(Yii::app()->user->isAdmin) )
		{			
			Yii::app()->user->logout();
			if(isset($_GET['tokenID']) && $_GET['tokenID'] != '' && isset($_GET['token']) && $_GET['token'] != ''){
				$token = base64_decode($_GET['token']);
				$adminID = base64_decode($_GET['tokenID']);				
				if($token != '' && $adminID != ''){
					$this->pageTitle = Yii::app()->params['SiteTitle']. "Forgot Password";
					$model = new Admin();
					$model->scenario = 'reset_pass';					
					if(isset($_POST['Admin']))
					{						
						// getting records from reset password token
						$TBL_ResetPasswordToken = new ResetPassword;					
						$arrResetTokenVal = Admin::model()->with('resetPassTokenTable')->findAll(array('condition'=>'userType=:userType AND fkUserID=:userID AND passResetToken=:userTokenNum AND passResetExpires=:userTokenExpiry AND 
						passResetStatus<>:userTokenStatus', 'params'=>array(':userType'=>'A',':userID'=>$adminID, 
						':userTokenNum'=>$token, ':userTokenExpiry'=>0, ':userTokenStatus'=>'0')));					
						if(count($arrResetTokenVal) > 0){							
							$model->attributes=$_POST['Admin'];							
							$password = md5($_POST['Admin']['userPassword']);
							$retype_password = md5($_POST['Admin']['retype_password']);
							$varTokenExpiry = time();
							if($model->validate()){								
								if($model->updateByPk($adminID,array('userPassword'=>$password,'userDateModified'=>date('Y-m-d H:i:s')))) //updating member password
								{									
									/* updating member reset password tokens expiry */
									$TBL_ResetPasswordToken->updateAll(array('passResetExpires'=>$varTokenExpiry,'passResetStatus'=>'0'),'fkUserID='.$adminID.' AND passResetExpires=0');
									/* updating member reset password tokens expiry */
									
									/* generate and send Email */
									$varMailTo = trim($arrResetTokenVal[0]->userEmail);
									$varKeywordContent = array('{to_name}','{new_password}');
									$varKeywordValueContent = array(ucfirst($arrResetTokenVal[0]->userEmail),$_POST['Admin']['userPassword']);
									
									CommonFunctions::sendMail('2',$varMailTo,$varKeywordContent,$varKeywordValueContent,'','','','');
									/* generate and send Email */
									/* message */									
									Yii::app()->user->setFlash('successMessage',true);
								}else{
									Yii::app()->user->setFlash('errorMessage',true);
								}
							}
						}else{
							Yii::app()->user->setFlash('errorMessage',true);
						}
					}
				}else{
					$this->redirect( array('/login') );
				}
			}else{
				$this->redirect( array('/login') );
			}
			$this->render('resetpassword',array('model'=>$model));
		}
	}
	/**
	 * Edit admin profile here
	 */
	public function actionEditProfile()
	{
		$this->pageTitle = Yii::app()->params['SiteTitle']. "Edit Profile";		
		$model = Admin::model()->findByPk(Yii::app()->user->userId);
		$model->scenario = 'edit_admin_profile';
		
		if(isset($_POST['Admin'])){
			$model->attributes = $_POST['Admin'];
			$validate = $model->validate();
			$arrExistEmail = Admin::model()->findAll(array('condition'=>'userEmail=:userEmail AND pkUserLoginID<>:userID', 
			'params'=>array(':userEmail'=>trim($_POST['Admin']['userEmail']), ':userID'=>$model->pkUserLoginID)));
			if(count($arrExistEmail) == 0){
				if($_POST['Admin']['userPassword'] != '' || $_POST['Admin']['retype_password'] != '')
				{
					if(strcmp($_POST['Admin']['userPassword'],$_POST['Admin']['retype_password']) == 0){
						$model->userPassword = md5(trim($_POST['Admin']['userPassword']));						
						$validate1 = 1;
					 }else{
						$validate1 = 0;
						$model->addError('password','Re-Type Password must be exactly repeat.');
					}
				}else{
					$validate1 = 1;
				}
				if($validate && $validate1){
					$model->userDateModified=date('Y-m-d h:i:s');
					$model->userEmail=trim($_POST['Admin']['userEmail']);
					if($model->save()){
						Yii::app()->user->setFlash('editProfileSuccess',true);
					}else{
						Yii::app()->user->setFlash('editProfileError',true);
					}
				}else{
					Yii::app()->user->setFlash('editProfileError',true);
				}
			}else if(count($arrExistEmail) > 0){
				Yii::app()->user->setFlash('editProfileEmailError',true);
			}
		}
		$this->render('edit_profile',array('model'=>$model));
	}
}
