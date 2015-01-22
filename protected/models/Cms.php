<?php

/**
 * This is the model class for table "tbl_cms".
 *
 * The followings are the available columns in table 'tbl_cms':
 * @property integer $pkCmsID
 * @property integer $cmsParentID
 * @property string $cmsDisplayTitle
 * @property string $cmsSlug
 * @property string $cmsContent
 * @property string $cmsMetaTitle
 * @property string $cmsMetaKeywords
 * @property string $cmsMetaDescription
 * @property string $cmsStatus
 * @property string $cmsDateAdded
 * @property string $cmsDateModified
 */
class Cms extends CActiveRecord
{

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return TABLE_CMS;
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('cmsDisplayTitle,cmsPageTitle, cmsSlug, cmsMetaTitle, cmsMetaKeywords, cmsMetaDescription, cmsStatus', 'required'),
            array('cmsDisplayTitle, cmsSlug, cmsMetaTitle', 'length', 'max' => 255),
            array('cmsStatus', 'length', 'max' => 1),
            array('cmsContent', 'required', 'on'=>'cms_update'),
            array('pkCmsID, cmsDisplayTitle,cmsPageTitle, cmsSlug, cmsContent, cmsMetaTitle, cmsMetaKeywords, cmsMetaDescription, cmsStatus, cmsDateAdded, cmsDateModified', 'safe'),
            array('pkCmsID, cmsDisplayTitle,cmsPageTitle, cmsSlug, cmsContent, cmsMetaTitle, cmsMetaKeywords, cmsMetaDescription, cmsStatus, cmsDateAdded, cmsDateModified', 'safe', 'on' => 'search searchOther'),
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
            'pkCmsID' => 'Sr. No.',
            'cmsDisplayTitle' => 'Display Title',
            'cmsPageTitle' => 'Page Title',
            'cmsSlug' => 'Slug',
            'cmsContent' => 'Content',
            'cmsMetaTitle' => 'Meta Title',
            'cmsMetaKeywords' => 'Meta Keywords',
            'cmsMetaDescription' => 'Meta Description',
            'cmsStatus' => 'Status',
            'cmsDateAdded' => 'Date Added',
            'cmsDateModified' => 'Date Modified',
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

        $criteria->compare('pkCmsID', $this->pkCmsID);
        $criteria->compare('cmsDisplayTitle', $this->cmsDisplayTitle, true);
        $criteria->compare('cmsSlug', $this->cmsSlug, true);
        $criteria->compare('cmsContent', $this->cmsContent, true);
        $criteria->compare('cmsMetaTitle', $this->cmsMetaTitle, true);
        $criteria->compare('cmsMetaKeywords', $this->cmsMetaKeywords, true);
        $criteria->compare('cmsMetaDescription', $this->cmsMetaDescription, true);
        $criteria->compare('cmsIsPage', '1', true);
        $criteria->compare('cmsStatus', $this->cmsStatus, true);
        $criteria->compare('cmsDateAdded', $this->cmsDateAdded, true);
        $criteria->compare('cmsDateModified', $this->cmsDateModified, true);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                    'sort' => array(
                        'defaultOrder' => array(
                            'cmsDateAdded' => true,
                        ),
                    ),
                    'pagination' => array(
                        'pageSize' => UtilityHtml::pageSettings(),
                    ),
                ));
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
    public function searchOther()
    {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('pkCmsID', $this->pkCmsID);
        $criteria->compare('cmsDisplayTitle', $this->cmsDisplayTitle, true);
        $criteria->compare('cmsSlug', $this->cmsSlug, true);
        $criteria->compare('cmsContent', $this->cmsContent, true);
        $criteria->compare('cmsMetaTitle', $this->cmsMetaTitle, true);
        $criteria->compare('cmsMetaKeywords', $this->cmsMetaKeywords, true);
        $criteria->compare('cmsMetaDescription', $this->cmsMetaDescription, true);
        $criteria->compare('cmsIsPage', '0', true);
        $criteria->compare('cmsStatus', $this->cmsStatus, true);
        $criteria->compare('cmsDateAdded', $this->cmsDateAdded, true);
        $criteria->compare('cmsDateModified', $this->cmsDateModified, true);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                    'sort' => array(
                        'defaultOrder' => array(
                            'cmsDateAdded' => true,
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
     * @return Cms the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }


    /*
    * This function return the CMS page deatils based on the slug.
    */
    public function getCmsContentBySlug($slug='')
    {
        $cmsPageDetails = array();
        if($slug){
            $cmsPageDetails = Yii::app()->db->createCommand()
                    ->select('cmsDisplayTitle,cmsPageTitle,cmsContent,cmsMetaTitle,cmsMetaKeywords,cmsMetaDescription')
                    ->from(TABLE_CMS)
                    ->where('cmsSlug=:cmsSlug AND cmsStatus=:cmsStatus', array(':cmsSlug'=>$slug,':cmsStatus'=>'1'))
                    ->queryRow();
        }
        return $cmsPageDetails;
    }

}
