<div class="page-header">
	<div class="pull-left">
		<h1>View FQA</h1>
	</div>
</div>
<div class="breadcrumbs">
	<ul>
		<li><?php echo CHtml::link('Home',array('/admin')); ?><i class="icon-angle-right"></i></li>
		<li><?php echo CHtml::link('FQA',array('faqs/index')); ?><i class="icon-angle-right"></i></li>
		<li><a href="#">View FQA</a></li>
	</ul>
	<div class="close-bread"><a href="#"><i class="icon-remove"></i></a></div>
</div>
<div class="row-fluid">
	<div class="span12">
		<div class="box box box-color box-bordered">
			<div class="box-title">
				<h3><i class="icon-table"></i>View FAQ</h3>
				<?php echo CHtml::link('<i class="icon-circle-arrow-left"></i> Back',array('faqs/index'),array('class'=>'btn pull-right', 'data-toggle'=>'modal','title'=>'Back','alt'=>'Back')); ?>
				</a>
			</div>
			<div class="box-content nopadding">
				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$model,
					'attributes'=>array(
						'faqQuestion',
						'faqAnswer',
						'fkCategoryID',
						'faqDisplayOrder',
						'faqStatus',
						'faqAttachment',
						'faqHelpTopics',
						'faqDateAdded',
						'faqDateModified',
					),
				)); ?>
			</div>
		</div>
	</div>
</div>




