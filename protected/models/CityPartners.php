<?php

/**
 * This is the model class for table "tbl_city_partners".
 *
 * The followings are the available columns in table 'tbl_city_partners':
 * @property string $pkCityPartnerID
 * @property integer $fkUserLoginID
 * @property string $cityPartnerUniqueID
 * @property string $cityPartnerFirstName
 * @property string $cityPartnerLastName
 * @property string $cityPartnerUserName
 * @property string $cityPartnerEmail
 * @property string $cityPartnerMobile
 * @property string $cityPartnerBusinessName
 * @property string $cityPartnerWebsite
 * @property string $cityPartnerContactMethod
 * @property string $cityPartnerSubscriptionPlan
 * @property string $cityPartnerStatus
 * @property string $cityPartnerFeePaid
 * @property string $cityPartnerAddress
 * @property integer $cityPartnerCity
 * @property integer $cityPartnerState
 * @property integer $cityPartnerCountry
 * @property integer $cityPartnerOperationCity
 * @property integer $cityPartnerOperationState
 * @property integer $cityPartnerOperationCountry
 * @property string $cityPartnerOperationArea
 * @property integer $cityPartnerZip
 * @property integer $eWalletBalance
 * @property integer $wishginiBalance
 * @property string $cityPartnerAccountActivationToken
 * @property string $cityPartnerDateAdded
 * @property string $cityPartnerDateModified
 */
class CityPartners extends CActiveRecord
{

	public $stateOptions="";
	public $cityOptions="";

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return TABLE_CITY_PARTNERS;
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fkUserLoginID, cityPartnerUniqueID, cityPartnerFirstName, cityPartnerLastName, cityPartnerUserName, cityPartnerEmail, cityPartnerMobile, cityPartnerBusinessName, cityPartnerWebsite, cityPartnerStatus, cityPartnerAddress, cityPartnerCity, cityPartnerState, cityPartnerCountry, cityPartnerOperationCity, cityPartnerOperationState, cityPartnerOperationCountry, cityPartnerOperationArea, cityPartnerZip, cityPartnerAccountActivationToken, cityPartnerDateAdded', 'required'),
			array('fkUserLoginID, cityPartnerCity, cityPartnerState, cityPartnerCountry, cityPartnerOperationCity, cityPartnerOperationState, cityPartnerOperationCountry, cityPartnerZip, eWalletBalance, wishginiBalance', 'numerical', 'integerOnly'=>true),
			array('cityPartnerUniqueID, cityPartnerFirstName, cityPartnerLastName, cityPartnerUserName, cityPartnerEmail, cityPartnerMobile, cityPartnerBusinessName, cityPartnerWebsite, cityPartnerAddress, cityPartnerOperationArea, cityPartnerAccountActivationToken', 'length', 'max'=>255),
			array('cityPartnerContactMethod, cityPartnerSubscriptionPlan, cityPartnerStatus, cityPartnerFeePaid', 'length', 'max'=>1),
			array('cityPartnerDateModified', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pkCityPartnerID, fkUserLoginID, cityPartnerUniqueID, cityPartnerFirstName, cityPartnerLastName, cityPartnerUserName, cityPartnerEmail, cityPartnerMobile, cityPartnerBusinessName, cityPartnerWebsite, cityPartnerContactMethod, cityPartnerSubscriptionPlan, cityPartnerStatus, cityPartnerFeePaid, cityPartnerAddress, cityPartnerCity, cityPartnerState, cityPartnerCountry, cityPartnerOperationCity, cityPartnerOperationState, cityPartnerOperationCountry, cityPartnerOperationArea, cityPartnerZip, eWalletBalance, wishginiBalance, cityPartnerAccountActivationToken, cityPartnerDateAdded, cityPartnerDateModified', 'safe', 'on'=>'search'),
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
			'pkCityPartnerID' => 'City Partner ID',
			'fkUserLoginID' => 'Partner Login ID',
			'cityPartnerUniqueID' => 'UniqueID',
			'cityPartnerFirstName' => 'First Name',
			'cityPartnerLastName' => 'Last Name',
			'cityPartnerUserName' => 'User Name',
			'cityPartnerEmail' => 'Email',
			'cityPartnerMobile' => 'Mobile',
			'cityPartnerBusinessName' => 'Business Name',
			'cityPartnerWebsite' => 'Website',
			'cityPartnerContactMethod' => 'Contact Mode',
			'cityPartnerSubscriptionPlan' => 'Plan',
			'cityPartnerStatus' => 'Status',
			'cityPartnerFeePaid' => 'Fee Paid',
			'cityPartnerAddress' => 'Address',
			'cityPartnerCity' => 'City',
			'cityPartnerState' => 'State',
			'cityPartnerCountry' => 'Country',
			'cityPartnerOperationCity' => 'Operation City',
			'cityPartnerOperationState' => 'Operation State',
			'cityPartnerOperationCountry' => 'Operation Country',
			'cityPartnerOperationArea' => 'Operation Area',
			'cityPartnerZip' => 'Zip',
			'eWalletBalance' => 'E Wallet Balance',
			'wishginiBalance' => 'Wishgini Balance',
			'cityPartnerAccountActivationToken' => 'Activation Token',
			'cityPartnerDateAdded' => 'Date Added',
			'cityPartnerDateModified' => 'Date Modified',
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

		$criteria->compare('pkCityPartnerID',$this->pkCityPartnerID,true);
		$criteria->compare('fkUserLoginID',$this->fkUserLoginID);
		$criteria->compare('cityPartnerUniqueID',$this->cityPartnerUniqueID,true);
		$criteria->compare('cityPartnerFirstName',$this->cityPartnerFirstName,true);
		$criteria->compare('cityPartnerLastName',$this->cityPartnerLastName,true);
		$criteria->compare('cityPartnerUserName',$this->cityPartnerUserName,true);
		$criteria->compare('cityPartnerEmail',$this->cityPartnerEmail,true);
		$criteria->compare('cityPartnerMobile',$this->cityPartnerMobile,true);
		$criteria->compare('cityPartnerBusinessName',$this->cityPartnerBusinessName,true);
		$criteria->compare('cityPartnerWebsite',$this->cityPartnerWebsite,true);
		$criteria->compare('cityPartnerContactMethod',$this->cityPartnerContactMethod,true);
		$criteria->compare('cityPartnerSubscriptionPlan',$this->cityPartnerSubscriptionPlan,true);
		$criteria->compare('cityPartnerStatus',$this->cityPartnerStatus,true);
		$criteria->compare('cityPartnerFeePaid',$this->cityPartnerFeePaid,true);
		$criteria->compare('cityPartnerAddress',$this->cityPartnerAddress,true);
		$criteria->compare('cityPartnerCity',$this->cityPartnerCity);
		$criteria->compare('cityPartnerState',$this->cityPartnerState);
		$criteria->compare('cityPartnerCountry',$this->cityPartnerCountry);
		$criteria->compare('cityPartnerOperationCity',$this->cityPartnerOperationCity);
		$criteria->compare('cityPartnerOperationState',$this->cityPartnerOperationState);
		$criteria->compare('cityPartnerOperationCountry',$this->cityPartnerOperationCountry);
		$criteria->compare('cityPartnerOperationArea',$this->cityPartnerOperationArea,true);
		$criteria->compare('cityPartnerZip',$this->cityPartnerZip);
		$criteria->compare('eWalletBalance',$this->eWalletBalance);
		$criteria->compare('wishginiBalance',$this->wishginiBalance);
		$criteria->compare('cityPartnerAccountActivationToken',$this->cityPartnerAccountActivationToken,true);
		$criteria->compare('cityPartnerDateAdded',$this->cityPartnerDateAdded,true);
		$criteria->compare('cityPartnerDateModified',$this->cityPartnerDateModified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort' => array(
			    'defaultOrder' => array(
			        'pkCityPartnerID' => true,
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
	 * @return CityPartners the static model class
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
