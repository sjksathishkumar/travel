<?php
$varBaseUrl = Yii::app()->baseUrl;
?>
<!-- Top Header Start From Here -->
    <div class="top-nav">
        <div class="container">
            <div class="top-outer">
                <div class="logo-outer">
                        <?php 
                            $logo = CHtml::image(Yii::app()->baseUrl.UPLOAD_FOLDER.LOGO_FOLDER.$socalLinks['logoImage'],$socalLinks['logoAltTag']);
                            echo CHtml::link($logo, array('homepage/index'),array('class' => 'logo')); 
                        ?>
                </div>
                <div class="top-right">
                    <div class="top-social">
                        <ul>
                            <li><?php echo CHtml::link(CHtml::image($varBaseUrl . "/images/facebook.png", "facebook", array('title' => 'facebook')),$socalLinks['configurationSocialLink1'])?></li>
                            <li><?php echo CHtml::link(CHtml::image($varBaseUrl . "/images/twitter.png", "twitter", array('title' => 'twitter')),$socalLinks['configurationSocialLink2'])?></li>
                            <li><?php echo CHtml::link(CHtml::image($varBaseUrl . "/images/google.png", "google", array('title' => 'google')),$socalLinks['configurationSocialLink3'])?></li>
                            <li><?php echo CHtml::link(CHtml::image($varBaseUrl . "/images/youtube.png", "youtube", array('title' => 'youtube')),$socalLinks['configurationSocialLink4'])?></li>
                        </ul>
                    </div>
                    <div class="top-login-outer">                       
                        <div class="top-login">
                            <ul>
                                <li class="margin"><div class="member-signup" href="#">Members
                                <span class="h-divider"><?php echo CHtml::image($varBaseUrl . "/images/h-divider.png"); ?></span></div>
                                </li>
                                <li><a href="#">Signup</a>
                                <span class="h-divider"><?php echo CHtml::image($varBaseUrl . "/images/top-divider.png"); ?></span>
                                </li>
                                <li><a class="fancybox" href="#member-login">Login</a></li>
                            </ul>
                        </div>
                        <div class="top-login">
                            <ul>
                                <li><div class="partner-signup" href="#">Partners
                                <span class="h-divider"><?php echo CHtml::image($varBaseUrl . "/images/h-divider.png"); ?></span></div>
                                </li>
                                <li><a href="#">Signup
                                <span class="h-divider"><?php echo CHtml::image($varBaseUrl . "/images/top-divider.png"); ?></span></a>
                                </li>
                                <li><a class="fancybox" href="#partner-login">Login</a>
                                                                        
                                </li>                                   
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Top Header End Here -->