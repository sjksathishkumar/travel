<?php
/* @var $this PropertyPartnersController */
/* @var $model PropertyPartners */

$this->breadcrumbs=array(
	'Property Partners'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PropertyPartners', 'url'=>array('index')),
	array('label'=>'Create PropertyPartners', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#property-partners-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Property Partners</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'property-partners-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'pkPropertyPartnerID',
		'fkUserLoginID',
		'propertyPartnerUniqueID',
		'propertyPartnerFirstName',
		'propertyPartnerLastName',
		'propertyPartnerUserName',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
