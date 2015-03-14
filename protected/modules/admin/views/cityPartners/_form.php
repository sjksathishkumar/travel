<?php
/* @var $this CityPartnersController */
/* @var $model CityPartners */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'city-partners-form',
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
		<?php echo $form->labelEx($model,'cityPartnerUniqueID'); ?>
		<?php echo $form->textField($model,'cityPartnerUniqueID',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cityPartnerUniqueID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cityPartnerFirstName'); ?>
		<?php echo $form->textField($model,'cityPartnerFirstName',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cityPartnerFirstName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cityPartnerLastName'); ?>
		<?php echo $form->textField($model,'cityPartnerLastName',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cityPartnerLastName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cityPartnerUserName'); ?>
		<?php echo $form->textField($model,'cityPartnerUserName',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cityPartnerUserName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cityPartnerEmail'); ?>
		<?php echo $form->textField($model,'cityPartnerEmail',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cityPartnerEmail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cityPartnerMobile'); ?>
		<?php echo $form->textField($model,'cityPartnerMobile',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cityPartnerMobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cityPartnerBusinessName'); ?>
		<?php echo $form->textField($model,'cityPartnerBusinessName',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cityPartnerBusinessName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cityPartnerWebsite'); ?>
		<?php echo $form->textField($model,'cityPartnerWebsite',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cityPartnerWebsite'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cityPartnerContactMethod'); ?>
		<?php echo $form->textField($model,'cityPartnerContactMethod',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'cityPartnerContactMethod'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cityPartnerSubscriptionPlan'); ?>
		<?php echo $form->textField($model,'cityPartnerSubscriptionPlan',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'cityPartnerSubscriptionPlan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cityPartnerStatus'); ?>
		<?php echo $form->textField($model,'cityPartnerStatus',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'cityPartnerStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cityPartnerFeePaid'); ?>
		<?php echo $form->textField($model,'cityPartnerFeePaid',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'cityPartnerFeePaid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cityPartnerAddress'); ?>
		<?php echo $form->textField($model,'cityPartnerAddress',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cityPartnerAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cityPartnerCity'); ?>
		<?php echo $form->textField($model,'cityPartnerCity'); ?>
		<?php echo $form->error($model,'cityPartnerCity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cityPartnerState'); ?>
		<?php echo $form->textField($model,'cityPartnerState'); ?>
		<?php echo $form->error($model,'cityPartnerState'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cityPartnerCountry'); ?>
		<?php echo $form->textField($model,'cityPartnerCountry'); ?>
		<?php echo $form->error($model,'cityPartnerCountry'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cityPartnerOperationCity'); ?>
		<?php echo $form->textField($model,'cityPartnerOperationCity'); ?>
		<?php echo $form->error($model,'cityPartnerOperationCity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cityPartnerOperationState'); ?>
		<?php echo $form->textField($model,'cityPartnerOperationState'); ?>
		<?php echo $form->error($model,'cityPartnerOperationState'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cityPartnerOperationCountry'); ?>
		<?php echo $form->textField($model,'cityPartnerOperationCountry'); ?>
		<?php echo $form->error($model,'cityPartnerOperationCountry'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cityPartnerOperationArea'); ?>
		<?php echo $form->textField($model,'cityPartnerOperationArea',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cityPartnerOperationArea'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cityPartnerZip'); ?>
		<?php echo $form->textField($model,'cityPartnerZip'); ?>
		<?php echo $form->error($model,'cityPartnerZip'); ?>
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
		<?php echo $form->labelEx($model,'cityPartnerAccountActivationToken'); ?>
		<?php echo $form->textField($model,'cityPartnerAccountActivationToken',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cityPartnerAccountActivationToken'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cityPartnerDateAdded'); ?>
		<?php echo $form->textField($model,'cityPartnerDateAdded'); ?>
		<?php echo $form->error($model,'cityPartnerDateAdded'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cityPartnerDateModified'); ?>
		<?php echo $form->textField($model,'cityPartnerDateModified'); ?>
		<?php echo $form->error($model,'cityPartnerDateModified'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->