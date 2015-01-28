<?php
/* @var $this MascotsController */
/* @var $model Mascots */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'mascotID'); ?>
		<?php echo $form->textField($model,'mascotID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mascotName'); ?>
		<?php echo $form->textField($model,'mascotName',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mascotImage'); ?>
		<?php echo $form->textField($model,'mascotImage',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mascotAltTag'); ?>
		<?php echo $form->textField($model,'mascotAltTag',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mascotStatus'); ?>
		<?php echo $form->textField($model,'mascotStatus',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mascotDateAdded'); ?>
		<?php echo $form->textField($model,'mascotDateAdded'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mascotDateModified'); ?>
		<?php echo $form->textField($model,'mascotDateModified'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->