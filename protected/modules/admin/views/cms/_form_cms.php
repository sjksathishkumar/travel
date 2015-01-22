<div class="row-fluid">
   <div class="span12">
        <div class="box box-color box-bordered">
             <div class="box-title">
                   <?php if(strstr(Yii::app()->request->requestUri,'update')){?>
                   		<h3><i class="icon-table"></i>Update CMS Page</h3>
                   	<?php }else{?>
                   		<h3><i class="icon-table"></i>Add New CMS Page</h3>
                   	<?php }?>
             </div>
             <div class="box-content nopadding">
				<?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'cms-form',
					'enableAjaxValidation'=>false,
					'htmlOptions'=>array(
	                        'class'=>'form-horizontal form-bordered form-validate',
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
						<?php echo $form->labelEx($model,'cmsDisplayTitle',array('class'=>'control-label','for'=>'textfield')); ?>
						<div class="controls">
							<?php echo $form->textField($model,'cmsDisplayTitle',array('size'=>60,'maxlength'=>255,'data-rule-required'=>'true','class'=>'input-xxlarge')); ?>
						</div>
					</div>
					<div class="control-group">
						<?php echo $form->labelEx($model,'cmsPageTitle',array('class'=>'control-label','for'=>'textfield')); ?>
						<div class="controls">
							<?php echo $form->textField($model,'cmsPageTitle',array('size'=>60,'maxlength'=>255,'data-rule-required'=>'true','class'=>'input-xxlarge')); ?>
						</div>
					</div>
					<div class="control-group">
						<?php echo $form->labelEx($model,'cmsSlug',array('class'=>'control-label','for'=>'textfield')); ?>
						<div class="controls">
							<?php echo $form->textField($model,'cmsSlug',array('size'=>60,'maxlength'=>255,'data-rule-required'=>'true','class'=>'input-xxlarge')); ?>
						</div>
					</div>
					<?php if($model->cmsContentAvailable){ ?>
						<div class="control-group">
							<?php echo $form->labelEx($model,'cmsContent',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php   $this->widget('application.extensions.ckeditor.CKEditor', array('model'=>$model,
																									'attribute'=>'cmsContent',
																									'language'=>'english',
																									'editorTemplate'=>'full',
																									)
												 );?>
							</div>
						</div>
					<?php } ?>
					
					<div class="control-group">
						<?php echo $form->labelEx($model,'cmsMetaTitle',array('class'=>'control-label','for'=>'textfield')); ?>
						<div class="controls">
							<?php echo $form->textField($model,'cmsMetaTitle',array('size'=>60,'maxlength'=>255,'data-rule-required'=>'true','class'=>'input-xxlarge')); ?>
						</div>
					</div>
					
					<div class="control-group">
						<?php echo $form->labelEx($model,'cmsMetaKeywords',array('class'=>'control-label','for'=>'textfield')); ?>
						<div class="controls">
							<?php echo $form->textArea($model, 'cmsMetaKeywords', array('maxlength' => 300, 'rows' => 6, 'cols' => 300,'data-rule-required'=>'true','class'=>'input-xxlarge')); ?>
						</div>
					</div>
					
					<div class="control-group">
						<?php echo $form->labelEx($model,'cmsMetaDescription',array('class'=>'control-label','for'=>'textfield')); ?>
						<div class="controls">
							<?php echo $form->textArea($model, 'cmsMetaDescription', array('maxlength' => 300, 'rows' => 6, 'cols' => 300,'data-rule-required'=>'true','class'=>'input-xxlarge')); ?>
						</div>
					</div>
					
					<div class="control-group">
						<?php echo $form->labelEx($model,'cmsStatus',array('class'=>'control-label','for'=>'textfield')); ?>
						<div class="controls">
							<?php echo $form->dropDownList($model,'cmsStatus',array(''=>'Select','1'=>'Active','0'=>'Inactive'),array('data-rule-required'=>'true','class'=>'input-xlarge select2-me')); ?>
							<?php /*<input type="checkbox" class="icheck-me">*/?>
						</div>
					</div>

					<div class="note"><strong>Note :</strong> <span class="required">*</span> Indicates mandatory fields.</div>
                    <div class="form-actions">  
                         <?php echo CHtml::submitButton('Submit',array('class'=>'btn btn-primary','title'=>'Submit','alt'=>'Submit')); ?>
                         <?php echo CHtml::link('Cancel',array('/admin/cms'),array('class'=>'btn','title'=>'Cancel','alt'=>'Cancel')); ?>  
                    </div>

				<?php $this->endWidget(); ?>
				</div>
	    </div>
	</div>
</div>