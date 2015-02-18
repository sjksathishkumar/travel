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
class Configurations extends CActiveRecord
{

    /**
     * @return string the associated database table name
     */
    public $bannerdateAddedStart;
    public $bannerdateAddedEnds;
    public $bannerdateSearch;

    public function tableName()
    {
        return TABLE_CONFIGURATIONS;
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('configurationContact,configurationEmail,configurationSocialLink1,configurationSocialLink2,configurationSocialLink3,configurationSocialLink4,configurationPageLimit,configurationDateModified,logoAltTag,logoImage', 'safe'),
            array('configurationContact,configurationEmail,configurationSocialLink1,configurationSocialLink2,configurationSocialLink3,configurationSocialLink4,configurationPageLimit,configurationDateModified,logoAltTag', 'required'),
            array('logoImage', 'file', 'allowEmpty' => true, 'on' => 'update_logo'),
            array('logoImage', 'EImageValidator', 'types' => "gif, jpg, png,jpeg", 'maxSize' => (2 * 1024 * 1024), 'width' => 117, 'height' => 138, 'allowEmpty' => true, 'on'=>'update_logo'),
            array('configurationEmail', 'email','message'=>"The email isn't correct"),
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
            'pkConfigurationID' => 'Sr. No.',
            'configurationContact' => 'Contact Number',
            'configurationEmail' => 'Email Address',
            'configurationSocialLink1' => 'Facebook Link',
            'configurationSocialLink2' => 'Twitter Link',
            'configurationSocialLink3' => 'Google+ Link',
            'configurationSocialLink4' => 'Youtube Link',
            'configurationPageLimit' => 'Admin Record Limit',
            'logoImage' => 'Logo Image',
            'logoAltTag' => 'Logo Alt Tag',
        );
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

    /*
     * This function returns the social media links
     */

    public function getSocialMediaLinks()
    {
        $configurationDetails = Yii::app()->db->createCommand()
                ->select('c.*')
                ->from($this->tableName() . ' c')
                ->queryRow();
        return $configurationDetails;
    }

}
