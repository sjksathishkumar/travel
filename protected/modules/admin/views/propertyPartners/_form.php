<?php
/* @var $this PropertyPartnersController */
/* @var $model PropertyPartners */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'property-partners-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fkUserLoginID'); ?>
		<?php echo $form->textField($model,'fkUserLoginID'); ?>
		<?php echo $form->error($model,'fkUserLoginID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'propertyPartnerUniqueID'); ?>
		<?php echo $form->textField($model,'propertyPartnerUniqueID',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'propertyPartnerUniqueID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'propertyPartnerFirstName'); ?>
		<?php echo $form->textField($model,'propertyPartnerFirstName',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'propertyPartnerFirstName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'propertyPartnerLastName'); ?>
		<?php echo $form->textField($model,'propertyPartnerLastName',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'propertyPartnerLastName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'propertyPartnerUserName'); ?>
		<?php echo $form->textField($model,'propertyPartnerUserName',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'propertyPartnerUserName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'propertyPartnerEmail'); ?>
		<?php echo $form->textField($model,'propertyPartnerEmail',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'propertyPartnerEmail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'propertyPartnerMobile'); ?>
		<?php echo $form->textField($model,'propertyPartnerMobile',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'propertyPartnerMobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'propertyPartnerBusinessName'); ?>
		<?php echo $form->textField($model,'propertyPartnerBusinessName',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'propertyPartnerBusinessName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'propertyPartnerWebsite'); ?>
		<?php echo $form->textField($model,'propertyPartnerWebsite',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'propertyPartnerWebsite'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'propertyPartnerContactMethod'); ?>
		<?php echo $form->textField($model,'propertyPartnerContactMethod',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'propertyPartnerContactMethod'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'propertyPartnerSubscriptionPlan'); ?>
		<?php echo $form->textField($model,'propertyPartnerSubscriptionPlan',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'propertyPartnerSubscriptionPlan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'propertyPartnerStatus'); ?>
		<?php echo $form->textField($model,'propertyPartnerStatus',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'propertyPartnerStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'propertyPartnerFeePaid'); ?>
		<?php echo $form->textField($model,'propertyPartnerFeePaid',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'propertyPartnerFeePaid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'propertyPartnerAddress'); ?>
		<?php echo $form->textField($model,'propertyPartnerAddress',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'propertyPartnerAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'propertyPartnerCity'); ?>
		<?php echo $form->textField($model,'propertyPartnerCity'); ?>
		<?php echo $form->error($model,'propertyPartnerCity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'propertyPartnerState'); ?>
		<?php echo $form->textField($model,'propertyPartnerState'); ?>
		<?php echo $form->error($model,'propertyPartnerState'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'propertyPartnerCountry'); ?>
		<?php echo $form->textField($model,'propertyPartnerCountry'); ?>
		<?php echo $form->error($model,'propertyPartnerCountry'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'propertyPartnerZip'); ?>
		<?php echo $form->textField($model,'propertyPartnerZip'); ?>
		<?php echo $form->error($model,'propertyPartnerZip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'eWalletBalance'); ?>
		<?php echo $form->textField($model,'eWalletBalance'); ?>
		<?php echo $form->error($model,'eWalletBalance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'wishginiBalance'); ?>
		<?php echo $form->textField($model,'wishginiBalance'); ?>
		<?php echo $form->error($model,'wishginiBalance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'propertyPartnerAccountActivationToken'); ?>
		<?php echo $form->textField($model,'propertyPartnerAccountActivationToken',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'propertyPartnerAccountActivationToken'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'propertyPartnerDateAdded'); ?>
		<?php echo $form->textField($model,'propertyPartnerDateAdded'); ?>
		<?php echo $form->error($model,'propertyPartnerDateAdded'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'propertyPartnerDateModified'); ?>
		<?php echo $form->textField($model,'propertyPartnerDateModified'); ?>
		<?php echo $form->error($model,'propertyPartnerDateModified'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->