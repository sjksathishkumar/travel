<?php

/**
 * This is the model class for table "tbl_deals".
 */
class Users extends CActiveRecord
{
	public $billingStateOptions="";
	public $billingCityOptions="";
	public $shippingStateOptions="";
	public $shippingCityOptions="";
        /**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return TABLE_USERS;
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pkUserID,fkUserLoginID,userFirstName,userLastName,userEmail,userPhone,userGender,', 'safe'),
			array('userFirstName,userLastName,userEmail,userPhone,userGender', 'required','on'=>'front_end_user_registration_ajax'),
			array('userFirstName,userLastName,userEmail,userGender', 'required','on'=>'front_end_user_registration'),
			/*Adding new customer from admin*/
			array('userFirstName,userLastName,userEmail,userGender,userPhone', 'required','on'=>'add_user_from_admin,update_user_from_admin'),
			array('userFirstName,userLastName,userEmail,userGender,userPhone', 'required','on'=>'add_user_from_admin,update_user_front_end'),
			array('userDateOfBirth,userStatus,userBillingAddress1,userBillingAddress2,userBillingCity,userBillingState,userBillingCountry,userBillingZip,userBillingPhone,userShippingAddress1,userShippingAddress2,userShippingCity,userShippingState,userShippingCountry,userShippingZip,userShippingPhone', 'required','on'=>'update_user_from_admin'),
			array('userEmail','unique', 'message'=>'This email address already exists.','on'=>'front_end_user_registration, front_end_user_registration_ajax,add_user_from_admin,update_user_from_admin'),
			array('userEmail', 'email'),
			/* Validate Personal Update Details Form */
			array('userFirstName,userLastName,userEmail,userGender,userDateOfBirth', 'required','on'=>'user-update-profile-form'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'billingCountry'=>array(self::BELONGS_TO, 'Country','userBillingCountry'),
			'billingState'=>array(self::BELONGS_TO, 'State','userBillingState'),
			'billingCity'=>array(self::BELONGS_TO, 'City','userBillingCity'),
			'shippingCountry'=>array(self::BELONGS_TO, 'Country','userShippingCountry'),
			'shippingState'=>array(self::BELONGS_TO, 'State','userShippingState'),
			'shippingCity'=>array(self::BELONGS_TO, 'City','userShippingCity'),
                        'userLogin'=>array(self::BELONGS_TO, 'User','fkUserLoginID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pkUserID' => 'Sr. No.',
			'fkUserLoginID' => 'Login ID',
			'userFirstName' => 'First Name',
			'userLastName' => 'Last Name',
			'userEmail' => 'Email Address',
			'userPassword' => 'Password',
			'userPhone' => 'Phone',
			'userGender' => 'Gender',
			'userDateOfBirth'=>'Date Of Birth',
			'userBillingAddress1'=>'Address1',
			'userBillingAddress2'=>'Address2',
			'userBillingCity'=>'City',
			'userBillingState'=>'State',
			'userBillingCountry'=>'Country',
			'userBillingZip'=>'Zip',
			'userBillingPhone'=>'Phone',
			'userShippingAddress1'=>'Address1',
			'userShippingAddress2'=>'Address2',
			'userShippingCity'=>'City',
			'userShippingState'=>'State',
			'userShippingCountry'=>'Country',
			'userShippingZip'=>'Zip',
			'userShippingPhone'=>'Phone',
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
		// @todo Please modify the following code to remove attributes that should not be searched.
		$criteria=new CDbCriteria;
		$criteria->with = array('billingCountry','billingState','billingCity','shippingCountry','shippingState','shippingCity');
		$criteria->compare('pkUserID',$this->pkUserID);
		$criteria->compare('fkUserLoginID',$this->fkUserLoginID,true);
		$criteria->compare('userFirstName',$this->userFirstName,true);
		$criteria->compare('userEmail',$this->userEmail,true);

		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cms the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getFullname()
    {
            return $this->userFirstName.' '.$this->userLastName;
    }

    public function getUserDetails($userID){
    	$criteria=new CDbCriteria;

    	$criteria->with=array('billingCountry','billingState','billingCity','shippingCountry','shippingState','shippingCity');

    	$criteria->condition='pkUserID= "'. $userID.'"';
        
        $customerDetails = Users::model()->find($criteria);

        return $customerDetails;
    }
}
