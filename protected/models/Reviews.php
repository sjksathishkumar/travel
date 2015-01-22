<?php

/**
 * This is the model class for table "tbl_reviews".
 *
 * @property integer $pkReviewID
 * @property integer $fkDealID
 * @property string $fkUserID
 * @property string $reviewContent
 * @property string $reviewStatus
 * @property string $reviewAddDate
 * @property string $reviewActionDate
 */
class Reviews extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return TABLE_REVIEWS;
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('fkDealID,fkUserID,nickname,reviewSubject,reviewContent,reviewStatus', 'required'),
            array('pkReviewID,fkDealID,fkUserID,reviewContent,reviewStatus', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'user'=>array(self::BELONGS_TO,'Users','fkUserID'),
            'deal'=>array(self::BELONGS_TO,'Deals','fkDealID'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'pkReviewID' => 'Sr. No.',
            'fkDealID' => 'Deal Name',
            'fkUserID' => 'Customer Email',
            'nickname' => 'Nick Name',
            'reviewContent' => 'Review',
            'reviewStatus' => 'Status',
            'reviewAddDate' => 'Review Add Date',
            'reviewActionDate' => 'Review Action Date',
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
        $criteria->with = array('deal','user');
        $criteria->compare('pkReviewID', $this->pkReviewID);
        $criteria->compare('fkDealID', $this->fkDealID, true);
        $criteria->compare('t.fkUserID', $this->fkUserID, true);
        $criteria->compare('reviewContent', $this->reviewContent, true);
        $criteria->compare('reviewStatus', $this->reviewStatus, true);
        $criteria->compare('reviewAddDate', $this->reviewAddDate, true);
        $criteria->compare('reviewActionDate', $this->reviewActionDate, true);

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

    /*
    * This method is used to get reviews count to a given deal
    */
    public function getReviewByDealIDCount($dealID = 0)
    {
        $reviewsCount = 0;
        $criteria = new CDbCriteria();
        $criteria->select = array('t.pkReviewID');
        $criteria->condition = "t.fkDealID='".$dealID."' AND t.reviewStatus = '1'";
        $resultReviews = $this->findAll($criteria);
        $reviewsCount = count($resultReviews);
        
        return $reviewsCount;
    }
    /*
    * This method is used to get reviews to a given deal
    */
    public function getReviewByDealID($dealID = 0,$offset=0,$limit=2)
    {
        $resultReviews = array();
        $criteria = new CDbCriteria();
        $criteria->select = array('t.nickname','t.reviewSubject','t.reviewContent');
        $criteria->condition = "t.fkDealID='".$dealID."' AND t.reviewStatus = '1'";
        $criteria->order = "t.reviewActionDate DESC";
        $criteria->offset = $offset;
        $criteria->limit = $limit;
        $resultReviews = $this->findAll($criteria);

        return $resultReviews;
    }

}
