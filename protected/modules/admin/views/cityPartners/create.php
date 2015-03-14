<?php
/* @var $this CityPartnersController */
/* @var $model CityPartners */

$this->breadcrumbs=array(
	'City Partners'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CityPartners', 'url'=>array('index')),
	array('label'=>'Manage CityPartners', 'url'=>array('admin')),
);
?>

<h1>Create CityPartners</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>