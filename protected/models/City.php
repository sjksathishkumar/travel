<?php

/**
 * This is the model class for table "tbl_categories".
 *
 * @property integer $pkCategoryID
 * @property integer $fkParentCategoryID
 * @property string $categoryName
 * @property string $categoryDescription
 * @property string $categoryStatus
 * @property string $categoryDateAdded
 * @property string $categoryDateModified
 */
class City extends CActiveRecord {

    public $cityName;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return TABLE_CITIES;
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('cityName,cityStatus,fkStateID', 'required'),
            array('cityName', 'length', 'max' => 255),
            array('cityName', 'unique','message'=>'City name already exist'),
            array('pkCityID,cityName,fkStateID,cityStatus, cityDateAdded, cityDateModified', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'state'=>array(self::BELONGS_TO, 'State','fkStateID'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'pkCityID' => 'Sr. No.',
            'cityName' => 'City Name',
            'fkStateID' => 'State Name',
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
        $criteria->with = array('state');
        $criteria->compare('pkCityID', $this->pkCityID);
        $criteria->compare('cityName', $this->cityName, true);
        $criteria->compare('fkStateID', $this->fkStateID, true);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    /** get cities by state id * */
    public function getCities() {
        $cities = Yii::app()->db->createCommand()
                ->select('*')
                ->from(TABLE_CITIES)
                ->order('pkCityID')
                ->where('cityStatus = :cityStatus', array(':cityStatus' => '1'))
                ->queryAll();

        return $cities;
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
