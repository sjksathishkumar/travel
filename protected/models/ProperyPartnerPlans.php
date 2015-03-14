<?php

/**
 * This is the model class for table "tbl_propery_partner_plans".
 *
 * The followings are the available columns in table 'tbl_propery_partner_plans':
 * @property integer $pkPlanID
 * @property string $planName
 * @property integer $membershipFee
 * @property integer $daysValidity
 * @property integer $numberOfListing
 * @property string $accessBooking
 * @property string $addToWishgini
 * @property string $receiveCoupons
 * @property string $planAddedDate
 * @property string $planModifiedDate
 */
class ProperyPartnerPlans extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return TABLE_PROPERTY_PARTNER_PLANS;
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('planName, membershipFee, daysValidity, numberOfListing, accessBooking, addToWishgini, receiveCoupons, planAddedDate, planModifiedDate', 'required'),
			array('membershipFee, daysValidity, numberOfListing', 'numerical', 'integerOnly'=>true),
			array('planName', 'length', 'max'=>255),
			array('accessBooking, addToWishgini, receiveCoupons', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pkPlanID, planName, membershipFee, daysValidity, numberOfListing, accessBooking, addToWishgini, receiveCoupons, planAddedDate, planModifiedDate', 'safe', 'on'=>'search'),
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
			'pkPlanID' => 'Plan ID',
			'planName' => 'Plan Name',
			'membershipFee' => 'Membership Fee',
			'daysValidity' => 'Days Validity',
			'numberOfListing' => 'Number Of Listing',
			'accessBooking' => 'Access Booking',
			'addToWishgini' => 'Wishgini',
			'receiveCoupons' => 'Receive Coupons',
			'planAddedDate' => 'Plan Added Date',
			'planModifiedDate' => 'Plan Modified Date',
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

		$criteria->compare('pkPlanID',$this->pkPlanID);
		$criteria->compare('planName',$this->planName,true);
		$criteria->compare('membershipFee',$this->membershipFee);
		$criteria->compare('daysValidity',$this->daysValidity);
		$criteria->compare('numberOfListing',$this->numberOfListing);
		$criteria->compare('accessBooking',$this->accessBooking,true);
		$criteria->compare('addToWishgini',$this->addToWishgini,true);
		$criteria->compare('receiveCoupons',$this->receiveCoupons,true);
		$criteria->compare('planAddedDate',$this->planAddedDate,true);
		$criteria->compare('planModifiedDate',$this->planModifiedDate,true);

		return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                    'sort' => array(
                        'defaultOrder' => array(
                            'pkPlanID' => true,
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
	 * @return ProperyPartnerPlans the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
