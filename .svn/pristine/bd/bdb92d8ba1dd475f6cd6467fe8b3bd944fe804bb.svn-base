<?php $siteUrl = Yii::app()->baseUrl;?>
<?php $this->widget('application.components.front.innerPageBanner');?>
<div class="breadcrumb">
    <div class="layout">
        <ul>
            <li><?php echo CHtml::link('Home',$siteUrl,array('title'=>'Home'));?>&raquo;</li>
            <li class="active"><?php if(isset($_GET['location'])){echo ucfirst($_GET['location']);}elseif(isset($_GET['category'])){echo ucfirst($_GET['category']);}?></li>
        </ul>
    </div>
</div>
<div class="body_container">
    <div class="layout">
        <div class="left-container">
            <div class="left-container-inner">
                <h2 class="filter-h2">Search Filters</h2>
                <div class="drop1">
                    <?php echo CHtml::dropDownList('filterByCategory','pkCategoryID',CommonFunctions::findAllParentCategoriesDropDown(),array(
                                                                                                    'empty'=>'Select Category',
                                                                                                    'class'=>'select-cat',
                                                                                                    ));?>
                </div>
                <div class="drop1">
                    <?php echo CHtml::dropDownList('filterBySubCategory','',array(),array('empty'=>'Select Sub-Category','class'=>'select-cat'));?>
                </div>
                <div class="drop1">
                    <?php echo CHtml::dropDownList('filterByDiscount','',Yii::app()->params['dealDiscount'],array('empty'=>'Select Discount','class'=>'select-cat select-by-discount'));?>
                </div>
                <?php /*<div class="save-box">
                    <h2><span class="save-h2">save</span> up to <span class="price-h2">$150</span></h2>
                    <p>on selected Large Kitchen Appliances</p>
                    <?php echo CHtml::image($siteUrl.'/images/home-acc-img.png');?>
                </div>*/?>
            </div>
        </div> 
        <div class="right-container">
            <?php if(!empty($data['pageBanner']['bannerImage'])){?>
                <div class="list-big-img">
                    <?php echo CHtml::image($siteUrl.UPLOAD_FOLDER.BANNERS_FOLDER.$data['pageBanner']['bannerImage'],$data['pageBanner']['bannerAltTag'],array('title'=>$data['pageBanner']['bannerTitle']));?>
                    <?php /*<h2>fashion<br/>deals</h2>
                    <div class="off-big-img"><h6>upto 50% off</h6></div>*/ ?>
                </div>
            <?php }?>
            <h3 class="head">Search Result</h3>
            <?php if(!empty($data['cmsPageDetails']['cmsContent'])){?>
                <div class="right-first-p">
                	<?php echo $data['cmsPageDetails']['cmsContent'];?>
                </div>
            <?php }?>
            <?php $this->widget('application.components.front.searchResultPaging',array('pages'=>$data['pages']));?>
            <div class="box-style box-space" id="deal-items">
                <?php 
                if(count($data['arrSearchResult'])>0){
                    $i=0;
                    foreach ($data['arrSearchResult'] AS $searchResult) {
                    $i++;
                    ?>
                		<div class="item_outer <?php if($i%3 == 0){echo 'last';}?>">
                            <div class="item">
                                <div class="img-box">
                                    <?php echo CHtml::image($siteUrl.UPLOAD_FOLDER.DEAL_FOLDER.'197X110/'.$searchResult['dealImagePath'],$searchResult['dealImageAlt'],array('title'=>$searchResult['dealImageAlt']));?>
                                    <?php if($searchResult['dealFeatured']){?><span class="feature"><?php echo CHtml::image($siteUrl.'/images/feature-img.png','featured',array('title'=>'featured'));?></span><?php }?>
                                    <?php if($searchResult['dealDiscount']){?><span class="offer"><?php echo $searchResult['dealDiscount'];?>% Off</span><?php }?>
                                    <span class="bot-bg"><span><?php echo $searchResult['categoryName'];?></span></span>
                                </div>
                                <div class="txt-box">
                                    <h2><?php echo $searchResult['dealName'];?></h2>
                                    <p><?php echo substr($searchResult['dealDescription'],0,50)."...";?></p>
                                    <span class="map-ico"><?php echo $searchResult['dealAddress'];?></span>
                                    <span class="clck-ico"><?php echo ($searchResult['dealEndDate']-time())*1000;?></span>
                                    <?php echo Chtml::link('<span>BUY NOW</span>',$siteUrl.'/deals/'.$searchResult['pkDealID'],array('class'=>'buy-btn-grn','title'=>'BUY NOW'));?>
                                </div>
                            </div>
                        </div>
                        <?php if($i%3 == 0){?><div class="to-clear"></div><?php }?>
                    <?php 
                    }
                }else{?>
                    <p class="no-record">No records found.</p>
                <?php }?>
            </div>
            <?php $this->widget('application.components.front.searchResultPaging',array('pages'=>$data['pages']));?>
        </div> 
    </div>
</div>  