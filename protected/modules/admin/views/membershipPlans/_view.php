<?php
/* @var $this MembershipPlansController */
/* @var $data MembershipPlans */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pkPlanID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pkPlanID), array('view', 'id'=>$data->pkPlanID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('planName')); ?>:</b>
	<?php echo CHtml::encode($data->planName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('membershipFee')); ?>:</b>
	<?php echo CHtml::encode($data->membershipFee); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('accessBooking')); ?>:</b>
	<?php echo CHtml::encode($data->accessBooking); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addToWishgini')); ?>:</b>
	<?php echo CHtml::encode($data->addToWishgini); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('receiveCoupons')); ?>:</b>
	<?php echo CHtml::encode($data->receiveCoupons); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('planAddedDate')); ?>:</b>
	<?php echo CHtml::encode($data->planAddedDate); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('planModifiedDate')); ?>:</b>
	<?php echo CHtml::encode($data->planModifiedDate); ?>
	<br />

	*/ ?>

</div>