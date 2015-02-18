<?php
    $varBaseUrl = Yii::app()->baseUrl;
    $data = array();
    $data['mascots'] = Mascots::model()->findAllByAttributes(array('mascotStatus'=>'1'));
?>

<!-- Create Account Part Start From Here -->
<div class="container">
    <div class="full-box">
    <div class="membership-plan-outer">
        <div class="left-box-services">
            <div class="services-outer">
                <ul>
                    <li>                        
                        <div class="service-img">
                            <?php echo CHtml::image($varBaseUrl.UPLOAD_FOLDER.MASCOTS_FOLDER.$data['mascots']['0']['mascotImage'],$data['mascots']['0']['mascotAltTag'],array('width'=>139,'height'=>139)); ?>
                        </div>
                        <div class="service-box">
                            <a href="" class="service-title">
                                <?php echo $data['mascots']['0']['mascotName']; ?>                                                                
                            </a>
                            <div class="title-arrow"></div> 
                        </div>
                    </li>
                    <li>
                        <div class="service-img">
                            <?php echo CHtml::image($varBaseUrl.UPLOAD_FOLDER.MASCOTS_FOLDER.$data['mascots']['1']['mascotImage'],$data['mascots']['1']['mascotAltTag'],array('width'=>139,'height'=>139)); ?>
                        </div>
                        <div class="service-box">
                            <a href=""  class="service-title">
                                <?php echo $data['mascots']['1']['mascotName']; ?>                                                             
                            </a>
                            <div class="title-arrow"></div> 
                        </div>
                    </li>
                    <li>
                        <div class="service-img">
                            <?php echo CHtml::image($varBaseUrl.UPLOAD_FOLDER.MASCOTS_FOLDER.$data['mascots']['2']['mascotImage'],$data['mascots']['2']['mascotAltTag'],array('width'=>139,'height'=>139)); ?>
                        </div>
                        <div class="service-box">
                            <a href=""  class="service-title">
                                <?php echo $data['mascots']['2']['mascotName']; ?>                                                                  
                            </a>
                            <div class="title-arrow"></div> 
                        </div>
                    </li>
                    <li>
                        <div class="service-img">
                            <?php echo CHtml::image($varBaseUrl.UPLOAD_FOLDER.MASCOTS_FOLDER.$data['mascots']['3']['mascotImage'],$data['mascots']['3']['mascotAltTag'],array('width'=>139,'height'=>139)); ?>
                        </div>
                        <div class="service-box">
                            <a href=""  class="service-title">
                                <?php echo $data['mascots']['3']['mascotName']; ?>                                                                    
                            </a>
                            <div class="title-arrow"></div> 
                        </div>
                    </li>
                    <li>
                        <div class="service-img">
                            <?php echo CHtml::image($varBaseUrl.UPLOAD_FOLDER.MASCOTS_FOLDER.$data['mascots']['4']['mascotImage'],$data['mascots']['4']['mascotAltTag'],array('width'=>166,'height'=>166)); ?>
                        </div>
                        <div class="service-box">
                            <a href=""  class="service-title">
                                <?php echo $data['mascots']['4']['mascotName']; ?>
                            </a>
                            <div class="title-arrow"></div> 
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="right-box-outer">
        <div class="member-create-account">
            <div class="about-travelogini">
                <div class="about-left"><?php echo CHtml::image($varBaseUrl . "/images/design-left.png"); ?></div>
                <div class="travelogini-heading"><?php echo ucfirst($varPageData->cmsPageTitle);?></div>
                <div class="about-right"><?php echo CHtml::image($varBaseUrl . "/images/design-right.png"); ?></div>
            </div>
            <div class="about-us-outer">
                <div class="faq-box">
                    <p>
                        <?php echo $varPageData->cmsContent; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
<!-- Create Account Part End Here -->
    
    
    