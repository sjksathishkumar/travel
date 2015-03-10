<?php

/**
 * This is the model class for table "tbl_deals".
 */
class Users extends CActiveRecord
{
	public $stateOptions="";
	public $cityOptions="";
        /**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return TABLE_CUSTOMERS;
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pkCustomerID,fkUserLoginID,customerUniqueID,customerFirstName,customerLastName,customerEmail,customerMobile,customerGender,eWalletBalance,wishginiBalance', 'safe'),
			//array('customerFirstName,customerLastName,customerEmail,customerMobile,customerGender', 'required','on'=>'front_end_user_registration_ajax'),
			//array('customerFirstName,customerLastName,customerEmail,customerGender', 'required','on'=>'front_end_user_registration'),
			/*Adding new customer from admin*/
			array('customerFirstName,customerLastName,customerUserName,customerEmail,customerGender,customerMobile,customerSubscriptionPlan,eWalletBalance,wishginiBalance', 'required','on'=>'update_user_from_admin'),
			array('customerFirstName,customerLastName,customerUserName,customerEmail,customerGender,customerMobile', 'required','on'=>'front_end_user_registration'),
			array('customerFirstName,customerLastName,customerEmail,customerGender,customerMobile', 'required','on'=>'update_user_front_end'),
			array('customerDateOfBirth,customerStatus,customerSubscriptionPlan,customerAddress,customerCity,customerState,customerCountry,customerZip,eWalletBalance,wishginiBalance', 'required','on'=>'update_user_from_admin'),
			array('customerEmail','unique', 'message'=>'This email address already exists.','on'=>'front_end_user_registration, front_end_user_registration_ajax,update_user_from_admin'),
			array('customerUserName','unique', 'message'=>'This Username already exists.','on'=>'update_user_from_admin, front_end_user_registration'),
			array('customerEmail', 'email'),
			array('customerZip', 'numerical', 'integerOnly' => true, 'min' => 0, 'message' => 'ZIP must be nummeric'),
			array('customerMobile', 'numerical', 'integerOnly' => true, 'min' => 0, 'message' => 'Mobile must be nummeric'),
			array('eWalletBalance', 'numerical', 'integerOnly' => false, 'min' => 0, 'message' => 'eWallet Balance must be nummeric'),
			array('wishginiBalance', 'numerical', 'integerOnly' => false, 'min' => 0, 'message' => 'wishgini Balance must be nummeric'),
			/* Validate Personal Update Details Form */
			array('customerFirstName,customerLastName,customerEmail,customerGender,customerDateOfBirth', 'required','on'=>'user-update-profile-form'),
			array('customerFirstName,customerLastName,customerEmail,customerStatus,customerSpecialOfferSubscription,customerSubscriptionPlan', 'required','on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'billingCountry'=>array(self::BELONGS_TO, 'Country','customerCountry'),
			'billingState'=>array(self::BELONGS_TO, 'State','customerState'),
			'billingCity'=>array(self::BELONGS_TO, 'City','customerCity'),
            'userLogin'=>array(self::BELONGS_TO, 'User','fkUserLoginID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pkCustomerID' => 'Sr. No.',
			'fkUserLoginID' => 'Login ID',
			'customerUniqueID' => 'Customer ID',
			'customerFirstName' => 'First Name',
			'customerLastName' => 'Last Name',
			'customerUserName' => 'User Name',
			'customerEmail' => 'Email Address',
			'userPassword' => 'Password',
			'customerMobile' => 'Mobile',
			'customerGender' => 'Gender',
			'customerDateOfBirth'=>'Date Of Birth',
			'customerAddress'=>'Address1',
			'customerCity'=>'City',
			'customerState'=>'State',
			'customerCountry'=>'Country',
			'customerZip'=>'Zip',
			'customerSubscriptionPlan' => 'Subscription Plan',
			'customerStatus' => 'Status',
			'customerSpecialOfferSubscription' => 'Offer Subscription',
			'eWalletBalance' => 'eWallet Balance',
			'wishginiBalance' => 'Wishgini Balance'
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
		$criteria->with = array('billingCountry','billingState','billingCity');
		$criteria->compare('pkCustomerID',$this->pkCustomerID);
		$criteria->compare('fkUserLoginID',$this->fkUserLoginID,true);
		$criteria->compare('customerFirstName',$this->customerFirstName,true);
		$criteria->compare('customerEmail',$this->customerEmail,true);
		$criteria->compare('customerStatus',$this->customerStatus,true);
		$criteria->compare('customerSubscriptionPlan',$this->customerSubscriptionPlan,true);
		$criteria->compare('customerSpecialOfferSubscription',$this->customerSpecialOfferSubscription,true);

		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort' => array(
			    'defaultOrder' => array(
			        'cmsDateAdded' => true,
			    ),
			),
			'pagination' => array(
			    'pageSize' => UtilityHtml::pageSettings(),
			),
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
            return $this->customerFirstName.' '.$this->customerLastName;
    }

    public function getUserDetails($userID){
    	$criteria=new CDbCriteria;

    	$criteria->with=array('billingCountry','billingState','billingCity');

    	$criteria->condition='pkCustomerID= "'. $userID.'"';
        
        $customerDetails = Users::model()->find($criteria);

        return $customerDetails;
    }
}
