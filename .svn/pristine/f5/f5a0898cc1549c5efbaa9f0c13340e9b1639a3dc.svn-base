<div class="box box-color box-bordered">
    <div class="box-content nopadding">
        <span id="associatedCity" style="display: none;color: green">
            <?php
            if ($countAsssociatedCity > 0)
            {
                echo 'City deleted succesfully, ' . $countAsssociatedCity . ' Deals was associated with this city' . '<br/>' .
                'To see the list, please <a target="_blank" href="' . Yii::app()->createUrl('admin/deals') . '/' . $cityID . '">click here</a>';
            }
            else
            {
                echo 'City deleted succesfully, ' . $countAsssociatedCity . ' Deals was associated with this city';
            }
            ?>
        </span>
        <span id="message"></span>
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'city-form',
            'enableAjaxValidation' => false,
            'htmlOptions' => array(
                'class' => 'form-horizontal form-bordered form-validate',
                'enctype' => 'multipart/form-data'
            )
                ));
        ?>
        <div class="control-group">
            <div class="span6">
                <div class="control-group">
                    <?php echo $form->labelEx($model, 'Delete city', array('class' => 'control-label', 'for' => 'textfield')); ?>
                    <div class="controls">
                        <?php
                        $criteria = new CDbCriteria;
                        $criteria->condition = 'cityStatus = "1"';
                        echo $form->dropDownList($model, 'dealCity', CHtml::listData(City::model()->findAll($criteria), 'pkCityID', 'cityName'), array('empty' => '-Select City-', 'class' => 'span6 select2-me city-select', 'id' => 'dealCity', 'data-rule-required' => 'true',));
                        echo CHtml::button('Delete', array('class' => 'btn btn-primary', 'id' => 'delete_city'));
                        ?>
                        <?php echo $form->error($model, 'dealCity'); ?>
                    </div>
                </div>
                <div class="control-group">
                    <?php echo $form->labelEx($modelCity, 'Add city', array('class' => 'control-label', 'for' => 'textfield')); ?>
                    <div class="controls">
                        <?php echo $form->textField($modelCity, 'cityName', array('size' => 60, 'maxlength' => 255, 'data-rule-required' => 'true', 'class' => 'input city-input', 'id' => 'cityName')); ?>
                        <?php echo CHtml::button('Add', array('class' => 'btn btn-primary', 'id' => 'add_city')); ?>
                        <?php echo $form->error($modelCity, 'cityName'); ?>

                    </div>
                </div>
            </div>
        </div>
        <?php $this->endWidget(); ?>
    </div>
</div>

<script type="text/javascript">
    //    $(document).ready(function(){
    //Add city
    $('#add_city').click(function(){
        var str=$('#cityName').val();
        if(str)
        {
            $.ajax({type:"POST", url:'<?php echo Yii::app()->params["siteURL"]; ?>/admin/deals/addCity',data:{'add_city_name' : str},success:function(data) {
                    $("#addCity").html(data);
                    updatecity();
                    $('#associatedCity').css('display','none');
                    $('#message').css('color','green');
                    $('#message').html('City added successfully!');
                }
            })
        }
        else
        {
            $('#associatedCity').css('display','none');
            $('#message').css('color','red');
            $('#message').html('Please provide city!');
            return false;
        }
    });

    //Delete City
    $('#delete_city').click(function(){
        var str=$('#dealCity').val();
        if(str)
        {
            $.ajax({type:"POST", url:'<?php echo Yii::app()->params["siteURL"]; ?>/admin/deals/addCity',data:{'delete_city_name' : str},success:function(data) {
                    $("#addCity").html(data);
                    updatecity();
                    $('#message').css('display','none');
                    $('#associatedCity').css('display','block');
                }
            })
        }
        else
        {
            $('#message').css('display','none');
            $('#associatedCity').css('display','none');
            return false;
        }
    });
    //    });
    
    function updatecity() {
        $.ajax({url:'<?php echo Yii::app()->params["siteURL"]; ?>/admin/deals/fetchCity',success:function(data) {
                $('#deal_city').html(data);
            }
        })
    }
   
</script>