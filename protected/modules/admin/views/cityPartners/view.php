<?php
/* @var $this CustomerController */
/* @var $model Customer */
?>
<div class="page-header">
	<div class="pull-left">
		<h1>City Partners Manager</h1>
	</div>
</div>
<div class="breadcrumbs">
	<ul>
		<li><?php echo CHtml::link('Home',array('/admin')); ?><i class="icon-angle-right"></i></li>
		<li><?php echo CHtml::link('City Partners Manager',array('/admin/cityPartners')); ?><i class="icon-angle-right"></i></li>
		<li><a href="#">Partner Details</a></li>
	</ul>
	<div class="close-bread">
		<?php echo CHtml::link('<i class="icon-remove"></i>',array('#')); ?>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">
		<div class="box box box-color box-bordered">
			<div class="box-title">
				<h3><i class="icon-table"></i>View City Partner</h3>
				<?php echo CHtml::link('<i class="icon-circle-arrow-left"></i> Back',array('/admin/cityPartners'),array('class'=>'btn pull-right', 'data-toggle'=>'modal','title'=>'Back','alt'=>'Back')); ?>
			</div>
			<div class="box-content nopadding">
				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$model,
					'attributes'=>array(
						'cityPartnerUniqueID',
						'cityPartnerFirstName',
						'cityPartnerLastName',
						'cityPartnerUserName',
						'cityPartnerEmail',
						'cityPartnerMobile',
						'cityPartnerBusinessName',
						'cityPartnerWebsite',
						'cityPartnerContactMethod',
						array(
								'name'=>'cityPartnerDateAdded',
								'value'=>date('Y-m-d',strtotime($model->cityPartnerDateAdded)) == '1970-01-01'?'-':date('Y-m-d',strtotime($model->cityPartnerDateAdded)),
							),
						array(
								'name'=>'cityPartnerDateModified',
								'value'=>date('Y-m-d',strtotime($model->cityPartnerDateModified)) == '1970-01-01'?'-':date('Y-m-d',strtotime($model->cityPartnerDateModified)),
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
						'cityPartnerStatus',
						'cityPartnerSubscriptionPlan',
						'cityPartnerAddress',
						array(
							'name'=>'cityPartnerCountry',
							'value'=>(!empty($model->cityPartnerCountry)) ? CHtml::encode($model->country->countryName) : '--',
							'type' => 'raw',
						),
						array(
							'name'=>'cityPartnerState',
							'value'=>(!empty($model->cityPartnerState)) ? CHtml::encode($model->state->stateName) : '--',
							'type' => 'raw',
						),
						array(
							'name'=>'cityPartnerCity',
							'value'=>(!empty($model->cityPartnerCity)) ? CHtml::encode($model->city->cityName) : '--',
							'type' => 'raw',
						),
						'cityPartnerZip',
						array(
							'name'=>'cityPartnerOperationCountry',
							'value'=>(!empty($model->cityPartnerOperationCountry)) ? CHtml::encode($model->country->countryName) : '--',
							'type' => 'raw',
						),
						array(
							'name'=>'cityPartnerOperationState',
							'value'=>(!empty($model->cityPartnerOperationState)) ? CHtml::encode($model->state->stateName) : '--',
							'type' => 'raw',
						),
						array(
							'name'=>'cityPartnerOperationCity',
							'value'=>(!empty($model->cityPartnerOperationCity)) ? CHtml::encode($model->city->cityName) : '--',
							'type' => 'raw',
						),
						'cityPartnerOperationArea',
						'eWalletBalance',
						'wishginiBalance',
					),
				)); ?>
			</div>
		</div>
	</div>
</div>



