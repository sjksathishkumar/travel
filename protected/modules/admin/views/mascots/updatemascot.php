<?php
/* @var $this MascotsController */
/* @var $model Mascots */

$this->breadcrumbs=array(
	'Mascots'=>array('index'),
	$model->mascotID=>array('view','id'=>$model->mascotID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mascots', 'url'=>array('index')),
	array('label'=>'Create Mascots', 'url'=>array('create')),
	array('label'=>'View Mascots', 'url'=>array('view', 'id'=>$model->mascotID)),
	array('label'=>'Manage Mascots', 'url'=>array('admin')),
);
?>

<h1>Update Mascots <?php echo $model->mascotID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>