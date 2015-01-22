<div class="page-header">
	<div class="pull-left">
		<h1>Add CMS Page</h1>
	</div>
</div>
<div class="breadcrumbs">
	<ul>
		<li><?php echo CHtml::link('Home',array('/admin')); ?><i class="icon-angle-right"></i></li>
		<li><?php echo CHtml::link('CMS Pages',array('/admin/cms')); ?><i class="icon-angle-right"></i></li>
		<li><a href="#">Add CMS Page</a></li>
	</ul>
	<div class="close-bread"><a href="#"><i class="icon-remove"></i></a></div>
</div>
<?php echo $this->renderPartial('_form_cms', array('model'=>$model)); ?>
