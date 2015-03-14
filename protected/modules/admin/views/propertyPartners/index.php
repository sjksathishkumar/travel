<?php
/* @var $this PropertyPartnersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Property Partners',
);

$this->menu=array(
	array('label'=>'Create PropertyPartners', 'url'=>array('create')),
	array('label'=>'Manage PropertyPartners', 'url'=>array('admin')),
);
?>

<h1>Property Partners</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
