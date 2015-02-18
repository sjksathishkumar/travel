<?php

/**
 * This is the model class for table "tbl_order".
 */
class Order extends CActiveRecord {

    public $billingStateOptions="";
    public $billingCityOptions="";
    public $shippingStateOptions="";
    public $shippingCityOptions="";
    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return TABLE_ORDER;
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('fkCustomerID,orderCustomerFirstName,orderCustomerLastName,orderCustomerEmail,orderCustomerPhone,orderBillingAddress1,orderBillingAddress2,orderBillingCountry,orderBillingState,orderBillingCity,orderBillingZipcode,orderBillingPhone,orderShippingAddress1,orderShippingAddress2,orderShippingCountry,orderShippingState,orderShippingCity,orderShippingZipcode,orderShippingPhone,orderStatus,orderDateAdded,orderDateUpdated', 'required','on'=>'addOrder'),
            array('orderBillingAddress1,orderBillingAddress2,orderBillingCountry,orderBillingState,orderBillingCity,orderBillingZipcode,orderBillingPhone','required','on'=>'ajaxEditBilling'),
            array('orderShippingAddress1,orderShippingAddress2,orderShippingCountry,orderShippingState,orderShippingCity,orderShippingZipcode,orderShippingPhone','required','on'=>'ajaxEditShipping'),
            array('fkCustomerID,orderCustomerFirstName,orderCustomerLastName,orderCustomerEmail,orderCustomerPhone,orderBillingAddress1,orderBillingAddress2,orderBillingCountry,orderBillingState,orderBillingCity,orderBillingZipcode,orderBillingPhone,orderShippingAddress1,orderShippingAddress2,orderShippingCountry,orderShippingState,orderShippingCity,orderShippingZipcode,orderShippingPhone,orderStatus,orderDateAdded,orderDateUpdated,orderCustomerComment', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'customer'=>array(self::BELONGS_TO, 'Users','fkCustomerID'),
            'billingCountry'=>array(self::BELONGS_TO, 'Country','orderBillingCountry'),
            'billingState'=>array(self::BELONGS_TO, 'State','orderBillingState'),
            'billingCity'=>array(self::BELONGS_TO, 'City','orderBillingCity'),
            'shippingCountry'=>array(self::BELONGS_TO, 'Country','orderShippingCountry'),
            'shippingState'=>array(self::BELONGS_TO, 'State','orderShippingState'),
            'shippingCity'=>array(self::BELONGS_TO, 'City','orderShippingCity'),
            'orderItem' => array(self::HAS_MANY,'OrderItem','fkOrderID'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'pkOrderID'=>'Order ID',
            'fkCustomerID'=>'Customer ID',
            'orderCustomerFirstName' => 'Customer First Name',
            'orderCustomerLastName' =>'Customer Last Name',
            'orderCustomerEmail'=>'Customer Email Address',
            'orderCustomerPhone'=>'Customer Phone',
            'orderBillingAddress1'=>'Billing Address1',
            'orderBillingAddress2'=>'Billing Address2',
            'orderBillingCountry' =>'Billing Country',
            'orderBillingState'=>'Billing State',
            'orderBillingCity'=>'Billing City',
            'orderBillingZipcode'=>'Billing Zipcode',
            'orderBillingPhone'=>'Billing Phone',
            'orderShippingAddress1'=>'Shipping Address1',
            'orderShippingAddress2'=>'Shipping Address2',
            'orderShippingCountry'=>'Shipping Country',
            'orderShippingState'=>'Shipping State',
            'orderShippingCity'=>'Shipping City',
            'orderShippingZipcode'=>'Shipping Zipcode',
            'orderShippingPhone'=>'Shipping Phone',
            'orderCustomerComment'=>'Customer Comment',
            'orderStatus'=>'Order Status',
            'orderDateAdded'=>'Date Added',
            'orderDateUpdated'=>'Order Date Updated'
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;
        $criteria->with = array('billingCountry','billingState','billingCity','shippingCountry','shippingState',
                                'shippingCity',
                                'customer',
                                'orderItem'=>array('select'=>'sum(orderItemTotalPrice) AS totalPrice','group' => 'pkOrderID'));
        $criteria->compare('pkOrderID', $this->pkOrderID);
        $criteria->compare('fkCustomerID', $this->fkCustomerID, true);
        $criteria->compare('orderCustomerFirstName', $this->orderCustomerFirstName, true);
        $criteria->compare('orderCustomerLastName', $this->orderCustomerLastName, true);
        $criteria->compare('orderCustomerEmail', $this->orderCustomerEmail, true);
        $criteria->compare('orderCustomerPhone', $this->orderCustomerPhone, true);
        $criteria->compare('orderBillingAddress1', $this->orderBillingAddress1, true);
        $criteria->compare('orderBillingAddress2', $this->orderBillingAddress2, true);
        $criteria->compare('orderBillingCountry', $this->orderBillingCountry, true);
        $criteria->compare('orderBillingState', $this->orderBillingState, true);
        $criteria->compare('orderBillingCity', $this->orderBillingCity, true);
        $criteria->compare('orderBillingZipcode', $this->orderBillingZipcode, true);
        $criteria->compare('orderBillingPhone', $this->orderBillingPhone, true);
        $criteria->compare('orderShippingAddress1', $this->orderShippingAddress1, true);
        $criteria->compare('orderShippingAddress2', $this->orderShippingAddress2, true);
        $criteria->compare('orderShippingCountry', $this->orderShippingCountry, true);
        $criteria->compare('orderShippingState', $this->orderShippingState, true);
        $criteria->compare('orderShippingCity', $this->orderShippingCity, true);
        $criteria->compare('orderShippingZipcode', $this->orderShippingZipcode, true);
        $criteria->compare('orderShippingPhone', $this->orderShippingPhone, true);
        //$criteria->compare('orderDateAdded', $this->orderDateAdded, true);
        $criteria->compare('orderDateUpdated', $this->orderDateUpdated, true);
        $criteria->compare('orderStatus', $this->orderStatus, true);
        $criteria->mergeWith($this->dateRangeSearchCriteria('date(orderDateAdded)', $this->orderDateAdded)); 
        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Cms the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * Model behaviors
     */
    public function behaviors()
    {
        return array(
            'dateRangeSearch'=>array(
                'class'=>'application.components.behaviors.EDateRangeSearchBehavior',
            ),
        );
    }

}
