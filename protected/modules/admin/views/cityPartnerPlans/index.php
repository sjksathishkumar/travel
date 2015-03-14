<?php
/* @var $this CityPartnerPlansController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'City Partner Plans',
);

$this->menu=array(
	array('label'=>'Create CityPartnerPlans', 'url'=>array('create')),
	array('label'=>'Manage CityPartnerPlans', 'url'=>array('admin')),
);
?>

<h1>City Partner Plans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
