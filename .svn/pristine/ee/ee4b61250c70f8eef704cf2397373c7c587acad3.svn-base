<div class="row-fluid">
    <div class="span12">
        <div class="box box-color box-bordered">
            <div class="box-title">
                <?php
                if (strstr(Yii::app()->request->requestUri, 'update'))
                {
                    ?>
                    <h3><i class="icon-table"></i>Update Deal</h3>
                    <?php
                }
                else
                {
                    ?>
                    <h3><i class="icon-table"></i>Add New Deal</h3>
                <?php } ?>
            </div>
            <div class="box-content nopadding">
                <?php
                $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'deals-form',
                    'enableAjaxValidation' => false,
                    'htmlOptions' => array(
                        'class' => 'form-horizontal form-bordered form-validate',
                        'enctype' => 'multipart/form-data',
                    )
                        ));
                ?>
                <div class="control-group">
                    <div class="span6">
                        <div class="control-group">
                            <?php echo $form->labelEx($model, 'dealName', array('class' => 'control-label', 'for' => 'textfield')); ?>
                            <div class="controls">
                                <?php echo $form->textField($model, 'dealName', array('size' => 60, 'maxlength' => 255, 'data-rule-required' => 'true', 'class' => 'input-xlarge')); ?>
                                <?php echo $form->error($model, 'dealName'); ?>
                            </div>
                        </div>
                        <?php
                        if (strstr(Yii::app()->request->requestUri, 'update') && count($dealImagesModel) > 0)
                        {
                            ?>
                            <div class="control-group">
                                <?php echo $form->labelEx($model, 'dealImages<em>*</em>', array('class' => 'control-label', 'for' => 'textfield')); ?>
                                <div class="controls" id="images">
                                    <?php //echo CHtml::textField('imageError','1',array('class'=>'required','style'=>'visibility:hidden;height:0px;padding:0px;'));?>
                                    <?php
                                    $i = 1;
                                    foreach ($dealImagesModel AS $dealImage)
                                    {
                                        ?>
                                        <div class="fileupload fileupload-new first" data-provides="fileupload" <?php
                                        if ($i > 1)
                                        {
                                            echo 'style="margin-top:10px;"';
                                        }
                                        ?>>
                                            <span>
                                                <span class="btn btn-file">
                                                    <span class="fileupload-new">Select file</span>
                                                    <span class="fileupload-exists">Change</span>
                                                    <input type="file" name="dealImage[]" accept="image/*" class="dealImagesValidation image_file"/>
                                                </span>
                                                <span class="fileupload-preview"></span>
                                                <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                                                <?php echo Chtml::hiddenField('pkImageID[]', $dealImage->pkImageID, array('id' => 'pkImageID' . $dealImage->pkImageID, 'class' => 'pkImageID')); ?>
                                                <?php echo Chtml::image(Yii::app()->params['siteUploadFilesURL'] . DEAL_FOLDER .'80X70/'. $dealImage->dealImagePath); ?>
                                                <br/><?php echo Chtml::textField('dealImagesAlt[]', $dealImage->dealImageAlt, array('size' => 10, 'placeholder' => 'Alt tag', 'data-rule-required' => 'true')); ?>
                                            </span>
                                            <?php
                                            if ($i == 1)
                                            {
                                                ?>
                                                <a class="add_more" id="1" style="cursor:pointer;text-decoration:none; font-size:24px;">+</a>
                                                <?php
                                            }
                                            else
                                            {
                                                ?>
                                                <a class="remove" id="<?php echo $i; ?>" style="cursor:pointer;text-decoration:none; font-size:24px;">-</a>
                                            <?php } ?>
                                        </div>
                                        <?php
                                        $i++;
                                    }
                                    ?>
                                    <input type="hidden" name="deletedID" id="deletedID" value="">
                                    <?php echo '<span class="required">'.Yii::app()->user->getFlash('image_error_msg').'</span>';?>
                                    <?php //echo '<br/><span class="required">( Please upload image of 285X280. )</span>';?>
                                </div>
                            </div>
                            <?php
                        }
                        else
                        {
                            ?>
                            <div class="control-group">
                                <?php echo $form->labelEx($model, 'dealImages<em>*</em>', array('class' => 'control-label', 'for' => 'textfield')); ?>
                                <div class="controls" id="images">
                                    <?php //echo CHtml::textField('imageError','1',array('class'=>'required','style'=>'visibility:hidden;height:0px;padding:0px;'));?>
                                    <div class="fileupload fileupload-new first" data-provides="fileupload">
                                        <span>
                                            <span class="btn btn-file">
                                                <span class="fileupload-new">Select file</span>
                                                <span class="fileupload-exists">Change</span>
                                                <input type="file" name="dealImage[]" accept="image/*" class="dealImages required dealImagesValidation image_file" data-rule-required="true"/>
                                            </span>
                                            <span class="fileupload-preview"></span>
                                            <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                                            <br/><?php echo Chtml::textField('dealImagesAlt[]', '', array('size' => 10, 'placeholder' => 'Alt tag', 'class' => 'required', 'data-rule-required' => 'true')); ?>
                                        </span>
                                        <a class="add_more" id="1" style="cursor:pointer;text-decoration:none; font-size:24px;">+</a>
                                    </div>
                                    <?php echo '<span class="required">'.Yii::app()->user->getFlash('image_error_msg').'</span>';?>
                                    <?php //echo '<br/><span class="required">( Please upload image of 285X280. )</span>';?>
                                </div>
                            </div>
                        <?php } ?>
                        <script>
                            $(document).on('click','.add_more', function(){
                                var addID = $(".add_more").attr('id');
                                var adIntID = parseInt(addID)+1;
                                $(".add_more").attr("id",adIntID);
                            
                                var newDiv = '<div class="fileupload fileupload-new first" data-provides="fileupload" style="margin-top:10px;">';
                                newDiv += '<span><span class="btn btn-file">';
                                newDiv += '<span class="fileupload-new">Select file</span>';
                                newDiv += '<span class="fileupload-exists">Change</span>';
                                newDiv += '<input type="file" name="dealImage[]" accept="image/*" data-rule-required="true" class="dealImages required dealImagesValidation image_file"/>';
                                newDiv += '</span>';
                                newDiv += '<span class="fileupload-preview"></span>';
                                newDiv += '<a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>';
                                newDiv += '<br/><input type="text" name="dealImagesAlt[]" value="" class="required" size="10" placeholder="Alt tag" data-rule-required="true"></span>';
                                newDiv += '<a class="remove" id="'+adIntID+'" style="cursor:pointer;text-decoration:none; font-size:24px;">-</a>';
                                newDiv += '</div>';
                            
                                $('#images').append(newDiv);
                                uploadImageValidation();
                                $('.dealImage').each(function () {
                                    $(this).rules("add", {
                                        required: true
                                    });
                                });
                            });
                            $(document).on('click','.remove', function(){
                                var t = $(this).parent('.fileupload').find('.pkImageID').val();
                                if(t){
                                    $('#deletedID').val($('#deletedID').val()+' '+t);
                                }
                                $(this).parents('.fileupload').remove();
                            });
                        </script>
                        <?php /* <div class="control-group">
                          <?php echo $form->labelEx($model,'dealID',array('class'=>'control-label','for'=>'textfield')); ?>
                          <div class="controls">
                          <?php echo $form->textField($model,'dealID',array('size'=>60,'maxlength'=>255,'data-rule-required'=>'true','class'=>'input-xlarge')); ?>
                          <?php echo $form->error($model,'dealID'); ?>
                          </div>
                          </div>
                         */ ?>
                        <div class="control-group">
                            <?php echo $form->labelEx($model, 'fkCategoryID', array('class' => 'control-label', 'for' => 'textfield')); ?>
                            <div class="controls">
                                <?php
                                    $categoryList = Category::model()->getCategoryDropDown();
                                    echo $form->dropDownList($model, 'fkCategoryID', $categoryList, array('empty' => '-Select Category-', 'class' => 'span6 select2-me', 'data-rule-required' => 'true',));
                                ?>
                                <?php echo $form->error($model, 'fkCategoryID'); ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <?php echo $form->labelEx($model, 'dealCity', array('class' => 'control-label', 'for' => 'textfield')); ?>
                            <div class="controls">
                                <?php
                                $criteria = new CDbCriteria;
                                $criteria->condition = 'cityStatus = "1"';
                                echo $form->dropDownList($model, 'dealCity', CHtml::listData(City::model()->findAll($criteria), 'pkCityID', 'cityName'), array('empty' => '-Select City-', 'class' => 'span6 select2-me', 'id' => 'deal_city', 'data-rule-required' => 'true',));
                                ?>
                                <?php /*<a id="manageCity">Manage City</a>*/?>
                                <?php echo $form->error($model, 'dealCity'); ?>
                            </div>                           
                        </div>

                        <div class="control-group">
                            <?php echo $form->labelEx($model, 'dealAddress', array('class' => 'control-label', 'for' => 'textfield')); ?>
                            <div class="controls">
                                <?php echo $form->textArea($model, 'dealAddress', array('size' => 60, 'maxlength' => 255, 'data-rule-required' => 'true', 'class' => 'input-xlarge', 'id' => 'dealAddress')); ?>
                                <a id="showInMap" onclick="viewInMap()">View on map</a>
                                <?php echo $form->error($model, 'dealAddress'); ?>
                            </div>
                            <div id="map">
                                <div id="close">Close</div>
                                <div id="map1">Address not found on the map.</div>
                            </div>
                        </div>


                        <div class="control-group">
                            <?php echo $form->labelEx($model, 'dealUsageTimings', array('class' => 'control-label', 'for' => 'textfield')); ?>
                            <div class="controls">
                                <?php echo $form->textField($model, 'dealUsageTimings', array('size' => 60, 'maxlength' => 255, 'data-rule-required' => 'true', 'class' => 'input-xlarge')); ?>
                                <?php echo $form->error($model, 'dealUsageTimings'); ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <?php echo $form->labelEx($model, 'dealDescription', array('class' => 'control-label', 'for' => 'textfield')); ?>
                            <div class="controls">
                                <?php echo $form->textArea($model, 'dealDescription', array('size' => 60, 'maxlength' => 255, 'data-rule-required' => 'true', 'class' => 'input-xlarge')); ?>
                                <?php echo $form->error($model, 'dealDescription'); ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <?php echo $form->labelEx($model, 'dealHighlights', array('class' => 'control-label', 'for' => 'textfield')); ?>
                            <div class="controls">
                                <?php echo $form->textArea($model, 'dealHighlights', array('size' => 60, 'maxlength' => 255, 'data-rule-required' => 'true', 'class' => 'input-xlarge')); ?>
                                <?php echo $form->error($model, 'dealHighlights'); ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <?php echo $form->labelEx($model, 'dealFineprints', array('class' => 'control-label', 'for' => 'textfield')); ?>
                            <div class="controls">
                                <?php echo $form->textArea($model, 'dealFineprints', array('size' => 60, 'maxlength' => 255, 'data-rule-required' => 'true', 'class' => 'input-xlarge')); ?>
                                <?php echo $form->error($model, 'dealFineprints'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="span6">
                        <div class="control-group">
                            <?php echo $form->labelEx($model, 'dealStatus', array('class' => 'control-label', 'for' => 'textfield')); ?>
                            <div class="controls">
                                <?php echo $form->dropDownList($model, 'dealStatus', array('0' => 'Inactive', '1' => 'Active'), array('empty' => '-Select Status-', 'class' => 'span6 select2-me', 'data-rule-required' => 'true',)); ?>
                                <?php echo $form->error($model, 'dealStatus'); ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <?php echo $form->labelEx($model, 'dealAvailability', array('class' => 'control-label', 'for' => 'textfield')); ?>
                            <div class="controls">
                                <?php echo $form->dropDownList($model, 'dealAvailability', array('1' => 'Yes', '0' => 'No'), array('empty' => '-In Stock-', 'class' => 'span6 select2-me', 'data-rule-required' => 'true',)); ?>
                                <?php echo $form->error($model, 'dealAvailability'); ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <?php echo $form->labelEx($model, 'dealQuantity', array('class' => 'control-label', 'for' => 'textfield')); ?>
                            <div class="controls">
                                <?php echo $form->textField($model, 'dealQuantity', array('size' => 60, 'maxlength' => 255, 'data-rule-required' => 'true', 'data-rule-digits' => 'true', 'class' => 'input-xlarge')); ?>
                                <?php echo $form->error($model, 'dealQuantity'); ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <?php echo $form->labelEx($model, 'dealOriginalPrice ('.Yii::app()->params['currencySymbol'].')', array('class' => 'control-label', 'for' => 'textfield')); ?>
                            <div class="controls">
                                <?php echo $form->textField($model, 'dealOriginalPrice', array('size' => 60, 'maxlength' => 255, 'data-rule-required' => 'true', 'data-rule-number' => 'true', 'class' => 'input-xlarge')); ?>
                                <?php echo $form->error($model, 'dealOriginalPrice'); ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <?php echo $form->labelEx($model, 'dealDiscount', array('class' => 'control-label', 'for' => 'textfield')); ?>
                            <div class="controls">
                                <?php echo $form->dropDownList($model, 'dealDiscount', Yii::app()->params['dealDiscount'], array('empty' => '-Select Discount-', 'class' => 'span6 select2-me', 'data-rule-required' => 'true',)); ?>
                                <?php echo $form->error($model, 'dealDiscount'); ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <?php echo $form->labelEx($model, 'dealPrice ('.Yii::app()->params['currencySymbol'].')', array('class' => 'control-label', 'for' => 'textfield')); ?>
                            <div class="controls">
                                <?php echo $form->textField($model, 'dealPrice', array('size' => 60, 'maxlength' => 255, 'data-rule-required' => 'true', 'data-rule-number' => 'true', 'class' => 'input-xlarge', 'readonly' => true)); ?>
                                <?php echo $form->error($model, 'dealPrice'); ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <?php echo $form->labelEx($model, 'dealSubject', array('class' => 'control-label', 'for' => 'textfield')); ?>
                            <div class="controls">
                                <?php echo $form->dropDownList($model, 'dealSubject', Yii::app()->params['dealSubject'], array('empty' => '-Select Subject-', 'class' => 'span6 select2-me', 'data-rule-required' => 'true',)); ?>
                                <?php echo $form->error($model, 'dealSubject'); ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <?php echo $form->labelEx($model, 'dealDateRange', array('class' => 'control-label', 'for' => 'textfield')); ?>
                            <div class="controls">
                                <?php echo $form->textField($model, 'dealDateRange', array('data-rule-required' => 'true', 'class' => 'input-xlarge daterangepick', 'readonly' => 'true')); ?>
                                <?php echo $form->error($model, 'dealDateRange'); ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <?php echo $form->labelEx($model, 'Make this deal featured', array('class' => 'control-label', 'for' => 'textfield')); ?>
                            <div class="controls">
                                <?php echo $form->checkBox($model, 'dealFeatured', array('value' => 1, 'uncheckValue' => 0, 'checked' => ($model->pkDealID == "") ? false : $model->dealFeatured)); ?>
                                <?php echo $form->error($model, 'dealFeatured'); ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <?php echo $form->labelEx($model, 'Show this deal in Mega dropdown under the category selected', array('class' => 'control-label', 'for' => 'textfield')); ?>
                            <div class="controls">
                                <?php echo $form->checkBox($model, 'dealOnMegaMenu', array('value' => 1, 'uncheckValue' => 0, 'checked' => ($model->pkDealID == "") ? false : $model->dealOnMegaMenu)); ?>
                                <?php echo $form->error($model, 'dealOnMegaMenu'); ?>
                            </div>
                        </div>
                    </div>


                    <div class="note" style="clear:both;"><strong>Note :</strong> <span class="required">*</span> Indicates mandatory fields.</div>
                    <div class="form-actions">
                        <?php
                        if (strstr(Yii::app()->request->requestUri, 'update'))
                        {
                            ?>
                            <?php echo CHtml::submitButton('Update Deal', array('class' => 'btn btn-primary')); ?>
                            <?php
                        }
                        else
                        {
                            ?>
                            <?php echo CHtml::submitButton('Add Deal', array('class' => 'btn btn-primary','title'=>'Submit','alt'=>'Submit')); ?>
                        <?php } ?>
                        <?php echo CHtml::link('Cancel', array('/admin/deals'), array('class' => 'btn','title'=>'Cancel','alt'=>'Cancel')); ?>
                    </div>
                </div>
                <?php $this->endWidget(); ?>
            </div>
        </div>
    </div>
</div>
<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id' => 'addCity',
    'options' => array(
        'title' => 'View City',
        'autoOpen' => false,
        'modal' => 'true',
        'show' => 'slide',
        'width' => '60%',
        'height' => 'auto',
    ),
));
$this->endWidget();
?> 
<script>
    function viewInMap()
    {
        var address = $('#dealAddress').val();
        $.post('http://maps.googleapis.com/maps/api/geocode/json?address='+address+'&sensor=false',{},function(data){
            $('#map_canvas').hide();
            $('#map_canvas').html('');
            var obj = data;
            if(obj.status == "OK"){
                $('#map_canvas').show();
                $('#map1').css({"padding-top":"0px"});
                var lat = obj.results[0].geometry.location.lat;
                var lng = obj.results[0].geometry.location.lng;
                initialize(address,lat,lng);
            }else{
                $('#map1').text('Address not found on the map.');
                $('#map1').attr('style',"padding-top:110px");
            }
        },"json");

        $('#map').show();

        $("#close").click(function(){
            $("#map").hide();
        });
    }
    function initialize(loc,lat,lng)
    {
        var SITE_ROOT_URL = '<?php echo Yii::app()->params["siteURL"]; ?>';
        var var1 = [loc,lat,lng];
        var markers = [ var1 ];
        var latlng = new google.maps.LatLng(lat,lng);
        var myOptions = {
            zoom: 10,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: false
        };
        var map = new google.maps.Map(document.getElementById("map1"),myOptions);
        var infowindow = new google.maps.InfoWindow(), marker, i;
        for (i = 0; i < markers.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(markers[i][1],markers[i][2]),
                map: map,
                icon:SITE_ROOT_URL+'/img/red-icon.png'
            });
            google.maps.event.addListener(marker, 'mouseover', (function(marker, i) {
                return function() {
                    infowindow.setContent('<div class="mapSec"><div class="toolTip" style="overflow:auto" >'+markers[i][0]+'</div></div>');
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    }

    $('#Deals_dealOriginalPrice,#Deals_dealDiscount').keyup(function(){
        var OrgPrice = parseFloat($('#Deals_dealOriginalPrice').val());
        var discount=0,price=0;
        if($('#Deals_dealDiscount').val() != ''){
            discount = $('#Deals_dealDiscount').val();
        }
        price = OrgPrice - (OrgPrice*discount/100)
        if(!isNaN(price)){
            $('#Deals_dealPrice').val(price);
        }else{
            $('#Deals_dealPrice').val(0);
        }
    });
    $('#Deals_dealDiscount').change(function(){
        var OrgPrice = parseFloat($('#Deals_dealOriginalPrice').val());
        var discount=0,price=0;
        if($('#Deals_dealDiscount').val() != ''){
            discount = $('#Deals_dealDiscount').val();
        }
        price = OrgPrice - (OrgPrice*discount/100)
        if(!isNaN(price)){
            $('#Deals_dealPrice').val(price);
        }else{
            $('#Deals_dealPrice').val(0);
        }
    });
    
    $('#manageCity').click(function(){
        var opt = {
            autoOpen: false,
            modal: true,
            width: '41%',
            height:200,
            title: 'Manage City'
        };
        $.ajax({type:"POST", url:'<?php echo Yii::app()->params["siteURL"]; ?>/admin/deals/manageCity',success:function(data) {           
                $("#addCity").html(data);
                $("#addCity").dialog(opt).dialog("open");
            }
        }) 
    });
    var invalidImage = 0;
    function uploadImageValidation(){
        var _URL = window.URL || window.webkitURL;
         $('#images').on('change','.image_file',function (e) {
                var file, img;
                var current = $(this);
                if ((file = this.files[0])) {
                    img = new Image();
                    img.onload = function () {
                        if(this.width == '285' && this.height == '280'){
                            current.parent().parent().parent().find(".error").remove();
                            if($('#images').find('.error').html() == ''){
                                //$('input[type=submit]').attr('disabled', false);
                                //$('#imageError').val('1');
                            }
                        }else{
                            current.parent().parent().find(".error").remove();
                            current.parent().parent().append('<span style="color:red; clear:both; width:100%; float:left;" class="error">( Please upload image of 285X280. )</span>');
                            //$('input[type=submit]').attr('disabled', 'disabled');
                            //$('#imageError').val('');
                            if($('#imageError').val() == ''){
                                $('.btn-primary').click(function(){
                                    window.location.hash = '#images';
                                });
                            }
                        }
                    };
                    img.src = _URL.createObjectURL(file);
                }
            });
    }
    uploadImageValidation();
</script>