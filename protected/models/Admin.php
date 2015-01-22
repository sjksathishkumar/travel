<?php

/**
 * This is the model class for table "tbl_users".
 *
 * The followings are the available columns in table 'tbl_users':
 * @property integer $pkUserLoginID
 * @property string $userEmail
 * @property string $userPassword
 * @property string $userStatus
 * @property string $userType
 * @property string $userDateModified
 *
 * The followings are the available model relations:
 * @property TblEmployers[] $tblEmployers
 * @property TblJobseekers[] $tblJobseekers
 * @property TblPasswordReset[] $tblPasswordResets
 */
class Admin extends CActiveRecord
{
	public $userEmail;
	public $userPassword;
	public $rememberMe;
	public $retype_password;
	public $resetPassTokenTable;
	public $userType;
	private $_identity;
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return TABLE_USERS_LOGIN;
	}
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('userEmail, userPassword', 'required', 'on'=>'admin_login'),						//Admin 
			array('userPassword,retype_password', 'required','on' =>'reset_pass'),						//Admin Reset Password Rules
			array('retype_password', 'compare', 'compareAttribute'=>'userPassword','on' =>'reset_pass'),
			array('userEmail', 'required','on' =>'edit_admin_profile'),							// Edit Admin 
			array('pkUserLoginID, userEmail, userPassword, userDateModified', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'resetPassTokenTable'=>array(self::HAS_MANY, 'ResetPassword', 'fkUserID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pkUserLoginID' => '#',
			'userEmail' => 'Email',
			'userPassword' => 'User Password',
			'userDateModified' => 'Date Modified',
			'retype_password'=>'Re-Type Password'
		);
	}
	
	/**
	 * Checks if the given password is correct.
	 * @param string the password to be validated
	 * @return boolean whether the password is valid
	 */
	public function validatePassword($password)
	{
		return md5($password);
	}

	/**
	 * Generates the password hash.
	 * @param string password
	 * @return string hash
	 */
	public function hashPassword($password)
	{
		return md5($password);
	}

	/**
	 * Generates a salt that can be used to generate a password hash.
	 *
	 * The {@link http://php.net/manual/en/function.crypt.php PHP `crypt()` built-in function}
	 * requires, for the Blowfish hash algorithm, a salt string in a specific format:
	 *  - "$2a$"
	 *  - a two digit cost parameter
	 *  - "$"
	 *  - 22 characters from the alphabet "./0-9A-Za-z".
	 *
	 * @param int cost parameter for Blowfish hash algorithm
	 * @return string the salt
	 */
	protected function generateSalt($cost=10)
	{
		if(!is_numeric($cost)||$cost<4||$cost>31){
			throw new CException(Yii::t('Cost parameter must be between 4 and 31.'));
		}
		// Get some pseudo-random data from mt_rand().
		$rand='';
		for($i=0;$i<8;++$i)
		$rand.=pack('S',mt_rand(0,0xffff));
		// Add the microtime for a little more entropy.
		$rand.=microtime();
		// Mix the bits cryptographically.
		$rand=sha1($rand,true);
		// Form the prefix that specifies hash algorithm type and cost parameter.
		$salt='$2a$'.str_pad((int)$cost,2,'0',STR_PAD_RIGHT).'$';
		// Append the random salt string in the required base64 format.
		$salt.=strtr(substr(base64_encode($rand),0,22),array('+'=>'.'));
		return $salt;
	}
	
	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function login($userType=null)
	{
		Yii::app()->user->logout(false);
		if($this->_identity===null)
		{
			if(!$this->hasErrors())
			{
				$this->_identity=new UserIdentity($this->userEmail,$this->userPassword);				
				$this->_identity->userType =$userType;			
				if(!$this->_identity->authenticate()){
					$this->addError('password','Incorrect username or password.');
				}
			}
		}
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
		{
			$duration=$this->rememberMe ? 3600*24*30 : 0; // 30 days
			Yii::app()->user->login($this->_identity,$duration);
			return true;
		}
		else
		{
			return false;
		}
	}

	
	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{				
		
	}
	
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}	
}
