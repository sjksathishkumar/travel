<?php
/* @var $this BannerController */
/* @var $data Banner */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pkBannerID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pkBannerID), array('view', 'id'=>$data->pkBannerID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bannerTitle')); ?>:</b>
	<?php echo CHtml::encode($data->bannerTitle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bannerImage')); ?>:</b>
	<?php echo CHtml::encode($data->bannerImage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bannerAltTag')); ?>:</b>
	<?php echo CHtml::encode($data->bannerAltTag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bannerStatus')); ?>:</b>
	<?php echo CHtml::encode($data->bannerStatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bannerDateAdded')); ?>:</b>
	<?php echo CHtml::encode($data->bannerDateAdded); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bannerDateModified')); ?>:</b>
	<?php echo CHtml::encode($data->bannerDateModified); ?>
	<br />


</div>