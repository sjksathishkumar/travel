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
						<?php echo $form->label($model,'faqQuestion',array('class'=>'control-label')); ?>						                           
						<div class="controls">
							<?php echo $form->textField($model,'faqQuestion',array('class'=>'input-large')); ?>
						</div>
					</div>
				</div>
				<div class="span6">
					<div class="control-group">
						<?php echo $form->label($model,'faqAnswer',array('class'=>'control-label')); ?>						                           
						<div class="controls">
							<?php echo $form->textField($model,'faqAnswer',array('class'=>'input-large')); ?>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span6">
					    <div class="control-group">
					       <?php echo $form->label($model,'fkCategoryID',array('class'=>'control-label')); ?>
					        <div class="controls">
					        	<?php echo $form->dropDownList($model, 'fkCategoryID',CHtml::listData(FaqsCategories::model()->findAll(array("condition"=>"faqCategoryStatus =  1")), 'pkCategoryID', 'faqCategoryName'), array('empty'=>'- Select State -', 'class' => 'input-xlarge select2-me')); ?>			
					        </div>
					    </div>
					</div>
					<div class="span6">
						<div class="control-group">
							<?php echo $form->label($model,'faqStatus',array('class'=>'control-label')); ?>
							<div class="controls">
								<?php echo $form->dropDownList($model,'faqStatus',array(''=>'Select','0'=>'Inactive','1'=>'Active'),array('class'=>'select2-me input-xlarge')); ?>
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
