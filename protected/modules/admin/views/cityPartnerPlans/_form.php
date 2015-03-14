<?php
/* @var $this CityPartnerPlansController */
/* @var $model CityPartnerPlans */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'city-partner-plans-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'planName'); ?>
		<?php echo $form->textField($model,'planName',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'planName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'membershipFee'); ?>
		<?php echo $form->textField($model,'membershipFee'); ?>
		<?php echo $form->error($model,'membershipFee'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'daysValidity'); ?>
		<?php echo $form->textField($model,'daysValidity'); ?>
		<?php echo $form->error($model,'daysValidity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numberOfListing'); ?>
		<?php echo $form->textField($model,'numberOfListing'); ?>
		<?php echo $form->error($model,'numberOfListing'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'accessBooking'); ?>
		<?php echo $form->textField($model,'accessBooking',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'accessBooking'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'addToWishgini'); ?>
		<?php echo $form->textField($model,'addToWishgini',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'addToWishgini'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'receiveCoupons'); ?>
		<?php echo $form->textField($model,'receiveCoupons',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'receiveCoupons'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'planAddedDate'); ?>
		<?php echo $form->textField($model,'planAddedDate'); ?>
		<?php echo $form->error($model,'planAddedDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'planModifiedDate'); ?>
		<?php echo $form->textField($model,'planModifiedDate'); ?>
		<?php echo $form->error($model,'planModifiedDate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->