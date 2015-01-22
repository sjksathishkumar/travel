<div class="page-header">
	<div class="pull-left">
		<h1>Add Deal</h1>
	</div>
</div>
<div class="breadcrumbs">
	<ul>
		<li><?php echo CHtml::link('Home',array('/admin')); ?><i class="icon-angle-right"></i></li>
		<li><?php echo CHtml::link('Deals',array('/admin/deals')); ?><i class="icon-angle-right"></i></li>
		<li><a href="#">Add Deal</a></li>
	</ul>
	<div class="close-bread"><a href="#"><i class="icon-remove"></i></a></div>
</div>
<?php echo $this->renderPartial('_form_deal', array('model'=>$model,'dealImagesModel'=>$dealImagesModel)); ?>
