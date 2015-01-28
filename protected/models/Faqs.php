<?php

/**
 * This is the model class for table "tbl_faqs".
 *
 * The followings are the available columns in table 'tbl_faqs':
 * @property integer $pkFaqID
 * @property string $faqQuestion
 * @property string $faqAnswer
 * @property integer $faqDisplayOrder
 * @property integer $fkTopicID
 * @property string $faqStatus
 * @property string $faqDateAdded
 * @property string $faqDateModified
 */
class Faqs extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_faqs';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('faqQuestion, faqAnswer, faqDisplayOrder, fkTopicID, faqStatus, faqDateAdded, faqDateModified', 'required'),
			array('faqDisplayOrder, fkTopicID', 'numerical', 'integerOnly'=>true),
			array('faqStatus', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pkFaqID, faqQuestion, faqAnswer, faqDisplayOrder, fkTopicID, faqStatus, faqDateAdded, faqDateModified', 'safe', 'on'=>'search'),
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
			'pkFaqID' => 'Pk Faq',
			'faqQuestion' => 'Faq Question',
			'faqAnswer' => 'Faq Answer',
			'faqDisplayOrder' => 'Faq Display Order',
			'fkTopicID' => 'Fk Topic',
			'faqStatus' => 'Faq Status',
			'faqDateAdded' => 'Faq Date Added',
			'faqDateModified' => 'Faq Date Modified',
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

		$criteria->compare('pkFaqID',$this->pkFaqID);
		$criteria->compare('faqQuestion',$this->faqQuestion,true);
		$criteria->compare('faqAnswer',$this->faqAnswer,true);
		$criteria->compare('faqDisplayOrder',$this->faqDisplayOrder);
		$criteria->compare('fkTopicID',$this->fkTopicID);
		$criteria->compare('faqStatus',$this->faqStatus,true);
		$criteria->compare('faqDateAdded',$this->faqDateAdded,true);
		$criteria->compare('faqDateModified',$this->faqDateModified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Faqs the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
