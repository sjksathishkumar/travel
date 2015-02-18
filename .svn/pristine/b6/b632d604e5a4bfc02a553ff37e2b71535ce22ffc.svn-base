<?php
/* @var $this CategoryController */
/* @var $model Category */
/* @var $form CActiveForm */
?>
<div class="row-fluid">
	<div class="span12">
	    <div class="box box-color box-bordered">
	        <div class="box-title">
	            <h3>Search  </h3>
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
		                           <?php echo $form->label($model,'CustomerEmail',array('class'=>'control-label')); ?>
		                            <div class="controls">
		                                <?php 
		                                $criteria = new CDbCriteria;
										$criteria->condition = 'userStatus != "2" AND pkUserID != "1"';
		                                echo $form->dropDownList($model,'fkUserID',CHtml::listData(Users::model()->findAll($criteria),'fkUserLoginID', 'userEmail'),array('empty'=>'--Select Customer--','maxlength'=>100,'class'=>'select2-me input-large')); ?>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="span4">
		                        <div class="control-group">
		                           <?php echo $form->label($model,'fkDealID',array('class'=>'control-label')); ?>
		                            <div class="controls">
		                                <?php 
		                                $criteria = new CDbCriteria;
										echo $form->dropDownList($model,'fkDealID',CHtml::listData(Deals::model()->findAll($criteria),'pkDealID', 'dealName'),array('empty'=>'--Select Deal--','maxlength'=>100,'class'=>'select2-me input-large')); ?>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="span4">
		                        <div class="control-group">
		                           <?php echo $form->label($model,'reviewStatus',array('class'=>'control-label')); ?>
		                            <div class="controls">
		                                <?php echo $form->dropDownList($model,'reviewStatus',array(''=>'-Select Status-','1'=>'Approve','0'=>'Unapprove'),array('class'=>'select2-me input-large')); ?>
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
				</div><!-- search-form -->
	 		</div>
	   	</div>
	</div>
</div>