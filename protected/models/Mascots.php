<?php

/**
 * This is the model class for table "tbl_mascots".
 *
 * The followings are the available columns in table 'tbl_mascots':
 * @property integer $mascotID
 * @property string $mascotName
 * @property string $mascotAltTag
 * @property string $mascotStatus
 * @property string $mascotDateAdded
 * @property string $mascotDateModified
 */
class Mascots extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return TABLE_MASCOTS;
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('mascotName, mascotAltTag, mascotStatus, mascotDateAdded, mascotDateModified', 'required'),
			array('mascotImage', 'file', 'allowEmpty' => true, 'on' => 'add_mascot, update_mascot '),
			array('mascotImage', 'EImageValidator', 'types' => "gif, jpg, png,jpeg", 'maxSize' => (2 * 1024 * 1024), 'width' => 163, 'height' => 163, 'allowEmpty' => true, 'on'=>'update_mascot'),
			array('mascotImage', 'EImageValidator', 'types' => "gif, jpg, png,jpeg", 'maxSize' => (2 * 1024 * 1024), 'width' => 195, 'height' => 195, 'allowEmpty' => true, 'on'=>'update_mascot_wishgini'),
			array('mascotName, mascotAltTag', 'length', 'max'=>250),
			array('mascotStatus', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('mascotID, mascotName, mascotImage, mascotAltTag, mascotStatus, mascotDateAdded, mascotDateModified', 'safe', 'on'=>'search'),
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
			'mascotID' => 'Mascot ID',
			'mascotName' => 'Mascot Name',
			'mascotImage' => 'Mascot Image',
			'mascotAltTag' => 'Mascot Alt Tag',
			'mascotStatus' => 'Mascot Status',
			'mascotDateAdded' => 'Mascot Date Added',
			'mascotDateModified' => 'Mascot Date Modified',
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

		$criteria->compare('mascotID',$this->mascotID);
		$criteria->compare('mascotName',$this->mascotName,true);
		$criteria->compare('mascotAltTag',$this->mascotAltTag,true);
		$criteria->compare('mascotStatus',$this->mascotStatus,true);
		$criteria->compare('mascotDateAdded',$this->mascotDateAdded,true);
		$criteria->compare('mascotDateModified',$this->mascotDateModified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mascots the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
