<?php
/* @var $this BannerController */
/* @var $model Banner */
/* @var $form CActiveForm */
?>
<div class="form">
	<div class="span12">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="icon-table"></i>
					<?php if(isset($type)):?>Edit Customer<?php else:?>Create New Customer<?php endif;?>
				</h3>
			</div>
			<div class="box-content nopadding">
				<?php $form=$this->beginWidget('CActiveForm', array(
										'id'=>'customer-form',
										'enableAjaxValidation'=>false,
										'htmlOptions'=>array(
											'class'=>'form-horizontal form-bordered form-validate',
											'enctype' => 'multipart/form-data',
										),										
								));
				?>
				<div class="control-group">
					<?php echo $form->labelEx($model,'userFirstName',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php echo $form->textField($model,'userFirstName',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
						<?php echo $form->error($model, 'userFirstName'); ?>
					</div>
				</div>
				<div class="control-group">
					<?php echo $form->labelEx($model,'userLastName',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php echo $form->textField($model,'userLastName',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
						<?php echo $form->error($model, 'userLastName'); ?>
					</div>
				</div>
				<div class="control-group">
					<?php echo $form->labelEx($model,'userEmail',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php echo $form->textField($model,'userEmail',array('class'=>'input-xlarge','data-rule-required'=>'true','data-rule-email'=>'true')); ?>	
						<?php echo $form->error($model, 'userEmail'); ?>
					</div>
				</div>
				<div class="control-group">
					<?php echo $form->labelEx($loginModel,'userPassword',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php echo $form->passwordField($loginModel,'userPassword',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
						<?php echo $form->error($loginModel, 'userPassword'); ?>
					</div>
				</div>
				<div class="control-group">
					<?php echo $form->labelEx($loginModel,'repassword',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php echo $form->passwordField($loginModel,'repassword',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
						<?php echo $form->error($loginModel, 'repassword'); ?>
					</div>
				</div>
				<div class="control-group">
					<?php echo $form->labelEx($model,'userPhone',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php echo $form->textField($model,'userPhone',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
						<?php echo $form->error($model, 'userPhone'); ?>
					</div>
				</div>
				<div class="control-group">
					<?php echo $form->labelEx($model,'userGender',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php echo $form->dropDownList($model,'userGender',array('Male'=>'Male','Female'=>'Female'),array('empty'=>'- Select Gender -','class'=>'select2-me','data-rule-required'=>'true')); ?>	
						<?php echo $form->error($model, 'userGender'); ?>
					</div>
				</div>
				<div class="note"><strong>Note :</strong> <span class="required">*</span> Indicates mandatory fields.</div>
					<div class="form-actions">  
						<?php echo CHtml::submitButton('Submit',array('class'=>'btn btn-primary','title'=>'Submit','alt'=>'Submit')); ?>
						<?php echo CHtml::link('Cancel',array('/admin/customers'),array('class'=>'btn','title'=>'Cancel','alt'=>'Cancel')); ?>  
					</div>
				<?php $this->endWidget(); ?>
			</div><!-- form -->
		</div>
	</div>
</div>