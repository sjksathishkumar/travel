<?php

/**
 * This is the model class for table "tbl_state".
 *
 * @property integer $pkStateID
 * @property string $stateName
 * @property string $stateStatus
 * @property string $stateDateAdded
 * @property string $stateDateModified
 */
class State extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return TABLE_STATE;
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('stateName,fkCountryID,stateStatus', 'required'),
            array('stateName', 'length', 'max' => 255),
            array('stateName', 'unique','attributeName'=>'stateName','message'=>'State name already exist.'),
            array('pkStateID,stateName,fkCountryID,stateStatus, stateDateAdded, stateDateModified', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'country'=>array(self::BELONGS_TO, 'Country','fkCountryID'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'pkStateID' => 'Sr. No.',
            'stateName' => 'State Name',
            'fkCountryID' => 'Country Name',
            'stateStatus' =>'Status'
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
        $criteria->with = array('country');
        $criteria->compare('pkStateID', $this->pkStateID);
        $criteria->compare('stateName', $this->stateName, true);
        $criteria->compare('fkCountryID', $this->fkCountryID, true);

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
