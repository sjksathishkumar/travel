<?php
/* @var $this CustomerController */
/* @var $model Customer */
?>
<div class="page-header">
	<div class="pull-left">
		<h1>Customers Manager</h1>
	</div>
</div>
<div class="breadcrumbs">
	<ul>
		<li><?php echo CHtml::link('Home',array('/admin')); ?><i class="icon-angle-right"></i></li>
		<li><?php echo CHtml::link('Customers Manager',array('/admin/customers')); ?><i class="icon-angle-right"></i></li>
		<li><a href="#">Customer Details</a></li>
	</ul>
	<div class="close-bread">
		<?php echo CHtml::link('<i class="icon-remove"></i>',array('#')); ?>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">
		<div class="box box box-color box-bordered">
			<div class="box-title">
				<h3><i class="icon-table"></i>View Customer</h3>
				<?php echo CHtml::link('<i class="icon-circle-arrow-left"></i> Back',array('/admin/customers'),array('class'=>'btn pull-right', 'data-toggle'=>'modal','title'=>'Back','alt'=>'Back')); ?>
			</div>
			<div class="box-content nopadding">
				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$model,
					'attributes'=>array(
						array(
							'name'=>'pkUserID',
						),
						'userFirstName',
						'userLastName',
						'userEmail',
						'userPhone',
						'userGender',
						array(
								'name'=>'userDateOfBirth',
								'value'=>date('Y-m-d',strtotime($model->userDateOfBirth)) == '1970-01-01'?'-':date('Y-m-d',strtotime($model->userDateOfBirth)),
							),
					),
				)); ?>

			</div>
			<div class="box-title">
				<h3><i class="icon-table"></i>Login Information</h3>
			</div>
			<div class="box-content nopadding">
				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$loginModel,
					'attributes'=>array(
						'userEmail',
						//'userPassword',
					),
				)); ?>
			</div>

			<div class="box-title">
				<h3><i class="icon-table"></i>Billing Address</h3>
			</div>
			<div class="box-content nopadding">
				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$model,
					'attributes'=>array(
						'userBillingAddress1',
						'userBillingAddress2',
						array(
							'name'=>'userBillingCountry',
							'value'=>$model->billingCountry->countryName,
						),
						array(
							'name'=>'userBillingState',
							'value'=>$model->billingState->stateName,
						),
						array(
							'name'=>'userBillingCity',
							'value'=>$model->billingCity->cityName,
						),
						'userBillingZip',
						'userBillingPhone',
					),
				)); ?>
			</div>

			<div class="box-title">
				<h3><i class="icon-table"></i>Shipping Address</h3>
			</div>
			<div class="box-content nopadding">
				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$model,
					'attributes'=>array(
						'userShippingAddress1',
						'userShippingAddress2',
						array(
							'name'=>'userShippingCountry',
							'value'=>$model->shippingCountry->countryName,
						),
						array(
							'name'=>'userShippingState',
							'value'=>$model->shippingState->stateName,
						),
						array(
							'name'=>'userShippingCity',
							'value'=>$model->shippingCity->cityName,
						),
						'userShippingZip',
						'userShippingPhone',
					),
				)); ?>
			</div>
		</div>
	</div>
</div>

