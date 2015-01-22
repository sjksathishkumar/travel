<?php $varBaseUrl = Yii::app()->baseUrl; ?>
<!--<div class="mobile_menu"><a href="#">menu</a></div>
<div class="menu">-->
<div id="mgmenu1" class="mgmenu_container">
    <ul class="mgmenu layout" style="z-index:101">
        <li class="mgmenu_button">Menus</li><!-- Button (Mobile Devices) -->
        <?php $mainCategories = Category::model()->findAllByAttributes(array('categoryStatus' => '1', 'categoryLevel' => '0')); ?>
        <?php
        $i = 0;
        foreach ($mainCategories as $mainCategory)
        {
            ?>
            <li <?php if($i == 0){echo 'style="border-left:1px solid #0B9F55"';}?>><span><?php echo CHtml::link('<i class="mini_icon ic_tag"></i>'.$mainCategory->categoryName.' Deals',$varBaseUrl.'/category/'.$mainCategory->categorySlug,array('title'=>$mainCategory->categoryName.' Deals'));?></span><!-- Begin Item -->
                <div class="dropdown_fullwidth mgmenu_tabs"><!-- Begin Item Container -->
                    <?php
                    $subCategories = Category::model()->findAllByAttributes(array('categoryStatus' => '1', 'fkParentCategoryID' => $mainCategory->pkCategoryID));
                    if (count($subCategories) > 0)
                    {
                        ?>
                        <ul class="mgmenu_tabs_nav">
                            <?php
                            $j = 0;
                            foreach ($subCategories as $subCategory)
                            {
                                ?>
                                <?php
                                if ($j == 0)
                                {
                                    $j++;
                                    ?>
                                    <li><?php echo CHtml::link($subCategory->categoryName, '#section' . $j, array('class' => 'current','title'=>$subCategory->categoryName)); ?></li>
                                    <?php
                                }
                                else
                                {
                                    $j++;
                                    ?>
                                    <li><?php echo CHtml::link($subCategory->categoryName, '#section' . $j,array('title'=>$subCategory->categoryName)); ?></li>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                        <div class="mgmenu_tabs_panels"><!-- Begin Panels Container -->
                            <?php
                            $j = 0;
                            foreach ($subCategories as $subCategory)
                            {
                                $j++;
                                ?>
                                <?php $deal = Deals::model()->getSingleDealForMegaMenu($subCategory->pkCategoryID); ?>
                                <?php if (!empty($deal))
                                { ?>
                                    <div id="section<?php echo $j; ?>" <?php
                    if ($j != 1)
                    {
                        echo 'class="mgmenu_tabs_hide"';
                    }
                    ?>><!-- Begin Section 1 -->
                                        <div class="col_7">
                                            <h4><?php echo $deal['dealName']; ?></h4>
                                            <p><?php echo $deal['dealDescription']; ?></p>
                                        </div>
                                        <div class="col_5">
                                            <?php echo CHtml::image($varBaseUrl . UPLOAD_FOLDER . DEAL_FOLDER .'284X146/'. $deal['dealImagePath']); ?>
                                            <?php echo CHtml::link('<span>GET THIS DEAL</span>', $varBaseUrl.'/deals/'.$deal['pkDealID'], array('class' => 'buy-btn-grn1','title'=>'GET THIS DEAL')); ?>
                                        </div>
                                    </div><!-- End Section 1 -->
                                <?php }else{?>
                                        <div id="section<?php echo $j; ?>" <?php
                                        if ($j != 1)
                                        {
                                            echo 'class="mgmenu_tabs_hide"';
                                        }
                                        ?>></div>
                                <?php } ?>
                        <?php } ?>
                        </div><!-- End Panels Container -->
    <?php } ?>
                </div><!-- End Item Container -->
            </li><!-- End Item -->
<?php $i++;} ?>
        <li><span><?php echo CHtml::link('<i class="mini_icon ic_tag"></i>Featured Deals',$varBaseUrl.'/category/featured',array('title'=>'Featured Deals'));?></span></li>
    </ul>
</div>
<!--</div>-->