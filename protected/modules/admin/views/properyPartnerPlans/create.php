<?php
/* @var $this ProperyPartnerPlansController */
/* @var $model ProperyPartnerPlans */

$this->breadcrumbs=array(
	'Propery Partner Plans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProperyPartnerPlans', 'url'=>array('index')),
	array('label'=>'Manage ProperyPartnerPlans', 'url'=>array('admin')),
);
?>

<h1>Create ProperyPartnerPlans</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>