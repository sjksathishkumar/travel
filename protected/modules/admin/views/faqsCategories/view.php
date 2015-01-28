<?php
/* @var $this FaqsCategoriesController */
/* @var $model FaqsCategories */

$this->breadcrumbs=array(
	'Faqs Categories'=>array('index'),
	$model->pkCategoryID,
);

$this->menu=array(
	array('label'=>'List FaqsCategories', 'url'=>array('index')),
	array('label'=>'Create FaqsCategories', 'url'=>array('create')),
	array('label'=>'Update FaqsCategories', 'url'=>array('update', 'id'=>$model->pkCategoryID)),
	array('label'=>'Delete FaqsCategories', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pkCategoryID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FaqsCategories', 'url'=>array('admin')),
);
?>

<h1>View FaqsCategories #<?php echo $model->pkCategoryID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pkCategoryID',
		'faqCategoryName',
		'faqCategoryDateAdded',
		'faqCategoryDateModified',
	),
)); ?>
