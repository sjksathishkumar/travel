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
				<div class="span6">
					<div class="control-group">
						<?php echo $form->label($model,'cityPartnerBusinessName',array('class'=>'control-label')); ?>						                           
						<div class="controls">
							<?php echo $form->textField($model,'cityPartnerBusinessName',array('class'=>'input-large')); ?>
						</div>
					</div>
				</div>
				<div class="span6">
					<div class="control-group">
						<?php echo $form->label($model,'cityPartnerEmail',array('class'=>'control-label')); ?>						                           
						<div class="controls">
							<?php echo $form->textField($model,'cityPartnerEmail',array('class'=>'input-large')); ?>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span6">
					    <div class="control-group">
					       <?php echo $form->label($model,'cityPartnerSubscriptionPlan',array('class'=>'control-label')); ?>
					        <div class="controls">
					            <?php echo $form->dropDownList($model,'cityPartnerSubscriptionPlan',array(''=>'Select','1'=>'Free','2'=>'Basic','3'=>'Pro'),array('class'=>'select2-me input-xlarge')); ?>
					        </div>
					    </div>
					</div>
					<div class="span6">
					    <div class="control-group">
					       <?php echo $form->label($model,'cityPartnerStatus',array('class'=>'control-label')); ?>
					        <div class="controls">
					            <?php echo $form->dropDownList($model,'cityPartnerStatus',array(''=>'Select','1'=>'Active','0'=>'Inactive'),array('class'=>'select2-me input-xlarge')); ?>
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
			</div>
		</div>
		<?php $this->endWidget(); ?>
		<!-- search-form -->
	</div>
</div>




