<?php
/* @var $this BannerController */
/* @var $model Banner */
/* @var $form CActiveForm */
?>
<div class="form">
	<div class="span12">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="icon-table"></i>Update Mascot
				</h3>
			</div>
			<div class="box-content nopadding">
				<?php $form=$this->beginWidget('CActiveForm', array(
										'id'=>'mascots-form',
										'enableAjaxValidation'=>false,
										'htmlOptions'=>array(
											'class'=>'form-horizontal form-bordered form-validate',
											'enctype' => 'multipart/form-data',
										),										
								));
				?>
				<div class="control-group">
					<?php echo $form->labelEx($model,'mascotName',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php echo $form->textField($model,'mascotName',array('readonly'=>'true', 'class'=>'input-xlarge')); ?>	
					</div>
				</div>				
				<div class="control-group">
                    <?php
                    if (isset($type)):
                    	echo $form->labelEx($model, 'mascotImage', array('class' => 'control-label', 'for' => 'textfield'));
                        $required = 'false';
                    else:
                    	echo $form->labelEx($model, 'mascotImage<em>*</em>', array('class' => 'control-label', 'for' => 'textfield'));
                        $required = 'true';
                    endif;
                    ?>
                    <div class="controls" id="images">
                        <div class="fileupload fileupload-new first" data-provides="fileupload">
                            <span>
                                <span class="btn btn-file">
                                    <span class="fileupload-new">Select file</span>
                                    <span class="fileupload-exists">Change</span>
                                    <?php echo CHtml::fileField('Mascots[mascotImage]','',array('accept'=>'image/*','class'=>'dealImages required','data-rule-required'=>$required));?>
                                </span>
                                <span class="fileupload-preview"></span>
                                <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                                <?php
                                if (isset($model->mascotImage))
                                {
                                    echo Chtml::image(Yii::app()->params['siteUploadFilesURL'] . MASCOTS_PATH . $model->mascotImage);
                                }
                                ?>
                            </span>
                        </div>
                        <?php echo '<span class="required">( Please add image of 1600X445 for home page and 711X216 for other pages. )</span>';?>
                        <?php echo $form->error($model, 'mascotImage'); ?>
                    </div>
                </div>
				<div class="control-group">
					<?php echo $form->labelEx($model,'mascotAltTag',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php echo $form->textField($model,'mascotAltTag',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
						<?php echo $form->error($model, 'mascotAltTag'); ?>
					</div>
				</div>	
				<div class="control-group">
					<?php echo $form->labelEx($model,'mascotStatus',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php echo $form->dropDownList($model,'mascotStatus',array('' => 'Select','0'=>'Inactive','1'=>'Active'),array('data-rule-required'=>'true','class'=>'select2-me input-xlarge'));?>     
						<?php echo $form->error($model, 'mascotStatus'); ?>
					</div>
				</div>				        
				<div class="note"><strong>Note :</strong> <span class="required">*</span> Indicates mandatory fields.</div>
					<div class="form-actions">  
						<?php echo CHtml::submitButton('Submit',array('class'=>'btn btn-primary','title'=>'Submit','alt'=>'Submit')); ?>
						<?php echo CHtml::link('Cancel',array('/admin/banner'),array('class'=>'btn','title'=>'Cancel','alt'=>'Cancel')); ?>  
					</div>
				<?php $this->endWidget(); ?>
			</div><!-- form -->
		</div>
	</div>
</div>

