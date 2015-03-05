<?php
/* @var $this MembershipPlansController */
/* @var $model MembershipPlans */

$this->breadcrumbs=array(
	'Membership Plans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MembershipPlans', 'url'=>array('index')),
	array('label'=>'Manage MembershipPlans', 'url'=>array('admin')),
);
?>

<h1>Create MembershipPlans</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>