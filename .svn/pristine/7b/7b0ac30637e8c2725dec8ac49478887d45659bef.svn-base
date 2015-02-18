<?php
/* @var $this ReviewController */
/* @var $model Review */
?>
<div class="page-header">
	<div class="pull-left">
		<h1>Customer Reviews</h1>
	</div>
</div>
<div class="breadcrumbs">
	<ul>
		<li><?php echo CHtml::link('Home',array('/admin')); ?><i class="icon-angle-right"></i></li>
		<li><?php echo CHtml::link('Customer Reviews',array('/admin/reviews')); ?><i class="icon-angle-right"></i></li>
		<li><a href="#">Review Details</a></li>
	</ul>
	<div class="close-bread">
		<?php echo CHtml::link('<i class="icon-remove"></i>',array('#')); ?>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">
		<div class="box box box-color box-bordered">
			<div class="box-title">
				<h3><i class="icon-table"></i>View Review</h3>
				<?php echo CHtml::link('<i class="icon-circle-arrow-left"></i> Back',array('/admin/reviews'),array('class'=>'btn pull-right', 'data-toggle'=>'modal','title'=>'Back','alt'=>'Back')); ?>
				</a>
			</div>
			<div class="box-content nopadding">
				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$model,
					'attributes'=>array(
						array(
							'name'=>'pkReviewID',
						),
						array(        
							'name'=>'fkDealID',
							'type'=>'raw',
							'value'=>$model->deal->dealName,
						),
						array(        
							'name'=>'fkUserID',
							'type'=>'raw',
							'value'=>$model->user->userEmail,
						),
						'nickname',
						'reviewSubject',
						'reviewContent',
						array(        
							'name'=>'reviewStatus',
							'type'=>'raw',
							'value'=>$model->reviewStatus?'Approved':'Unapproved',
						),
						array(        
							'name'=>'reviewAddDate',
							'type'=>'raw',
							'value'=>date('Y-m-d H:i:s',$model->reviewAddDate),
						),
					),
				)); ?>

			</div>
		</div>
	</div>
</div>

