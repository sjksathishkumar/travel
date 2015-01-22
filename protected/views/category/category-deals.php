<?php $siteUrl = Yii::app()->baseUrl;?>
<?php $this->widget('application.components.front.innerPageBanner');?>
<div class="clear"></div>
<div class="breadcrumb">
    <div class="layout">
        <ul>
            <li><?php echo CHtml::link('Home',$siteUrl,array('title'=>'Home'));?>&raquo;</li>
            <li class="active"><?php echo ucfirst($category->categoryName);?></li>
        </ul>
    </div>
</div>
<div class="body_container">
    <div class="layout">
        <div class="landing_bg">
            <h3 class="head"><?php echo $category->categoryName;?></h3>
            <div id="category-deals">
	            <?php if(count($data['categoryDeals'])){?>
	                <div class="box-style">
	                	<?php $i=0; foreach ($data['categoryDeals'] as $categoryDeal) {$i++;?>
		                	<div class="item_outer <?php if($i%3 == 0){echo "last";}?>">
		                        <div class="item">
		                            <div class="img-box">
		                                <?php echo CHtml::image($siteUrl.UPLOAD_FOLDER.DEAL_FOLDER.'284X177/'.$categoryDeal['dealImagePath']);?>
		                                <?php if($categoryDeal->dealFeatured){?><span class="feature"><?php echo CHtml::image($siteUrl.'/images/feature-img.png');?></span><?php } ?>
		                                <?php if($categoryDeal->dealDiscount){?><span class="offer"><?php echo $categoryDeal->dealDiscount."% Off";?></span><?php } ?>
		                                <span class="bot-bg"><?php echo CHtml::image($siteUrl.UPLOAD_FOLDER.CATEGORIES_FOLDER.$categoryDeal->categoryImage);?><?php echo $categoryDeal->categoryName;?></span>
		                            </div>
		                            <div class="txt-box">
		                                <h2><?php echo $categoryDeal->dealName;?></h2>
		                                <p><?php if(strlen($categoryDeal->dealDescription)>70){echo substr($categoryDeal->dealDescription,0,70)."...";}else{echo $categoryDeal->dealDescription;}?></p>
                                		<span class="map-ico"><?php if(strlen($categoryDeal->dealAddress)>30){echo substr($categoryDeal->dealAddress,0,30)."...";}else{echo $categoryDeal->dealAddress; }?></span>
		                                <span class="clck-ico"><?php echo ($categoryDeal->dealEndDate-time())*1000;?></span>
		                                <?php echo Chtml::link('<span>BUY NOW</span>',$siteUrl.'/deals/'.$categoryDeal->pkDealID,array('class'=>'buy-btn-grn','title'=>'BUY NOW'));?>
		                            </div>
		                            <div class="hover-eff">
		                                <p><?php echo $categoryDeal->dealDescription;?></p>
		                            </div>
		                        </div>
		                    </div>
		                    <?php if($i%3 == 0 && count($data['categoryDeals'])!=$i){echo '</div><div class="box-style">';}?>
	                    <?php } ?>
	                </div>
	                <?php //echo CHtml::hiddenField('total_records',count($data['categoryDeals']));?>
	                <div class="view_more_outer"><?php echo CHtml::link('Show More','javascript:void(0);',array("class"=>"view_more",'id'=>'view_more','title'=>'Show More'));?></div>
	            <?php }else{?>
	            	<div class="box-style"><div class="item" style="color:#475462;">No Deals Found</div></div>
	            <?php } ?>
	        </div>
            <?php $this->widget('application.components.front.newsletterSubscriptionForm');?>
        </div>
    </div>
</div>