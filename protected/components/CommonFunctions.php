<?php

/**
 * Class : CommonFunctions
 * This is the model class for Commonly used 
 * functions all over the Igizmo.
 */
class CommonFunctions
{

    /**
     * Function Name : generateRandomAlphaNumericCode
     * It generates the random alphanumeric strings.
     * @access public
     * @param $length
     * @return string
     */
    public function generateRandomAlphaNumericCode($length)
    {
        $arrAlphaNumeric = array();
        $arrAlpha = range('A', 'Z');
        $arrNumeric = range(0, 9);

        $arrAlphaNumeric = array_merge($arrAlphaNumeric, $arrAlpha, $arrNumeric);

        mt_srand((double) microtime() * 1234567);
        shuffle($arrAlphaNumeric);

        $strAlphaNumeric = '';
        for ($x = 0; $x < $length; $x++)
        {
            $strAlphaNumeric .= $arrAlphaNumeric[mt_rand(0, (sizeof($arrAlphaNumeric) - 1))];
        }
        return $strAlphaNumeric;
    }

    /**
     * Function : sendMail
     * Send mail from the Travelogini
     * @access public
     * @param $template_id
     * @param $to_email
     * @param $varKeywordContent
     * @param $varKeywordValueContent
     * @param $varCC
     * @param $varBCC
     * @param $varSenderName
     * @param $varSenderEmail
     * @return boolean
     */
    public function sendMail($template_id, $to_email, $varKeywordContent, $varKeywordValueContent, $varCC = "", $varBCC = "", $varSenderName = "", $varSenderEmail = "")
    {
        $mail = new YiiMailMessage;
        $message = '';
        $message .= '<style type="text/css">
		a { color: #006567;}
		a:hover { color: #F93; }
		</style>';
        $message .= '<table style="padding-left:15px;" width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
		<td style="border-bottom:1px solid #35d3ed; margin-top:30px; padding-bottom:30px; float:left;" width="100%">';
        $result_set = self::getMailContent($template_id);
        $subject = $result_set['emailSubject'];
        $message .= $result_set['emailContent'];
        $from = isset($varSenderName) && $varSenderName != '' ? $varSenderName : $result_set['emailFromName'];
        $fromEmail = isset($varSenderEmail) && $varSenderEmail != '' ? $varSenderEmail : $result_set['emailFromEmail'];
        $message = str_replace($varKeywordContent, $varKeywordValueContent, $message);
        $message .= '</td></tr></table>';
        $varMailTo = trim($to_email);

        //mailing
        $params = array('myMail' => $message);
        $mail->subject = $subject;
        $mail->setBody($params['myMail'], 'text/html');
        $mail->addTo($varMailTo);
        $mail->setFrom(array($fromEmail => $from));
        Yii::app()->mail->send($mail);
    }

    /**
     * Function : getMailContent
     * Retriving the specific email template from database
     * @access public
     * @param $argMailID
     * @return array
     */
    public function getMailContent($argMailID)
    {
        $emailTempalteArray = Yii::app()->db->createCommand(array(
                    'select' => array('pkEmailID', 'emailFromName', 'emailFromEmail', 'emailSubject', 'emailContent'),
                    'from' => array(TABLE_EMAIL_TEMPLATES),
                    'where' => 'pkEmailID=:eID',
                    'params' => array(':eID' => $argMailID),
                ))->queryRow();
        //echo '<pre>';
        //print_r($emailTempalteArray);
        //die();
        return $emailTempalteArray;
    }

    /**
     * Function : getRandomTimeStamp
     * This function returns  the random timestamp string
     * @access public
     * @param $len
     * @return string
     */
    function getRandomTimeStamp($len)
    {
        $random = substr(number_format(time() * rand(), 0, '', ''), 0, $len);
        return $random;
    }

    /**
     *  Set Status Change icon
     */
    public function statusFurmate($status)
    {
        $returnVal = "";
        if ($status == 1)
        {
            $returnVal = "<span class='label label-satgreen'>Active</span>";
        }
        else if ($status == 0)
        {
            $returnVal = "<span class='label label label-lightred'>Inactive</span>";
        }
        else
        {

        }
        return $returnVal;
    }

    /**
     *  Set Status Change icon
     */
    public function statusFurmateForReview($status)
    {
        $returnVal = "";
        if ($status == 1)
        {
            $returnVal = "<span class='label label-satgreen'>Approve</span>";
        }
        else if ($status == 0)
        {
            $returnVal = "<span class='label label label-lightred'>Unapprove</span>";
        }
        else
        {

        }
        return $returnVal;
    }

    /**
     *  Set Status Change icon
     */
    public function statusName($status)
    {
        $returnVal = "";
        if ($status == 1)
        {
            $returnVal = "Active";
        }
        else if ($status == 0)
        {
            $returnVal = "Inactive";
        }
        else
        {

        }
        return $returnVal;
    }

    /**
     * Set date time formating
     */
    public function dateTimeFormat($argDateTime)
    {
        if ($argDateTime != '' && $argDateTime != '0000-00-00 00:00:00')
        {
            return date("M d, Y h:i A", strtotime($argDateTime));
        }
        else
        {
            return '0000-00-00 00:00:00';
        }
    }

    /**
     *  Set Gender Change
     */
    public function genderFurmate($gender)
    {
        $returnVal = "";
        if ($gender == 1)
        {
            $returnVal = "Male";
        }
        else if ($gender == 0)
        {
            $returnVal = "Female";
        }
        else
        {

        }
        return $returnVal;
    }

    /**
     *  Set user-type Change
     */
    public function userTypeFurmate($userType)
    {
        $returnVal = "";
        if ($userType == 'C')
        {
            $returnVal = "Candidate";
        }
        else if ($userType == 'E')
        {
            $returnVal = "Employer";
        }
        else
        {

        }
        return $returnVal;
    }

    /**
     *  Set Jobseeker Title Change
     */
    public function jobseekerTitleFurmate($jobseekerTitle)
    {
        $returnVal = "";
        if ($jobseekerTitle == '0')
        {
            $returnVal = "Mr.";
        }
        else if ($jobseekerTitle == '1')
        {
            $returnVal = "Mrs.";
        }
        elseif ($jobseekerTitle == '2')
        {
            $returnVal = "Miss";
        }
        else if ($jobseekerTitle == '3')
        {
            $returnVal = "Dr";
        }
        elseif ($jobseekerTitle == '4')
        {
            $returnVal = "Other";
        }
        return $returnVal;
    }

    /**
     *  Add Timestamp in filename before uploading files
     */
    public function addFileTimeStamp($value = null)
    {
        $returnVal = "";
        $arrFile = explode('.', $value);
        $arrFile[0] = $arrFile[0] . '_' . time();
        $returnVal = implode('.', $arrFile);
        return $returnVal;
    }

    /**
     *  Set Status Change for Candidate
     */
    public function statusCandidateFurmate($status)
    {
        $returnVal = "";
        if ($status == 'R')
        {
            $returnVal = "<span class='label label-lightred'>Rejected</span>";
        }
        else if ($status == 'S')
        {
            $returnVal = "<span class='label label label-satgreen'>Shortlisted</span>";
        }
        else if ($status == 'AP')
        {
            $returnVal = "<span class='label label label-yellow'>In Admin Process</span>";
        }
        else if ($status == 'EP')
        {
            $returnVal = "<span class='label label label-orange'>In Employer Process</span>";
        }
        return $returnVal;
    }

    /**
     *  Set Status Change for Notifications
     */
    public function notificationTypeFurmate($val)
    {
        $returnVal = "";
        if ($val == '0')
        {
            $returnVal = "<span class='label label-lightred'>Rejected</span>";
        }
        else if ($val == '1')
        {
            $returnVal = "<span class='label label label-satgreen'>Published</span>";
        }
        else if ($val == '2')
        {
            $returnVal = "<span class='label label label-yellow'>Expired</span>";
        }
        else if ($val == '3')
        {
            $returnVal = "<span class='label label label-orange'>Review Again</span>";
        }
        else if ($val == '4')
        {
            $returnVal = "<span class='label label label-blue'>Normal</span>";
        }
        return $returnVal;
    }

    /**
     *  returns the array of years
     */
    public function yearList()
    {
        $yearNow = date("Y");
        $yearFrom = $yearNow - 100;
        $yearTo = $yearNow;
        $arrYears = array();
        foreach (range($yearFrom, $yearTo) as $number)
        {
            $arrYears[$number] = $number;
        }

        $arrYears = array_reverse($arrYears, true);
        return $arrYears;
    }

    /**
     * This function returns the social media links.
     */
    public function getConfiguration()
    {
        $getConfigurationList = Yii::app()->db->createCommand()
                ->select('c.*')
                ->from(TABLE_CONFIGURATIONS . ' c')
                ->queryRow();
        return $getConfigurationList;
    }

    /**
     * Function : getMetaTags
     * create the meta-tags for a page based on cmsSlug
     * @access public
     * @param $varCmsSlug
     * @return array
     */
    public function getMetaTags($varCmsSlug = null, $varIsOtherPage = false)
    {
        $criteria = new CDbCriteria;
        if ($varCmsSlug == 'home')
        {
            $criteria->select = 'cmsMetaTitle,cmsMetaKeywords,cmsMetaDescription,cmsPageTitle,cmsDisplayTitle,cmsContent';
            $varPageMetaData = CmsHome::model()->findByPk(1);
        }
        else
        {
            $criteria->select = 'cmsMetaTitle,cmsMetaKeywords,cmsMetaDescription,cmsPageTitle,cmsDisplayTitle,cmsContent';
            $criteria->condition = 'cmsSlug="' . $varCmsSlug . '"';
            $varPageMetaData = Cms::model()->find($criteria);
        }
        // # Title
        if (isset($varPageMetaData->cmsMetaTitle) && $varPageMetaData->cmsMetaTitle != '')
        {
            $this->pageTitle = Yii::app()->params['SiteTitle'] . ' - ' . $varPageMetaData->cmsMetaTitle;
        }
        else
        {
            $this->pageTitle = Yii::app()->params['SiteTitle'];
        }
        // # description
        if (isset($varPageMetaData->cmsMetaDescription) && $varPageMetaData->cmsMetaDescription != '')
        {
            Yii::app()->clientScript->registerMetaTag($varPageMetaData->cmsMetaDescription, 'description', null, array('lang' => 'en'));
        }
        // # keywords
        if (isset($varPageMetaData->cmsMetaKeywords) && $varPageMetaData->cmsMetaKeywords != '')
        {
            Yii::app()->clientScript->registerMetaTag($varPageMetaData->cmsMetaKeywords, 'keywords', null, array('lang' => 'en'));
        }
        if ($varIsOtherPage)
        {
            return $varPageMetaData;
        }
    }

    /*
     * This function covert a slug to seo friendly slug
     */

    function create_slug($phrase, $maxLength = 100000000000000)
    {
        $result = strtolower($phrase);

        $result = preg_replace("/[^A-Za-z0-9\s-._\/]/", "", $result);
        $result = trim(preg_replace("/[\s-]+/", " ", $result));
        $result = trim(substr($result, 0, $maxLength));
        $result = preg_replace("/\s/", "-", $result);

        return $result;
    }

    /*
    * This function get the array of parent categories.
    */
    function findAllParentCategoriesDropDown()
    {
        $resultArr = array();
        $arrResullt = Yii::app()->db->createCommand()
                                    ->select('pkCategoryID,categoryName')
                                    ->from(TABLE_CATEGORIES)
                                    ->where('categoryStatus=:categoryStatus AND fkParentCategoryID=:fkParentCategoryID',array(':categoryStatus'=>'1',':fkParentCategoryID'=>'0'))
                                    ->queryAll();

        foreach ($arrResullt as $result) {
            $resultArr[$result['pkCategoryID']] = $result['categoryName'];
        }
        return $resultArr;
    }

    /*
    * This function add the currency symbol before price amount.
    */
    function addCurrencySymbol($amount){
        return "₦ ".number_format($amount,2);
    }

    /*
    * This function validate the image dimension.
    */
    function validateImageDimension($image,$width,$height){
        $flag = true;
        foreach($image AS $IMG){
            if($IMG){
                $imgDetails = getimagesize($IMG); 

                if($imgDetails[0] != $width || $imgDetails[1] != $height){
                    $flag = false;
                    break;
                }
            }
        }
        return $flag;
    }

    /**
     * Function : change date format
     * Change mm-dd-yyyy format to dd-mm-yyyy format 
     * @access public
     * @param $date
     * @return string
     */
    public function changeDate($date)
    {
        $changedata = $date;
        $parts = explode('-', $changedata);

        // Swapping month to date
        $tmp = $parts['0'];
        $parts['0'] = $parts['1'];
        $parts['1'] = $tmp;

        $tempdate = implode('-', $parts);
        
        $newdate = date('Y-m-d',strtotime($tempdate));

        echo $newdate; 
    }

    /*
    * This function check the product exist in the cart or not.
    */
    function product_exists_in_cart($pid,$sessCart){
        $pid=intval($pid);
        $max=count($sessCart);
        $flag=0;
        for($i=0;$i<$max;$i++){
            if($pid==$sessCart[$i]['dealID']){
                $flag=1;
                break;
            }
        }
        return $flag;
    }
}

?>
