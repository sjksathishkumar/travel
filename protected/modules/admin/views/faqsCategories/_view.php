<?php
/* @var $this FaqsCategoriesController */
/* @var $data FaqsCategories */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pkCategoryID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pkCategoryID), array('view', 'id'=>$data->pkCategoryID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('faqCategoryName')); ?>:</b>
	<?php echo CHtml::encode($data->faqCategoryName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('faqCategoryDateAdded')); ?>:</b>
	<?php echo CHtml::encode($data->faqCategoryDateAdded); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('faqCategoryDateModified')); ?>:</b>
	<?php echo CHtml::encode($data->faqCategoryDateModified); ?>
	<br />


</div>