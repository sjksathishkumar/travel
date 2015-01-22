<?php $siteUrl = Yii::app()->baseUrl;?>
<div class="breadcrumb">
    <div class="layout">
        <ul>
            <li><?php echo CHtml::link('Home',$siteUrl,array('title'=>'Home'));?>&raquo;</li>
            <li class="active"><?php echo ucfirst($varPageData->cmsDisplayTitle);?></li>
        </ul>
    </div>
</div>
<div class="body_container cms_container">
    <div class="layout">
        <div class="cms_box">
            <h3 class="head"><?php echo $varPageData->cmsPageTitle; ?></h3>
            <?php echo $varPageData->cmsContent; ?>
        </div>      
    </div>
</div>