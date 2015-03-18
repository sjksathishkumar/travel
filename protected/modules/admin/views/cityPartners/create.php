
<?php
/* @var $this BannerController */
/* @var $model Banner */
?>
<div class="page-header">
	<div class="pull-left">
	    <h1>City Partners Manager</h1>
	</div>
</div>
<div class="breadcrumbs">
	<ul>
            <li><?php echo CHtml::link('Home',array('/admin')); ?><i class="icon-angle-right"></i></li>
		<li><?php echo CHtml::link('City Partners Manager',array('/admin/CityPartners')); ?><i class="icon-angle-right"></i></li>
            <li><a href="#">Create New City Partner</a></li>
	</ul>
	<div class="close-bread">
	    <?php echo CHtml::link('<i class="icon-remove"></i>',array('#')); ?>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">
            <div class="box box box-color box-bordered">
                <?php $this->renderPartial('_form', array('model'=>$model,'loginModel'=>$loginModel)); ?>
            </div>
	</div>
</div>

