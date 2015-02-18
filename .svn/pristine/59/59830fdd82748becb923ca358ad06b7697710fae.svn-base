<?php

/**
 * This is the model class for table "tbl_order_item".
 */
class OrderItem extends CActiveRecord {

    public $totalPrice = 0;
    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return TABLE_ORDER_ITEM;
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('fkOrderID,fkDealID,orderItemName,orderItemPrice,orderItemQuantity,orderItemTotalPrice,orderItemStatus,orderItemDateAdded', 'required','on'=>'addOrderItem'),
            array('fkOrderID,fkDealID,orderItemName,orderItemPrice,orderItemQuantity,orderItemTotalPrice,orderItemStatus,orderItemDateAdded', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'order'=>array(self::BELONGS_TO, 'Order','fkOrderID'),
            'deal'=>array(self::BELONGS_TO, 'Deals','fkDealID'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'fkOrderID'=>'Order ID',
            'fkDealID' => 'Deal ID',
            'orderItemName' =>'Deal Name',
            'orderItemPrice'=>'Price',
            'orderItemQuantity'=>'Quantity',
            'orderItemTotalPrice'=>'Total Price',
            'orderItemStatus'=>'Status',
            'orderItemDateAdded' =>'Date Added',
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
        $criteria->with = array('order','deal');
        $criteria->compare('pkOrderItemID', $this->pkOrderItemID);
        $criteria->compare('fkDealID', $this->fkDealID, true);
        $criteria->compare('fkOrderID', $this->fkOrderID, true);
        $criteria->compare('orderItemName', $this->orderItemName, true);
        $criteria->compare('orderItemPrice', $this->orderItemPrice, true);
        $criteria->compare('orderItemQuantity', $this->orderItemQuantity, true);
        $criteria->compare('orderItemTotalPrice', $this->orderItemTotalPrice, true);
        $criteria->compare('orderItemStatus', $this->orderItemStatus, true);
        
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

}
