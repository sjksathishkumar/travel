<?php
/* @var $this PropertyPartnersController */
/* @var $model PropertyPartners */

$this->breadcrumbs=array(
	'Property Partners'=>array('index'),
	$model->pkPropertyPartnerID,
);

$this->menu=array(
	array('label'=>'List PropertyPartners', 'url'=>array('index')),
	array('label'=>'Create PropertyPartners', 'url'=>array('create')),
	array('label'=>'Update PropertyPartners', 'url'=>array('update', 'id'=>$model->pkPropertyPartnerID)),
	array('label'=>'Delete PropertyPartners', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pkPropertyPartnerID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PropertyPartners', 'url'=>array('admin')),
);
?>

<h1>View PropertyPartners #<?php echo $model->pkPropertyPartnerID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pkPropertyPartnerID',
		'fkUserLoginID',
		'propertyPartnerUniqueID',
		'propertyPartnerFirstName',
		'propertyPartnerLastName',
		'propertyPartnerUserName',
		'propertyPartnerEmail',
		'propertyPartnerMobile',
		'propertyPartnerBusinessName',
		'propertyPartnerWebsite',
		'propertyPartnerContactMethod',
		'propertyPartnerSubscriptionPlan',
		'propertyPartnerStatus',
		'propertyPartnerFeePaid',
		'propertyPartnerAddress',
		'propertyPartnerCity',
		'propertyPartnerState',
		'propertyPartnerCountry',
		'propertyPartnerZip',
		'eWalletBalance',
		'wishginiBalance',
		'propertyPartnerAccountActivationToken',
		'propertyPartnerDateAdded',
		'propertyPartnerDateModified',
	),
)); ?>
