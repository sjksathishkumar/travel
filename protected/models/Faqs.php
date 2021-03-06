<?php
/**
 * This is the model class for table "tbl_faqs".
 *
 * The followings are the available columns in table 'tbl_faqs':
 * @property integer $pkFaqID
 * @property string $faqQuestion
 * @property string $faqAnswer
 * @property integer $faqDisplayOrder
 * @property integer $fkCategoryID
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
		return TABLE_FAQS;
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('faqQuestion, faqAnswer, faqDisplayOrder, fkCategoryID, faqDateAdded', 'required', 'on'=>'add_faq' ),
			array('faqQuestion, faqAnswer, faqDisplayOrder, fkCategoryID', 'required', 'on'=>'update_faq' ),
			array('faqDisplayOrder, fkCategoryID', 'numerical', 'integerOnly'=>true),
			array('faqStatus', 'length', 'max'=>1),
			array('faqAttachment', 'file', 'allowEmpty' => true, 'on' => 'add_faq,update_faq'),
			array('faqAttachment', 'EImageValidator', 'types' => "gif, jpg, png,jpeg, pdf, doc, docx, txt",'allowEmpty' => true, 'on'=>'add_faq,update_faq'),
			array('faqDisplayOrder', 'unique','attributeName' => 'faqDisplayOrder','message'=>'Dispaly Order already in Use !'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pkFaqID, faqQuestion, faqAnswer, faqDisplayOrder, fkCategoryID, faqStatus, faqAttachment, faqHelpTopics, faqDateAdded, faqDateModified', 'safe', 'on'=>'search'),
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
			'faqQuestion' => 'Question',
			'faqAnswer' => 'Answer',
			'faqDisplayOrder' => 'Display Order',
			'fkCategoryID' => 'Category',
			'faqStatus' => 'Status',
			'faqAttachment' => 'Attachment',
			'faqHelpTopics' => 'Help Topics',
			'faqDateAdded' => 'Added',
			'faqDateModified' => 'Modified',
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
		$criteria->compare('fkCategoryID',$this->fkCategoryID);
		$criteria->compare('faqAttachment',$this->faqAttachment);
		$criteria->compare('faqHelpTopics',$this->faqHelpTopics);
		$criteria->compare('faqStatus',$this->faqStatus,true);
		$criteria->compare('faqDateAdded',$this->faqDateAdded,true);
		$criteria->compare('faqDateModified',$this->faqDateModified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort' => array(
			    'defaultOrder' => array(
			        'faqDisplayOrder' => true,
			    ),
			),
			'pagination' => array(
			    'pageSize' => UtilityHtml::pageSettings(),
			),
		));
	}


	/* It is used to perform search for fontend page */

	public function frontSearch()
	{
		
		$criteria=new CDbCriteria;

		$criteria->compare('pkFaqID',$this->pkFaqID);
		$criteria->compare('faqQuestion',$this->faqQuestion,true);
		$criteria->compare('faqAnswer',$this->faqAnswer,true);
		$criteria->compare('faqDisplayOrder',$this->faqDisplayOrder);
		$criteria->compare('fkCategoryID',$this->fkCategoryID);
		$criteria->compare('faqAttachment',$this->faqAttachment);
		$criteria->compare('faqHelpTopics',$this->faqHelpTopics);
		$criteria->compare('faqStatus',$this->faqStatus,true);
		$criteria->compare('faqDateAdded',$this->faqDateAdded,true);
		$criteria->compare('faqDateModified',$this->faqDateModified,true);
	    return $data = self::model()->findAll($criteria);

		
		
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

	public function getAllFaq()
	{
		$criteria=new CDbCriteria();
    	$criteria->condition = 'faqStatus = :status';
    	$criteria->order = 'faqDisplayOrder ASC';
    	$criteria->params = array('status' => '1');
	    $count=Faqs::model()->count($criteria);
	    $pages=new CPagination($count);

	    // results per page
	    $pages->pageSize=2;
	    $pages->applyLimit($criteria);
	    $models=Faqs::model()->findAll($criteria);

	    return $data($this, array(
	    	'pages' => $pages,
	    	'models' => $models,
	    	)); 


	}


}
