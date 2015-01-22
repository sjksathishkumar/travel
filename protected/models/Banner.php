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
class Banner extends CActiveRecord
{

    /**
     * @return string the associated database table name
     */
    public $bannerdateAddedStart;
    public $bannerdateAddedEnds;
    public $bannerdateSearch;

    public function tableName()
    {
        return TABLE_BANNERS;
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('bannerTitle, bannerAltTag, bannerOrder,fkCmsID, bannerStatus', 'required'),
            
            array('bannerImage', 'file', 'allowEmpty' => false, 'on' => 'add_banner, slider_banner_add, other_banner_add'),
            array('bannerImage', 'file', 'allowEmpty' => true, 'on' => 'update_banner, slider_banner_update,other_banner_update'),
            
            array('bannerImage', 'EImageValidator', 'types' => "gif, jpg, png,jpeg", 'maxSize' => (2 * 1024 * 1024), 'width' => 1600, 'height' => 445, 'allowEmpty' => true, 'on'=>'slider_banner_update,slider_banner_add'),
            array('bannerImage', 'EImageValidator', 'types' => "gif, jpg, png,jpeg", 'maxSize' => (2 * 1024 * 1024), 'width' => 711, 'height' => 216, 'allowEmpty' => true, 'on'=>'other_banner_update,other_banner_add'),
            
            array('bannerOrder', 'numerical', 'integerOnly' => true, 'min' => 0, 'message' => 'Banner Order must be nummeric'),
            array('bannerOrder', 'length', 'min' => 1, 'max' => 2),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('pkBannerID, bannerTitle, bannerImage, bannerAltTag,fkCmsID, bannerStatus, bannerDateAdded, bannerDateModified', 'safe', 'on' => 'search'),
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
            'pkBannerID' => 'Sr. No.',
            'bannerTitle' => 'Title',
            'bannerImage' => 'Banner Image',
            'bannerAltTag' => 'Alt Tag',
            'bannerStatus' => 'Status',
            'fkCmsID'=>'Page Name',
            'bannerDateAdded' => 'Date Added',
            'bannerDateModified' => 'Date Modified',
            'bannerdateAddedStart' => 'Date Added From',
            'bannerdateAddedEnds' => 'Date Added To',
            'bannerdateModifiedStart' => 'Date Modified From',
            'bannerdateModifiedEnds' => 'Date Modified To',
            'bannerdateSearch' => 'Select Date Added Range'
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

        //$criteria->compare('pkBannerID',$this->pkBannerID);
        $criteria->compare('bannerTitle', $this->bannerTitle, true);
        //$criteria->compare('bannerImage',$this->bannerImage,true);
        $criteria->compare('fkCmsID',$this->fkCmsID,true);
        $criteria->compare('bannerStatus', $this->bannerStatus, true);
        if ($this->bannerdateAddedStart != '')
        {//echo $this->bannerdateAddedStart;die;
            $criteria->addCondition("(date(bannerDateAdded) >='" . $this->bannerdateAddedStart . "')");
        }if ($this->bannerdateAddedEnds != '')
        {//echo '1';die;
            $criteria->addCondition("(date(bannerDateAdded) <='" . $this->bannerdateAddedEnds . "')");
        }
        //$criteria->compare('bannerDateAdded',$this->bannerDateAdded,true);
        //$criteria->compare('bannerDateModified',$this->bannerDateModified,true);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                    'sort' => array(
                        'defaultOrder' => array(
                            'bannerDateModified' => true,
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

    /*
    *  This function return the banner for a inner page by slug.
    */
    public function getPageBannerBySlug($slug = '')
    {
        $bannerDetails = array();
        if($slug){
            $bannerDetails = Yii::app()->db->createCommand()
                    ->select('B.bannerTitle,B.bannerImage,B.bannerAltTag')
                    ->from(TABLE_BANNERS.' B')
                    ->join(TABLE_CMS.' C','B.fkCmsID = C.pkCmsID')
                    ->where('C.cmsSlug=:cmsSlug AND B.bannerStatus=:bannerStatus', array(':cmsSlug'=>$slug,':bannerStatus'=>'1'))
                    ->queryRow();
        }
        return $bannerDetails;
    }

}
