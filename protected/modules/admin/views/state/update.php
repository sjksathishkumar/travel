<div class="page-header">
	<div class="pull-left">
		<h1>Update State</h1>
	</div>
</div>
<div class="breadcrumbs">
	<ul>
		<li><?php echo CHtml::link('Home',array('/admin')); ?><i class="icon-angle-right"></i></li>
		<li><?php echo CHtml::link('Manage States',array('/admin/state')); ?><i class="icon-angle-right"></i></li>
		<li><a href="#">Update State</a></li>
	</ul>
	<div class="close-bread"><a href="#"><i class="icon-remove"></i></a></div>
</div>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
