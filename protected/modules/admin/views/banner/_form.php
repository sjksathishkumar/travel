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
					<i class="icon-table"></i>
					<?php if(isset($type)):?>Edit Banner<?php else:?>Add New Banner<?php endif;?>
				</h3>
			</div>
			<div class="box-content nopadding">
				<?php $form=$this->beginWidget('CActiveForm', array(
										'id'=>'banner-form',
										'enableAjaxValidation'=>false,
										'htmlOptions'=>array(
											'class'=>'form-horizontal form-bordered form-validate',
											'enctype' => 'multipart/form-data',
										),										
								));
				?>
				<?php /* if($form->errorSummary($model)){ ?>
				<div class="control-group">
					<label class="control-label" for="textfield">&nbsp;</label>
					<div class="controls">
						<?php echo $form->errorSummary($model); ?>
					</div>
				</div>
		                 <?php }*/ ?>
				<div class="control-group">
					<?php echo $form->labelEx($model,'bannerTitle',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php echo $form->textField($model,'bannerTitle',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
						<?php echo $form->error($model, 'bannerTitle'); ?>
					</div>
				</div>
				<div class="control-group">
					<?php echo $form->labelEx($model,'bannerAltTag',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php echo $form->textField($model,'bannerAltTag',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
						<?php echo $form->error($model, 'bannerAltTag'); ?>
					</div>
				</div>
				
				<div class="control-group">
                    <?php
                    if (isset($type)):
                    	echo $form->labelEx($model, 'bannerImage', array('class' => 'control-label', 'for' => 'textfield'));
                        $required = 'false';
                    else:
                    	echo $form->labelEx($model, 'bannerImage<em>*</em>', array('class' => 'control-label', 'for' => 'textfield'));
                        $required = 'true';
                    endif;
                    ?>
                    <div class="controls" id="images">
                        <div class="fileupload fileupload-new first" data-provides="fileupload">
                            <span>
                                <span class="btn btn-file">
                                    <span class="fileupload-new">Select file</span>
                                    <span class="fileupload-exists">Change</span>
                                    <?php echo CHtml::fileField('Banner[bannerImage]','',array('accept'=>'image/*','class'=>'dealImages required','data-rule-required'=>$required));?>
                                </span>
                                <span class="fileupload-preview"></span>
                                <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                                <?php
                                if (isset($model->bannerImage))
                                {
                                    echo Chtml::image(Yii::app()->params['siteUploadFilesURL'] . BANNERS_FOLDER . $model->bannerImage);
                                }
                                ?>
                            </span>
                        </div>
                        <?php echo '<span class="required">( Please add image of 1600X445 for home page and 711X216 for other pages. )</span>';?>
                        <?php echo $form->error($model, 'bannerImage'); ?>
                    </div>
                </div>
				<div class="control-group">
					<?php echo $form->labelEx($model,'bannerOrder',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php echo $form->textField($model,'bannerOrder',array('class'=>'input-xlarge','data-rule-required'=>'true','data-rule-digits'=>'true')); ?>	
						<?php echo $form->error($model, 'bannerOrder'); ?>
					</div>
				</div>	
				<div class="control-group">
					<?php echo $form->labelEx($model,'fkCmsID',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php 
						$criteria = new CDbCriteria;
						$criteria->condition = 'cmsStatus = "1" AND cmsBannerAvailable="1"';
						echo $form->dropDownList($model,'fkCmsID',CHtml::listData(Cms::model()->findAll($criteria), 'pkCmsID', 'cmsDisplayTitle'),array('empty'=>'-Select Page-','data-rule-required'=>'true','class'=>'select2-me input-xlarge'));?>     
						<?php echo $form->error($model, 'fkCmsID'); ?>
					</div>
				</div>
				<div class="control-group">
					<?php echo $form->labelEx($model,'bannerStatus',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php echo $form->dropDownList($model,'bannerStatus',array('' => 'Select','0'=>'Inactive','1'=>'Active'),array('data-rule-required'=>'true','class'=>'select2-me input-xlarge'));?>     
						<?php echo $form->error($model, 'bannerStatus'); ?>
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