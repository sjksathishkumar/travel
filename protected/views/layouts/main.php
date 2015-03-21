<?php
$varBaseUrl = Yii::app()->baseUrl;
$varControllerName = Yii::app()->getController()->getId();
$varActionName = Yii::app()->controller->action->id;
$varObjRegisterJsCss = Yii::app()->getClientScript();
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title><?php echo $this->pageTitle; ?></title>
    <link rel="shortcut icon" href=<?php echo $varBaseUrl . "/images/favicon.ico" ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,100italic,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
    <script>var SITE_ROOT_URL = '<?php echo $varBaseUrl; ?>';</script>
    <?php
    $varObjRegisterJsCss->registerCssFile($varBaseUrl . "/css/frontend/style.css");
    $varObjRegisterJsCss->registerCssFile($varBaseUrl . "/css/frontend/media.css");
    $varObjRegisterJsCss->registerCssFile($varBaseUrl . "/font/frontent/stylesheet.css");
    $varObjRegisterJsCss->registerCssFile($varBaseUrl . "/css/frontend/owl.carousel.css");
    $varObjRegisterJsCss->registerCssFile($varBaseUrl . "/css/frontend/oowl.theme.css");
    $varObjRegisterJsCss->registerCssFile($varBaseUrl . "/css/frontend/chosen.css");
    //$varObjRegisterJsCss->registerCssFile($varBaseUrl . "/assets/front/fancybox/jquery.fancybox.css?v=2.1.5");
    $varObjRegisterJsCss->registerCssFile($varBaseUrl . "/css/frontend/jquery.checkradios.css");
    $varObjRegisterJsCss->registerCssFile($varBaseUrl . "/assets/front/fancybox/jquery.fancybox.css");
    ?> 

</head>
<body>

    <?php $this->widget('application.components.front.header'); ?>
    
    <?php echo $content; ?>
    
    <?php $this->widget('application.components.front.footer'); ?>
    <?php $this->widget('application.components.front.popupLogin'); ?> 

  
    <?php
    //$varObjRegisterJsCss->registerCssFile($varBaseUrl . "/css/frontend/datepicker.css");
    $varObjRegisterJsCss->registerCssFile($varBaseUrl . "/css/frontend/stylish-select.css");
    $varObjRegisterJsCss->registerScriptFile($varBaseUrl . "/js/front/jquery.js");
    $varObjRegisterJsCss->registerScriptFile($varBaseUrl . "/js/front/jquery.stylish-select.js"); 
    //$varObjRegisterJsCss->registerScriptFile($varBaseUrl . "/js/front/datepicker-jquery-ui.js");
    $varObjRegisterJsCss->registerScriptFile($varBaseUrl . "/js/front/owl.carousel.js");
    //$varObjRegisterJsCss->registerScriptFile($varBaseUrl . "/js/front/custom.js");
    $varObjRegisterJsCss->registerScriptFile($varBaseUrl . "/js/custom.js");
    $varObjRegisterJsCss->registerScriptFile($varBaseUrl . "/js/front/chosen.jquery.js");
    $varObjRegisterJsCss->registerScriptFile($varBaseUrl . "/assets/front/fancybox/jquery.fancybox.js?v=2.1.5");
    $varObjRegisterJsCss->registerScriptFile($varBaseUrl . "/js/front/jquery.checkradios.js");
    $varObjRegisterJsCss->registerScriptFile($varBaseUrl . "/js/front/validation/jquery.validate.min.js");
    $varObjRegisterJsCss->registerScriptFile($varBaseUrl . "/js/front/validation/validate.js"); 
    $varObjRegisterJsCss->registerScriptFile($varBaseUrl . "/js/front/validation/messages.js"); 
    $varObjRegisterJsCss->registerScriptFile($varBaseUrl . "/js/plugins/fileupload/bootstrap-fileupload.min.js"); 
    ?>
</body>
</html>