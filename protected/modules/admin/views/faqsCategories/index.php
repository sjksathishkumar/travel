<?php
/* @var $this FaqsCategoriesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Faqs Categories',
);

$this->menu=array(
	array('label'=>'Create FaqsCategories', 'url'=>array('create')),
	array('label'=>'Manage FaqsCategories', 'url'=>array('admin')),
);
?>

<h1>Faqs Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
