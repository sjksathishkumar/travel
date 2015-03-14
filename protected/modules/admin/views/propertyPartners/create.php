<?php
/* @var $this PropertyPartnersController */
/* @var $model PropertyPartners */

$this->breadcrumbs=array(
	'Property Partners'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PropertyPartners', 'url'=>array('index')),
	array('label'=>'Manage PropertyPartners', 'url'=>array('admin')),
);
?>

<h1>Create PropertyPartners</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>