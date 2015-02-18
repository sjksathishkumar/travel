<?php
$varBaseUrl = Yii::app()->baseUrl;
?>

<!--- Footer part start from here -->

<div class="footer">
    <div class="top-footer">
        <div class="top-footer-outer">
            <?php echo CHtml::image($varBaseUrl . "/images/top-footer-outer-bg.png"); ?>
        </div>
        <div class="top-footer-inner">
        <div class="container">
            <div class="search-form">
                <div class="lefter">
                    In Your City
                </div>
                <div class="righter">
                      <div class="selCont">
                        <select class="my-dropdown" name="my-dropdown" placeholder="Country">
                            <option value="0" selected="selected">Country</option>
                            <option value="1">A cappella</option>
                            <option value="test">Acid Jazz</option>
                            <option value="3">Big Band</option>
                            <option value="4">Big Beat</option>
                            <option value="5">Cakewalk</option>
                            <option value="6">Calenda</option>
                            <option value="7">Dark ambient</option>
                            <option value="8">Dark cabaret</option>
                            <option value="9">Chalk &amp; Cheese</option>
                        </select>
                    </div>
                    <div class="selCont">
                        <select class="my-dropdown" name="my-dropdown" data-placeholder="State">
                            <option value="0" selected="selected">State</option>
                            <option value="1">A cappella</option>
                            <option value="test">Acid Jazz</option>
                            <option value="3">Big Band</option>
                            <option value="4">Big Beat</option>
                            <option value="5">Cakewalk</option>
                            <option value="6">Calenda</option>
                            <option value="7">Dark ambient</option>
                            <option value="8">Dark cabaret</option>
                            <option value="9">Chalk &amp; Cheese</option>
                        </select>
                    </div>
                    <div class="selCont">
                        <select class="my-dropdown" name="my-dropdown" placeholder="City">
                            <option value="0" selected="selected">City</option>
                            <option value="1">A cappella</option>
                            <option value="test">Acid Jazz</option>
                            <option value="3">Big Band</option>
                            <option value="4">Big Beat</option>
                            <option value="5">Cakewalk</option>
                            <option value="6">Calenda</option>
                            <option value="7">Dark ambient</option>
                            <option value="8">Dark cabaret</option>
                            <option value="9">Chalk &amp; Cheese</option>
                        </select>
                    </div>
                    <div class="selCont">
                        <select class="my-dropdown" name="my-dropdown" placeholder="Area">
                            <option value="0" selected="selected">Area</option>
                            <option value="1">A cappella</option>
                            <option value="test">Acid Jazz</option>
                            <option value="3">Big Band</option>
                            <option value="4">Big Beat</option>
                            <option value="5">Cakewalk</option>
                            <option value="6">Calenda</option>
                            <option value="7">Dark ambient</option>
                            <option value="8">Dark cabaret</option>
                            <option value="9">Chalk &amp; Cheese</option>
                        </select>
                    </div>
                        
                        <div class="submit">
                            <input type="submit" value="Go" name="submit" />
                        </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    
    <div class="bootom-footer">
        <div class="container">
            <div class="footer-links">
                <ul>
                    <li><?php echo CHtml::link('Home', $varBaseUrl .'/homepage/index') ?></li>
                    <?php
                        $attribs = array('cmsStatus'=>'1');
                        $criteria = new CDbCriteria();
                        $criteria->condition = "pkCmsID != '1'";
                        $cmsPages= Cms::model()->findAllByAttributes($attribs, $criteria);     
                        foreach ($cmsPages as $page)
                        {
                            ?>
                            <li><?php echo CHtml::link($page->cmsDisplayTitle, $varBaseUrl . '/pages/' . $page->cmsSlug,array('title'=>$page->cmsDisplayTitle)); ?></li>
                        <?php } ?>
                    <li><a href="">in your city </a></li>
                    <li><a href="">FAQ </a></li>
                    <li><a href="">Help</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
            <div class="copyright">
                <p>Copyright @ 2014-<?php echo date("Y"); ?> All Rights Reserved.</p>
                <a class="fancybox" href="/images/1_b.jpg" data-fancybox-group="gallery">
                
                
                </a>
            </div>
        </div>
    </div>
</div>