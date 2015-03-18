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
					<?php if(isset($type)):?>Edit Property Partner<?php else:?>Create New Property Partner<?php endif;?>
				</h3>
			</div>
			<div class="box-content nopadding">
				<?php $form=$this->beginWidget('CActiveForm', array(
										'id'=>'new-property-partner-form',
										'enableAjaxValidation'=>false,
										'htmlOptions'=>array(
											'class'=>'form-horizontal form-bordered form-validate',
											'enctype' => 'multipart/form-data',
										),										
								));
				?>
				<?php echo $form->errorSummary($model); ?>
				<div class="control-group">
					<?php echo $form->labelEx($model,'propertyPartnerFirstName',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php echo $form->textField($model,'propertyPartnerFirstName',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
						<?php echo $form->error($model, 'propertyPartnerFirstName'); ?>
					</div>
				</div>
				<div class="control-group">
					<?php echo $form->labelEx($model,'propertyPartnerLastName',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php echo $form->textField($model,'propertyPartnerLastName',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
						<?php echo $form->error($model, 'propertyPartnerLastName'); ?>
					</div>
				</div>
				<div class="control-group">
					<?php echo $form->labelEx($loginModel,'userEmail',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php echo $form->textField($loginModel,'userEmail',array('class'=>'input-xlarge','data-rule-required'=>'true','data-rule-email'=>'true')); ?>	
						<?php echo $form->error($loginModel, 'userEmail'); ?>
					</div>
				</div>
				<div class="control-group">
					<?php echo $form->labelEx($loginModel,'userName',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php echo $form->textField($loginModel,'userName',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
						<?php echo $form->error($loginModel, 'userName'); ?>
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
					<?php echo $form->labelEx($model,'propertyPartnerMobile',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php echo $form->textField($model,'propertyPartnerMobile',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
						<?php echo $form->error($model, 'propertyPartnerMobile'); ?>
					</div>
				</div>
				<div class="control-group">
					<?php echo $form->labelEx($model,'propertyPartnerContactMethod',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php echo $form->dropDownList($model,'propertyPartnerContactMethod',array('1'=>'Mobile','2'=>'E-Mail','3'=>'Both'),array('empty'=>'- Select Mode -','class'=>'select2-me input-large','data-rule-required'=>'true')); ?>	
						<?php echo $form->error($model, 'propertyPartnerContactMethod'); ?>
					</div>
				</div>
				<div class="control-group">
					<?php echo $form->labelEx($model,'propertyPartnerSubscriptionPlan',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php echo $form->dropDownList($model,'propertyPartnerSubscriptionPlan',array('1'=>'Free','2'=>'Basic','3'=>'Pro'),array('empty'=>'- Select Plan -','class'=>'select2-me input-large','data-rule-required'=>'true')); ?>	
						<?php echo $form->error($model, 'propertyPartnerSubscriptionPlan'); ?>
					</div>
				</div>
				<div class="control-group">
					<?php echo $form->labelEx($model,'propertyPartnerBusinessName',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php echo $form->textField($model,'propertyPartnerBusinessName',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
						<?php echo $form->error($model, 'propertyPartnerBusinessName'); ?>
					</div>
				</div>
				<div class="control-group">
					<?php echo $form->labelEx($model,'propertyPartnerWebsite',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php echo $form->textField($model,'propertyPartnerWebsite',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
						<?php echo $form->error($model, 'propertyPartnerWebsite'); ?>
					</div>
				</div>
				<div class="note"><strong>Note :</strong> <span class="required">*</span> Indicates mandatory fields.</div>
					<div class="form-actions">  
						<?php echo CHtml::submitButton('Submit',array('class'=>'btn btn-primary','title'=>'Submit','alt'=>'Submit')); ?>
						<?php echo CHtml::link('Cancel',array('/admin/PropertyPartners'),array('class'=>'btn','title'=>'Cancel','alt'=>'Cancel')); ?>  
					</div>
				<?php $this->endWidget(); ?>
			</div><!-- form -->
		</div>
	</div>
</div>

