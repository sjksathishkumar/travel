<?php
/* @var $this MascotsController */
/* @var $data Mascots */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('mascotID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->mascotID), array('view', 'id'=>$data->mascotID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mascotName')); ?>:</b>
	<?php echo CHtml::encode($data->mascotName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mascotImage')); ?>:</b>
	<?php echo CHtml::encode($data->mascotImage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mascotAltTag')); ?>:</b>
	<?php echo CHtml::encode($data->mascotAltTag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mascotDateAdded')); ?>:</b>
	<?php echo CHtml::encode($data->mascotDateAdded); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mascotDateModified')); ?>:</b>
	<?php echo CHtml::encode($data->mascotDateModified); ?>
	<br />


</div>