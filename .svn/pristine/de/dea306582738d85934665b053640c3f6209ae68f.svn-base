<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	public $userType;
	private $_id;	
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{		
		if($this->userType=='C') // This is front login
		{
			// check if login details exists in database
			$record=UsersLogin::model()->findByAttributes(array('userEmail'=>$this->username,'userPassword'=>$this->password,'userType'=>'C')); 
			if($record===null)
			{ 
			    $this->errorCode=self::ERROR_USERNAME_INVALID;
			}
			else if($record->userPassword!==$this->password)            // here I compare db password with password field
			{ 
			    $this->errorCode=self::ERROR_PASSWORD_INVALID;
			}
			else
			{  
				$userModel = Users::model()->findByAttributes(array('fkUserLoginID'=>$record->pkUserLoginID));
				$this->setState('isCustomer',1);
			    $this->setState('userLoginId',$record->pkUserLoginID);
			    $this->setState('userId',$userModel->pkUserID);
			    $this->setState('username', $record->userEmail);
			    $this->errorCode=self::ERROR_NONE;
			}
			return $this->errorCode==self::ERROR_NONE;
		}
		if($this->userType=='A')// This is admin login
		{
			
			// check if login details exists in database
			$admin =Admin::model()->findByAttributes(array('userEmail'=>$this->username,'userPassword'=>md5($this->password),'userType'=>'A'));
			
			if($admin===null){			
				$this->errorCode=self::ERROR_USERNAME_INVALID;
			}else if(!($admin->validatePassword($this->password) == $admin->userPassword)){			
				$this->errorCode=self::ERROR_PASSWORD_INVALID;
			}else{  
			    $this->setState('isAdmin',1);
			    $this->setState('userId',$admin->pkUserLoginID);
			    $this->setState('username', $admin->userEmail);
			    $this->errorCode=self::ERROR_NONE;
			}
			return $this->errorCode==self::ERROR_NONE;
		}		
	}
}