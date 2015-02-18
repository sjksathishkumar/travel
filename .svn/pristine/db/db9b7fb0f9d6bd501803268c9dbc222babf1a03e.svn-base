<?php $siteUrl = Yii::app()->baseUrl; ?>
<?php $dealDetails = $data['dealDetails'][0]; ?>
<?php //$this->widget('application.components.front.innerPageBanner'); ?>
<div class="breadcrumb">
    <div class="layout">
        <ul>
            <li><?php echo CHtml::link('Home', $siteUrl,array('title'=>'Home')); ?>&raquo;</li>
            <li><?php echo CHtml::link(ucfirst($dealDetails['categoryName']), $siteUrl.'/category/'.CommonFunctions::create_slug($dealDetails['categoryName']),array('title'=>ucfirst($dealDetails['categoryName']))); ?>&raquo;</li>
            <li class="active"><?php echo ucfirst($dealDetails->dealName); ?></li>
        </ul>
    </div>
</div>
<div class="body_container">
    <div class="layout">
        <h3 class="head"><?php echo $dealDetails->dealName; ?></h3>
        <div class="left-container">
            <div class="people_head"><h3><span>80</span><small>people bought this deal</small></h3></div>
            <div class="web_sec feeds">
                <h2 class="web_head">Website Live Feed</h2>
                <ul class="web_inner">
                    <li><a href="#">87XXXXXXX2 just downloaded a VLCC coupon and saved 78%</a></li>
                    <li><a href="#">87XXXXXXX2 just downloaded a VLCC coupon and saved 78%</a></li>
                    <li><a href="#">87XXXXXXX2 just downloaded a VLCC coupon and saved 78%</a></li>
                    <li class="last"><a href="#">87XXXXXXX2 just downloaded a VLCC coupon and saved 78%</a></li>
                </ul>
            </div>
            <?php
            if (count($data['relatedDeals']) > 0)
            {
                ?>
                <div class="web_sec rel_deals">
                    <h2 class="web_head">Related Deals</h2>
                    <ul class="web_inner">
                        <?php
                        foreach ($data['relatedDeals'] AS $relatedDeal)
                        {
                            ?>
                            <li>
                                <span><?php echo CHtml::image($siteUrl . UPLOAD_FOLDER . DEAL_FOLDER .'80X70/'. $relatedDeal->dealImagePath); ?></span>
                                <p><?php echo CHtml::link($relatedDeal->dealName, $siteUrl . '/deals/' . $relatedDeal->pkDealID,array('title'=>$relatedDeal->dealName)); ?></p>
                                <strong><?php echo CommonFunctions::addCurrencySymbol($relatedDeal->dealPrice); ?></strong>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>
        </div> 
        <div class="right-container">
            <?php $form=$this->beginWidget('CActiveForm', array(
                                                            'id'=>'addToCartForm',
                                                            'enableAjaxValidation'=>false,
                                                            'method'=>'post',
                                                            'action'=>Yii::app()->baseUrl.'/shoppingcart/add',
                                                            'htmlOptions'=>array(
                                                                    'novalidate'=>'novalidate',
                                                            ),
                                                        )
                                    );?>
                <div class="item_description">
                    <div class="item_description_L">
                        <section class="slider">
                            <div id="slider" class="flexslider">
                                <div class="offer1"><?php echo $dealDetails->dealDiscount; ?>% Off</div> <ul class="slides">
                                    <?php
                                    foreach ($data['dealDetails'] as $dealImages)
                                    {
                                        ?>
                                        <li>
                                            <?php
                                            echo CHtml::image($siteUrl . UPLOAD_FOLDER . DEAL_FOLDER .'285X280/'. $dealImages->dealImagePath, $dealImages->dealImageAlt, array('title' => $dealImages->dealImageAlt));
                                            ?>
                                           
                                        </li>
                                        <?php
                                    }
                                    ?>                              
                                </ul>
                            </div>
                            <div id="carousel" class="flexslider" style="background:#e0e0e0; padding-right:28px; padding-left:28px; margin-top:10px; ">
                                <ul class="slides">
                                    <?php
                                    foreach ($data['dealDetails'] as $dealImages)
                                    {
                                        ?>
                                        <li>
                                            <?php
                                            echo CHtml::image($siteUrl . UPLOAD_FOLDER . DEAL_FOLDER .'58X48/'. $dealImages->dealImagePath, $dealImages->dealImageAlt, array('title' => $dealImages->dealImageAlt, 'width' => '58px', 'height' => '48px'));
                                            ?>
                                        </li>
                                        <?php
                                    }
                                    ?> 
                                </ul>
                            </div>
                        </section>
                    </div>
                    <ul class="item_description_R">
                        <?php
                        if (!empty($dealDetails->dealAddress))
                        {
                            ?>
                            <li>
                                <span class="left">Address:</span>
                                <span class="right" id="dealAddress"><?php echo $dealDetails->dealAddress; ?></span>
                            </li>
                            <li>
                                <span class="left">Map View:</span>
                                <span class="right">
                                    <?php echo CHtml::link('Click here to view on Map', 'javascript:void(0)', array('class' => 'map_icon', 'id' => 'showInMap','title'=>'Click here to view on Map')); ?>
                                </span>
                                <div id="map">
                                    <div id="close">Close</div>
                                    <div id="map1">Address not found on the map.</div>
                                </div>
                            </li>
                        <?php } ?>
                        <?php
                        if (!empty($dealDetails->dealUsageTimings))
                        {
                            ?>
                            <li>
                                <span class="left">Time:</span>
                                <span class="right"><?php echo $dealDetails->dealUsageTimings; ?></span>
                            </li>
                        <?php } ?>
                        <?php
                        $time = 0;
                        if (!empty($dealDetails->dealEndDate))
                        {
                            $time = $dealDetails->dealEndDate - time();
                            ?>
                            <li>
                                <span class="left">Grab the Deal:</span>
                                <span class="right"><span class="hours_icon"><?php echo ($time) * 1000; ?></span></span>
                            </li>
                        <?php } ?>
                        <?php
                        if (!empty($dealDetails->dealOriginalPrice))
                        {
                            ?>
                            <li>
                                <span class="left">Original Price:</span>
                                <span class="right"><?php echo CommonFunctions::addCurrencySymbol($dealDetails->dealOriginalPrice); ?></span>
                            </li>
                            <li>
                                <span class="left">You Save:</span>
                                <span class="right"><?php echo CommonFunctions::addCurrencySymbol($dealDetails->dealOriginalPrice - $dealDetails->dealPrice); ?></span>
                            </li>
                            <li>
                                <span class="left">You Pay:</span>
                                <span class="right"><?php echo CommonFunctions::addCurrencySymbol($dealDetails->dealPrice); ?></span>
                            </li>
                        <?php } ?>
                        <?php
                        if(!($time<0) && !isset($data['isAdmin'])){
                            if ($dealDetails->dealQuantity > 0)
                            {
                                $qty = $dealDetails->dealQuantity;
                                $arrQtyRange = array_slice(range(0, 10), 1, NULL, TRUE);
                                ?>
                                <li class="qty">
                                    <span class="left">Quantity:</span>
                                    <span class="right">
                                        <span class="quality">
                                            <?php echo CHtml::dropDownList('dealQuantity', '', $arrQtyRange, array('class' => 'select-cat')); ?>
                                        </span>
                                    </span>
                                </li>
                            <?php } ?>
                            <?php echo CHtml::hiddenField('dealID',$dealDetails->pkDealID);?>
                            <li class="buy-now"><?php echo CHtml::submitButton('BUY NOW', array('name' => 'submit', 'class' => 'small_submit_btn','title'=>'BUY NOW')) ?></li>
                        <?php }?>
                    </ul>
                </div>
            <?php $this->endWidget();?>
            <ul class="tab_sec tab">
                <li><?php echo CHtml::link('Product Description', '#tab1',array('title'=>'Product Description')); ?></li>
                <li><?php echo CHtml::link('Highlights', '#tab2',array('title'=>'Highlights')); ?></li>
                <li><?php echo CHtml::link('Fine Print', '#tab3',array('title'=>'Fine Print')); ?></li>
            </ul>
            <div class="detail_sec tab_container" id="tab1">
                <?php
                if (!empty($dealDetails->dealDescription))
                {
                    ?><p><?php echo $dealDetails->dealDescription; ?></p><?php } ?>
            </div>
            <div class="detail_sec tab_container" id="tab2">
                <?php
                if (!empty($dealDetails->dealHighlights))
                {
                    ?><p><?php echo $dealDetails->dealHighlights; ?></p><?php } ?>
            </div>
            <div class="detail_sec tab_container" id="tab3">
                <?php
                if (!empty($dealDetails->dealFineprints))
                {
                    ?><p><?php echo $dealDetails->dealFineprints; ?></p><?php } ?>
            </div>
            <div class="review_sec">
                <h3>Write your own Review</h3>
                <ul class="review_inner">
                    <?php foreach ($data['reviews'] as $review) {?>
                        <li>
                            <span class="review_left"><?php echo CHtml::image($siteUrl . '/images/blank-img.png'); ?></span>
                            <div class="review_right">
                                <div class="rating_outer">
                                    <h6><?php echo $review->reviewSubject;?></h6>
                                    <?php /*<div class="rating_gray"><div class="rating_gold" style="width: 80%"></div></div>*/?>
                                </div>
                                <p><?php echo $review->reviewContent;?></p>
                            </div>
                        </li>
                    <?php }?>
                </ul>
                <span class="paging pager-outer">
                    <?php 
                        $pager = $this->widget('CLinkPager', array(
                                  'pages'=>$data['pages'],
                                  'header'=>'<span>per page</span>',
                                  'maxButtonCount'=>2,
                                  'prevPageLabel'=>'<',
                                  'nextPageLabel'=>'>',
                                  'htmlOptions'=>array(
                                        'class'=>'pagination review-pagination',
                                        'style'=>'float:right;'
                                    ),
                            ));
                    ?>
                </span>
                <?php $this->beginWidget('CActiveForm', array(
                                        'id' => 'deals-review-form',
                                        'action'=>Yii::app()->createUrl('/deals/ajaxReview'),
                                        'enableAjaxValidation' => true,
                                        'method'=>'post',
                                        'htmlOptions' => array(
                                            'class' => 'form-horizontal form-bordered validate-form',
                                        )
                                    ));?>
                    <ul class="review_form">
                        <li>
                            <div class="left"><?php echo CHtml::textField('nickname','',array('placeholder'=>'* Nickname','class'=>'requiredField'));?></div>
                            <div class="right"><?php echo CHtml::textField('summary','',array('placeholder'=>'* Summary of Your Review','class'=>'right requiredField'));?></div>
                        </li>
                        <li>
                            <?php echo CHtml::textArea('review','',array('placeholder'=>'* Review','cols'=>5, 'rows'=>5,'class'=>'requiredField'));?>
                            <?php echo CHtml::hiddenField('deal_id',$dealDetails->pkDealID);?>
                        </li>
                        <li><?php echo CHtml::submitButton('Submit Review',array('class'=>'submit_btn'));?></li>
                    </ul>
                    <div class="success_msg"></div>
                    <div class="validation_errors"></div>
                <?php $this->endWidget();?>
            </div>
        </div>
        <?php $this->widget('application.components.front.newsletterSubscriptionForm'); ?>
    </div>
</div>