<?php
/* @var $this CityPartnersController */
/* @var $model CityPartners */

$this->breadcrumbs=array(
	'City Partners'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CityPartners', 'url'=>array('index')),
	array('label'=>'Create CityPartners', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#city-partners-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage City Partners</h1>

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
	'id'=>'city-partners-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'pkCityPartnerID',
		'fkUserLoginID',
		'cityPartnerUniqueID',
		'cityPartnerFirstName',
		'cityPartnerLastName',
		'cityPartnerUserName',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
