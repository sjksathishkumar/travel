<div class="page-header">
    <div class="pull-left">
        <h1>View Deal</h1>
    </div>
</div>
<div class="breadcrumbs">
    <ul>
        <li><?php echo CHtml::link('Home',array('/admin')); ?><i class="icon-angle-right"></i></li>
        <li><?php echo CHtml::link('Deals',array('/admin/deals')); ?><i class="icon-angle-right"></i></li>
        <li><a href="#">View Deal</a></li>
    </ul>
    <div class="close-bread"><a href="#"><i class="icon-remove"></i></a></div>
</div>
<div class="row-fluid">
   <div class="span12">
        <div class="box box-color box-bordered">
             <div class="box-title" style="position:static;">
                <h3><i class="icon-table"></i>View Deal</h3>
             </div>
             <div class="box-content nopadding">
                <table id="yw0" class="detail-view">
                    <tbody>
                        <tr>
                            <td>
                                <div class="right-container" style="float:left">
                                    <div class="item_description">
                                        <div class="item_description_L">
                                            <?php $baseUrl = Yii::app()->request->baseUrl;?>
                                            <ul class="cur_slider_top">
                                                <li><a href="#"><img src="<?php echo $baseUrl.'/uploads/deals/'.$dealImagesModel[0]->dealImagePath;?>" alt="<?php echo $dealImagesModel[0]->dealImageAlt;?>"/></a>
                                                    <?php if($model->dealDiscount){?><span class="offer1"><?php echo $model->dealDiscount;?>% Off</span><?php }?>
                                                </li>
                                            </ul>
                                            <ul class="cur_slider_bottom">
                                                <?php foreach ($dealImagesModel as $image) {?>
                                                    <li><a href="#"><img src="<?php echo $baseUrl.'/uploads/deals/'.$image->dealImagePath;?>" alt="<?php echo $image->dealImageAlt;?>" width="58px" height="48px"/></a></li>
                                                <?php }?>
                                            </ul>
                                        </div>
                                        <ul class="item_description_R">
                                            <li>
                                                <span><h3><?php echo $model->dealName;?><h3></span>
                                            </li>
                                            <li>
                                                <span class="left">Address:</span>
                                                <span class="right" id="dealAddress"><?php echo $model->dealAddress;?></span>
                                            </li>
                                            <li>
                                                <span class="left">Map View:</span>
                                                <span class="right"><a href="javascript:void(0)" class="map_icon" onclick="viewInMap()">Click here to view on Map</a></span>
                                                <div id="map">
                                                    <div id="close">Close</div>
                                                    <div id="map1">Address not found on the map.</div>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="left">Time:</span>
                                                <span class="right"><?php echo $model->dealUsageTimings;?></span>
                                            </li>
                                            <li>
                                                <span class="left">Grab the Deal:</span>
                                                <span class="right"><span class="hours_icon" id="timer">0 Hours   0 Mins   0 Secs</span></span>
                                            </li>
                                            <li>
                                                <span class="left">Original Price:</span>
                                                <span class="right"><?php echo $model->dealOriginalPrice;?></span>
                                            </li>
                                            <li>
                                                <span class="left">You Save:</span>
                                                <span class="right"><?php echo ($model->dealOriginalPrice*$model->dealDiscount)/100;?></span>
                                            </li>
                                            <li>
                                                <span class="left">You Pay:</span>
                                                <span class="right"><?php echo $model->dealPrice;?></span>
                                            </li>
                                            <li>
                                                <span class="left">Quantity:</span>
                                                <span class="right"><?php echo $model->dealQuantity;?></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul class="tab_sec tab">
                                        <li><a href="#tab1">Product Description</a></li>
                                        <li><a href="#tab2">Highlights</a></li>
                                        <li><a href="#tab3">Fine Print</a></li>
                                    </ul>
                                    <div class="detail_sec tab_container" id="tab1">
                                        <p><?php echo $model->dealDescription;?></p>
                                    </div>
                                    <div class="detail_sec tab_container" id="tab2">
                                        <p><?php echo $model->dealHighlights;?></p>
                                    </div>
                                    <div class="detail_sec tab_container" id="tab3">
                                        <p><?php echo $model->dealFineprints;?></p>
                                    </div>
                                </div> 
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    function timer(time,update,complete) {
    var start = new Date().getTime();
    var interval = setInterval(function() {
        var now = time-(new Date().getTime()-start);
        if( now <= 0) {
            clearInterval(interval);
            complete();
        }
        else update(Math.floor(now/1000));
    },100); // the smaller this number, the more accurate the timer will be
}



setTimeout(function(){
    timer(
    '<?php echo (($model->dealEndDate-time())*1000);?>', // milliseconds
    function(timeleft) { // called every step to update the visible countdown
        hours = Math.floor(timeleft / 3600);
        timeleft %= 3600;
        minutes = Math.floor(timeleft / 60);
        seconds = timeleft % 60;
        document.getElementById('timer').innerHTML = hours+" Hours  "+minutes+" Mins  "+seconds+" Secs";
    },
    function() { // what to do after
        document.getElementById('timer').innerHTML = 'Time Out';
    }
);},500);
</script>
<script>
    (function(){
        $('.tab_container').hide();
        $('.tab_container:first').show();
        $('ul.tab li:first').addClass('active');
        $('ul.tab li a').click(function(){
            $('ul.tab li').removeClass('active');
            $(this).parent().addClass('active');
            var currentTab = $(this).attr('href');
            $('.tab_container').hide();
            $(currentTab).show();
            return false;
        });
    })();
</script>