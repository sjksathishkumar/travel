<?php

/**
 * This is the model class for table "tbl_categories".
 *
 * @property integer $pkCategoryID
 * @property integer $fkParentCategoryID
 * @property string $categoryName
 * @property string $categoryDescription
 * @property string $categoryStatus
 * @property string $categoryDateAdded
 * @property string $categoryDateModified
 */
class Category extends CActiveRecord
{

    public $categoryOption = array();
    public $parentName;

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return TABLE_CATEGORIES;
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('fkParentCategoryID,categoryName,categoryDescription,categoryStatus,categorySlug', 'required'),
            array('categoryName', 'length', 'max' => 255),
            array('categoryName','unique', 'message'=>'This category name already exists.'),
            array('categoryStatus', 'length', 'max' => 1),
            array('categoryImage', 'file', 'allowEmpty' => false, 'on' => 'add_category'),
            array('categoryImage', 'file', 'allowEmpty' => true, 'on' => 'update_category'),
            array('categoryImage', 'EImageValidator', 'types' => "gif, jpg, png,jpeg", 'maxSize' => (2 * 1024 * 1024),'width'=>18,'height'=>18, 'allowEmpty' => true),
            array('pkCategoryID, fkParentCategoryID,categoryName,categoryImage,categoryDescription, categoryStatus,categorySlug, categoryDateAdded, categoryDateModified, parentName', 'safe', 'on' => 'search'),
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
            //'parent_category'=>array(self::HAS_ONE)
            'selfRelation' => array(self::BELONGS_TO, 'Category', 'fkParentCategoryID'),
                /* 'parent_category'=>array('alias'=>'t2','join'=>'LEFT JOIN `Category` `Category` ON (`Category`.`fkParentCategoryID`=`t`.`pkCategoryID`) ') */
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'pkCategoryID' => 'Sr. No.',
            'fkParentCategoryID' => 'Parent Category',
            'categoryName' => 'Category Name',
            'categoryImage' => 'Category Image',
            'categoryHierarchy' => 'Category Hierarchy',
            'categoryLevel' => 'Category Level',
            'categoryDescription' => 'Description',
            'categoryStatus' => 'Status',
            'categoryDateAdded' => 'Date Added',
            'categoryDateModified' => 'Date Modified',
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
        /* $criteria->with = array('selfRelation'  =>  array(
          'select'  =>  't2.categoryName as parentName',
          'joinType'  =>  'LEFT JOIN',
          'alias' => 't2'
          )); */
        $criteria->compare('pkCategoryID', $this->pkCategoryID);
        $criteria->compare('categoryName', $this->categoryName, true);
        $criteria->compare('categorySlug', $this->categorySlug, true);
        $criteria->compare('fkParentCategoryID', $this->fkParentCategoryID, true);
        $criteria->compare('categoryDescription', $this->categoryDescription, true);
        $criteria->compare('categoryStatus', $this->categoryStatus, true);
        $criteria->compare('categoryDateAdded', $this->categoryDateAdded, true);
        $criteria->compare('categoryDateModified', $this->categoryDateModified, true);
        $criteria->compare('categoryStatus', array('1', '0'), true);
        //$criteria->compare('parentName', $this->selfRelation->parentName, true);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                    'sort' => array(
                        'defaultOrder' => array(
                            'categoryDateModified' => true,
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

    public static function categoryNameFromId($id)
    {
        if (Category::model()->findByPk($id))
        {
            $catName = Category::model()->findByPk($id)->categoryName;
        }
        else
        {
            $catName = "N/A";
        }
        return $catName;
    }

    public static function updateStatus($value, $toStatus)
    {
        $categoryTable = Category::model()->tableName();
        if ($toStatus == '1')
        {
            $hirarchy = Yii::app()->db->createCommand('select categoryHierarchy from `' . $categoryTable . '` as tc where tc.pkCategoryID="' . $value . '"')->queryAll();
            $ids = trim($hirarchy[0]['categoryHierarchy'], ',');
            if ($ids)
            {
                Yii::app()->db->createCommand('Update `' . $categoryTable . '` set categoryStatus="' . $toStatus . '" Where pkCategoryID IN (' . $ids . ') AND categoryStatus="0"')->execute();
            }
        }
        elseif ($toStatus == '0')
        {
            Yii::app()->db->createCommand('Update `' . $categoryTable . '` set categoryStatus="' . $toStatus . '" Where find_in_set(' . $value . ',categoryHierarchy)  AND categoryStatus="1"')->execute();
        }
        elseif ($toStatus == '2')
        {
            Yii::app()->db->createCommand('Update `' . $categoryTable . '` set categoryStatus="' . $toStatus . '" Where find_in_set(' . $value . ',categoryHierarchy)')->execute();
        }
    }

    public static function getAllCategories($id = 0)
    {
        $arrResult = array();
        $criteria = new CDbCriteria;
        if ($id)
        {
            $criteria->condition = 'categoryStatus != "2" AND pkCategoryID !="' . $id . '"  AND categoryLevel="0"';
        }
        else
        {
            $criteria->condition = 'categoryStatus != "2" AND categoryLevel="0"';
        }
        $criteria->order = 'categoryHierarchy ASC';
        $arrData = Category::model()->findAll($criteria);
        foreach ($arrData as $value)
        {
            $level = "";
            for ($i = 0; $i < $value['categoryLevel']; $i++)
            {
                if ($i == 0)
                {
                    $level .= "";
                }
                else
                {
                    $level .= "...";
                }
            }
            $arrResult[$value['pkCategoryID']] = $level . $value['categoryName'];
        }
        return $arrResult;
    }

    public function getSubcategoryDropDown()
    {
        $options = "";
        $resultArr = Yii::app()->db->createCommand()
                      ->select('pkCategoryID,categoryName')
                      ->from(TABLE_CATEGORIES)
                      ->where('categoryStatus=:categoryStatus AND fkParentCategoryID=:fkParentCategoryID',array(':categoryStatus'=>'1',':fkParentCategoryID'=>$_POST['cateID']))
                      ->queryAll();
            $options .= '<option value="">Select Sub-Category</option>';
        foreach ($resultArr as $result) 
        {
            $options .= '<option value="'.$result['pkCategoryID'].'">'.$result['categoryName'].'</option>';
        } 
        return $options;                     
    }

    public function getCategoryDropDown()
    {
        $categoryList = array();
        $criteria = new CDbCriteria;
        $criteria->condition = 'categoryStatus = "1"';
        $criteria->order = 'categoryHierarchy';
        $listCategory = Category::model()->findAll($criteria);
        foreach ($listCategory as $category) {
            $categoryList[$category->pkCategoryID] = ($category->categoryLevel)?"---".$category->categoryName:$category->categoryName;
        }
        return $categoryList;
    }

}
