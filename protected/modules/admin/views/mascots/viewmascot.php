<?php
/* @var $this MascotsController */
/* @var $model Mascots */

$this->breadcrumbs=array(
	'Mascots'=>array('index'),
	$model->mascotID,
);

$this->menu=array(
	array('label'=>'List Mascots', 'url'=>array('index')),
	array('label'=>'Create Mascots', 'url'=>array('create')),
	array('label'=>'Update Mascots', 'url'=>array('update', 'id'=>$model->mascotID)),
	array('label'=>'Delete Mascots', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->mascotID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mascots', 'url'=>array('admin')),
);
?>

<h1>View Mascots #<?php echo $model->mascotID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'mascotID',
		'mascotName',
		'mascotImage',
		'mascotAltTag',
		'mascotStatus',
		'mascotDateAdded',
		'mascotDateModified',
	),
)); ?>
