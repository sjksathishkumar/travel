<?php
/* @var $this FaqsCategoriesController */
/* @var $model FaqsCategories */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pkCategoryID'); ?>
		<?php echo $form->textField($model,'pkCategoryID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'faqCategoryName'); ?>
		<?php echo $form->textField($model,'faqCategoryName',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'faqCategoryDateAdded'); ?>
		<?php echo $form->textField($model,'faqCategoryDateAdded'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'faqCategoryDateModified'); ?>
		<?php echo $form->textField($model,'faqCategoryDateModified'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->