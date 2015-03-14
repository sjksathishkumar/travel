<?php
/* @var $this CityPartnerPlansController */
/* @var $model CityPartnerPlans */

$this->breadcrumbs=array(
	'City Partner Plans'=>array('index'),
	$model->pkPlanID,
);

$this->menu=array(
	array('label'=>'List CityPartnerPlans', 'url'=>array('index')),
	array('label'=>'Create CityPartnerPlans', 'url'=>array('create')),
	array('label'=>'Update CityPartnerPlans', 'url'=>array('update', 'id'=>$model->pkPlanID)),
	array('label'=>'Delete CityPartnerPlans', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pkPlanID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CityPartnerPlans', 'url'=>array('admin')),
);
?>

<h1>View CityPartnerPlans #<?php echo $model->pkPlanID; ?></h1>

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
