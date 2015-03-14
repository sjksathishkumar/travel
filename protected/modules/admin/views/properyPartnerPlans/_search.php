<?php
/* @var $this ProperyPartnerPlansController */
/* @var $model ProperyPartnerPlans */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pkPlanID'); ?>
		<?php echo $form->textField($model,'pkPlanID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'planName'); ?>
		<?php echo $form->textField($model,'planName',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'membershipFee'); ?>
		<?php echo $form->textField($model,'membershipFee'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'daysValidity'); ?>
		<?php echo $form->textField($model,'daysValidity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numberOfListing'); ?>
		<?php echo $form->textField($model,'numberOfListing'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'accessBooking'); ?>
		<?php echo $form->textField($model,'accessBooking',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'addToWishgini'); ?>
		<?php echo $form->textField($model,'addToWishgini',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'receiveCoupons'); ?>
		<?php echo $form->textField($model,'receiveCoupons',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'planAddedDate'); ?>
		<?php echo $form->textField($model,'planAddedDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'planModifiedDate'); ?>
		<?php echo $form->textField($model,'planModifiedDate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->