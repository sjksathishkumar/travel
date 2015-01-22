<?php
/* @var $this CmsController */
/* @var $model Cms */
/* @var $form CActiveForm */
?>
<div class="row-fluid">
	<div class="span12">
	    <div class="box box-color box-bordered">
	        <div class="box-title">
	            <h3>Search</h3>
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
		                           <?php echo $form->label($model,'fkCustomerID',array('class'=>'control-label')); ?>
		                            <div class="controls">
		                                <?php echo $form->dropDownList($model,'fkCustomerID',
		                                					CHtml::listData(Users::model()->findAllByAttributes(array('userStatus'=>array('0','1'))),'pkUserID','fullname'),
		                                					array('class'=>'select2-me input-large','empty'=>'-Select Customer-')); ?>
		                            </div>
		                        </div>
		                    </div>

		                    <div class="span4">
	                            <div class="control-group">
		                            <?php echo $form->labelEx($model, 'orderDateAdded', array('class' => 'control-label', 'for' => 'textfield')); ?>
	                            	<div class="controls">
		                                From:<input type="text" name="Order[orderDateAdded][0]" id="Order_orderDateAdded_0" class="datepick" readonly='true'>
		                                To:<input type="text" name="Order[orderDateAdded][1]" id="Order_orderDateAdded_1" class="datepick" readonly='true'>
	                            	</div>
		                        </div>
	                        </div>
		                    <div class="span4">
		                        <div class="control-group">
		                           <?php echo $form->label($model,'orderStatus',array('class'=>'control-label')); ?>
		                            <div class="controls">
		                                <?php echo $form->dropDownList($model,'orderStatus',array(''=>'Select','Canceled'=>'Canceled','Completed'=>'Completed','Disputed'=>'Disputed','Pending'=>'Pending','Posted'=>'Posted'),array('class'=>'select2-me input-large')); ?>
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
<script>

 $('#Order_orderDateAdded_0').datepicker({
    format: 'yyyy-mm-dd',
 }).on('changeDate', function(e){
 	$('#Order_orderDateAdded_1').datepicker({autoclose: true}).datepicker('setStartDate', e.date).val('');
 });
 $('#Order_orderDateAdded_1').datepicker({
 	format: 'yyyy-mm-dd',
 });
</script>