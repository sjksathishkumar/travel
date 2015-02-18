<!--User Registration Popup Start-->
<div id="user-shipping-content">
    <?php $form = $this->beginWidget('CActiveForm', array(
                            'id' => 'user-shipping-form',
                            'action'=>Yii::app()->createUrl('/checkout/editshippingAddress'),
                            'enableAjaxValidation' => false,
                            'method'=>'post',
                            'htmlOptions' => array(
                                'class' => 'form-horizontal form-bordered validate-form',
                                //'enctype' => 'multipart/form-data',
                            )
                        ));?>
        <div class="simplebox input-row">Edit shipping Address</div>
        <div class="simplebox input-row">
            <div class="divleft"><label>Address1 <em>*</em></label></div>
            <div class="divright">
                <?php echo $form->textField($model,'orderShippingAddress1',array('class'=>'input-box requiredField','placeholder'=>'Enter your shipping address1.'));?>
            </div>
        </div>
        <div class="simplebox input-row">
            <div class="divleft"><label>Addrss2 <em>*</em></label></div>
            <div class="divright">
                <?php echo $form->textField($model,'orderShippingAddress2',array('class'=>'input-box requiredField','placeholder'=>'Enter your shipping address2.'));?>
            </div>
        </div>
        <div class="simplebox input-row">
            <div class="divleft"><?php echo $form->labelEx($model,'orderShippingCountry',array('class'=>'control-label','for'=>'textfield')); ?></div>
            <div class="divright drop2">
                <?php echo $form->dropDownList($model, 'orderShippingCountry',CHtml::listData(Country::model()->findAll(), 'pkCountryID', 'countryName'),
                                                        array(
                                                            'empty'=>'- Select Country -',
                                                            'class'=>'select-cat requiredField',
                                                            'data-rule-required'=>'true',
                                                        )
                                                ); ?>   
                <?php echo $form->error($model, 'orderShippingCountry'); ?>
            </div>
        </div>
         <div class="simplebox input-row">
            <div class="divleft"><?php echo $form->labelEx($model,'orderShippingState',array('class'=>'control-label','for'=>'textfield')); ?></div>
            <div class="divright drop2">
                <?php echo $form->dropDownList($model,'orderShippingState',$model->shippingStateOptions,
                                                    array(
                                                        'empty'=>'- Select State -',
                                                        'class'=>'select-cat requiredField',
                                                        'data-rule-required'=>'true',
                                                        'id'=>'ordershippingstate',
                                                         )
                                                    ); ?>  
                <?php echo $form->error($model, 'orderShippingState'); ?>
            </div>
        </div>
        <div class="simplebox input-row">
            <div class="divleft"><?php echo $form->labelEx($model,'orderShippingCity',array('class'=>'control-label','for'=>'textfield')); ?></div>
            <div class="divright drop2">
                <?php echo $form->dropDownList($model,'orderShippingCity',$model->shippingCityOptions,array('empty'=>'- Select City -','class'=>'select-cat requiredField','data-rule-required'=>'true','id'=>'ordershippingcity')); ?>   
                <?php echo $form->error($model, 'orderShippingCity'); ?>
            </div>
        </div>
        <div class="simplebox input-row">
            <div class="divleft"><label>Zipcode <em>*</em></label></div>
            <div class="divright">
                <?php echo $form->textField($model,'orderShippingZipcode',array('class'=>'input-box requiredField','placeholder'=>'Enter your shipping zipcode.'));?>
            </div>
        </div>
        <div class="simplebox input-row">
            <div class="divleft"><label>Phone<em>*</em></label></div>
            <div class="divright drop2">
                <?php echo $form->textField($model,'orderShippingPhone',array('class'=>'input-box requiredField phoneField','placeholder'=>'Enter your shipping phone.'));?>
            </div>
        </div>
        <div class="simplebox input-row">
            <?php echo CHtml::submitButton('Update',array('class'=>'sendpayinstt'));?>
        </div>
        <div class="validation_errors"></div>
    <?php $this->endWidget();?>
</div>
