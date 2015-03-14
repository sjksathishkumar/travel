<?php
/* @var $this ProperyPartnerPlansController */
/* @var $model ProperyPartnerPlans */

$this->breadcrumbs=array(
	'Propery Partner Plans'=>array('index'),
	$model->pkPlanID,
);

$this->menu=array(
	array('label'=>'List ProperyPartnerPlans', 'url'=>array('index')),
	array('label'=>'Create ProperyPartnerPlans', 'url'=>array('create')),
	array('label'=>'Update ProperyPartnerPlans', 'url'=>array('update', 'id'=>$model->pkPlanID)),
	array('label'=>'Delete ProperyPartnerPlans', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pkPlanID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProperyPartnerPlans', 'url'=>array('admin')),
);
?>

<h1>View ProperyPartnerPlans #<?php echo $model->pkPlanID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pkPlanID',
		'planName',
		'membershipFee',
		'daysValidity',
		'numberOfListing',
		'accessBooking',
		'addToWishgini',
		'receiveCoupons',
		'planAddedDate',
		'planModifiedDate',
	),
)); ?>
