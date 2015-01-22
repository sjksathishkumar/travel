<div class="page-header">
	<div class="pull-left">
		<h1>View Category Page</h1>
	</div>
</div>
<div class="breadcrumbs">
	<ul>
		<li><?php echo CHtml::link('Home',array('/admin')); ?><i class="icon-angle-right"></i></li>
		<li><?php echo CHtml::link('Manage Category',array('/admin/category')); ?><i class="icon-angle-right"></i></li>
		<li><a href="#">View Category Page</a></li>
	</ul>
	<div class="close-bread"><a href="#"><i class="icon-remove"></i></a></div>
</div>
<div class="row-fluid">
	<div class="span12">
		<div class="box box box-color box-bordered">
			<div class="box-title">
				<h3><i class="icon-table"></i>View Category Page</h3>
				<?php echo CHtml::link('<i class="icon-circle-arrow-left"></i> Back',array('/admin/category'),array('class'=>'btn pull-right', 'data-toggle'=>'modal','title'=>'Back','alt'=>'Back')); ?>
				</a>
			</div>
			<div class="box-content nopadding">
				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$model,
					'attributes'=>array(
						'pkCategoryID',
						array(
							'name'=>'fkParentCategoryID',
							'value'=>Category::categoryNameFromId($model->fkParentCategoryID),
							),
						'categoryName',
						array(
							'name'=>'categoryImage',
							'value'=>CHtml::image(Yii::app()->baseUrl.UPLOAD_FOLDER.CATEGORIES_FOLDER.$model->categoryImage),
							'type'=>'html'
							),
						array(
							'name'=>'categoryDescription',
							'value'=>html_entity_decode($model->categoryDescription),
							'type'=>'html'
							),
						array(
							'name'=>'categoryStatus',
							'value'=>CommonFunctions::statusName($model->categoryStatus)
							),
						'categoryDateAdded',
						'categoryDateModified',
					),
				)); ?>
			</div>
		</div>
	</div>
</div>

