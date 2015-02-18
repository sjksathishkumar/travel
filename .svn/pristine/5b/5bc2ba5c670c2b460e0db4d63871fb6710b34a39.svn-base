<!--User Registration Popup Start-->
<div id="user-billing-content">
    <?php $form = $this->beginWidget('CActiveForm', array(
                            'id' => 'user-billing-form',
                            'action'=>Yii::app()->createUrl('/checkout/editBillingAddress'),
                            'enableAjaxValidation' => false,
                            'method'=>'post',
                            'htmlOptions' => array(
                                'class' => 'form-horizontal form-bordered validate-form',
                                //'enctype' => 'multipart/form-data',
                            )
                        ));?>
        <div class="simplebox input-row">Edit Billing Address</div>
        <div class="simplebox input-row">
            <div class="divleft"><label>Address1 <em>*</em></label></div>
            <div class="divright">
                <?php echo $form->textField($model,'orderBillingAddress1',array('class'=>'input-box requiredField','placeholder'=>'Enter your billing address1.'));?>
            </div>
        </div>
        <div class="simplebox input-row">
            <div class="divleft"><label>Addrss2 <em>*</em></label></div>
            <div class="divright">
                <?php echo $form->textField($model,'orderBillingAddress2',array('class'=>'input-box requiredField','placeholder'=>'Enter your billing address2.'));?>
            </div>
        </div>
        <div class="simplebox input-row">
            <div class="divleft"><?php echo $form->labelEx($model,'orderBillingCountry',array('class'=>'control-label','for'=>'textfield')); ?></div>
            <div class="divright drop2">
                <?php echo $form->dropDownList($model, 'orderBillingCountry',CHtml::listData(Country::model()->findAll(), 'pkCountryID', 'countryName'),
                                                        array(
                                                            'empty'=>'- Select Country -',
                                                            'class'=>'select-cat requiredField',
                                                            'data-rule-required'=>'true',
                                                        )
                                                ); ?>   
                <?php echo $form->error($model, 'orderBillingCountry'); ?>
            </div>
        </div>
         <div class="simplebox input-row">
            <div class="divleft"><?php echo $form->labelEx($model,'orderBillingState',array('class'=>'control-label','for'=>'textfield')); ?></div>
            <div class="divright drop2">
                <?php echo $form->dropDownList($model,'orderBillingState',$model->billingStateOptions,
                                                    array(
                                                        'empty'=>'- Select State -',
                                                        'class'=>'select-cat requiredField',
                                                        'data-rule-required'=>'true',
                                                        'id'=>'orderbillingstate',
                                                         )
                                                    ); ?>  
                <?php echo $form->error($model, 'orderBillingState'); ?>
            </div>
        </div>
        <div class="simplebox input-row">
            <div class="divleft"><?php echo $form->labelEx($model,'orderBillingCity',array('class'=>'control-label','for'=>'textfield')); ?></div>
            <div class="divright drop2">
                <?php echo $form->dropDownList($model,'orderBillingCity',$model->billingCityOptions,array('empty'=>'- Select City -','class'=>'select-cat requiredField','data-rule-required'=>'true','id'=>'orderbillingcity')); ?>   
                <?php echo $form->error($model, 'orderBillingCity'); ?>
            </div>
        </div>
        <div class="simplebox input-row">
            <div class="divleft"><label>Zipcode <em>*</em></label></div>
            <div class="divright">
                <?php echo $form->textField($model,'orderBillingZipcode',array('class'=>'input-box requiredField','placeholder'=>'Enter your billing zipcode.'));?>
            </div>
        </div>
        <div class="simplebox input-row">
            <div class="divleft"><label>Phone<em>*</em></label></div>
            <div class="divright drop2">
                <?php echo $form->textField($model,'orderBillingPhone',array('class'=>'input-box requiredField phoneField','placeholder'=>'Enter your billing phone.'));?>
            </div>
        </div>
        <div class="simplebox input-row">
            <?php echo CHtml::submitButton('Update',array('class'=>'sendpayinstt'));?>
        </div>
        <div class="validation_errors"></div>
    <?php $this->endWidget();?>
</div>
