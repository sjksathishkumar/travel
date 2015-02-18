<?php
/* @var $this CouponController */
/* @var $model Coupon */
?>
<div class="page-header">
	<div class="pull-left">
		<h1>Coupons Manager</h1>
	</div>
</div>
<div class="breadcrumbs">
	<ul>
		<li><?php echo CHtml::link('Home',array('/admin')); ?><i class="icon-angle-right"></i></li>
		<li><?php echo CHtml::link('Coupons Manager',array('/admin/coupons')); ?><i class="icon-angle-right"></i></li>
		<li><a href="#">Coupon Details</a></li>
	</ul>
	<div class="close-bread">
		<?php echo CHtml::link('<i class="icon-remove"></i>',array('#')); ?>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">
		<div class="box box box-color box-bordered">
			<div class="box-title">
				<h3><i class="icon-table"></i>View Coupon</h3>
				<?php echo CHtml::link('<i class="icon-circle-arrow-left"></i> Back',array('/admin/coupons'),array('class'=>'btn pull-right', 'data-toggle'=>'modal','title'=>'Back','alt'=>'Back')); ?>
				</a>
			</div>
			<div class="box-content nopadding">
				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$model,
					'attributes'=>array(
						array(
							'name'=>'pkCouponID',
						),
						'couponName',
						'couponCode',
						'couponType',
						'couponDiscountVariable',
						'couponMinimumPurchaseAmount',
						'couponStartDate',
						'couponEndDate',
						array(
							'name'=>'couponStatus',
							'value'=>CommonFunctions::statusName($model->couponStatus)
							),
						array(
							'name'=>'couponAddDate',
							'value'=>date('Y-m-d  H:i:s',$model->couponAddDate),
						),
						array(
							'name'=>'couponModifyDate',
							'value'=>date('Y-m-d H:i:s',$model->couponModifyDate),
						),
					),
				)); ?>

			</div>
		</div>
	</div>
</div>

