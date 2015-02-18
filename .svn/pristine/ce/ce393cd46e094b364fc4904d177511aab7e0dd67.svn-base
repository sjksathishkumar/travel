<div class="page-header">
	<div class="pull-left">
		<h1>View CMS Page</h1>
	</div>
</div>
<div class="breadcrumbs">
	<ul>
		<li><?php echo CHtml::link('Home',array('/admin')); ?><i class="icon-angle-right"></i></li>
		<li><?php echo CHtml::link('CMS',array('/admin/cms')); ?><i class="icon-angle-right"></i></li>
		<li><a href="#">View CMS Page</a></li>
	</ul>
	<div class="close-bread"><a href="#"><i class="icon-remove"></i></a></div>
</div>
<div class="row-fluid">
	<div class="span12">
		<div class="box box box-color box-bordered">
			<div class="box-title">
				<h3><i class="icon-table"></i>View CMS Page</h3>
				<?php echo CHtml::link('<i class="icon-circle-arrow-left"></i> Back',array('/admin/cms'),array('class'=>'btn pull-right', 'data-toggle'=>'modal','title'=>'Back','alt'=>'Back')); ?>
				</a>
			</div>
			<div class="box-content nopadding">
				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$model,
					'attributes'=>array(
						'cmsDisplayTitle',
						'cmsPageTitle',
						'cmsSlug',
						'cmsContent:html',
						'cmsMetaTitle',
						'cmsMetaKeywords',
						'cmsMetaDescription',
						'cmsStatus',
						'cmsDateAdded',
						'cmsDateModified',
					),
				)); ?>
			</div>
		</div>
	</div>
</div>

