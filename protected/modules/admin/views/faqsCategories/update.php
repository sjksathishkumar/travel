<div class="page-header">
	<div class="pull-left">
		<h1>Update FAQ Category</h1>
	</div>
</div>
<div class="breadcrumbs">
	<ul>
		<li><?php echo CHtml::link('Home',array('/admin')); ?><i class="icon-angle-right"></i></li>
		<li><?php echo CHtml::link('FAQ Categories',array('faqsCategories/index')); ?><i class="icon-angle-right"></i></li>
		<li><a href="#">Update FAQ Category</a></li>
	</ul>
	<div class="close-bread"><a href="#"><i class="icon-remove"></i></a></div>
</div>
<?php echo $this->renderPartial('_form_update', array('model'=>$model)); ?>

