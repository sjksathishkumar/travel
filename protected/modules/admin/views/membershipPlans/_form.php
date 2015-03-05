<?php
/* @var $this CmsController */
/* @var $model Cms */
/* @var $form CActiveForm */
$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->getClientScript();

$cs->registerScriptFile($baseUrl . '/assets/backend/ckeditor/ckeditor.js');
$cs->registerScriptFile($baseUrl . '/assets/backend/fck_editor/js/sample.js');
$cs->registerCssFile($baseUrl . '/assets/backend/fck_editor/css/sample.css');
?>
<div class="row-fluid">
   <div class="span12">
        <div class="box box-color box-bordered">
             <div class="box-title">
                   <?php if(strstr(Yii::app()->request->requestUri,'update')){?>
                   		<h3><i class="icon-table"></i>Update Plans</h3>
                   	<?php }else{?>
                   		<h3><i class="icon-table"></i>Add New Plans</h3>
                   	<?php }?>
             </div>
             <div class="box-content nopadding">
				<?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'membership-plans-form',
					'enableAjaxValidation'=>false,
					'htmlOptions'=>array(
	                        'class'=>'form-horizontal form-bordered form-validate',
	                 )
				)); ?>
				<?php if($form->errorSummary($model)){ ?>
                 <div class="control-group">
                            <label class="control-label" for="textfield">&nbsp;</label>
                            <div class="controls">
                                    <?php echo $form->errorSummary($model); ?>
                            </div>
                    </div>
                 <?php }?>
					<div class="control-group">
						<?php echo $form->labelEx($model,'membershipFee',array('class'=>'control-label','for'=>'textfield')); ?>
						<div class="controls">
							<?php echo $form->textField($model,'membershipFee',array('size'=>60,'maxlength'=>255,'data-rule-required'=>'true','class'=>'input-xxlarge')); ?>
						</div>
					</div>
										
					<div class="control-group">
						<?php echo $form->labelEx($model,'accessBooking',array('class'=>'control-label','for'=>'textfield')); ?>
						<div class="controls">
							<?php echo $form->dropDownList($model,'accessBooking',array(''=>'Select','1'=>'Active','0'=>'Inactive'),array('data-rule-required'=>'true','class'=>'input-xlarge select2-me')); ?>
						</div>
					</div>

					<div class="control-group">
						<?php echo $form->labelEx($model,'addToWishgini',array('class'=>'control-label','for'=>'textfield')); ?>
						<div class="controls">
							<?php echo $form->dropDownList($model,'addToWishgini',array(''=>'Select','1'=>'Active','0'=>'Inactive'),array('data-rule-required'=>'true','class'=>'input-xlarge select2-me')); ?>
						</div>
					</div>

					<div class="control-group">
						<?php echo $form->labelEx($model,'receiveCoupons',array('class'=>'control-label','for'=>'textfield')); ?>
						<div class="controls">
							<?php echo $form->dropDownList($model,'receiveCoupons',array(''=>'Select','1'=>'Active','0'=>'Inactive'),array('data-rule-required'=>'true','class'=>'input-xlarge select2-me')); ?>
						</div>
					</div>

					<div class="note"><strong>Note :</strong> <span class="required">*</span> Indicates mandatory fields.</div>
                    <div class="form-actions">  
                         <?php echo CHtml::submitButton('Submit',array('class'=>'btn btn-primary','title'=>'Submit','alt'=>'Submit')); ?>
                         <?php echo CHtml::link('Cancel',array('/admin/cms'),array('class'=>'btn','title'=>'Cancel','alt'=>'Cancel')); ?>  
                    </div>

				<?php $this->endWidget(); ?>
				</div>
	    </div>
	</div>
</div>


