<div class="page-header">
	<div class="pull-left">
		<h1>Update Email Template</h1>
	</div>
</div>
<div class="breadcrumbs">
	<ul>
		<li><?php echo CHtml::link('Home',array('/admin')); ?><i class="icon-angle-right"></i></li>
		<li><?php echo CHtml::link('Email Template',array('/admin/emailTemplate')); ?><i class="icon-angle-right"></i></li>
		<li><a href="#">Update Email Template</a></li>
	</ul>
	<div class="close-bread"><a href="#"><i class="icon-remove"></i></a></div>
</div>
<div class="row-fluid">
   <div class="span12">
        <div class="box box-color box-bordered">
             <div class="box-title">
                  <h3><i class="icon-table"></i>Update Email Template</h3>
             </div>
             <div class="box-content nopadding">
				<?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'email-template-form',
					'enableAjaxValidation'=>false,
					'htmlOptions'=>array(
	                        'class'=>'form-horizontal form-bordered form-validate',
	                 )
				)); ?>
				<div class="control-group">
					<?php echo $form->labelEx($model,'emailTitle',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php echo $form->textField($model,'emailTitle',array('size'=>60,'maxlength'=>255,'data-rule-required'=>'true','class'=>'input-xxlarge')); ?>
						<?php echo $form->error($model, 'emailTitle'); ?>
					</div>
				</div>
				<div class="control-group">
					<?php echo $form->labelEx($model,'emailFromName',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php echo $form->textField($model,'emailFromName',array('size'=>60,'maxlength'=>255,'data-rule-required'=>'true','class'=>'input-xxlarge')); ?>
						<?php echo $form->error($model, 'emailFromName'); ?>
					</div>
				</div>
				<div class="control-group">
					<?php echo $form->labelEx($model,'emailFromEmail',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php echo $form->textField($model,'emailFromEmail',array('size'=>60,'maxlength'=>255,'data-rule-required'=>'true','class'=>'input-xxlarge')); ?>
						<?php echo $form->error($model, 'emailFromEmail'); ?>
					</div>
				</div>
				<div class="control-group">
					<?php echo $form->labelEx($model,'emailSubject',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php echo $form->textField($model,'emailSubject',array('size'=>60,'maxlength'=>255,'data-rule-required'=>'true','class'=>'input-xxlarge')); ?>
						<?php echo $form->error($model, 'emailSubject'); ?>
					</div>
				</div>
				<div class="control-group">
					<?php echo $form->labelEx($model,'emailContent',array('class'=>'control-label','for'=>'textfield')); ?>
					<div class="controls">
						<?php   $this->widget('application.extensions.ckeditor.CKEditor', array('model'=>$model,
																							'attribute'=>'emailContent',
																							'language'=>'english',
																							'editorTemplate'=>'full',
																							)
										 );?>
						<?php echo $form->error($model, 'emailContent'); ?>
					</div>
				</div>
				<div class="note"><strong>Note :</strong> <span class="required">*</span> Indicates mandatory fields.</div>
                <div class="form-actions">  
                     <?php echo CHtml::submitButton('Submit',array('class'=>'btn btn-primary')); ?>
                     <?php echo CHtml::link('Cancel',array('/admin/emailTemplate'),array('class'=>'btn')); ?>  
                </div>

			<?php $this->endWidget(); ?>
			</div>
	    </div>
	</div>
</div>