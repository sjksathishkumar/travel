<?php

/**
 * This is the model class for table "tbl_banners".
 *
 * The followings are the available columns in table 'tbl_banners':
 * @property integer $pkUserLoginID 
 * @property string $userEmail
 * @property string $userPassword
 * @property string $userType
 * @property string $customerDateModified
 */
class UsersLogin extends CActiveRecord
{
    public $_identity;
    public $rememberMe;
    public $repassword;
    public $repeatPassword;

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
            array('userEmail,userType', 'required','except'=>'user-update-password-profile-form, reset_password_front,update_user_login_from_admin'),
            //array('userEmail,userName,userPassword', 'safe','on'=>'update_user_login_from_admin'),
            array('userName', 'required','on'=>'create_user_from_admin'),
            array('userPassword,repassword', 'required','on'=>'create_user_from_admin, create_user_front, reset_password_front'),
            array('userPassword', 'compare', 'compareAttribute'=>'repassword','except'=>'user-update-password-profile-form'),
            array('pkUserLoginID,userEmail, userPassword, repassword,userType,customerDateModified', 'safe'),
            array('pkUserLoginID,userEmail, userPassword, customerDateModified', 'safe', 'on'=>'search'),
            array('userEmail','unique', 'message'=>'This email address already exists.','on'=>'create_user_front,create_user_from_admin,update_user_login_from_admin'),
            array('userName','unique', 'message'=>'User name already exists.','on'=>'create_user_front,create_user_from_admin,update_user_login_from_admin'),
            array('userPassword', 'compare', 'compareAttribute'=>'repeatPassword','on'=>'user-update-password-profile-form', 'message'=>"Passwords don't match"),     
            array('userPassword', 'compare', 'compareAttribute'=>'repassword','on'=>'create_user_front, update_user_login_from_admin reset_password_front', 'message'=>"Passwords don't match"),     
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
            'pkUserLoginID' => 'User ID',
            'userEmail' => 'Email Address',
            'userName'  => 'User Name',
            'userPassword' => 'Password',
            'userType' => 'User Type',
            'customerDateModified' => 'Date Modified',
            'repassword'=>'Re-Enter Password',
        );
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
        $criteria = new CDbCriteria;
        $criteria->compare('userEmail', $this->userEmail, true);
        $criteria->compare('userPassword',$this->userPassword,true);
        $criteria->compare('userType',$this->userType,true);
        $criteria->compare('customerDateModified', $this->customerDateModified, true);
        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Banner the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    /*
    * This method is used to login user.
    */
    public function getMemberDetails($arrPost = array())
    {
        if(strpos($arrPost['memberEmail'], '@') !== false){
            $loginField = 't.userEmail= "'.$arrPost['memberEmail'];
        }else{
           //Otherwise we search using the username
            $loginField = 't.userName= "'.$arrPost['memberEmail'];
        }
        $criteria=new CDbCriteria;
        $criteria->join='LEFT JOIN '.TABLE_CUSTOMERS.' AS U ON t.pkUserLoginID=U.fkUserLoginID';
        $criteria->condition=$loginField.'" AND t.userPassword = "'.md5($arrPost['memberPassword']).'" AND t.userType = "C" AND U.customerStatus = "1"';
        $customerDetails = $this->find($criteria);
        return $customerDetails;
    }

    /*
    * This method is used to get the partner details.
    */
    public function getPartnerDetails($arrPost = array())
    {
        if(strpos($arrPost['partnerEmail'], '@') !== false){
            $loginField = 't.userName= "'.$arrPost['partnerEmail'];
        }else{
           //Otherwise we search using the username
            $loginField = 't.userName= "'.$arrPost['partnerEmail'];
        }
        $criteria=new CDbCriteria;
        //$criteria->join='LEFT JOIN '.TABLE_CUSTOMERS.' AS U ON t.pkUserLoginID=U.fkUserLoginID';
        //$criteria = new CDbCriteria();
        //$criteria->select = 'id, username';
        //$criteria->condition = 'email=:email AND pass=:pass';
        //$criteria->params = array(':email'=>$email, ':pass'=>$pass);
        //$model = User::model()->find($criteria);
        //$criteria->select = 't.userName, t.userName';
        $criteria->condition=$loginField.'" AND t.userPassword = "'.md5($arrPost['partnerPassword']).'"';
        $partnerDetails = $this->find($criteria);
        return $partnerDetails;
    }

    public function login($userType=null)
    {
        Yii::app()->user->logout(false);
        if($this->_identity===null)
        {
            if(!$this->hasErrors())
            {
                $this->_identity=new UserIdentity($this->userEmail,$this->userPassword);                
                $this->_identity->userType =$userType;  
                
                $authenticate = $this->_identity->authenticate();
                
                if (!$authenticate)
                {
                    $this->addError('invalid', 'Incorrect E-mail or Password.');
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

}
