<?php

/**
 * This is the model class for table "tbl_banners".
 *
 * The followings are the available columns in table 'tbl_banners':
 * @property integer $pkUserLoginID 
 * @property string $userEmail
 * @property string $userPassword
 * @property string $userType
 * @property string $userDateModified
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
            array('userEmail,userType', 'required','except'=>'user-update-password-profile-form'),
            array('userPassword,repassword', 'required','on'=>'create_user_from_admin'),
            array('userPassword', 'compare', 'compareAttribute'=>'repassword','except'=>'user-update-password-profile-form'),
            array('pkUserLoginID,userEmail, userPassword, repassword,userType,userDateModified', 'safe'),
            array('userPassword', 'compare', 'compareAttribute'=>'repeatPassword','on'=>'user-update-password-profile-form', 'message'=>"Passwords don't match"),     
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
            'userPassword' => 'Password',
            'userType' => 'User Type',
            'userDateModified' => 'Date Modified',
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
        $criteria->compare('userDateModified', $this->userDateModified, true);
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
    public function getCustomerDetails($arrPost = array())
    {
        $criteria=new CDbCriteria;
        $criteria->join='LEFT JOIN '.TABLE_USERS.' AS U ON t.pkUserLoginID=U.fkUserLoginID';
        $criteria->condition='t.userEmail= "'. $arrPost['customerEmail'].'" AND t.userPassword = "'.md5($arrPost['customerPassword']).'" AND t.userType = "C" AND U.userStatus = "1"';
        $customerDetails = $this->find($criteria);

        return $customerDetails;
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
