<?php

/**
 * This is the model class for table "tbl_banners".
 *
 * The followings are the available columns in table 'tbl_banners':
 * @property integer $pkBannerID
 * @property string $bannerTitle
 * @property string $bannerTagLine
 * @property string $bannerImage
 * @property string $bannerAltTag
 * @property interger $bannerOrder
 * @property string $bannerStatus
 * @property string $bannerDateAdded
 * @property string $bannerDateModified
 */
class DealsImages extends CActiveRecord
{
	public function tableName()
	{
		return  TABLE_DEALS_IMAGES;
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dealImagePath,fkDealID,dealImageAlt', 'required'),
			array('dealImagePath,fkDealID,dealImageAlt', 'safe'),
			array('dealImagePath','file','allowEmpty'=>false,'on'=>'add_dealImages'),
			array('dealImagePath','file','allowEmpty'=>true,'on'=>'update_dealImages'),
			array('dealImagePath','EImageValidator','types' => "gif, jpg, png,jpeg",'maxSize' => (2*1024*1024),'width' => 285, 'height' => 280,'allowEmpty' => true),
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
			'dealImageAlt' => 'Deal Alt Tag',
			'dealImagePath' => 'Deal Image',
			'fkDealID' => 'Deal ID',
			'dealImageAddDate' => 'Date Added',
			'dealImageModifyDate' => 'Date Modified',
		);
	}

	
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Banner the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
