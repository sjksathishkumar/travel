<?php
/* @var $this PropertyPartnersController */
/* @var $model PropertyPartners */

$this->breadcrumbs=array(
	'Property Partners'=>array('index'),
	$model->pkPropertyPartnerID=>array('view','id'=>$model->pkPropertyPartnerID),
	'Update',
);

$this->menu=array(
	array('label'=>'List PropertyPartners', 'url'=>array('index')),
	array('label'=>'Create PropertyPartners', 'url'=>array('create')),
	array('label'=>'View PropertyPartners', 'url'=>array('view', 'id'=>$model->pkPropertyPartnerID)),
	array('label'=>'Manage PropertyPartners', 'url'=>array('admin')),
);
?>

<h1>Update PropertyPartners <?php echo $model->pkPropertyPartnerID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>