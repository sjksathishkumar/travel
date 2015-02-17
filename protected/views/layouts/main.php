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
    <?php
    $varObjRegisterJsCss->registerCssFile($varBaseUrl . "/css/frontend/style.css");
    $varObjRegisterJsCss->registerCssFile($varBaseUrl . "/css/frontend/media.css");
    $varObjRegisterJsCss->registerCssFile($varBaseUrl . "/font/frontent/stylesheet.css");
    $varObjRegisterJsCss->registerCssFile($varBaseUrl . "/css/frontend/owl.carousel.css");
    $varObjRegisterJsCss->registerCssFile($varBaseUrl . "/css/frontend/oowl.theme.css");
    $varObjRegisterJsCss->registerCssFile($varBaseUrl . "/css/frontend/chosen.css");
    //$varObjRegisterJsCss->registerCssFile($varBaseUrl . "/assets/front/fancybox/jquery.fancybox.css?v=2.1.5");
    $varObjRegisterJsCss->registerCssFile($varBaseUrl . "/css/frontend/jquery.checkradios.css");
    //$varObjRegisterJsCss->registerCssFile($varBaseUrl . "/css/frontend/jquery.fancybox.css");
    ?> 
    <link rel="stylesheet" type="text/css" href="/assets/front/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
</head>
<body>

    <?php $this->widget('application.components.front.header'); ?>
    
    <?php echo $content; ?>
    
    <?php $this->widget('application.components.front.footer'); ?>

    <div class="login-popup" id="member-login">
        <div class="login-heading"> Members Login </div>
        <ul class="acc-login">
                <li><p>Members ID<span class="required">*</span></p><input type="text" name="email" value="" placeholder="12345678" /></li>
                <li><p>Password<span class="required">*</span></p><input type="password" name="email" value="" placeholder="*********" /></li>
                <li class="acc-login">
                    <input type="checkbox"  class="radio">
                    <label for="remember">Remember Me</label>
                    <div class="forgotpass"><input type="button" name="forgotpassword" value="" />Forgot Password</div>
                </li>
                <li>
                    <div class="login-btn">
                        <input type="submit" name="submit" value="Login" />
                    </div>
                </li>
            </ul>
    </div>
        <div class="login-popup" id="partner-login">
        <div class="login-heading"> Partners Login </div>
        <ul class="acc-login">
                <li><p>Partners ID<span class="required">*</span></p><input type="text" name="email" value="" placeholder="12345678" /></li>
                <li><p>Password<span class="required">*</span></p><input type="password" name="email" value="" placeholder="*********" /></li>
                <li class="acc-login">
                    <input type="checkbox"  class="radio">
                    <label for="remember">Remember Me</label>
                    <div class="forgotpass"><input type="button" name="forgotpassword" value="" />Forgot Password</div>
                </li>
                <li>
                    <div class="login-btn">
                        <input type="submit" name="submit" value="Login" />
                    </div>
                </li>
            </ul>
    </div>
    <div class="login-popup forgotpassword">
        <div class="login-heading"> Forgot Password </div>
            <p>Please enter your email ID below. We will send you a link to reset your password.</p>
        <ul class="acc-login">
                <li><p>Email<span class="required">*</span></p><input type="text" name="email" value="" placeholder="example@example.com" /></li>
                
                <li>
                    <div class="login-btn">
                        <input type="submit" name="submit" value="Send Email" />
                    </div>
                </li>
            </ul>
    </div>
    <?php
    $varObjRegisterJsCss->registerCssFile($varBaseUrl . "/css/frontend/datepicker.css");
    $varObjRegisterJsCss->registerCssFile($varBaseUrl . "/css/frontend/stylish-select.css");
    $varObjRegisterJsCss->registerScriptFile($varBaseUrl . "/js/front/jquery.stylish-select.js");
    $varObjRegisterJsCss->registerScriptFile($varBaseUrl . "/js/front/jquery.js");
    $varObjRegisterJsCss->registerScriptFile($varBaseUrl . "/js/front/datepicker-jquery-ui.js");
    $varObjRegisterJsCss->registerScriptFile($varBaseUrl . "/js/front/owl.carousel.js");
    $varObjRegisterJsCss->registerScriptFile($varBaseUrl . "/js/front/custom.js");
    $varObjRegisterJsCss->registerScriptFile($varBaseUrl . "/js/front/chosen.jquery.js");
    $varObjRegisterJsCss->registerScriptFile($varBaseUrl . "/assets/front/fancybox/jquery.fancybox.js?v=2.1.5");
    $varObjRegisterJsCss->registerScriptFile($varBaseUrl . "/js/front/jquery.checkradios.js");
    ?>
</body>
</html>