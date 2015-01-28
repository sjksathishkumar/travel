<?php
/* @var $this FaqsCategoriesController */
/* @var $model FaqsCategories */

$this->breadcrumbs=array(
	'Faqs Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FaqsCategories', 'url'=>array('index')),
	array('label'=>'Manage FaqsCategories', 'url'=>array('admin')),
);
?>

<h1>Create FaqsCategories</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>