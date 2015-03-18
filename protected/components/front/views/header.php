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
                    <?php if(isset(Yii::app()->user->isCustomer)){?>
                     <div class="top-login-outer">
                            <div class="top-login">
                                <ul>
                                    <li>Welcome <?php echo Yii::app()->user->userFirstName; ?>&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    <li><?php echo CHtml::link('My Account',$varBaseUrl.'/member/dashboard',array('title'=>'My Account','alt'=>'My Account'));?>&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    <li><?php echo CHtml::link('Logout',$varBaseUrl.'/member/logout',array('title'=>'Logout','alt'=>'Logout'));?></li>                                   
                                </ul>
                            </div>
                    </div>
                    <?php } elseif (isset(Yii::app()->user->isCityPartner)) { ?>
                    <div class="top-login-outer">
                            <div class="top-login">
                                <ul>
                                    <li>Welcome <?php echo Yii::app()->user->cityPartnerFirstName; ?>&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    <li><?php echo CHtml::link('My Account',$varBaseUrl.'/cityPartner/dashboard/index',array('title'=>'My Account','alt'=>'My Account'));?>&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    <li><?php echo CHtml::link('Logout',$varBaseUrl.'/propertyPartner/basic/logout',array('title'=>'Logout','alt'=>'Logout'));?></li>                                   
                                </ul>
                            </div>
                    </div>
                    <?php } elseif (isset(Yii::app()->user->isPropertyPartner)) { ?>
                    <div class="top-login-outer">
                            <div class="top-login">
                                <ul>
                                    <li>Welcome <?php echo Yii::app()->user->propertyPartnerFirstName; ?>&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    <li><?php echo CHtml::link('My Account',$varBaseUrl.'/propertyPartner/dashboard/index',array('title'=>'My Account','alt'=>'My Account'));?>&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    <li><?php echo CHtml::link('Logout',$varBaseUrl.'/propertyPartner/basic/logout',array('title'=>'Logout','alt'=>'Logout'));?></li>                                   
                                </ul>
                            </div>
                    </div>
                    <?php }else{?>
                    <div class="top-login-outer">                       
                        <div class="top-login">
                            <ul>
                                <li class="margin"><div class="member-signup" href="#">Members
                                <span class="h-divider"><?php echo CHtml::image($varBaseUrl . "/images/h-divider.png"); ?></span></div>
                                </li>
                                <li><?php echo CHtml::link('Signup',$varBaseUrl.'/member/memberSignup',array('title'=>'Singup','alt'=>'Singup'));?>
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
                                             
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<!-- Top Header End Here -->