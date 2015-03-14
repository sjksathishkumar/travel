<?php
/* @var $this CityPartnersController */
/* @var $model CityPartners */

$this->breadcrumbs=array(
	'City Partners'=>array('index'),
	$model->pkCityPartnerID=>array('view','id'=>$model->pkCityPartnerID),
	'Update',
);

$this->menu=array(
	array('label'=>'List CityPartners', 'url'=>array('index')),
	array('label'=>'Create CityPartners', 'url'=>array('create')),
	array('label'=>'View CityPartners', 'url'=>array('view', 'id'=>$model->pkCityPartnerID)),
	array('label'=>'Manage CityPartners', 'url'=>array('admin')),
);
?>

<h1>Update CityPartners <?php echo $model->pkCityPartnerID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>