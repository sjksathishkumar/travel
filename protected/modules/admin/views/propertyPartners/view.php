<?php
/* @var $this CustomerController */
/* @var $model Customer */
?>
<div class="page-header">
	<div class="pull-left">
		<h1>Propery Partners Manager</h1>
	</div>
</div>
<div class="breadcrumbs">
	<ul>
		<li><?php echo CHtml::link('Home',array('/admin')); ?><i class="icon-angle-right"></i></li>
		<li><?php echo CHtml::link('Propery Partners Manager',array('/admin/propertyPartners')); ?><i class="icon-angle-right"></i></li>
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
				<h3><i class="icon-table"></i>View Propery Partner</h3>
				<?php echo CHtml::link('<i class="icon-circle-arrow-left"></i> Back',array('/admin/propertyPartners'),array('class'=>'btn pull-right', 'data-toggle'=>'modal','title'=>'Back','alt'=>'Back')); ?>
			</div>
			<div class="box-content nopadding">
				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$model,
					'attributes'=>array(
						'propertyPartnerUniqueID',
						'propertyPartnerFirstName',
						'propertyPartnerLastName',
						'propertyPartnerUserName',
						'propertyPartnerEmail',
						'propertyPartnerMobile',
						'propertyPartnerBusinessName',
						'propertyPartnerWebsite',
						'propertyPartnerContactMethod',
						array(
								'name'=>'propertyPartnerDateAdded',
								'value'=>date('Y-m-d',strtotime($model->propertyPartnerDateAdded)) == '1970-01-01'?'-':date('Y-m-d',strtotime($model->propertyPartnerDateAdded)),
							),
						array(
								'name'=>'propertyPartnerDateModified',
								'value'=>date('Y-m-d',strtotime($model->propertyPartnerDateModified)) == '1970-01-01'?'-':date('Y-m-d',strtotime($model->propertyPartnerDateModified)),
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
						'propertyPartnerStatus',
						'propertyPartnerSubscriptionPlan',
						'propertyPartnerAddress',
						array(
							'name'=>'propertyPartnerCountry',
							'value'=>(!empty($model->propertyPartnerCountry)) ? CHtml::encode($model->country->countryName) : '--',
							'type' => 'raw',
						),
						array(
							'name'=>'propertyPartnerState',
							'value'=>(!empty($model->propertyPartnerState)) ? CHtml::encode($model->state->stateName) : '--',
							'type' => 'raw',
						),
						array(
							'name'=>'propertyPartnerCity',
							'value'=>(!empty($model->propertyPartnerCity)) ? CHtml::encode($model->city->cityName) : '--',
							'type' => 'raw',
						),
						'propertyPartnerZip',
						'eWalletBalance',
						'wishginiBalance',
					),
				)); ?>
			</div>
		</div>
	</div>
</div>



