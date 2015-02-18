<?php

class PrintController extends Controller
{

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = 'main';

    /**
     * @return array action filters
     */
    public function filters()
    {
        if (!isset(Yii::app()->user->isAdmin))
        {
            Yii::app()->user->setFlash('invalid_login', true);
            $this->redirect(array('/admin'));
        }
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('allow', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /*
    * Action to export deals details
    */
    public function actionDeals()
    {
        if (isset($_POST['deals-grid_c1']))
        {
            $arrDealsRecord = array_reverse(Deals::model()->with(array('category' => array('select' => 'categoryName')), array('user' => array('select' => 'userFirstName')),array('city' => array('select' => 'cityName')))->findAllByPk($_POST['deals-grid_c1']));
            foreach ($arrDealsRecord as $record)
            {
                $record->dealStatus = $record->dealStatus == 1 ? 'Active' : 'Inactive';
                $record->dealAvailability = $record->dealAvailability == 1 ? 'Yes' : 'No';
                $record->dealSubject = Yii::app()->params['dealSubject'][$record->dealSubject];
                $record->dealStartDate = date('Y-m-d',$record->dealStartDate);
                $record->dealEndDate = date('Y-m-d',$record->dealEndDate);
                $record->dealFeatured = $record->dealFeatured == 1 ? 'Yes' : 'No';
                $record->dealOnMegaMenu = $record->dealOnMegaMenu == 1 ? 'Yes' : 'No';
            }
            if (isset($_POST['csv_export']))
            {
                CsvExport::export($arrDealsRecord, array(
                    'Deals ID' => 'pkDealID',
                    'Deals Name' => 'dealName',
                    'Category Name' => 'category->categoryName',
                    'Deal posted by' => 'user->userFirstName',
                    'Deal Address' => 'dealAddress',
                    'City Name' => 'city->cityName',
                    'Usage Timings' => 'dealUsageTimings',
                    'Description' => 'dealDescription',
                    'Highlights' => 'dealHighlights',
                    'Availability' => 'dealAvailability',
                    'Quantity' => 'dealQuantity',
                    'Original Price' => 'dealOriginalPrice',
                    'Discount' => 'dealDiscount',
                    'Price' => 'dealPrice',
                    'Subject' => 'dealSubject',
                    'Start Date' => 'dealStartDate',
                    'End Date' => 'dealEndDate',
                    'Featured' => 'dealFeatured',
                    'On Mega Menu' => 'dealOnMegaMenu',
                    'Add Date' => 'dealAddDate',
                    'Modified Date' => 'dealModifiedDate',
                    'Status' => 'dealStatus',
                        ), true, 'deals-reports.csv');
            }
            else if (isset($_POST['excel_export']))
            {
                $headerArr = array(
                        'Deals ID',
                        'Deals Name',
                        'Category Name',
                        'Deal posted by',
                        'Deal Address',
                        'City Name',
                        'Usage Timings',
                        'Description',
                        'Highlights',
                        'Availability',
                        'Quantity',
                        'Original Price',
                        'Discount',
                        'Price',
                        'Subject',
                        'Start Date',
                        'End Date',
                        'Featured',
                        'On Mega Menu',
                        'Add Date',
                        'Modified Date',
                        'Status'
                    );
                $rowArr = array();
                $rowArr1 = array();
                $i = 0;
                
                foreach($arrDealsRecord AS $dealRecord){
                    $j=0;
                    $rowArr1[$j++] = $dealRecord->pkDealID;
                    $rowArr1[$j++] = $dealRecord->dealName;
                    $rowArr1[$j++] = $dealRecord->category?$dealRecord->category->categoryName:'';
                    $rowArr1[$j++] = $dealRecord->user?$dealRecord->user->userFirstName:'';
                    $rowArr1[$j++] = $dealRecord->dealAddress;
                    $rowArr1[$j++] = $dealRecord->city?$dealRecord->city->cityName:'';
                    $rowArr1[$j++] = $dealRecord->dealUsageTimings;
                    $rowArr1[$j++] = $dealRecord->dealDescription;
                    $rowArr1[$j++] = $dealRecord->dealHighlights;
                    $rowArr1[$j++] = $dealRecord->dealAvailability;
                    $rowArr1[$j++] = $dealRecord->dealQuantity;
                    $rowArr1[$j++] = $dealRecord->dealOriginalPrice;
                    $rowArr1[$j++] = $dealRecord->dealDiscount;
                    $rowArr1[$j++] = $dealRecord->dealPrice;
                    $rowArr1[$j++] = $dealRecord->dealSubject;
                    $rowArr1[$j++] = $dealRecord->dealStartDate;
                    $rowArr1[$j++] = $dealRecord->dealEndDate;
                    $rowArr1[$j++] = $dealRecord->dealFeatured;
                    $rowArr1[$j++] = $dealRecord->dealOnMegaMenu;
                    $rowArr1[$j++] = $dealRecord->dealAddDate;
                    $rowArr1[$j++] = $dealRecord->dealModifiedDate;
                    $rowArr1[$j++] = $dealRecord->dealStatus;
                    $rowArr[$i++] = $rowArr1;
                }
                $this->actionExportToXLS($headerArr,$rowArr,'deals-reports.xls');
            }
        }
        else
        {
            $this->redirect(Yii::app()->createUrl('admin/deals/index'));
        }
    }

    /*
    * Action to export categories details
    */
    public function actionCategory()
    {
        if (isset($_POST['category-grid_c1']))
        {
            $arrCategoryRecord = array_reverse(Category::model()->findAllByPk($_POST['category-grid_c1']));
            foreach ($arrCategoryRecord as $record)
            {
                $record->categoryStatus = $record->categoryStatus == 1 ? 'Active' : 'Inactive';
            }
            if (isset($_POST['csv_export']))
            {
                CsvExport::export($arrCategoryRecord, array(
                    'Category ID' => 'pkCategoryID',
                    'Category Name' => 'categoryName',
                    'Description' => 'categoryDescription',
                    'Status' => 'categoryStatus'
                        ), true, 'category-reports.csv');
            }else{
                $headerArr = array('Category ID','Category Name','Description','Status');
                $rowArr = array();
                $rowArr1 = array();
                $i = 0;

                foreach($arrCategoryRecord AS $categoryRecord){
                    $j=0;
                    $rowArr1[$j++] = $categoryRecord->pkCategoryID;
                    $rowArr1[$j++] = $categoryRecord->categoryName;
                    $rowArr1[$j++] = $categoryRecord->categoryDescription;
                    $rowArr1[$j++] = $categoryRecord->categoryStatus;
                    $rowArr[$i++] = $rowArr1;
                }
                $this->actionExportToXLS($headerArr,$rowArr,'category-reports.xls');
            }
        }
        else
        {
            $this->redirect(Yii::app()->createUrl('admin/category/index'));
        }
    }

    /*
    * Action to export customers details
    */
    public function actionCustomers()
    {
        if (isset($_POST['customers-grid_c1']))
        {
            $arrCustomersRecord = array_reverse(Users::model()->with(
                                            array('billingCountry' => array('select' => 'countryName')), 
                                            array('billingState' => array('select' => 'stateName')),
                                            array('billingCity' => array('select' => 'cityName')),
                                            array('shippingCountry' => array('select' => 'countryName')), 
                                            array('shippingState' => array('select' => 'stateName')),
                                            array('shippingCity' => array('select' => 'cityName'))
                                        )->findAllByPk($_POST['customers-grid_c1']));
            foreach ($arrCustomersRecord as $record)
            {
                $record->userStatus = $record->userStatus == 1 ? 'Active' : 'Inactive';
                $record->userDateOfBirth = date('Y-m-d',strtotime($record->userDateOfBirth));
            }
            if (isset($_POST['csv_export']))
            {
                CsvExport::export($arrCustomersRecord, array(
                    'Customer ID' => 'pkUserID',
                    'First Name' => 'userFirstName',
                    'Last Name' => 'userLastName',
                    'Email Address' => 'userEmail',
                    'Phone Number' =>'userPhone',
                    'Gender'=>'userGender',
                    'Date Of Birth'=>'userDateOfBirth',
                    'Billing Address1'=>'userBillingAddress1',
                    'Billing Address2'=>'userBillingAddress2',
                    'Billing Country'=>'billingCountry->countryName',
                    'Billing State'=>'billingState->stateName',
                    'Billing City'=>'billingCity->cityName',
                    'Billing Zipcode'=>'userBillingZip',
                    'Billing Phone'=>'userBillingPhone',
                    'Shipping Address1'=>'userShippingAddress1',
                    'Shipping Address2'=>'userShippingAddress2',
                    'Shipping Country'=>'shippingCountry->countryName',
                    'Shipping State'=>'shippingState->stateName',
                    'Shipping City'=>'shippingCity->cityName',
                    'Shipping Zipcode'=>'userShippingZip',
                    'Shipping Phone'=>'userShippingPhone',
                    'Status' => 'userStatus',
                    'Date Added' => 'userDateAdded',
                    'Date Modified' => 'userDateModified',
                        ), true, 'customers-reports.csv');
            }
            else if (isset($_POST['excel_export']))
            {
                $headerArr = array(
                        'Customers ID',
                        'First Name',
                        'Last Name',
                        'Email Address',
                        'Phone Number',
                        'Gender',
                        'Date Of Birth',
                        'Billing Address1',
                        'Billing Address2',
                        'Billing Country',
                        'Billing State',
                        'Billing City',
                        'Billing Zipcode',
                        'Billing Phone',
                        'Shipping Address1',
                        'Shipping Address2',
                        'Shipping Country',
                        'Shipping State',
                        'Shipping City',
                        'Shipping Zipcode',
                        'Shipping Phone',
                        'Status',
                        'Date Added',
                        'Date Modified',
                    );
                $rowArr = array();
                $rowArr1 = array();
                $i = 0;
                
                foreach($arrCustomersRecord AS $customerRecord){
                    $j=0;
                    $rowArr1[$j++] = $customerRecord->pkUserID;
                    $rowArr1[$j++] = $customerRecord->userFirstName;
                    $rowArr1[$j++] = $customerRecord->userLastName;
                    $rowArr1[$j++] = $customerRecord->userEmail;
                    $rowArr1[$j++] = $customerRecord->userPhone;
                    $rowArr1[$j++] = $customerRecord->userGender;
                    $rowArr1[$j++] = $customerRecord->userDateOfBirth;
                    $rowArr1[$j++] = $customerRecord->userBillingAddress1;
                    $rowArr1[$j++] = $customerRecord->userBillingAddress2;
                    $rowArr1[$j++] = $customerRecord->billingCountry->countryName;
                    $rowArr1[$j++] = $customerRecord->billingState->stateName;
                    $rowArr1[$j++] = $customerRecord->billingCity->cityName;
                    $rowArr1[$j++] = $customerRecord->userBillingZip;
                    $rowArr1[$j++] = $customerRecord->userBillingPhone;
                    $rowArr1[$j++] = $customerRecord->userShippingAddress1;
                    $rowArr1[$j++] = $customerRecord->userShippingAddress2;
                    $rowArr1[$j++] = $customerRecord->shippingCountry->countryName;
                    $rowArr1[$j++] = $customerRecord->shippingState->stateName;
                    $rowArr1[$j++] = $customerRecord->shippingCity->cityName;
                    $rowArr1[$j++] = $customerRecord->userShippingZip;
                    $rowArr1[$j++] = $customerRecord->userShippingPhone;
                    $rowArr1[$j++] = $customerRecord->userStatus;
                    $rowArr1[$j++] = $customerRecord->userDateAdded;
                    $rowArr1[$j++] = $customerRecord->userDateModified;
                    
                    $rowArr[$i++] = $rowArr1;
                }
                $this->actionExportToXLS($headerArr,$rowArr,'customers-reports.xls');
            }
        }
        else
        {
            $this->redirect(Yii::app()->createUrl('admin/customers/index'));
        }
    }

    /*
    * Action to export reviews details
    */
    public function actionReviews()
    {
        if (isset($_POST['reviews-grid_c1']))
        {
            $arrReviewsRecord = array_reverse(Reviews::model()->with(
                                            array(
                                                array('user' => array('select' => 'userEmail')), 
                                                array('deal' => array('select' => 'dealName'))
                                            )
                                        )->findAllByPk($_POST['reviews-grid_c1']));
            foreach ($arrReviewsRecord as $record)
            {
                $record->reviewStatus = $record->reviewStatus == 1 ? 'Active' : 'Inactive';
                $record->reviewAddDate = date('Y-m-d',$record->reviewAddDate);
                $record->reviewActionDate = date('Y-m-d',$record->reviewActionDate) != '1970-01-01'?date('Y-m-d',$record->reviewActionDate):'';
            }
            if (isset($_POST['csv_export']))
            {
                CsvExport::export($arrReviewsRecord, array(
                            'Review ID' => 'pkReviewID',
                            'Deal Name' => 'deal->dealName',
                            'User Email' => 'user->userEmail',
                            'Nickname' => 'nickname',
                            'Review Subject' =>'reviewSubject',
                            'Review Content'=>'reviewContent',
                            'Review Status'=>'reviewStatus',
                            'Review Date Added'=>'reviewAddDate',
                            'Review Action Date'=>'reviewActionDate',
                        ), true, 'reviews-reports.csv');
            }
            else if (isset($_POST['excel_export']))
            {
                $headerArr = array(
                            'Review ID',
                            'Deal Name',
                            'User Email',
                            'Nickname',
                            'Review Subject',
                            'Review Content',
                            'Review Status',
                            'Review Date Added',
                            'Review Action Date',
                    );
                $rowArr = array();
                $rowArr1 = array();
                $i = 0;
                
                foreach($arrReviewsRecord AS $reviewRecord){
                    $j=0;
                    $rowArr1[$j++] = $reviewRecord->pkReviewID;
                    $rowArr1[$j++] = $reviewRecord->deal?$reviewRecord->deal->dealName:'-';
                    $rowArr1[$j++] = $reviewRecord->user?$reviewRecord->user->userEmail:'-';
                    $rowArr1[$j++] = $reviewRecord->nickname;
                    $rowArr1[$j++] = $reviewRecord->reviewSubject;
                    $rowArr1[$j++] = $reviewRecord->reviewContent;
                    $rowArr1[$j++] = $reviewRecord->reviewStatus;
                    $rowArr1[$j++] = $reviewRecord->reviewAddDate;
                    $rowArr1[$j++] = $reviewRecord->reviewActionDate;
                    $rowArr[$i++] = $rowArr1;
                }
                $this->actionExportToXLS($headerArr,$rowArr,'reviews-reports.xls');
            }
        }
        else
        {
            $this->redirect(Yii::app()->createUrl('admin/reviews/index'));
        }
    }

    /*
    * Action to export orders details
    */
    public function actionOrder()
    {
        if (isset($_POST['order-grid_c1']))
        {
            $arrOrderRecord = array_reverse(Order::model()->with(
                                            array(
                                                array('billingCountry' => array('select' => 'countryName')), 
                                                array('billingState' => array('select' => 'stateName')), 
                                                array('billingCity' => array('select' => 'cityName')), 
                                                array('shippingCountry' => array('select' => 'countryName')), 
                                                array('shippingState' => array('select' => 'stateName')), 
                                                array('shippingCity' => array('select' => 'cityName')), 
                                            )
                                        )->findAllByPk($_POST['order-grid_c1']));
            if (isset($_POST['csv_export']))
            {
                CsvExport::export($arrOrderRecord, array(
                    'Order ID' => 'pkOrderID',
                    'Customer First Name' => 'orderCustomerFirstName',
                    'Customer Last Name' => 'orderCustomerLastName',
                    'Customer Email Address' => 'orderCustomerEmail',
                    'Customer Phone Number' => 'orderCustomerPhone',
                    'Customer Billing Address1' => 'orderBillingAddress1',
                    'Customer Billing Address2' => 'orderBillingAddress2',
                    'Customer Billing Country' => 'billingCountry->countryName',
                    'Customer Billing State' => 'billingState->stateName',
                    'Customer Billing City' => 'billingCity->cityName',
                    'Customer Billing Zipcode' => 'orderBillingZipcode',
                    'Customer Billing Phone' => 'orderBillingPhone',
                    'Customer Shipping Address1' => 'orderShippingAddress1',
                    'Customer Shipping Address2' => 'orderShippingAddress2',
                    'Customer Shipping Country' => 'shippingCountry->countryName',
                    'Customer Shipping State' => 'shippingState->stateName',
                    'Customer Shipping City' => 'shippingCity->cityName',
                    'Customer Shipping Zipcode' => 'orderShippingZipcode',
                    'Customer Shipping Phone' => 'orderShippingPhone',
                    'Order Status' => 'orderStatus',
                    'Order Date Added' => 'orderDateAdded',
                        ), true, 'order-reports.csv');
            }else{
                $headerArr = array(
                                    'Order ID',
                                    'Customer First Name',
                                    'Customer Last Name',
                                    'Customer Email Address',
                                    'Customer Phone Number',
                                    'Customer Billing Address1',
                                    'Customer Billing Address2',
                                    'Customer Billing Country',
                                    'Customer Billing State',
                                    'Customer Billing City',
                                    'Customer Billing Zipcode',
                                    'Customer Billing Phone',
                                    'Customer Shipping Address1',
                                    'Customer Shipping Address2',
                                    'Customer Shipping Country',
                                    'Customer Shipping State',
                                    'Customer Shipping City',
                                    'Customer Shipping Zipcode',
                                    'Customer Shipping Phone',
                                    'Order Status',
                                    'Order Date Added',
                                    );
                $rowArr = array();
                $rowArr1 = array();
                $i = 0;

                foreach($arrOrderRecord AS $orderRecord){
                    $j=0;
                    $rowArr1[$j++] = $orderRecord->pkOrderID;
                    $rowArr1[$j++] = $orderRecord->orderCustomerFirstName;
                    $rowArr1[$j++] = $orderRecord->orderCustomerLastName;
                    $rowArr1[$j++] = $orderRecord->orderCustomerEmail;
                    $rowArr1[$j++] = $orderRecord->orderCustomerPhone;
                    $rowArr1[$j++] = $orderRecord->orderBillingAddress1;
                    $rowArr1[$j++] = $orderRecord->orderBillingAddress2;
                    $rowArr1[$j++] = $orderRecord->billingCountry->countryName;
                    $rowArr1[$j++] = $orderRecord->billingState->stateName;
                    $rowArr1[$j++] = $orderRecord->billingCity->cityName;
                    $rowArr1[$j++] = $orderRecord->orderBillingZipcode;
                    $rowArr1[$j++] = $orderRecord->orderBillingPhone;
                    $rowArr1[$j++] = $orderRecord->orderShippingAddress1;
                    $rowArr1[$j++] = $orderRecord->orderShippingAddress2;
                    $rowArr1[$j++] = $orderRecord->shippingCountry->countryName;
                    $rowArr1[$j++] = $orderRecord->shippingState->stateName;
                    $rowArr1[$j++] = $orderRecord->shippingCity->cityName;
                    $rowArr1[$j++] = $orderRecord->orderShippingZipcode;
                    $rowArr1[$j++] = $orderRecord->orderShippingPhone;
                    $rowArr1[$j++] = $orderRecord->orderStatus;
                    $rowArr1[$j++] = $orderRecord->orderDateAdded;
                    $rowArr[$i++] = $rowArr1;
                }
                if(!empty($rowArr)){
                    $this->actionExportToXLS($headerArr,$rowArr,'order-reports.xls');
                }else{
                    $this->redirect(Yii::app()->createUrl('admin/order/index'));
                }
            }
        }
        else
        {
            $this->redirect(Yii::app()->createUrl('admin/order/index'));
        }
    }

    /*
    * Action to export to XLS.
    */
    public function actionExportToXLS($arrHeader,$arrRow,$filename)
    {
        $xls = new ExportXLS($filename);
        $header = null;
        $xls->addHeader($arrHeader);
        $xls->addRow($arrRow);
        $xls->sendFile();
        die;
    }

}

?>
