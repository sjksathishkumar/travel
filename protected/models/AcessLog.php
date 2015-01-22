<?php

/**
 * This is the model class for table "tbl_admin_access_log".
 *
 * The followings are the available columns in table 'tbl_admin_access_log':
 * @property integer $pkAdminAccessID
 * @property integer $fkAdminID
 * @property string $adminAccessLoginIP
 * @property string $adminAccessLoginTime
 * @property string $adminAccessLogoutTime
 *
 * The followings are the available model relations:
 * @property TblUsers $fkAdmin
 */
class AcessLog extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return TABLE_ADMN_ACCESS_LOG;
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('fkAdminID, adminAccessLoginIP, adminAccessLoginTime, adminAccessLogoutTime', 'required'),			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pkAdminAccessID, fkAdminID, adminAccessLoginIP, adminAccessLoginTime, adminAccessLogoutTime', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'Users', 'fkAdminID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pkAdminAccessID' => 'Pk Admin Access',
			'fkAdminID' => 'Fk Admin',
			'adminAccessLoginIP' => 'Admin Access Login Ip',
			'adminAccessLoginTime' => 'Admin Access Login Time',
			'adminAccessLogoutTime' => 'Admin Access Logout Time',
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

		$criteria->compare('pkAdminAccessID',$this->pkAdminAccessID);
		$criteria->compare('fkAdminID',$this->fkAdminID);
		$criteria->compare('adminAccessLoginIP',$this->adminAccessLoginIP,true);
		$criteria->compare('adminAccessLoginTime',$this->adminAccessLoginTime,true);
		$criteria->compare('adminAccessLogoutTime',$this->adminAccessLogoutTime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AcessLog the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
