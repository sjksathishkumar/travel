<?php

/**
 * This is the model class for table "tbl_email_templates".
 */
class EmailTemplate extends CActiveRecord
{

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return TABLE_EMAIL_TEMPLATES;
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        return array(
            array('emailTitle, emailFromName, emailFromEmail,emailSubject, emailContent', 'required'),
            array('emailFromEmail','email','message'=>'This is not a valid email address.'),
            array('pkEmailID, emailTitle, emailFromName, emailFromEmail,emailSubject, emailContent, emailDateAdded, emailDateUpdated', 'safe', 'on' => 'search'),
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
            'pkEmailID' => 'Sr. No.',
            'emailTitle' => 'Title',
            'emailFromName' => 'From Name',
            'emailFromEmail' => 'From Email',
            'emailSubject' => 'Subject',
            'emailContent'=>'Content',
            'emailDateAdded' => 'Date Added',
            'emailDateUpdated' => 'Date Modified',
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

        $criteria = new CDbCriteria;

        $criteria->compare('pkEmailID',$this->pkEmailID);
        $criteria->compare('emailTitle', $this->emailTitle, true);
        $criteria->compare('emailFromName',$this->emailFromName,true);
        $criteria->compare('emailFromEmail',$this->emailFromEmail,true);
        $criteria->compare('emailSubject',$this->emailSubject,true);
        $criteria->compare('emailContent',$this->emailContent,true);
        $criteria->compare('emailDateAdded',$this->emailDateAdded,true);
        $criteria->compare('emailDateUpdated',$this->emailDateUpdated,true);
        
        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                    'sort' => array(
                        'defaultOrder' => array(
                            'emailDateUpdated' => true,
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
     * @return Banner the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}
