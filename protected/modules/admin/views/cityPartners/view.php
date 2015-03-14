<?php
/* @var $this CityPartnersController */
/* @var $model CityPartners */

$this->breadcrumbs=array(
	'City Partners'=>array('index'),
	$model->pkCityPartnerID,
);

$this->menu=array(
	array('label'=>'List CityPartners', 'url'=>array('index')),
	array('label'=>'Create CityPartners', 'url'=>array('create')),
	array('label'=>'Update CityPartners', 'url'=>array('update', 'id'=>$model->pkCityPartnerID)),
	array('label'=>'Delete CityPartners', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pkCityPartnerID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CityPartners', 'url'=>array('admin')),
);
?>

<h1>View CityPartners #<?php echo $model->pkCityPartnerID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pkCityPartnerID',
		'fkUserLoginID',
		'cityPartnerUniqueID',
		'cityPartnerFirstName',
		'cityPartnerLastName',
		'cityPartnerUserName',
		'cityPartnerEmail',
		'cityPartnerMobile',
		'cityPartnerBusinessName',
		'cityPartnerWebsite',
		'cityPartnerContactMethod',
		'cityPartnerSubscriptionPlan',
		'cityPartnerStatus',
		'cityPartnerFeePaid',
		'cityPartnerAddress',
		'cityPartnerCity',
		'cityPartnerState',
		'cityPartnerCountry',
		'cityPartnerOperationCity',
		'cityPartnerOperationState',
		'cityPartnerOperationCountry',
		'cityPartnerOperationArea',
		'cityPartnerZip',
		'eWalletBalance',
		'wishginiBalance',
		'cityPartnerAccountActivationToken',
		'cityPartnerDateAdded',
		'cityPartnerDateModified',
	),
)); ?>
