<?php $siteUrl = Yii::app()->baseUrl;?>
<div class="slider-outer">
    <ul class="bxslider">
        <?php foreach($data['bannerModel'] as $banner) {?>
            <li><?php echo CHtml::image($siteUrl.UPLOAD_FOLDER.BANNERS_FOLDER.$banner->bannerImage,$banner->bannerAltTag,array('title'=>$banner->bannerTitle));?></li>
        <?php }?>
    </ul>
    <div class="slider-text">
        <div class="layout">
            <div class="top-content">
                <h2 class="deal-h">BIG <span>deals</span></h2>
                <h2 class="brnd-h">BIG <span>brands</span></h2>
                <?php $this->widget('application.components.front.mainSearch');?>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<div class="body_container">
    <div class="layout">
        <?php if(count($data['featuredDeals'])>0){?>
        <div class="box-style">
            <div class="owl-carousel">
                <?php foreach ($data['featuredDeals'] as $featuredDeal) {?>
                    <div class="item">
                        <div class="img-box">
                            <?php echo CHtml::image($siteUrl.UPLOAD_FOLDER.DEAL_FOLDER.'284X177/'.$featuredDeal['dealImagePath'],$featuredDeal['dealImageAlt'],array('title'=>$featuredDeal['dealImageAlt']));?>
                            <span class="feature">
                                <?php echo CHtml::image($siteUrl.'/images/feature-img.png','featured',array('title'=>'featured'));?>
                            </span>
                            <?php if($featuredDeal['dealDiscount']){?><span class="offer"><?php echo $featuredDeal['dealDiscount'];?>% Off</span><?php }?>
                            <span class="bot-bg">
                                <?php echo CHtml::image($siteUrl.UPLOAD_FOLDER.CATEGORIES_FOLDER.$featuredDeal['categoryImage'],$featuredDeal['categoryName'],array('alt'=>$featuredDeal['categoryName']));?>
                                <?php echo $featuredDeal['categoryName'];?>
                            </span>
                        </div>
                        <div class="txt-box">
                            <h2><?php echo $featuredDeal['dealName'];?></h2>
                            <p><?php if(strlen($featuredDeal['dealDescription'])>70){echo substr($featuredDeal['dealDescription'],0,70)."...";}else{echo $featuredDeal['dealDescription'];}?></p>
                            <span class="map-ico"><?php if(strlen($featuredDeal['dealAddress'])>30){echo substr($featuredDeal['dealAddress'],0,30)."...";}else{echo $featuredDeal['dealAddress']; }?></span>
                            <span class="clck-ico"><?php echo ($featuredDeal['dealEndDate']-time())*1000;?></span>
                            <?php echo Chtml::link('<span>BUY NOW</span>',$siteUrl.'/deals/'.$featuredDeal['pkDealID'],array('class'=>'buy-btn-grn','title'=>'BUY NOW','alt'=>'BUY NOW'));?>
                        </div>
                        <div class="hover-eff">
                            <p><?php echo $featuredDeal['dealDescription'];?></p>
                        </div>
                    </div>
                <?php }?>
            </div>
            <div class="box-title">
                <span>featured deals</span>
            </div>
            <div class="slider-btn">
                <?php echo CHtml::link('view all',$siteUrl.'/category/featured',array('class'=>'view-btn','title'=>'view all'));?>
            </div>
        </div>
        <?php }?>
        <div class="box-style">
            <div class="owl-carousel">
                <div class="item">
                    <div class="img-box">
                        <img src="<?php echo $siteUrl;?>/images/feature-img-4.png" alt="">
                        <span class="feature"><img src="<?php echo $siteUrl;?>/images/feature-img.png" alt=""></span>
                        <span class="offer">78% Off</span>
                        <span class="bot-bg"><img src="<?php echo $siteUrl;?>/images/plane-ico.png" alt=""> Travel</span>
                    </div>
                    <div class="txt-box">
                        <h2>Jewels of the Middle East America</h2>
                        <p>If you have the flexibility to leave at a moment's notice, last minute travel deals.</p>
                        <span class="map-ico">Seattle, LA, Vegas + 3 Locations</span>
                        <span class="clck-ico">48 Hours: 50 Mins: 30 Secs</span>
                        <a href="#" class="buy-btn-grn" title="BUY NOW"><span>BUY NOW</span></a>
                    </div>
                    <div class="hover-eff">
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.</p>
                    </div>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="<?php echo $siteUrl;?>/images/feature-img-4.png" alt="">
                        <span class="feature"><img src="<?php echo $siteUrl;?>/images/feature-img.png" alt=""></span>
                        <span class="offer">78% Off</span>
                        <span class="bot-bg"><img src="<?php echo $siteUrl;?>/images/plane-ico.png" alt=""> Travel</span>
                    </div>
                    <div class="txt-box">
                        <h2>Jewels of the Middle East America</h2>
                        <p>If you have the flexibility to leave at a moment's notice, last minute travel deals.</p>
                        <span class="map-ico">Seattle, LA, Vegas + 3 Locations</span>
                        <span class="clck-ico">48 Hours: 50 Mins: 30 Secs</span>
                        <a href="#" class="buy-btn-grn" title="BUY NOW"><span>BUY NOW</span></a>
                    </div>
                    <div class="hover-eff">
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.</p>
                    </div>
                </div>
                <div class="item last">
                    <div class="img-box">
                        <img src="<?php echo $siteUrl;?>/images/feature-img-4.png" alt="">
                        <span class="feature"><img src="<?php echo $siteUrl;?>/images/feature-img.png" alt=""></span>
                        <span class="offer">78% Off</span>
                        <span class="bot-bg"><img src="<?php echo $siteUrl;?>/images/plane-ico.png" alt=""> Travel</span>
                    </div>
                    <div class="txt-box">
                        <h2>Jewels of the Middle East America</h2>
                        <p>If you have the flexibility to leave at a moment's notice, last minute travel deals.</p>
                        <span class="map-ico">Seattle, LA, Vegas + 3 Locations</span>
                        <span class="clck-ico">48 Hours: 50 Mins: 30 Secs</span>
                        <a href="#" class="buy-btn-grn" title="BUY NOW"><span>BUY NOW</span></a>
                    </div>
                    <div class="hover-eff">
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.</p>
                    </div>
                </div>
            </div>
            <div class="box-title">
                <span>Most Popular</span>
            </div>
            <div class="slider-btn">
               <a href="#" class="view-btn" title="view all">view all</a>
            </div>
        </div>
        
        <div class="box-style blue-bg-mar">
            <?php if(count($data['otherDeals'])>0){?>
                <div class="owl-carousel">
                    
                    <?php foreach ($data['otherDeals'] as $otherDeal) {?>
                        <div class="item">
                            <div class="img-box">
                                <?php echo CHtml::image($siteUrl.UPLOAD_FOLDER.DEAL_FOLDER.'284X177/'.$otherDeal['dealImagePath'],$otherDeal['dealImageAlt'],array('title'=>$otherDeal['dealImageAlt']));?>
                                <?php if($otherDeal['dealDiscount']){?><span class="offer"><?php echo $otherDeal['dealDiscount'];?>% Off</span><?php }?>
                                <span class="bot-bg">
                                    <?php echo CHtml::image($siteUrl.UPLOAD_FOLDER.CATEGORIES_FOLDER.$otherDeal['categoryImage'],$otherDeal['categoryName'],array('alt'=>$otherDeal['categoryName']));?>
                                    <?php echo $otherDeal['categoryName'];?>
                                </span>
                            </div>
                            <div class="txt-box">
                                <h2><?php echo $otherDeal['dealName'];?></h2>
                                <p><?php if(strlen($otherDeal['dealDescription'])>70){echo substr($otherDeal['dealDescription'],0,70)."...";}else{echo $otherDeal['dealDescription'];}?></p>
                                <span class="map-ico"><?php if(strlen($otherDeal['dealAddress'])>30){echo substr($otherDeal['dealAddress'],0,30)."...";}else{echo $otherDeal['dealAddress']; }?></span>
                                <span class="clck-ico"><?php echo ($otherDeal['dealEndDate']-time())*1000;?></span>
                                <?php echo Chtml::link('<span>BUY NOW</span>',$siteUrl.'/deals/'.$otherDeal['pkDealID'],array('class'=>'buy-btn-grn','title'=>'BUY NOW'));?>
                            </div>
                            <div class="hover-eff">
                                <p><?php echo $otherDeal['dealDescription'];?></p>
                            </div>
                        </div>
                    <?php }?>
                </div>
            <?php }?>
            <div class="box-title">
                <span>other deals</span>
            </div>
            <div class="slider-btn">
                <?php if(count($data['otherDeals'])>0){?><?php echo CHtml::link('view all',$siteUrl.'/category/other',array('class'=>'view-btn','title'=>'view all'));?><?php }?>
            </div>
        </div>
        <?php $this->widget('application.components.front.newsletterSubscriptionForm');?>
    </div>
</div>