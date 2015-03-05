<div class="page-header">
	<div class="pull-left">
		<h1>View Plan Details</h1>
	</div>
</div>
<div class="breadcrumbs">
	<ul>
		<li><?php echo CHtml::link('Home',array('/admin')); ?><i class="icon-angle-right"></i></li>
		<li><?php echo CHtml::link('Membership Plans',array('/admin/membershipPlans')); ?><i class="icon-angle-right"></i></li>
		<li><a href="#">View Plan Details</a></li>
	</ul>
	<div class="close-bread"><a href="#"><i class="icon-remove"></i></a></div>
</div>
<div class="row-fluid">
	<div class="span12">
		<div class="box box box-color box-bordered">
			<div class="box-title">
				<h3><i class="icon-table"></i>View Plan Details</h3>
				<?php echo CHtml::link('<i class="icon-circle-arrow-left"></i> Back',array('/admin/membershipPlans'),array('class'=>'btn pull-right', 'data-toggle'=>'modal','title'=>'Back','alt'=>'Back')); ?>
				</a>
			</div>
			<div class="box-content nopadding">
				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$model,
					'attributes'=>array(
						//'pkPlanID',
						'planName',
						'membershipFee',
						'accessBooking',
						'addToWishgini',
						'receiveCoupons',
						//'planAddedDate',
						'planModifiedDate',
					),
				)); ?>
			</div>
		</div>
	</div>
</div>


