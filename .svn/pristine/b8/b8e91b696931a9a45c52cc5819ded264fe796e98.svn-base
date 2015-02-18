<?php
/**
 * This is the model class for table "admin_reset_password_tokens".
 */
class ResetPassword extends CActiveRecord
{
	public $adminTable;		// relation with loginform model table name "admins"
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return TABLE_RESET_PASSWORD;
	}
	
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
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
			'resetPass'=>array(self::BELONGS_TO, 'User', 'fkUserID', 'joinType'=>'INNER JOIN'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pkAdminRPTokenID' => 'ID',
			'fkUserID' => 'User ID',
			'passResetToken' => 'Token Number',
			'passResetCreated' => 'Token Created On',
			'passResetExpires' => 'Token Expires On',
			'passResetStatus' => 'Token Status',
			'passResetDateAdded' => 'Token Date Added',
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Admin the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
?>
