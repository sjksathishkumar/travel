<?php
/* @var $this ProperyPartnerPlansController */
/* @var $model ProperyPartnerPlans */

$this->breadcrumbs=array(
	'Propery Partner Plans'=>array('index'),
	$model->pkPlanID=>array('view','id'=>$model->pkPlanID),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProperyPartnerPlans', 'url'=>array('index')),
	array('label'=>'Create ProperyPartnerPlans', 'url'=>array('create')),
	array('label'=>'View ProperyPartnerPlans', 'url'=>array('view', 'id'=>$model->pkPlanID)),
	array('label'=>'Manage ProperyPartnerPlans', 'url'=>array('admin')),
);
?>

<h1>Update ProperyPartnerPlans <?php echo $model->pkPlanID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>