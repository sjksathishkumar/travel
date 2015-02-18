<?php

/**
 * This is the model class for table "tbl_coupons".
 *
 * @property integer $pkCouponID
 * @property string $couponName
 * @property string $couponCode
 * @property enum $couponType
 * @property decimal $couponDiscountVariable
 * @property integer $couponStartDate
 * @property integer $couponEndDate
 * @property enum $couponStatus
 * @property integer $couponAddDate
 * @property integer $couponModifyDate
 */
class Coupons extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return TABLE_COUPONS;
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('couponName,couponCode,couponType,couponDiscountVariable,couponMinimumPurchaseAmount,couponStartDate,couponEndDate,couponStatus', 'required'),
            array('couponEndDate','compare','compareAttribute'=>'couponStartDate','operator'=>'>','message'=>'Start Date must be less than End Date'),
            array('couponName,couponCode,couponType,couponDiscountVariable,couponMinimumPurchaseAmount,couponStartDate,couponEndDate,couponStatus,couponAddDate,couponModifyDate', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'pkCouponID'=>'Sr. No.',
            'couponName'=>'Coupon Name',
            'couponCode'=>'Coupon Code',
            'couponType'=>'Coupon Type',
            'couponDiscountVariable'=>'Discount Variable',
            'couponMinimumPurchaseAmount'=>'Minimum Purchase Amount',
            'couponStartDate'=>'Start Date',
            'couponEndDate'=>'End Date',
            'couponStatus'=>'Status',
            'couponAddDate'=>'Date Added',
            'couponModifyDate'=>'Date Modified'
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
        $criteria->compare('pkCouponID', $this->pkCouponID);
        $criteria->compare('couponName', $this->couponName, true);
        $criteria->compare('couponCode', $this->couponCode, true);
        $criteria->compare('couponType', $this->couponType, true);
        $criteria->compare('couponDiscountVariable', $this->couponDiscountVariable, true);
        $criteria->compare('couponMinimumPurchaseAmount',$this->couponMinimumPurchaseAmount,true);
        $criteria->compare('couponStatus', $this->couponStatus, true);
        if(!empty($this->couponStartDate) && !empty($this->couponEndDate))
        {
            $criteria->condition = ':s<=date(couponStartDate) AND date(couponEndDate)<=:e';
            $criteria->params=array(':s'=>date('Y-m-d',strtotime($this->couponStartDate)),':e'=>date('Y-m-d',strtotime($this->couponEndDate)));
        }else if(!empty($this->couponStartDate)){
            $criteria->condition = ':s<=date(couponStartDate)';
            $criteria->params=array(':s'=>date('Y-m-d',strtotime($this->couponStartDate)));
        }else if(!empty($this->couponEndDate)){
            $criteria->condition = 'date(couponEndDate)<=:e';
            $criteria->params=array(':e'=>date('Y-m-d',strtotime($this->couponEndDate)));
        }

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                    'sort' => array(
                        'defaultOrder' => array(
                            'couponModifyDate' => true,
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
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function getCouponCode($couponCode = '')
    {
        $data = array();
        if($couponCode){
            $couponData = $this->findAll(array("condition"=>"couponCode=:couponCode AND couponStatus=:status AND date(couponStartDate) <= :today AND date(couponEndDate) >= :today",
                                                            "params"=>array('couponCode'=>$couponCode,'status'=>'1','today'=>date('Y-m-d'))));
            if(count($couponData)){
                $data = $couponData;    
            }
        }   
        return $data;
    }

}
