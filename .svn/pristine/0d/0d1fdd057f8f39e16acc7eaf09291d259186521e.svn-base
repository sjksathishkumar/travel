<?php
/* @var $this BannerController */
/* @var $model Banner */
?>
<div class="page-header">
	<div class="pull-left">
		<h1>Mascots Manager</h1>
	</div>
</div>
<div class="breadcrumbs">
	<ul>
		<li><?php echo CHtml::link('Home',array('/admin')); ?><i class="icon-angle-right"></i></li>
		<li><?php echo CHtml::link('Mascots Manager',array('/admin/banner')); ?><i class="icon-angle-right"></i></li>
		<li><a href="#">Mascot Details</a></li>
	</ul>
	<div class="close-bread">
		<?php echo CHtml::link('<i class="icon-remove"></i>',array('#')); ?>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">
		<div class="box box box-color box-bordered">
			<div class="box-title">
				<h3><i class="icon-table"></i>View Mascot</h3>
				<?php echo CHtml::link('<i class="icon-circle-arrow-left"></i> Back',array('/admin/banner'),array('class'=>'btn pull-right', 'data-toggle'=>'modal','title'=>'Back','alt'=>'Back')); ?>
				</a>
			</div>
			<div class="box-content nopadding">
				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$model,
					'attributes'=>array(
						'mascotName',
						array(        
							'name'=>'mascotImage',
							'type'=>'raw',
							'value'=>CHtml::image(Yii::app()->baseUrl.UPLOAD_FOLDER.MASCOTS_FOLDER.$model->mascotImage,$model->mascotAltTag,array('width'=>163,'height'=>163)),
						),
						'mascotAltTag',
						/*array(
							'name'=>'mascotStatus',
							'value'=>CommonFunctions::statusName($model->mascotStatus)
							),*/
						'mascotDateAdded',
						'mascotDateModified',
					),
				)); ?>

			</div>
		</div>
	</div>
</div>

