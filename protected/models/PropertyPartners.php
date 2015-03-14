<?php

/**
 * This is the model class for table "tbl_property_partners".
 *
 * The followings are the available columns in table 'tbl_property_partners':
 * @property string $pkPropertyPartnerID
 * @property integer $fkUserLoginID
 * @property string $propertyPartnerUniqueID
 * @property string $propertyPartnerFirstName
 * @property string $propertyPartnerLastName
 * @property string $propertyPartnerUserName
 * @property string $propertyPartnerEmail
 * @property string $propertyPartnerMobile
 * @property string $propertyPartnerBusinessName
 * @property string $propertyPartnerWebsite
 * @property string $propertyPartnerContactMethod
 * @property string $propertyPartnerSubscriptionPlan
 * @property string $propertyPartnerStatus
 * @property string $propertyPartnerFeePaid
 * @property string $propertyPartnerAddress
 * @property integer $propertyPartnerCity
 * @property integer $propertyPartnerState
 * @property integer $propertyPartnerCountry
 * @property integer $propertyPartnerZip
 * @property integer $eWalletBalance
 * @property integer $wishginiBalance
 * @property string $propertyPartnerAccountActivationToken
 * @property string $propertyPartnerDateAdded
 * @property string $propertyPartnerDateModified
 */
class PropertyPartners extends CActiveRecord
{
	public $stateOptions="";
	public $cityOptions="";

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return TABLE_PROPERTY_PARTNERS;
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fkUserLoginID, propertyPartnerUniqueID, propertyPartnerFirstName, propertyPartnerLastName, propertyPartnerUserName, propertyPartnerEmail, propertyPartnerMobile, propertyPartnerBusinessName, propertyPartnerWebsite, propertyPartnerStatus, propertyPartnerAddress, propertyPartnerCity, propertyPartnerState, propertyPartnerCountry, propertyPartnerZip, propertyPartnerAccountActivationToken, propertyPartnerDateAdded', 'required'),
			array('fkUserLoginID, propertyPartnerCity, propertyPartnerState, propertyPartnerCountry, propertyPartnerZip, eWalletBalance, wishginiBalance', 'numerical', 'integerOnly'=>true),
			array('propertyPartnerUniqueID, propertyPartnerFirstName, propertyPartnerLastName, propertyPartnerUserName, propertyPartnerEmail, propertyPartnerMobile, propertyPartnerBusinessName, propertyPartnerWebsite, propertyPartnerAddress, propertyPartnerAccountActivationToken', 'length', 'max'=>255),
			array('propertyPartnerContactMethod, propertyPartnerSubscriptionPlan, propertyPartnerStatus, propertyPartnerFeePaid', 'length', 'max'=>1),
			array('propertyPartnerDateModified', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pkPropertyPartnerID, fkUserLoginID, propertyPartnerUniqueID, propertyPartnerFirstName, propertyPartnerLastName, propertyPartnerUserName, propertyPartnerEmail, propertyPartnerMobile, propertyPartnerBusinessName, propertyPartnerWebsite, propertyPartnerContactMethod, propertyPartnerSubscriptionPlan, propertyPartnerStatus, propertyPartnerFeePaid, propertyPartnerAddress, propertyPartnerCity, propertyPartnerState, propertyPartnerCountry, propertyPartnerZip, eWalletBalance, wishginiBalance, propertyPartnerAccountActivationToken, propertyPartnerDateAdded, propertyPartnerDateModified', 'safe', 'on'=>'search'),
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
			'pkPropertyPartnerID' => 'Property Partner ID',
			'fkUserLoginID' => 'Partner Login ID',
			'propertyPartnerUniqueID' => 'Unique ID',
			'propertyPartnerFirstName' => 'First Name',
			'propertyPartnerLastName' => 'Last Name',
			'propertyPartnerUserName' => 'User Name',
			'propertyPartnerEmail' => 'Email',
			'propertyPartnerMobile' => 'Mobile',
			'propertyPartnerBusinessName' => 'Business Name',
			'propertyPartnerWebsite' => 'Website',
			'propertyPartnerContactMethod' => 'Contact Method',
			'propertyPartnerSubscriptionPlan' => 'Plan',
			'propertyPartnerStatus' => 'Status',
			'propertyPartnerFeePaid' => 'Fee Paid',
			'propertyPartnerAddress' => 'Address',
			'propertyPartnerCity' => 'City',
			'propertyPartnerState' => 'State',
			'propertyPartnerCountry' => 'Country',
			'propertyPartnerZip' => 'Zip',
			'eWalletBalance' => 'E Wallet Balance',
			'wishginiBalance' => 'Wishgini Balance',
			'propertyPartnerAccountActivationToken' => 'Activation Token',
			'propertyPartnerDateAdded' => 'Date Added',
			'propertyPartnerDateModified' => 'Date Modified',
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

		$criteria->compare('pkPropertyPartnerID',$this->pkPropertyPartnerID,true);
		$criteria->compare('fkUserLoginID',$this->fkUserLoginID);
		$criteria->compare('propertyPartnerUniqueID',$this->propertyPartnerUniqueID,true);
		$criteria->compare('propertyPartnerFirstName',$this->propertyPartnerFirstName,true);
		$criteria->compare('propertyPartnerLastName',$this->propertyPartnerLastName,true);
		$criteria->compare('propertyPartnerUserName',$this->propertyPartnerUserName,true);
		$criteria->compare('propertyPartnerEmail',$this->propertyPartnerEmail,true);
		$criteria->compare('propertyPartnerMobile',$this->propertyPartnerMobile,true);
		$criteria->compare('propertyPartnerBusinessName',$this->propertyPartnerBusinessName,true);
		$criteria->compare('propertyPartnerWebsite',$this->propertyPartnerWebsite,true);
		$criteria->compare('propertyPartnerContactMethod',$this->propertyPartnerContactMethod,true);
		$criteria->compare('propertyPartnerSubscriptionPlan',$this->propertyPartnerSubscriptionPlan,true);
		$criteria->compare('propertyPartnerStatus',$this->propertyPartnerStatus,true);
		$criteria->compare('propertyPartnerFeePaid',$this->propertyPartnerFeePaid,true);
		$criteria->compare('propertyPartnerAddress',$this->propertyPartnerAddress,true);
		$criteria->compare('propertyPartnerCity',$this->propertyPartnerCity);
		$criteria->compare('propertyPartnerState',$this->propertyPartnerState);
		$criteria->compare('propertyPartnerCountry',$this->propertyPartnerCountry);
		$criteria->compare('propertyPartnerZip',$this->propertyPartnerZip);
		$criteria->compare('eWalletBalance',$this->eWalletBalance);
		$criteria->compare('wishginiBalance',$this->wishginiBalance);
		$criteria->compare('propertyPartnerAccountActivationToken',$this->propertyPartnerAccountActivationToken,true);
		$criteria->compare('propertyPartnerDateAdded',$this->propertyPartnerDateAdded,true);
		$criteria->compare('propertyPartnerDateModified',$this->propertyPartnerDateModified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort' => array(
			    'defaultOrder' => array(
			        'pkPropertyPartnerID' => true,
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
	 * @return PropertyPartners the static model class
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
