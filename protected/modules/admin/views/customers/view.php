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
						'customerUniqueID',
						'customerFirstName',
						'customerLastName',
						'customerUserName',
						'customerEmail',
						'customerMobile',
						'customerGender',
						array(
								'name'=>'customerDateOfBirth',
								'value'=>date('Y-m-d',strtotime($model->customerDateOfBirth)) == '1970-01-01'?'-':date('Y-m-d',strtotime($model->customerDateOfBirth)),
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
				<h3><i class="icon-table"></i>Other Information</h3>
			</div>
			<div class="box-content nopadding">
				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$model,
					'attributes'=>array(
						'customerStatus',
						'customerSubscriptionPlan',
						'customerAddress',
						array(
							'name'=>'customerCountry',
							'value'=>$model->billingCountry->countryName,
						),
						array(
							'name'=>'customerState',
							'value'=>$model->billingState->stateName,
						),
						array(
							'name'=>'customerCity',
							'value'=>$model->billingCity->cityName,
						),
						'customerZip',
						'eWalletBalance',
						'wishginiBalance',
					),
				)); ?>
			</div>
		</div>
	</div>
</div>

