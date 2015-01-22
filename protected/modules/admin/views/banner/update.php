<?php
/* @var $this BannerController */
/* @var $model Banner */
?>
<div class="page-header">
	<div class="pull-left">
		<h1>Banners Manager</h1>
	</div>
</div>
<div class="breadcrumbs">
	<ul>
		<li><?php echo CHtml::link('Home',array('/admin')); ?><i class="icon-angle-right"></i></li>
		<li><?php echo CHtml::link('Banners Manager',array('/admin/banner')); ?><i class="icon-angle-right"></i></li>
		<li><a href="#">Update Banner</a></li>
	</ul>
	<div class="close-bread">
		<?php echo CHtml::link('<i class="icon-remove"></i>',array('#')); ?>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">
		<div class="box box box-color box-bordered">
		    <?php $this->renderPartial('_form', array('model'=>$model,'type'=>$type)); ?>
		</div>
	</div>
</div>
