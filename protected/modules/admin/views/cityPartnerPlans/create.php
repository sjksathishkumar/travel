<?php
/* @var $this CityPartnerPlansController */
/* @var $model CityPartnerPlans */

$this->breadcrumbs=array(
	'City Partner Plans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CityPartnerPlans', 'url'=>array('index')),
	array('label'=>'Manage CityPartnerPlans', 'url'=>array('admin')),
);
?>

<h1>Create CityPartnerPlans</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>