<?php
/* @var $this MascotsController */
/* @var $model Mascots */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mascots-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'mascotName'); ?>
		<?php echo $form->textField($model,'mascotName',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'mascotName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mascotImage'); ?>
		<?php echo $form->textField($model,'mascotImage',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'mascotImage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mascotAltTag'); ?>
		<?php echo $form->textField($model,'mascotAltTag',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'mascotAltTag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mascotStatus'); ?>
		<?php echo $form->textField($model,'mascotStatus',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'mascotStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mascotDateAdded'); ?>
		<?php echo $form->textField($model,'mascotDateAdded'); ?>
		<?php echo $form->error($model,'mascotDateAdded'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mascotDateModified'); ?>
		<?php echo $form->textField($model,'mascotDateModified'); ?>
		<?php echo $form->error($model,'mascotDateModified'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->