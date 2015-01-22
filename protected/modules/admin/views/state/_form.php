<div class="row-fluid">
    <div class="span12">
        <div class="box box-color box-bordered">
            <div class="box-title">
                <?php if(strstr(Yii::app()->request->requestUri,'update')){?>
                    <h3><i class="icon-table"></i>Update State</h3>
                <?php }else{?>
                    <h3><i class="icon-table"></i>Add New State</h3>
                <?php }?>
            </div>
            <div class="box-content nopadding">
                <?php
                $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'state-form',
                    'enableAjaxValidation' => false,
                    'htmlOptions' => array(
                        'class' => 'form-horizontal form-bordered form-validate',
                        'enctype' => 'multipart/form-data',
                    )
                        ));
                ?>
                <div class="control-group">
                    <?php echo $form->labelEx($model, 'stateName', array('class' => 'control-label', 'for' => 'textfield')); ?>
                    <div class="controls">
                        <?php echo $form->textField($model, 'stateName', array('size' => 60, 'maxlength' => 255, 'data-rule-required' => 'true', 'class' => 'input-xxlarge')); ?>
                        <?php echo $form->error($model, 'stateName'); ?>
                    </div>
                </div>
                <div class="control-group">
                    <?php echo $form->labelEx($model, 'fkCountryID', array('class' => 'control-label', 'for' => 'textfield')); ?>
                    <div class="controls">
                        <?php echo $form->dropDownList($model, 'fkCountryID',CHtml::listData(Country::model()->findAll(), 'pkCountryID', 'countryName'), array('empty'=>'- Select Country -', 'data-rule-required' => 'true', 'class' => 'input-xlarge select2-me')); ?>
                        <?php echo $form->error($model, 'fkCountryID'); ?>
                    </div>
                </div>
                <div class="control-group">
                    <?php echo $form->labelEx($model, 'stateStatus', array('class' => 'control-label', 'for' => 'textfield')); ?>
                    <div class="controls">
                        <?php echo $form->dropDownList($model, 'stateStatus', array('' => '- Select Status-', '1' => 'Active', '0' => 'Inactive'), array('data-rule-required' => 'true', 'class' => 'input-xlarge select2-me')); ?>
                        <?php echo $form->error($model, 'stateStatus'); ?>
                    </div>
                </div>

                <div class="note"><strong>Note :</strong> <span class="required">*</span> Indicates mandatory fields.</div>
                <div class="form-actions">
                    <?php echo CHtml::submitButton('Submit', array('class' => 'btn btn-primary','title'=>'Submit','alt'=>'Submit','id'=>'addStateBtn')); ?>
                    <?php echo CHtml::link('Cancel', array('/admin/state'), array('class' => 'btn','title'=>'Cancel','alt'=>'Cancel')); ?>
                </div>
                <?php $this->endWidget(); ?>
            </div>
        </div>
    </div>
</div>