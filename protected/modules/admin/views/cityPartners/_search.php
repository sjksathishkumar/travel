<?php
/* @var $this CityPartnersController */
/* @var $model CityPartners */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pkCityPartnerID'); ?>
		<?php echo $form->textField($model,'pkCityPartnerID',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fkUserLoginID'); ?>
		<?php echo $form->textField($model,'fkUserLoginID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cityPartnerUniqueID'); ?>
		<?php echo $form->textField($model,'cityPartnerUniqueID',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cityPartnerFirstName'); ?>
		<?php echo $form->textField($model,'cityPartnerFirstName',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cityPartnerLastName'); ?>
		<?php echo $form->textField($model,'cityPartnerLastName',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cityPartnerUserName'); ?>
		<?php echo $form->textField($model,'cityPartnerUserName',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cityPartnerEmail'); ?>
		<?php echo $form->textField($model,'cityPartnerEmail',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cityPartnerMobile'); ?>
		<?php echo $form->textField($model,'cityPartnerMobile',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cityPartnerBusinessName'); ?>
		<?php echo $form->textField($model,'cityPartnerBusinessName',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cityPartnerWebsite'); ?>
		<?php echo $form->textField($model,'cityPartnerWebsite',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cityPartnerContactMethod'); ?>
		<?php echo $form->textField($model,'cityPartnerContactMethod',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cityPartnerSubscriptionPlan'); ?>
		<?php echo $form->textField($model,'cityPartnerSubscriptionPlan',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cityPartnerStatus'); ?>
		<?php echo $form->textField($model,'cityPartnerStatus',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cityPartnerFeePaid'); ?>
		<?php echo $form->textField($model,'cityPartnerFeePaid',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cityPartnerAddress'); ?>
		<?php echo $form->textField($model,'cityPartnerAddress',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cityPartnerCity'); ?>
		<?php echo $form->textField($model,'cityPartnerCity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cityPartnerState'); ?>
		<?php echo $form->textField($model,'cityPartnerState'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cityPartnerCountry'); ?>
		<?php echo $form->textField($model,'cityPartnerCountry'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cityPartnerOperationCity'); ?>
		<?php echo $form->textField($model,'cityPartnerOperationCity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cityPartnerOperationState'); ?>
		<?php echo $form->textField($model,'cityPartnerOperationState'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cityPartnerOperationCountry'); ?>
		<?php echo $form->textField($model,'cityPartnerOperationCountry'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cityPartnerOperationArea'); ?>
		<?php echo $form->textField($model,'cityPartnerOperationArea',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cityPartnerZip'); ?>
		<?php echo $form->textField($model,'cityPartnerZip'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'eWalletBalance'); ?>
		<?php echo $form->textField($model,'eWalletBalance'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'wishginiBalance'); ?>
		<?php echo $form->textField($model,'wishginiBalance'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cityPartnerAccountActivationToken'); ?>
		<?php echo $form->textField($model,'cityPartnerAccountActivationToken',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cityPartnerDateAdded'); ?>
		<?php echo $form->textField($model,'cityPartnerDateAdded'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cityPartnerDateModified'); ?>
		<?php echo $form->textField($model,'cityPartnerDateModified'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->