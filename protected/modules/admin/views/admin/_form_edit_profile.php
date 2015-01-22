<div class="row-fluid">
   <div class="span12">
        <div class="box box-color box-bordered">
             <div class="box-title">
                   <h3><i class="icon-user"></i>Edit Profile</h3>
             </div>
             <div class="box-content nopadding">
                 <?php $form=$this->beginWidget('CActiveForm', array('id'=>'test','enableAjaxValidation'=>false,'htmlOptions'=>array('class'=>'form-horizontal form-bordered form-validate',))); ?>
                 
                 <?php if($form->errorSummary($model)){ ?>
                 <div class="control-group">
                            <label class="control-label" for="textfield">&nbsp;</label>
                            <div class="controls">
                                    <?php echo $form->errorSummary($model); ?>
                            </div>
                    </div>
                 <?php }?>
		     <div class="control-group">
			  <?php echo $form->labelEx($model,'userPassword',array('class'=>'control-label','for'=>'textfield')); ?>
			      <div class="controls">
				  <?php echo $form->passwordField($model,'userPassword',array('value'=>'','placeholder'=>'Enter Password','class'=>'input-xlarge','data-rule-required'=>'false')); ?>	
				 
			      </div>
		     </div>
		      
		     <div class="control-group">
			  <?php echo $form->labelEx($model,'retype_password',array('class'=>'control-label','for'=>'textfield')); ?>
			      <div class="controls">
				  <?php echo $form->passwordField($model,'retype_password',array('value'=>'','placeholder'=>'Re-Type Password','class'=>'input-xlarge','data-rule-required'=>'false','data-rule-equalTo'=>'#Admin_userPassword')); ?> 	
				 
			      </div>
		     </div>
		   
		     <div class="control-group">
			  <?php echo $form->labelEx($model,'userEmail',array('class'=>'control-label','for'=>'textfield')); ?>
			      <div class="email controls">
				  <?php echo $form->textField($model,'userEmail',array('class'=>'input-xlarge','data-rule-required'=>'true','data-rule-email'=>'true')); ?>	
				 
			      </div>
		     </div>
                    
		     <div class="note"><strong>Note :</strong> <span class="required">*</span> Indicates mandatory fields.</div>
		     <div class="form-actions">  
			  <?php echo CHtml::submitButton('Submit',array('class'=>'btn btn-primary','title'=>'Submit','alt'=>'Submit')); ?>
			  <?php echo CHtml::link('Cancel',array('admin/'),array('class'=>'btn','title'=>'Cancel','alt'=>'Cancel')); ?>  
		     </div>
             <?php $this->endWidget(); ?>
            </div>
    </div>
</div>
</div>