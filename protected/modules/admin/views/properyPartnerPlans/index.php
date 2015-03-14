<?php
/* @var $this ProperyPartnerPlansController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Propery Partner Plans',
);

$this->menu=array(
	array('label'=>'Create ProperyPartnerPlans', 'url'=>array('create')),
	array('label'=>'Manage ProperyPartnerPlans', 'url'=>array('admin')),
);
?>

<h1>Propery Partner Plans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
