<?php

/**
 * This is the model class for table "tbl_deals".
 */
class Deals extends CActiveRecord
{

    public $dealImage;
    public $dealImageAlt;
    public $dealImagePath;
    public $dealDateRange;
    public $categoryName;
    public $categoryImage;

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return TABLE_DEALS;
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('dealName,dealCity,dealID,fkUserID,fkCategoryID,dealAddress,dealUsageTimings,dealDescription,dealHighlights,dealFineprints,dealAvailability,dealQuantity,dealOriginalPrice,dealDiscount,dealPrice,dealSubject,dealStartDate,dealDateRange,dealEndDate,dealStatus,dealFeatured,dealOnMegaMenu,dealAddDate,dealModifiedDate', 'safe', 'on' => 'search'),
            array('dealName,dealCity,fkUserID,fkCategoryID,dealAddress,dealUsageTimings,dealDescription,dealHighlights,dealFineprints,dealAvailability,dealQuantity,dealOriginalPrice,dealDiscount,dealPrice,dealSubject,dealStartDate,dealDateRange,dealEndDate,dealStatus,dealFeatured,dealOnMegaMenu,dealAddDate,dealModifiedDate', 'required'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'category' => array(self::BELONGS_TO, 'Category', 'fkCategoryID'),
            'dealImage' => array(self::HAS_MANY, 'DealsImages', 'fkDealID'),
            'user' => array(self::BELONGS_TO, 'Users', 'fkUserID'),
            'city' => array(self::BELONGS_TO, 'City', 'dealCity'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'pkDealID' => 'Sr. No.',
            'dealDateRange' => 'Valid Upto',
            'dealName' => 'Deals Name',
            'dealImages' => 'Deals Images',
            'dealID' => 'Deals ID',
            'fkUserID' => 'Deal Posted By',
            'fkCategoryID' => 'Category Name',
            'dealAddress' => 'Address',
            'dealCity' => 'City',
            //'dealState' => 'State',
            //'dealCountry' => 'Country',
            //'dealZip' => 'Zip',
            'dealEndDate'=>'Expired On',
            'dealUsageTimings' => 'Usage Timing',
            'dealDescription' => 'Description',
            'dealHighlights' => 'Highlight',
            'dealFineprints' => 'Fine Print',
            'dealAvailability' => 'Availibitity',
            'dealQuantity' => 'Quantity',
            'dealOriginalPrice' => 'Original Price',
            'dealDiscount' => 'Discount',
            'dealPrice' => 'Price',
            'dealSubject' => 'Subject',
            'dealStatus' => 'Status',
            'dealFeatured' => 'Featured',
            'dealPopularity' => 'Popularity',
            'dealOnMegaMenu' => 'On Mega Menu',
            'dealAddDate' => 'Deal Add Date',
            'dealModifiedDate' => 'Deal Modified Date',
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
        $criteria->compare('pkDealID', $this->pkDealID);
        $criteria->compare('dealName', $this->dealName, true);
        $criteria->compare('dealID', $this->dealID, true);
        $criteria->compare('fkUserID', $this->fkUserID, true);
        $criteria->compare('fkCategoryID', $this->fkCategoryID, true);
        $criteria->compare('dealAddress', $this->dealAddress, true);
        $criteria->compare('dealCity', $this->dealCity, true);
//        $criteria->compare('dealState', $this->dealState, true);
//        $criteria->compare('dealCountry', $this->dealCountry, true);
        $criteria->compare('dealZip', $this->dealZip, true);
        $criteria->compare('dealUsageTimings', $this->dealUsageTimings, true);
        $criteria->compare('dealDescription', $this->dealDescription, true);
        $criteria->compare('dealHighlights', $this->dealHighlights, true);
        $criteria->compare('dealFineprints', $this->dealFineprints, true);
        $criteria->compare('dealAvailability', $this->dealAvailability, true);
        $criteria->compare('dealQuantity', $this->dealQuantity, true);
        $criteria->compare('dealOriginalPrice', $this->dealOriginalPrice, true);
        $criteria->compare('dealDiscount', $this->dealDiscount, true);
        $criteria->compare('dealPrice', $this->dealPrice, true);
        $criteria->compare('dealSubject', $this->dealSubject, true);
        $criteria->compare('dealFeatured', $this->dealFeatured, true);
        $criteria->compare('dealPopularity', $this->dealPopularity, true);
        $criteria->compare('dealOnMegaMenu', $this->dealOnMegaMenu, true);
        $criteria->compare('dealAddDate', $this->dealAddDate, true);
        $criteria->compare('dealModifiedDate', $this->dealModifiedDate, true);
        $criteria->compare('dealStatus', array('0', '1'), true);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                    'sort' => array(
                        'defaultOrder' => array(
                            'dealModifiedDate' => true,
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

    public static function updateStatus($value, $toStatus)
    {
        $dealTable = Deals::model()->tableName();
        Yii::app()->db->createCommand('Update `' . $dealTable . '` set dealStatus="' . $toStatus . '" Where pkDealID="' . $value . '"')->execute();
    }

    public function getDealID($length)
    {
        $random = "deal_";
        srand((double) microtime() * 1000000);
        $data = "AbcDE123IJKLMN67QRSTUVWXYZ";
        $data .= "aBCdefghijklmn123opq45rs67tuv89wxyz";
        $data .= "0FGH45OP89";
        for ($i = 0; $i < $length; $i++)
        {
            $random .= substr($data, (rand() % (strlen($data))), 1);
        }
        return $random;
    }

    /*
     * This function return the list of featured deals.
     */

    public function getFeaturedDeal($offset = 0, $limit = 9)
    {
        $criteria = new CDbCriteria();
        $criteria->select = array('ct.categoryName,ct.categoryImage,t.dealDiscount,t.pkDealID,t.dealName,t.dealDescription,t.dealAddress,t.dealEndDate,t.dealFeatured, di.dealImagePath,di.dealImageAlt');
        $criteria->join = " LEFT JOIN " . TABLE_DEALS_IMAGES . " AS di ON di.fkDealID = t.pkDealID";
        $criteria->join .= " LEFT JOIN " . TABLE_CATEGORIES . " AS ct ON ct.pkCategoryID = t.fkCategoryID";
        $criteria->condition = 't.dealStatus=:dealStatus AND t.dealFeatured=:dealFeatured AND ct.categoryStatus=:categoryStatus AND t.dealEndDate>'.strtotime(date('Y-m-d H:i:s'));
        $criteria->params = array(':dealStatus' => '1', ':dealFeatured' => '1', ':categoryStatus' => '1');
        $criteria->group = 'di.fkDealID';
        $criteria->offset = $offset;
        $criteria->limit = $limit;
        $featuredDeals = $this->findAll($criteria);

        return $featuredDeals;
    }

    /*
     * This function return the list of other deals.
     */

    public function getOthersDeal($offset = 0, $limit = 9)
    {
        $criteria = new CDbCriteria();
        $criteria->select = array('ct.categoryName,ct.categoryImage,t.dealDiscount,t.pkDealID,t.dealName,t.dealDescription,t.dealAddress,t.dealEndDate,t.dealFeatured, di.dealImagePath,di.dealImageAlt');
        $criteria->join = " LEFT JOIN " . TABLE_DEALS_IMAGES . " AS di ON di.fkDealID = t.pkDealID";
        $criteria->join .= " LEFT JOIN " . TABLE_CATEGORIES . " AS ct ON ct.pkCategoryID = t.fkCategoryID";
        $criteria->condition = 't.dealStatus=:dealStatus AND t.dealFeatured=:dealFeatured AND ct.categoryStatus=:categoryStatus AND t.dealEndDate>'.strtotime(date('Y-m-d H:i:s'));
        $criteria->params = array(':dealStatus' => '1', ':dealFeatured' => '0', ':categoryStatus' => '1');
        $criteria->group = 'di.fkDealID';
        $criteria->offset = $offset;
        $criteria->limit = $limit;
        $otherDeals = $this->findAll($criteria);

        return $otherDeals;
    }

    /*
     * This function return the list of deal in a city.
     */

    public function getCityDeal($cityID, $offset = 0, $limit = 9)
    {
        $criteria = new CDbCriteria();
        $criteria->select = array('city.cityName,ct.categoryName,ct.categoryImage,t.dealDiscount,t.pkDealID,t.dealName,t.dealDescription,t.dealAddress,t.dealEndDate,t.dealFeatured, di.dealImagePath,di.dealImageAlt');
        $criteria->join = " LEFT JOIN " . TABLE_DEALS_IMAGES . " AS di ON di.fkDealID = t.pkDealID";
        $criteria->join .= " LEFT JOIN " . TABLE_CATEGORIES . " AS ct ON ct.pkCategoryID = t.fkCategoryID";
        $criteria->join .= " LEFT JOIN " . TABLE_CITIES . " AS city ON city.pkCityID = t.dealCity";
        $criteria->condition = 't.dealStatus=:dealStatus AND t.dealCity=:dealCity AND ct.categoryStatus=:categoryStatus AND t.dealEndDate>'.strtotime(date('Y-m-d H:i:s'));
        $criteria->params = array(':dealStatus' => '1', ':dealCity' => $cityID, ':categoryStatus' => '1');
        $criteria->group = 'di.fkDealID';
        $criteria->offset = $offset;
        $criteria->limit = $limit;
        $cityDeals = $this->findAll($criteria);

        return $cityDeals;
    }

    /*
     * This function returns the deal by ID.
     */

    public function getSingleDealForMegaMenu($categoryID)
    {
        $getSingleDealForMegaMenu = array();
        if (!empty($categoryID))
        {
            $getSingleDealForMegaMenu = Yii::app()->db->createCommand()
                    ->select('d.dealName,d.pkDealID,d.dealDescription,di.dealImagePath,di.dealImageAlt')
                    ->from(TABLE_DEALS . ' d')
                    ->join(TABLE_DEALS_IMAGES . ' di', 'd.pkDealID=di.fkDealID')
                    ->join(TABLE_CATEGORIES . ' ct', 'ct.pkCategoryID=d.fkCategoryID')
                    ->where('d.dealStatus=:dealStatus AND ct.categoryStatus=:categoryStatus AND fkCategoryID=:fkCategoryID AND d.dealOnMegaMenu=:dealOnMegaMenu AND dealEndDate>'.strtotime(date('Y-m-d H:i:s')), array(':dealStatus' => '1', ':categoryStatus' => '1', ':fkCategoryID' => $categoryID, ':dealOnMegaMenu' => '1'))
                    ->group('di.fkDealID')
                    ->queryRow();
        }

        return $getSingleDealForMegaMenu;
    }

    /*
     * This function return the searched deals count.
     */

    public function getSearchedDealsCount($getData)
    {
        $searchedDeals['totalRecordCount'] = 0;
        $searchString = 'd.dealStatus=:dealStatus AND ct.categoryStatus=:categoryStatus  AND d.dealEndDate>'.strtotime(date('Y-m-d H:i:s'));
        $arrSearchValue = array(':dealStatus' => '1', ':categoryStatus' => '1');
        if (isset($getData['location']))
        {
            $keywordArr = $this->getKeywordQuery($getData['location']);
            $countKey = count($keywordArr);
            for ($i=0;$i<$countKey; $i++)
            {
                if($i == 0){
                    $searchString .= " AND (";
                }
                if($i == $countKey-1){
                    $searchString .= " d.dealAddress LIKE :dealAddress$i )";
                    $arrSearchValue[':dealAddress'.$i] = "%" . $keywordArr[$i] . "%";
                }else{
                    $searchString .= " d.dealAddress LIKE :dealAddress$i OR ";
                    $arrSearchValue[':dealAddress'.$i] = "%" . $keywordArr[$i] . "%";
                }
            }
        }
        elseif (isset($getData['category']))
        {
            $keywordArr = $this->getKeywordQuery($getData['category']);
            $countKey = count($keywordArr);
            for ($i=0;$i<$countKey; $i++)
            {
                if($i == 0){
                    $searchString .= " AND (";
                }
                if($i == $countKey-1){
                    $searchString .= " ct.categoryName LIKE :categoryName$i )";
                    $arrSearchValue[':categoryName'.$i] = "%" . $keywordArr[$i] . "%";
                }else{
                    $searchString .= " ct.categoryName LIKE :categoryName$i OR ";
                    $arrSearchValue[':categoryName'.$i] = "%" . $keywordArr[$i] . "%";
                }
            }
        }

        if (isset($_POST['filterBySubCategory']) && !empty($_POST['filterBySubCategory']))
        {
            $searchString .= ' AND (ct.fkParentCategoryID=:fkParentCategoryID AND ct.pkCategoryID=:pkCategoryID)';
            $arrSearchValue[':fkParentCategoryID'] = $_POST['filterByCategory'];
            $arrSearchValue[':pkCategoryID'] = $_POST['filterBySubCategory'];
        }
        else if (isset($_POST['filterByCategory']) && !empty($_POST['filterByCategory']))
        {
            $searchString .= ' AND (ct.fkParentCategoryID=:fkParentCategoryID OR ct.pkCategoryID=:pkCategoryID)';
            $arrSearchValue[':fkParentCategoryID'] = $_POST['filterByCategory'];
            $arrSearchValue[':pkCategoryID'] = $_POST['filterByCategory'];
        }

        if (isset($_POST['filterByDiscount']) && !empty($_POST['filterByDiscount']))
        {
            $searchString .= ' AND d.dealDiscount=:dealDiscount';
            $arrSearchValue[':dealDiscount'] = $_POST['filterByDiscount'];
        }

        if ($arrSearchValue && $searchString)
        {
            $searchedDeals = Yii::app()->db->createCommand()
                    ->select('count(distinct(di.fkDealID)) AS totalRecordCount')
                    ->from(TABLE_DEALS . ' d')
                    ->join(TABLE_DEALS_IMAGES . ' di', 'd.pkDealID=di.fkDealID')
                    ->join(TABLE_CATEGORIES . ' ct', 'ct.pkCategoryID=d.fkCategoryID')
                    ->where($searchString, $arrSearchValue)
                    ->queryRow();
        }
        return $searchedDeals['totalRecordCount'];
    }

    /*
     * This function returns the searched deals.
     */

    function getSearchedDeals($getData, $offset = 3, $limit = 0)
    {
        $searchedDeals = array();
        $searchString = 'd.dealStatus=:dealStatus AND ct.categoryStatus=:categoryStatus  AND d.dealEndDate>'.strtotime(date('Y-m-d H:i:s'));
        $arrSearchValue = array(':dealStatus' => '1', ':categoryStatus' => '1');
        if (isset($getData['location']))
        {
            $keywordArr = $this->getKeywordQuery($getData['location']);
            $countKey = count($keywordArr);
            for ($i=0;$i<$countKey; $i++)
            {
                if($i == 0){
                    $searchString .= " AND (";
                }
                if($i == $countKey-1){
                    $searchString .= " d.dealAddress LIKE :dealAddress$i )";
                    $arrSearchValue[':dealAddress'.$i] = "%" . $keywordArr[$i] . "%";
                }else{
                    $searchString .= " d.dealAddress LIKE :dealAddress$i OR ";
                    $arrSearchValue[':dealAddress'.$i] = "%" . $keywordArr[$i] . "%";
                }
            }
        }
        elseif (isset($getData['category']))
        {
            $keywordArr = $this->getKeywordQuery($getData['category']);
            $countKey = count($keywordArr);
            for ($i=0;$i<$countKey; $i++)
            {
                if($i == 0){
                    $searchString .= " AND (";
                }
                if($i == $countKey-1){
                    $searchString .= " ct.categoryName LIKE :categoryName$i )";
                    $arrSearchValue[':categoryName'.$i] = "%" . $keywordArr[$i] . "%";
                }else{
                    $searchString .= " ct.categoryName LIKE :categoryName$i OR ";
                    $arrSearchValue[':categoryName'.$i] = "%" . $keywordArr[$i] . "%";
                }
            }
        }
        if (isset($_POST['sortBy']))
        {
            if ($_POST['sortBy'] == 'featured')
            {
                $orderBy = 'd.dealFeatured DESC';
            }
            else
            {
                $orderBy = 'd.dealFeatured ASC';
            }
        }
        else
        {
            $orderBy = 'd.dealFeatured DESC';
        }

        if (isset($_POST['filterBySubCategory']) && !empty($_POST['filterBySubCategory']))
        {
            $searchString .= ' AND (ct.fkParentCategoryID=:fkParentCategoryID AND ct.pkCategoryID=:pkCategoryID)';
            $arrSearchValue[':fkParentCategoryID'] = $_POST['filterByCategory'];
            $arrSearchValue[':pkCategoryID'] = $_POST['filterBySubCategory'];
        }
        else if (isset($_POST['filterByCategory']) && !empty($_POST['filterByCategory']))
        {
            $searchString .= ' AND (ct.fkParentCategoryID=:fkParentCategoryID OR ct.pkCategoryID=:pkCategoryID)';
            $arrSearchValue[':fkParentCategoryID'] = $_POST['filterByCategory'];
            $arrSearchValue[':pkCategoryID'] = $_POST['filterByCategory'];
        }

        if (isset($_POST['filterByDiscount']) && !empty($_POST['filterByDiscount']))
        {
            $searchString .= ' AND d.dealDiscount=:dealDiscount';
            $arrSearchValue[':dealDiscount'] = $_POST['filterByDiscount'];
        }


        /* if(isset($_POST['perPage'])){
          $limit = $_POST['perPage'];
          }else{
          $limit = 9;
          } */

        if ($arrSearchValue && $searchString)
        {
            $searchedDeals = Yii::app()->db->createCommand()
                    ->select('ct.categoryName,ct.categoryImage,d.dealDiscount,d.dealName,d.pkDealID,d.dealDescription,d.dealAddress,d.dealEndDate,d.dealFeatured, di.dealImagePath,di.dealImageAlt')
                    ->from(TABLE_DEALS . ' d')
                    ->join(TABLE_DEALS_IMAGES . ' di', 'd.pkDealID=di.fkDealID')
                    ->join(TABLE_CATEGORIES . ' ct', 'ct.pkCategoryID=d.fkCategoryID')
                    ->where($searchString, $arrSearchValue)
                    ->group('di.fkDealID')
                    ->order($orderBy)
                    ->limit($limit)
                    ->offset($offset)
                    ->queryAll();
        }
        return $searchedDeals;
    }

    /*
     *  This function return the deals details of given id
     */

    public function getDealDeatail($id = 0)
    {
        $arrData = array();
        if ($id)
        {
            $criteria = new CDbCriteria();
            $criteria->select = array('ct.categoryName,ct.categoryImage,t.pkDealID,t.dealName,t.fkCategoryID,t.dealDiscount,t.dealUsageTimings,t.dealOriginalPrice,t.dealPrice,t.dealQuantity,t.dealDescription,t.dealHighlights,t.dealFineprints,t.dealDescription,t.dealAddress,t.dealEndDate,t.dealFeatured, di.dealImagePath,di.dealImageAlt');
            $criteria->join = " LEFT JOIN " . TABLE_DEALS_IMAGES . " AS di ON di.fkDealID = t.pkDealID";
            $criteria->join .= " LEFT JOIN " . TABLE_CATEGORIES . " AS ct ON ct.pkCategoryID = t.fkCategoryID";
            $criteria->condition = 't.pkDealID=:id';
            $criteria->params = array(':id' => $id);
            $criteria->condition = 't.pkDealID=:id AND ct.categoryStatus = :categoryStatus AND t.dealEndDate>'.strtotime(date('Y-m-d H:i:s'));
            $criteria->params = array(':id' => $id, ':categoryStatus' => '1');
            $arrData = $this->findAll($criteria);
        }

        return $arrData;
    }

    /*
     *  This function return the deals details of given id
     */

    public function getDealDeatailAdmin($id = 0)
    {
        $arrData = array();
        if ($id)
        {
            $criteria = new CDbCriteria();
            $criteria->select = array('ct.categoryName,ct.categoryImage,t.dealName,t.fkCategoryID,t.dealDiscount,t.dealUsageTimings,t.dealOriginalPrice,t.dealPrice,t.dealQuantity,t.dealDescription,t.dealHighlights,t.dealFineprints,t.dealDescription,t.dealAddress,t.dealEndDate,t.dealFeatured, di.dealImagePath,di.dealImageAlt');
            $criteria->join = " LEFT JOIN " . TABLE_DEALS_IMAGES . " AS di ON di.fkDealID = t.pkDealID";
            $criteria->join .= " LEFT JOIN " . TABLE_CATEGORIES . " AS ct ON ct.pkCategoryID = t.fkCategoryID";
            $criteria->condition = 't.pkDealID=:id';
            $criteria->params = array(':id' => $id);
            $arrData = $this->findAll($criteria);
        }

        return $arrData;
    }

    /*
     *   This function return the related deals of a given deal.
     */

    public function getRelatedDeals($dealID = 0, $catID = 0)
    {
        $arrData = array();
        if ($dealID && $catID)
        {
            $criteria = new CDbCriteria();
            $criteria->select = array('t.pkDealID,t.dealName,t.dealPrice, di.dealImagePath,di.dealImageAlt');
            $criteria->join = " LEFT JOIN " . TABLE_DEALS_IMAGES . " AS di ON di.fkDealID = t.pkDealID";
            $criteria->join .= " LEFT JOIN " . TABLE_CATEGORIES . " AS ct ON ct.pkCategoryID = t.fkCategoryID";
            $criteria->condition = 't.pkDealID !=:dealID AND ct.pkCategoryID = :catID AND t.dealStatus=:dealStatus AND ct.categoryStatus = :categoryStatus AND t.dealEndDate>'.strtotime(date('Y-m-d H:i:s'));
            $criteria->params = array(':dealID' => $dealID, ':catID' => $catID, ':dealStatus' => '1', ':categoryStatus' => '1');
            $criteria->group = 'di.fkDealID';
            $criteria->limit = '4';
            $arrData = $this->findAll($criteria);
        }

        return $arrData;
    }

    /*
     * This function return the deals of a given category
     */

    public function getCategoryDeals($categoryID = 0, $offset = 0, $limit = 9)
    {
        $arrData = array();
        if ($categoryID)
        {
            $criteria = new CDbCriteria();
            $criteria->select = array('ct.categoryName,ct.categoryImage,t.pkDealID,t.dealName,t.fkCategoryID,t.dealDiscount,t.dealUsageTimings,t.dealOriginalPrice,t.dealPrice,t.dealQuantity,t.dealDescription,t.dealHighlights,t.dealFineprints,t.dealDescription,t.dealAddress,t.dealEndDate,t.dealFeatured, di.dealImagePath,di.dealImageAlt');
            $criteria->join = " LEFT JOIN " . TABLE_DEALS_IMAGES . " AS di ON di.fkDealID = t.pkDealID";
            $criteria->join .= " LEFT JOIN " . TABLE_CATEGORIES . " AS ct ON ct.pkCategoryID = t.fkCategoryID";
            $criteria->condition = '(ct.fkParentCategoryID = :fkParentCategoryID OR ct.pkCategoryID = :pkCategoryID) AND t.dealStatus=:dealStatus AND ct.categoryStatus = :categoryStatus AND t.dealEndDate>'.strtotime(date('Y-m-d H:i:s'));
            $criteria->params = array(':fkParentCategoryID' => $categoryID, ':pkCategoryID' => $categoryID, ':dealStatus' => '1', ':categoryStatus' => '1');
            $criteria->group = 'di.fkDealID';
            $criteria->offset = $offset;
            $criteria->limit = $limit;
            $criteria->order = 'ct.fkParentCategoryID';
            $arrData = $this->findAll($criteria);
        }

        return $arrData;
    }

    /*
    * This function return the array of the keywords from a search string.
    */
    private function getKeywordQuery($keyword)
    {
        $arr = array();
        $tempArr = explode(',', $keyword);
        foreach ($tempArr as $key => $val)
        {

            $val = trim($val);
            if ($val)
            {
                $tempAr[] = $val;

                $tmpArr = explode(' ', $val);

                foreach ($tmpArr as $key1 => $val1)
                {
                    $val1 = trim($val1);
                    if ($val1)
                    {
                        $arr[] = $val1;
                    }
                }
            }
        }
        return $arr;
    }


    /*
    * This function is used to find all deals by primary key.
    */
    public function getAllDealsByPk($arrPk)
    {
        $keys = implode(",",$arrPk);
        $arrData = array();
        if($keys){
            $criteria = new CDbCriteria();
            $criteria->select = array('t.pkDealID,t.dealName,t.dealPrice,t.dealQuantity,t.dealDescription,di.dealImagePath,di.dealImageAlt');
            $criteria->join = " LEFT JOIN " . TABLE_DEALS_IMAGES . " AS di ON di.fkDealID = t.pkDealID";
            $criteria->condition = 't.pkDealID IN ('.$keys.')';
            $criteria->group = 'di.fkDealID';
            $criteria->order = 'FIELD( t.pkDealID,'.$keys.' )';
            $arrData = $this->findAll($criteria);
        }
        return $arrData;
    }

    /*
    * This function is used to find the available quantity of a deal.
    */
    public function getAvilableQuantity($dealID)
    {
        $availbleQty = 0;
        if($dealID){
            $criteria = new CDbCriteria();
            $criteria->select = array('t.dealQuantity');
            $criteria->condition = 't.pkDealID ="'.$dealID.'"';
            $availbleQty = $this->find($criteria)->dealQuantity;
        }
        return $availbleQty;
    }

    /*
    * This function is used to find all get the total price amount of the deals available in the cart.
    */
    public function  cartItemsTotal($cartItems,$arrSessionCart)
    {
        $subTotal = 0;
        $i=0;
        foreach ($cartItems as $item) {
            $subTotal += $item->dealPrice*$arrSessionCart[$i]['qty'];
            $i++;
        }
        return $subTotal;
    }

}
