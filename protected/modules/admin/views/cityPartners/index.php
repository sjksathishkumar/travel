<?php
/* @var $this CityPartnersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'City Partners',
);

$this->menu=array(
	array('label'=>'Create CityPartners', 'url'=>array('create')),
	array('label'=>'Manage CityPartners', 'url'=>array('admin')),
);
?>

<h1>City Partners</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
