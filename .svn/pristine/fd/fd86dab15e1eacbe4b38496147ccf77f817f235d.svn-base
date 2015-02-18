<div class="row-fluid">
    <div class="span12">
        <div class="box box-color box-bordered">
            <div class="box-title">
                <?php if(strstr(Yii::app()->request->requestUri,'update')){?>
                    <h3><i class="icon-table"></i>Update Coupon</h3>
                <?php }else{?>
                    <h3><i class="icon-table"></i>Add New Coupon</h3>
                <?php }?>
            </div>
            <div class="box-content nopadding">
                <?php
                $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'coupons-form',
                    'enableAjaxValidation' => false,
                    'htmlOptions' => array(
                        'class' => 'form-horizontal form-bordered form-validate',
                        'enctype' => 'multipart/form-data',
                    )
                        ));
                ?>
                <div class="control-group">
                    <?php echo $form->labelEx($model, 'couponName', array('class' => 'control-label', 'for' => 'textfield')); ?>
                    <div class="controls">
                        <?php echo $form->textField($model, 'couponName', array('size' => 60, 'maxlength' => 255, 'data-rule-required' => 'true', 'class' => 'input-large')); ?>
                        <?php echo $form->error($model, 'couponName'); ?>
                    </div>
                </div>
                <div class="control-group">
                    <?php echo $form->labelEx($model, 'couponCode', array('class' => 'control-label', 'for' => 'textfield')); ?>
                    <div class="controls">
                        <?php echo $form->textField($model, 'couponCode', array('size' => 60, 'maxlength' => 255, 'data-rule-required' => 'true', 'class' => 'input-large')); ?>
                        <?php echo $form->error($model, 'couponCode'); ?>
                    </div>
                </div>
                <div class="control-group">
                    <?php echo $form->labelEx($model, 'couponType', array('class' => 'control-label', 'for' => 'textfield')); ?>
                    <div class="controls">
                        <?php echo $form->dropDownList($model,'couponType',array('Flat'=>'Flat','Percentage'=>'Percentage'),array('empty'=>'- Select Coupon Type -','class'=>'select2-me input-large','data-rule-required'=>'true')); ?>
                        <?php echo $form->error($model, 'couponType'); ?>
                    </div>
                </div>
                <div class="control-group">
                    <?php echo $form->labelEx($model, 'couponDiscountVariable', array('class' => 'control-label', 'for' => 'textfield')); ?>
                    <div class="controls">
                        <?php echo $form->textField($model, 'couponDiscountVariable', array('size' => 60, 'maxlength' => 255, 'data-rule-required' => 'true', 'class' => 'input-large')); ?>
                        <?php echo $form->error($model, 'couponDiscountVariable'); ?>
                    </div>
                </div>
                <div class="control-group">
                    <?php echo $form->labelEx($model, 'couponMinimumPurchaseAmount', array('class' => 'control-label', 'for' => 'textfield')); ?>
                    <div class="controls">
                        <?php echo $form->textField($model, 'couponMinimumPurchaseAmount', array('size' => 60, 'maxlength' => 255, 'data-rule-required' => 'true', 'class' => 'input-large')); ?>
                        <?php echo $form->error($model, 'couponMinimumPurchaseAmount'); ?>
                    </div>
                </div>
                <div class="control-group">
                    <?php echo $form->labelEx($model, 'couponStartDate', array('class' => 'control-label', 'for' => 'textfield')); ?>
                    <div class="controls">
                        <?php echo $form->textField($model,'couponStartDate',array('class'=>'input-large datepick','readonly'=>'readonly','data-rule-required' => 'true',)); ?>
                        <?php echo $form->error($model, 'couponStartDate'); ?>
                    </div>
                </div>
                <div class="control-group">
                    <?php echo $form->labelEx($model, 'couponEndDate', array('class' => 'control-label', 'for' => 'textfield')); ?>
                    <div class="controls">
                        <?php echo $form->textField($model,'couponEndDate',array('class'=>'input-large datepick','readonly'=>'readonly','data-rule-required' => 'true',)); ?>
                        <?php echo $form->error($model, 'couponEndDate'); ?>
                    </div>
                </div>
                <div class="control-group">
                    <?php echo $form->labelEx($model, 'couponStatus', array('class' => 'control-label', 'for' => 'textfield')); ?>
                    <div class="controls">
                        <?php echo $form->dropDownList($model, 'couponStatus', array('' => 'Select', '0' => 'Inactive','1' => 'Active'), array('data-rule-required' => 'true', 'class' => 'input-large select2-me')); ?>
                        <?php echo $form->error($model, 'couponStatus'); ?>
                    </div>
                </div>

                <div class="note"><strong>Note :</strong> <span class="required">*</span> Indicates mandatory fields.</div>
                <div class="form-actions">
                    <?php echo CHtml::submitButton('Submit', array('class' => 'btn btn-primary','title'=>'Submit','alt'=>'Submit','id'=>'addCouponsBtn')); ?>
                    <?php echo CHtml::link('Cancel', array('/admin/coupons'), array('class' => 'btn','title'=>'Cancel','alt'=>'Cancel')); ?>
                </div>
                <?php $this->endWidget(); ?>
            </div>
        </div>
    </div>
</div>
<script>
    $('.datepick').datepicker({
        format: 'yyyy-mm-dd'
    });
</script>