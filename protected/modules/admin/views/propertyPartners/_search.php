<?php
/* @var $this PropertyPartnersController */
/* @var $model PropertyPartners */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pkPropertyPartnerID'); ?>
		<?php echo $form->textField($model,'pkPropertyPartnerID',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fkUserLoginID'); ?>
		<?php echo $form->textField($model,'fkUserLoginID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'propertyPartnerUniqueID'); ?>
		<?php echo $form->textField($model,'propertyPartnerUniqueID',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'propertyPartnerFirstName'); ?>
		<?php echo $form->textField($model,'propertyPartnerFirstName',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'propertyPartnerLastName'); ?>
		<?php echo $form->textField($model,'propertyPartnerLastName',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'propertyPartnerUserName'); ?>
		<?php echo $form->textField($model,'propertyPartnerUserName',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'propertyPartnerEmail'); ?>
		<?php echo $form->textField($model,'propertyPartnerEmail',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'propertyPartnerMobile'); ?>
		<?php echo $form->textField($model,'propertyPartnerMobile',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'propertyPartnerBusinessName'); ?>
		<?php echo $form->textField($model,'propertyPartnerBusinessName',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'propertyPartnerWebsite'); ?>
		<?php echo $form->textField($model,'propertyPartnerWebsite',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'propertyPartnerContactMethod'); ?>
		<?php echo $form->textField($model,'propertyPartnerContactMethod',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'propertyPartnerSubscriptionPlan'); ?>
		<?php echo $form->textField($model,'propertyPartnerSubscriptionPlan',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'propertyPartnerStatus'); ?>
		<?php echo $form->textField($model,'propertyPartnerStatus',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'propertyPartnerFeePaid'); ?>
		<?php echo $form->textField($model,'propertyPartnerFeePaid',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'propertyPartnerAddress'); ?>
		<?php echo $form->textField($model,'propertyPartnerAddress',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'propertyPartnerCity'); ?>
		<?php echo $form->textField($model,'propertyPartnerCity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'propertyPartnerState'); ?>
		<?php echo $form->textField($model,'propertyPartnerState'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'propertyPartnerCountry'); ?>
		<?php echo $form->textField($model,'propertyPartnerCountry'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'propertyPartnerZip'); ?>
		<?php echo $form->textField($model,'propertyPartnerZip'); ?>
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
		<?php echo $form->label($model,'propertyPartnerAccountActivationToken'); ?>
		<?php echo $form->textField($model,'propertyPartnerAccountActivationToken',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'propertyPartnerDateAdded'); ?>
		<?php echo $form->textField($model,'propertyPartnerDateAdded'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'propertyPartnerDateModified'); ?>
		<?php echo $form->textField($model,'propertyPartnerDateModified'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->