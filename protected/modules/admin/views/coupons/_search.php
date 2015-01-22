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
						<?php echo $form->label($model,'couponName',array('class'=>'control-label')); ?>
						<div class="controls">
							<?php echo $form->textField($model,'couponName',array('class'=>'input-large')); ?>
						</div>
					</div>
				</div>
				<div class="span4">
					<div class="control-group">
						<?php echo $form->label($model,'couponCode',array('class'=>'control-label')); ?>
						<div class="controls">
							<?php echo $form->textField($model,'couponCode',array('class'=>'input-large')); ?>
						</div>
					</div>
				</div>
				<div class="span4">
					<div class="control-group">
						<?php echo $form->label($model,'couponType',array('class'=>'control-label')); ?>
						<div class="controls">
							<?php echo $form->dropDownList($model,'couponType',array('Flat'=>'Flat','Percentage'=>'Percentage'),array('empty'=>'- Select Coupon Type -','class'=>'select2-me input-large','data-rule-required'=>'true')); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row-fluid">
			<div class="wide form">
				<div class="span4">
					<div class="control-group">
						<?php echo $form->label($model,'couponStartDate',array('class'=>'control-label')); ?>
						<div class="controls">
							<?php echo $form->textField($model,'couponStartDate',array('class'=>'input-large datepick','readonly'=>'readonly')); ?>
						</div>
					</div>
				</div>
				<div class="span4">
					<div class="control-group">
						<?php echo $form->label($model,'couponEndDate',array('class'=>'control-label')); ?>
						<div class="controls">
							<?php echo $form->textField($model,'couponEndDate',array('class'=>'input-large datepick','readonly'=>'readonly')); ?>
						</div>
					</div>
				</div>
				<div class="span4">
					<div class="control-group">
						<?php echo $form->label($model,'couponStatus',array('class'=>'control-label')); ?>
						<div class="controls">
							<?php echo $form->dropDownList($model,'couponStatus',array('0'=>'Inactive','1'=>'Active'),array('empty'=>'- Select Status -','class'=>'select2-me input-large','data-rule-required'=>'true')); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row-fluid">
			<div class="form-actions span12  search">
				<?php echo CHtml::submitButton('Search',array('class'=>'btn btn-primary','title'=>'Search','alt'=>'Search')); ?>
				<?php echo CHtml::resetButton('Reset',array('id'=>'resetVal','class'=>'btn','title'=>'Reset','alt'=>'Reset')); ?>
			</div>
		</div>
		<?php $this->endWidget(); ?>
		<!-- search-form -->
	</div>
</div>