<?php
/* @var $this MascotsController */
/* @var $model Mascots */

$this->breadcrumbs=array(
	'Mascots'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Mascots', 'url'=>array('index')),
	array('label'=>'Manage Mascots', 'url'=>array('admin')),
);
?>

<h1>Create Mascots</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>