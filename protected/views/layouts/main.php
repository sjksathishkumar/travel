<?php
$varBaseUrl = Yii::app()->baseUrl;
$varControllerName = Yii::app()->getController()->getId();
$varActionName = Yii::app()->controller->action->id;
$varObjRegisterJsCss = Yii::app()->getClientScript();
?>
<!DOCTYPE html>
<head>
    <title><?php echo $this->pageTitle; ?></title>
    <link rel="shortcut icon" href=<?php echo $varBaseUrl . "/images/favicon.ico" ?>>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'> 
    <?php
    $varObjRegisterJsCss->registerCssFile($varBaseUrl . "/css/jquery.bxslider.css");
    $varObjRegisterJsCss->registerCssFile($varBaseUrl . "/css/css3.css");
    $varObjRegisterJsCss->registerCssFile($varBaseUrl . "/css/custom-select.css");
    $varObjRegisterJsCss->registerCssFile($varBaseUrl . "/css/owl.carousel.css");
    $varObjRegisterJsCss->registerCssFile($varBaseUrl . "/css/layout.css");
    $varObjRegisterJsCss->registerCssFile($varBaseUrl . "/css/css3.css");
    $varObjRegisterJsCss->registerCssFile($varBaseUrl . "/css/responsive.css");
    $varObjRegisterJsCss->registerCssFile($varBaseUrl . "/css/plugins/slider/flexslider.css");
    $varObjRegisterJsCss->registerCssFile($varBaseUrl . "/css/jquery.fancybox.css");
    ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $varBaseUrl; ?>/css/layout.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $varBaseUrl; ?>/css/css3.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $varBaseUrl; ?>/css/responsive.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $varBaseUrl; ?>/css/mgmenu.css" media="screen"/>
    <script>var SITE_ROOT_URL = '<?php echo $varBaseUrl; ?>';</script>
    <?php
    $varObjRegisterJsCss->registerScriptFile($varBaseUrl . "/js/html5shiv.js");
    $varObjRegisterJsCss->registerScriptFile($varBaseUrl . "/js/jquery-1.9.1.min.js");
    $varObjRegisterJsCss->registerScriptFile($varBaseUrl . "/js/megamenu-scripts.js");
    $varObjRegisterJsCss->registerScriptFile($varBaseUrl . "/js/custom-select.js");
    $varObjRegisterJsCss->registerScriptFile($varBaseUrl . "/js/jquery.bxslider.min.js");
    $varObjRegisterJsCss->registerScriptFile($varBaseUrl . "/js/owl.carousel.js");
    $varObjRegisterJsCss->registerScriptFile($varBaseUrl . "/js/checkboxradiojs.js");
    $varObjRegisterJsCss->registerScriptFile($varBaseUrl . "/js/custom.js");
    $varObjRegisterJsCss->registerScriptFile($varBaseUrl . "/js/slider/jquery.flexslider.js");
    $varObjRegisterJsCss->registerScriptFile($varBaseUrl . "/js/slider/jquery.flexslider-min.js");
    $varObjRegisterJsCss->registerScriptFile('http://maps.google.com/maps/api/js?sensor=false');
    $varObjRegisterJsCss->registerScriptFile($varBaseUrl . "/js/jquery.fancybox.js");

    $varObjRegisterJsCss->registerScriptFile($varBaseUrl . "/js/front/messages.js");
    $varObjRegisterJsCss->registerScriptFile($varBaseUrl . "/js/front/jquery.validate.js");
    $varObjRegisterJsCss->registerScriptFile($varBaseUrl . "/js/front/validate.js");    

    ?>
    <script>
        $(document).ready(function($){
            $('#mgmenu1').universalMegaMenu({
                menu_effect: 'hover_fade',
                menu_speed_show: 300,
                menu_speed_hide: 200,
                menu_speed_delay: 200,
                menu_click_outside: false,
                menubar_trigger : false,
                menubar_hide : false,
                menu_responsive: true
            });
            megaMenuContactForm();
        });
    </script>
</head>
<body>
    <header class="header">
        <div class="header_top">
            <div class="layout">
                <div class="top-menu">
                    <ul>
                        <li class="ico-hm"><?php echo CHtml::link('Home', $varBaseUrl,array('title'=>'Home','alt'=>'Home')); ?></li>
                        <?php if(isset(Yii::app()->user->isCustomer)){?>
                            <li class="ico-ac"><?php echo CHtml::link('My Account',$varBaseUrl.'/customer/dashboard',array('title'=>'My Account'));?></li>
                        <?php } ?>
                        <li class="ico-sh"><?php echo CHtml::link('Shopping Cart',$varBaseUrl.'/shoppingcart',array('title'=>'Shopping Cart'));?></li>
                        <li class="ico-ch"><?php echo CHtml::link('Checkout',$varBaseUrl.'/checkout',array('title'=>'Checkout'));?></li>
                        <li><?php 
                        $arrCityList = array();
                        $cityList = City::model()->findAll();
                        foreach ($cityList as $city) {
                            $arrCityList[$city->pkCityID] = $city->cityName;
                        }
                        if(isset($_GET['cityId'])){
                            $cityID = $_GET['cityId'];
                        }else{
                            $cityID = '0';
                        }
                        echo CHtml::dropDownList('city',$cityID,$arrCityList,array('empty'=>'-select city-','class'=>'select-cat'));?></li>         
                        <?php if(!isset(Yii::app()->user->isCustomer)){?>
                            <li><?php echo CHtml::link('Login','#user-login',array('class'=>'log-btn fancybox','title'=>'Login','alt'=>'Login','id'=>'loginuser'));?></li>
                            <li><?php echo CHtml::link('Create an account','#user-registration',array('class'=>'cre-btn fancybox','title'=>'Create an account','alt'=>'Create an account'));?></li>
                        <?php }else{?>
                            <li><?php echo CHtml::link('Logout',$varBaseUrl.'/customer/logout',array('class'=>'log-btn','title'=>'Logout','alt'=>'Logout'));?></li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header_midle">
            <div class="layout">
                <?php echo CHtml::link(CHtml::image($varBaseUrl . "/images/brand.png", 'Travelogini', array('title' => 'Travelogini')), $varBaseUrl, array('class' => 'logo')); ?>
            </div>
        </div>
        <div class="clear"></div>
        <?php $this->widget('application.components.front.topCategoryMenu'); ?>
    </header>
    <?php echo $content; ?>
    <div class="clear"></div>
    <footer class="footer">
        <div class="layout">
            <div class="footer_top">
                <div class="footer_col">
                    <h3>Information </h3>
                    <ul>
                        <?php
                        $arrCmsPages = Yii::app()->db->createCommand()
                                        ->select('cmsSlug,cmsDisplayTitle')->from(TABLE_CMS)
                                        ->where('cmsIsPage=:cmsIsPage AND cmsStatus=:cmsStatus', array(':cmsIsPage' => '1', ':cmsStatus' => '1'))
                                        ->group('pkCmsID')->queryAll();

                        if (count($arrCmsPages) > 0)
                        {
                            foreach ($arrCmsPages as $value)
                            {
                                $varLink = 'pages/' . $value['cmsSlug'];
                                ?>
                                <li><?php echo CHtml::link($value['cmsDisplayTitle'],Yii::app()->createUrl($varLink),array('title'=>$value['cmsDisplayTitle']));?></li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
                <div class="footer_col">
                    <h3>Deals </h3>
                    <ul>
                        <?php $mainCategories = Category::model()->findAllByAttributes(array('categoryStatus' => '1', 'categoryLevel' => '0')); ?>
                        <?php
                        foreach ($mainCategories as $category)
                        {
                            ?>
                            <li><?php echo CHtml::link($category->categoryName, $varBaseUrl . '/category/' . $category->categorySlug,array('title'=>$category->categoryName)); ?></li>
                        <?php } ?>
                        <li><?php echo CHtml::link('Featured', $varBaseUrl . '/category/featured',array('title'=>'Featured')); ?></li>
                    </ul>
                </div>
                <div class="footer_col">
                    <h3>Payment Options </h3>
                    <ul>
                        <li><figure><?php echo CHtml::image($varBaseUrl.'/images/visa1.png');?></figure>
                            <figure><?php echo CHtml::image($varBaseUrl.'/images/visa2.png');?></figure>
                        </li>
                        <li><figure><?php echo CHtml::image($varBaseUrl.'/images/visa3.png');?></figure>
                            <figure><?php echo CHtml::image($varBaseUrl.'/images/visa4.png');?></figure>
                        </li>
                    </ul>
                </div>
                <?php $socialMediaLinks = CommonFunctions::getConfiguration(); ?>
                <div class="footer_col last">
                    <h3>About Awoofde</h3>
                    <ul>
                        <li>Duis at nisl quis quam condimentum pulvinar. Quisque euismod convallis eros, quis lacinia enim rhoncus sed.</li>
                        <?php
                        if (!empty($socialMediaLinks['configurationContact']))
                        {
                            ?><li><span class="phone_icon">Phone: <?php echo $socialMediaLinks['configurationContact']; ?></span></li><?php } ?>
                        <?php
                        if (!empty($socialMediaLinks['configurationEmail']))
                        {
                            ?><li><span class="email_icon"><?php echo CHtml::link('Email: '.$socialMediaLinks['configurationEmail'],'mailto:'.$socialMediaLinks['configurationEmail']); ?></a></span></li><?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="layout">
                <p>Copyright &#169; <?php echo date('Y'); ?> Travelogini. All rights reserved.</p>
                <ul>
                    <li><?php echo CHtml::link(Chtml::image($varBaseUrl . "/images/f_icon1.png", "facebook", array('title' => 'facebook')), $socialMediaLinks['configurationSocialLink1']); ?></li>
                    <li><?php echo CHtml::link(Chtml::image($varBaseUrl . "/images/f_icon2.png", "twitter", array('title' => 'twitter')), $socialMediaLinks['configurationSocialLink2']); ?></li>
                    <li><?php echo CHtml::link(Chtml::image($varBaseUrl . "/images/f_icon3.png", "linkedin", array('title' => 'linkedin')), $socialMediaLinks['configurationSocialLink3']); ?></li>
                    <li><?php echo CHtml::link(Chtml::image($varBaseUrl . "/images/f_icon4.png", "google plus", array('title' => 'google plus')), $socialMediaLinks['configurationSocialLink4']); ?></li>
                    <li><?php echo CHtml::link(Chtml::image($varBaseUrl . "/images/f_icon5.png", "pintrest", array('title' => 'pintrest')), $socialMediaLinks['configurationSocialLink5']); ?></li>
                </ul>
            </div>
        </div>
    </footer>
    <div class="gotop" title="Go To Top"></div>
    <div class="loader-holder">
        <?php echo CHtml::image($varBaseUrl . "/images/loader.gif", 'loader', array("width" => "80", "height" => "80")); ?>
    </div>
    <!--Registration Popup Start Here-->
        <?php $this->widget('application.components.front.topUserRegistrationPopup'); ?>
    <!--Registration Popup End Here-->
</body>
</html>