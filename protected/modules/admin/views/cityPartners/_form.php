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
					<?php if(isset($type)):?>Edit City Partner<?php else:?>Create New City Partner<?php endif;?>
				</h3>
			</div>
			<div class="box-content nopadding">
				<?php $form=$this->beginWidget('CActiveForm', array(
										'id'=>'new-city-partner-form',
										'enableAjaxValidation'=>false,
										'htmlOptions'=>array(
											'class'=>'form-horizontal form-bordered form-validate',
											'enctype' => 'multipart/form-data',
										),										
								));
				?>
				<?php echo $form->errorSummary($model); ?>
				<div class="control-group">
					<?php echo $form->labelEx($model,'cityPartnerFirstName',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php echo $form->textField($model,'cityPartnerFirstName',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
						<?php echo $form->error($model, 'cityPartnerFirstName'); ?>
					</div>
				</div>
				<div class="control-group">
					<?php echo $form->labelEx($model,'cityPartnerLastName',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php echo $form->textField($model,'cityPartnerLastName',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
						<?php echo $form->error($model, 'cityPartnerLastName'); ?>
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
					<?php echo $form->labelEx($model,'cityPartnerMobile',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php echo $form->textField($model,'cityPartnerMobile',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
						<?php echo $form->error($model, 'cityPartnerMobile'); ?>
					</div>
				</div>
				<div class="control-group">
					<?php echo $form->labelEx($model,'cityPartnerContactMethod',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php echo $form->dropDownList($model,'cityPartnerContactMethod',array('1'=>'Mobile','2'=>'E-Mail','3'=>'Both'),array('empty'=>'- Select Mode -','class'=>'select2-me input-large','data-rule-required'=>'true')); ?>	
						<?php echo $form->error($model, 'cityPartnerContactMethod'); ?>
					</div>
				</div>
				<div class="control-group">
					<?php echo $form->labelEx($model,'cityPartnerSubscriptionPlan',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php echo $form->dropDownList($model,'cityPartnerSubscriptionPlan',array('1'=>'Free','2'=>'Basic','3'=>'Pro'),array('empty'=>'- Select Plan -','class'=>'select2-me input-large','data-rule-required'=>'true')); ?>	
						<?php echo $form->error($model, 'cityPartnerSubscriptionPlan'); ?>
					</div>
				</div>
				<div class="control-group">
					<?php echo $form->labelEx($model,'cityPartnerBusinessName',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php echo $form->textField($model,'cityPartnerBusinessName',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
						<?php echo $form->error($model, 'cityPartnerBusinessName'); ?>
					</div>
				</div>
				<div class="control-group">
					<?php echo $form->labelEx($model,'cityPartnerWebsite',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php echo $form->textField($model,'cityPartnerWebsite',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
						<?php echo $form->error($model, 'cityPartnerWebsite'); ?>
					</div>
				</div>
				<div class="note"><strong>Note :</strong> <span class="required">*</span> Indicates mandatory fields.</div>
					<div class="form-actions">  
						<?php echo CHtml::submitButton('Submit',array('class'=>'btn btn-primary','title'=>'Submit','alt'=>'Submit')); ?>
						<?php echo CHtml::link('Cancel',array('/admin/cityPartners'),array('class'=>'btn','title'=>'Cancel','alt'=>'Cancel')); ?>  
					</div>
				<?php $this->endWidget(); ?>
			</div><!-- form -->
		</div>
	</div>
</div>




