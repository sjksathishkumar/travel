<?php
/* @var $this BannerController */
/* @var $model Banner */
?>
<div class="page-header">
	<div class="pull-left">
	    <h1>Add New FAQ</h1>
	</div>
</div>
<div class="breadcrumbs">
	<ul>
            <li><?php echo CHtml::link('Home',array('/admin')); ?><i class="icon-angle-right"></i></li>
            <li><?php echo CHtml::link('FAQ',array('faqs/index')); ?><i class="icon-angle-right"></i></li>
            <li><a href="#">Add FAQ</a></li>
	</ul>
	<div class="close-bread">
	    <?php echo CHtml::link('<i class="icon-remove"></i>',array('#')); ?>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">
            <div class="box box box-color box-bordered">
                <?php $this->renderPartial('_form', array('model'=>$model)); ?>
            </div>
	</div>
</div>