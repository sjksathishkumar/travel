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
                   		<h3><i class="icon-table"></i>Update FAQ Category</h3>
                   	<?php }else{?>
                   		<h3><i class="icon-table"></i>Add FAQ Category</h3>
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
							<?php echo $form->dropDownList($model, 'fkCategoryID',CHtml::listData(FaqsCategories::model()->findAll(array("condition"=>"faqCategoryStatus =  1")), 'pkCategoryID', 'faqCategoryName'), array('empty'=>'- Select State -', 'data-rule-required' => 'true', 'class' => 'input-xlarge select2-me')); ?>			
						</div>
					</div>
					<div class="control-group">
						<?php echo $form->labelEx($model,'faqDisplayOrder',array('class'=>'control-label','for'=>'textfield')); ?>
						<div class="controls">
							<?php echo $form->textField($model,'faqDisplayOrder',array('size'=>60,'maxlength'=>255,'data-rule-required'=>'true','class'=>'input-xxlarge')); ?>
						</div>
					</div>
			        <div class="control-group">
			            <?php echo $form->labelEx($model,'faqStatus',array('class'=>'control-label','for'=>'textfield')); ?>
			            <div class="controls">
			              <?php echo $form->dropDownList($model,'faqStatus',array(''=>'Select','1'=>'Active','0'=>'Inactive'),array('data-rule-required'=>'true','class'=>'input-xlarge select2-me')); ?>
			            </div>
			        </div>
			        <div class="control-group">
			            <?php echo $form->labelEx($model,'faqAttachment',array('class'=>'control-label','for'=>'textfield')); ?>
			            <div class="controls">
			            	<?php 
			            		if($model->faqAttachment)
			            		{
			            			echo $form->textField($model,'faqAttachment',array('id'=>'delete-file','class'=>'input-xxlarge','readonly'=>true)); 	
			            			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			            			echo CHtml::button('Delete File',array('class'=>'btn btn-primary',"onclick" => "{deletFile();}", "id"=>"delete-file-button"));
			            			echo "<br><br>";
			            		?>
			            		<div class="fileupload fileupload-new first" data-provides="fileupload">
			            		    <span>
			            		        <span class="btn btn-file">
			            		            <span class="fileupload-new">Upload file</span>
			            		            <span class="fileupload-exists">Change</span>
			            		            <?php echo CHtml::fileField('Faqs[faqAttachment]','',array('accept'=>'image/*','class'=>'dealImages'));?>
			            		        </span>
			            		        <span class="fileupload-preview"></span>
			            		        <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
			            		    </span>
			            		</div>
			            		<?php
			            			echo '<span>( Please add image and Documents Only. )</span>';
			            		}
			            		else
			            		{
			            		?>
		                        <div class="fileupload fileupload-new first" data-provides="fileupload">
		                            <span>
		                                <span class="btn btn-file">
		                                    <span class="fileupload-new">Upload file</span>
		                                    <span class="fileupload-exists">Change</span>
		                                    <?php echo CHtml::fileField('Faqs[faqAttachment]','',array('accept'=>'image/*','class'=>'dealImages'));?>
		                                </span>
		                                <span class="fileupload-preview"></span>
		                                <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
		                            </span>
		                        </div>
		                        <?php
		                        	echo '<span>( Please add image and Documents Only. )</span>';
			            		}
			            	 ?>
	                        <?php echo $form->error($model, 'faqAttachment'); ?>
			            </div>
			        </div>
			        <div class="control-group">
						<?php echo $form->labelEx($model,'faqHelpTopics',array('class'=>'control-label','for'=>'textfield')); ?>
						<div class="controls">
        					<?php 
        						echo $form->checkBoxList($model,'faqHelpTopics', CHtml::listData(Faqs::model()->findAll(array("condition"=>"pkFaqID !=  $model->pkFaqID")), 'pkFaqID', 'faqQuestion'), array('separator'=>'','template'=>'{input}{label}<br>','class'=>'input_faq')); 
        					?>
						</div>
					</div>
			        <div class="control-group">
			        	<?php echo $form->labelEx($model,'faqDateAdded',array('class'=>'control-label','for'=>'textfield')); ?>
			        	<div class="controls">
			        		<?php echo $form->textField($model,'faqDateAdded',array('size'=>60,'maxlength'=>255,'data-rule-required'=>'true','class'=>'input-xxlarge','readonly'=>true)); ?>
			        	</div>
			        </div>
			        <div class="control-group">
			        	<?php echo $form->labelEx($model,'faqDateModified',array('class'=>'control-label','for'=>'textfield')); ?>
			        	<div class="controls">
			        		<?php echo $form->textField($model,'faqDateModified',array('size'=>60,'maxlength'=>255,'data-rule-required'=>'true','class'=>'input-xxlarge','readonly'=>true)); ?>
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

