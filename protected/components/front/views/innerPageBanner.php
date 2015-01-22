<?php $siteUrl = Yii::app()->baseUrl;?>
<div class="slider-outer">
    <div class="banner">
        <?php echo CHtml::image($siteUrl.'/images/banner-1.jpg','banner',array('title'=>'banner'));?>
    </div>
    <div class="slider-text">
        <div class="layout">
            <div class="top-content">
                <?php $this->widget('application.components.front.mainSearch');?>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>