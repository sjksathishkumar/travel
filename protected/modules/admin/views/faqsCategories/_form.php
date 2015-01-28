<?php
/* @var $this FaqsCategoriesController */
/* @var $model FaqsCategories */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'faqs-categories-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'faqCategoryName'); ?>
		<?php echo $form->textField($model,'faqCategoryName',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'faqCategoryName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'faqCategoryDateAdded'); ?>
		<?php echo $form->textField($model,'faqCategoryDateAdded'); ?>
		<?php echo $form->error($model,'faqCategoryDateAdded'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'faqCategoryDateModified'); ?>
		<?php echo $form->textField($model,'faqCategoryDateModified'); ?>
		<?php echo $form->error($model,'faqCategoryDateModified'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->