<?php
/* @var $this MascotsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mascots',
);

$this->menu=array(
	array('label'=>'Create Mascots', 'url'=>array('create')),
	array('label'=>'Manage Mascots', 'url'=>array('admin')),
);
?>

<h1>Mascots</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
