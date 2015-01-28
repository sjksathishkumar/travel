<?php
/* @var $this FaqsCategoriesController */
/* @var $model FaqsCategories */

$this->breadcrumbs=array(
	'Faqs Categories'=>array('index'),
	$model->pkCategoryID=>array('view','id'=>$model->pkCategoryID),
	'Update',
);

$this->menu=array(
	array('label'=>'List FaqsCategories', 'url'=>array('index')),
	array('label'=>'Create FaqsCategories', 'url'=>array('create')),
	array('label'=>'View FaqsCategories', 'url'=>array('view', 'id'=>$model->pkCategoryID)),
	array('label'=>'Manage FaqsCategories', 'url'=>array('admin')),
);
?>

<h1>Update FaqsCategories <?php echo $model->pkCategoryID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>