<?php
/* @var $this BannerController */
/* @var $model Banner */
/* @var $form CActiveForm */
?>

<div class="wide form">
	<div class="box box-color box-bordered">
		<div class="box-title">
			<h3>Search  </h3>
		</div>
		
	</div>
	<div class="box-content nopadding">
		<?php $form=$this->beginWidget('CActiveForm', array(
					'action'=>Yii::app()->createUrl($this->route),
					'method'=>'get',
				    'id'=>'_search-form',
					'htmlOptions'=>array('class'=>'form-horizontal form-bordered')
			)); ?>
		<div class="row-fluid">
			<div class="wide form">
				<div class="span4">
					<div class="control-group">
						<?php echo $form->label($model,'faqCategoryName',array('class'=>'control-label')); ?>						                           
						<div class="controls">
							<?php echo $form->textField($model,'faqCategoryName',array('class'=>'input-large')); ?>
						</div>
					</div>
				</div>
				<div class="span4">
					<div class="control-group">
						<?php echo $form->label($model,'faqCategoryStatus',array('class'=>'control-label')); ?>
						<div class="controls">
							<?php echo $form->dropDownList($model,'faqCategoryStatus',array(''=>'Select','0'=>'Inactive','1'=>'Active'),array('class'=>'select2-me input-large')); ?>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="form-actions span12  search">
						<?php echo CHtml::submitButton('Search',array('class'=>'btn btn-primary','title'=>'Search','alt'=>'Search')); ?>
						<?php echo CHtml::resetButton('Reset',array('id'=>'resetVal','class'=>'btn','title'=>'Reset','alt'=>'Reset')); ?>
					</div>
				</div>
			</div>
		</div>
		<?php $this->endWidget(); ?>
		<!-- search-form -->
	</div>
</div>
