<?php
/* @var $this CityPartnerPlansController */
/* @var $model CityPartnerPlans */

$this->breadcrumbs=array(
	'City Partner Plans'=>array('index'),
	$model->pkPlanID=>array('view','id'=>$model->pkPlanID),
	'Update',
);

$this->menu=array(
	array('label'=>'List CityPartnerPlans', 'url'=>array('index')),
	array('label'=>'Create CityPartnerPlans', 'url'=>array('create')),
	array('label'=>'View CityPartnerPlans', 'url'=>array('view', 'id'=>$model->pkPlanID)),
	array('label'=>'Manage CityPartnerPlans', 'url'=>array('admin')),
);
?>

<h1>Update CityPartnerPlans <?php echo $model->pkPlanID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>