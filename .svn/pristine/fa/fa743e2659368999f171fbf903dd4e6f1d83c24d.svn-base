<div class="row-fluid">
   <div class="span12">
        <div class="box box-color box-bordered">
             <div class="box-title">
                   <?php if(strstr(Yii::app()->request->requestUri,'update')){?>
                   		<h3><i class="icon-table"></i>Update FAQ Category</h3>
                   	<?php }else{?>
                   		<h3><i class="icon-table"></i>Add FAQ Category</h3>
                   	<?php }?>
             </div>
             <div class="box-content nopadding">
				<?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'ajax-faqs-categories-add',
          'enableAjaxValidation'=>true,
          'clientOptions'=>array('validateOnSubmit'=>true), //This is very important
					'htmlOptions'=>array(
	                        'class'=>'form-horizontal form-bordered',
                          )
				)); ?>
				<?php if($form->errorSummary($model)){ ?>
                 <div class="control-group">
                            <label class="control-label" for="textfield">&nbsp;</label>
                            <div class="controls">
                                    <?php echo $form->errorSummary($model); ?>
                            </div>
                    </div>
                 <?php }?>
					<div class="control-group">
						<?php echo $form->labelEx($model,'faqCategoryName',array('class'=>'control-label','for'=>'textfield')); ?>
						<div class="controls">
							<?php echo $form->textField($model,'faqCategoryName',array('size'=>60,'maxlength'=>255,'data-rule-required'=>'true','class'=>'input-xxlarge')); ?>
              <div id="output" name="output" class="required"> </div>
						</div>
					</div>

					<div class="note"><strong>Note :</strong> <span class="required">*</span> Indicates mandatory fields.</div>
                    <div class="form-actions">  
                        <?php echo CHtml::SubmitButton('Submit',array('onclick'=>'return categoryvalidation();','class'=>'btn btn-primary','title'=>'Submit','alt'=>'Submit'));?>
                    </div>

				<?php $this->endWidget(); ?>
				</div>
	    </div>
	</div>
</div>

