<?php
$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl . '/assets/backend/ckeditor/ckeditor.js');
$cs->registerScriptFile($baseUrl . '/assets/backend/fck_editor/js/sample.js');
$cs->registerCssFile($baseUrl . '/assets/backend/fck_editor/css/sample.css');
?>
<div class="row-fluid">
   <div class="span12">
        <div class="box box-color box-bordered">
             <div class="box-title">
                   <?php if(strstr(Yii::app()->request->requestUri,'update')){?>
                   		<h3><i class="icon-table"></i>Update FAQ</h3>
                   	<?php }else{?>
                   		<h3><i class="icon-table"></i>Add FAQ</h3>
                   	<?php }?>
             </div>
             <div class="box-content nopadding">
				<?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'faqs-form',
					'enableAjaxValidation'=>false,
					'htmlOptions'=>array(
	                        'class'=>'form-horizontal form-bordered form-validate',
	                        'enctype' => 'multipart/form-data',
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
						<?php echo $form->labelEx($model,'faqQuestion',array('class'=>'control-label','for'=>'textfield')); ?>
						<div class="controls">
							<?php echo $form->textField($model,'faqQuestion',array('size'=>60,'maxlength'=>255,'data-rule-required'=>'true','class'=>'input-xxlarge')); ?>
						</div>
					</div>
					<div class="control-group">
						<?php echo $form->labelEx($model,'faqAnswer',array('class'=>'control-label','for'=>'textfield')); ?>
						<div class="controls">
							<div>
							    <?php echo $form->textArea($model, 'faqAnswer', array('id' => 'editor1')); ?>
							    <script type="text/javascript">
							        CKEDITOR.replace( 'editor1',
							        {
							            filebrowserBrowseUrl :'<?php echo $baseUrl; ?>/assets/backend/fck_editor/ckeditor/filemanager/browser/default/browser.html?Connector=http://<?php echo $_SERVER['SERVER_NAME']; ?>/travelogini_new/assets/backend/fck_editor/ckeditor/filemanager/connectors/php/connector.php',
							            filebrowserImageBrowseUrl : '<?php echo $baseUrl; ?>/assets/backend/fck_editor/ckeditor/filemanager/browser/default/browser.html?Type=Image&Connector=http://<?php echo $_SERVER['SERVER_NAME']; ?>/travelogini_new/assets/backend/fck_editor/ckeditor/filemanager/connectors/php/connector.php',
							            filebrowserFlashBrowseUrl :'<?php echo $baseUrl; ?>/assets/backend/fck_editor/ckeditor/filemanager/browser/default/browser.html?Type=Flash&Connector=http://<?php echo $_SERVER['SERVER_NAME']; ?>/travelogini_new/assets/backend/fck_editor/ckeditor/filemanager/connectors/php/connector.php',
							            filebrowserUploadUrl  :'<?php echo $baseUrl; ?>/assets/backend/fck_editor/ckeditor/filemanager/connectors/php/upload.php?Type=File',
							            filebrowserImageUploadUrl : '<?php echo $baseUrl; ?>/assets/backend/fck_editor/ckeditor/filemanager/connectors/php/upload.php?Type=Image',
							            filebrowserFlashUploadUrl : '<?php echo $baseUrl; ?>/assets/backend/fck_editor/ckeditor/filemanager/connectors/php/upload.php?Type=Flash'
							        });	
							    </script> 
							</div>
						</div>
					</div>
					<div class="control-group">
						<?php echo $form->labelEx($model,'fkCategoryID',array('class'=>'control-label','for'=>'textfield')); ?>
						<div class="controls">
							<?php 
								echo $form->dropDownList($model, 'fkCategoryID',CHtml::listData(FaqsCategories::model()->findAll(array("condition"=>"faqCategoryStatus =  1")), 'pkCategoryID', 'faqCategoryName'), array('empty'=>'- Select State -', 'data-rule-required' => 'true', 'class' => 'input-xlarge select2-me'));   
								$config = array();
								$this->widget('application.extensions.fancybox.EFancyBox', array('target'=>'#getaction','config'=>$config));
								echo "&emsp;&emsp;&emsp;".CHtml::link('Create Category',array('faqs/addAjaxCategory'),array('id'=>'getaction','class'=>'btn btn-primary','alt'=>'Create Category'));
							?>
						</div>
					</div>
					<div class="control-group">
						<?php echo $form->labelEx($model,'faqDisplayOrder',array('class'=>'control-label','for'=>'textfield')); ?>
						<div class="controls">
							<?php echo $form->textField($model,'faqDisplayOrder',array('size'=>60,'maxlength'=>255,'data-rule-required'=>'true','class'=>'input-xxlarge')); ?>
						</div>
					</div>
					<div class="control-group">
                    <?php
                    if (isset($type)):
                    	echo $form->labelEx($model, 'faqAttachment', array('class' => 'control-label', 'for' => 'textfield'));
                        $required = 'false';
                    else:
                    	echo $form->labelEx($model, 'faqAttachment', array('class' => 'control-label', 'for' => 'textfield'));
                        $required = 'true';
                    endif;
                    ?>
	                    <div class="controls" id="images">
	                        <div class="fileupload fileupload-new first" data-provides="fileupload">
	                            <span>
	                                <span class="btn btn-file">
	                                    <span class="fileupload-new">Select file</span>
	                                    <span class="fileupload-exists">Change</span>
	                                    <?php echo CHtml::fileField('Faqs[faqAttachment]','',array('class'=>'dealImages'));?>
	                                </span>
	                                <span class="fileupload-preview"></span>
	                                <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
	                            </span>
	                        </div>
	                        <?php echo '<span><b>Hint :  Please add only .jpg, .gif, .jpeg, .png, .doc, .docx, .pdf, .txt !</span>';?>
	                        <?php echo $form->error($model, 'faqAttachment'); ?>
	                    </div>
                	</div>
                	<div class="control-group">
						<?php echo $form->labelEx($model,'faqHelpTopics',array('class'=>'control-label','for'=>'textfield')); ?>
						<div class="controls">
        					<?php echo $form->checkBoxList($model,'faqHelpTopics',     CHtml::listData(Faqs::model()->findAll(), 'pkFaqID', 'faqQuestion'), array('separator'=>'','template'=>'{input}{label}<br>')); ?>
						</div>
					</div>
					<div class="note"><strong>Note :</strong> <span class="required">*</span> Indicates mandatory fields.</div>
                    <div class="form-actions">  
                         <?php echo CHtml::submitButton('Submit',array('class'=>'btn btn-primary','title'=>'Submit','alt'=>'Submit')); ?>
                         <?php echo CHtml::link('Cancel',array('faqs/index'),array('class'=>'btn','title'=>'Cancel','alt'=>'Cancel')); ?>  
                    </div>

				<?php $this->endWidget(); ?>
				</div>
	    </div>
	</div>
</div>

