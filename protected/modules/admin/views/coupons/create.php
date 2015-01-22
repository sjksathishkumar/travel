<div class="page-header">
	<div class="pull-left">
		<h1>Add Coupon</h1>
	</div>
</div>
<div class="breadcrumbs">
	<ul>
		<li><?php echo CHtml::link('Home',array('/admin')); ?><i class="icon-angle-right"></i></li>
		<li><?php echo CHtml::link('Manage Coupons',array('/admin/coupons')); ?><i class="icon-angle-right"></i></li>
		<li><a href="#">Add Coupon</a></li>
	</ul>
	<div class="close-bread"><a href="#"><i class="icon-remove"></i></a></div>
</div>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
