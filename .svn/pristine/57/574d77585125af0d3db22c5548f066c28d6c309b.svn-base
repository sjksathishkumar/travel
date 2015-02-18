<div class="login-body">
<h2>RECOVERY PASSWORD</h2>
<?php $form=$this->beginWidget('CActiveForm', array('id'=>'test',
													'enableAjaxValidation'=>false,
													'htmlOptions'=>array('class'=>'form-validate','style'=>'padding-bottom:20px;',))); 
if(Yii::app()->User->hasFlash('recoverySuccess')){
	echo '<div class="successMessage">'.RECOVERY_PASS_SUCCESS.'</div>';
}
if(Yii::app()->User->hasFlash('recoveryError')){
	echo '<div class="errorMessage">'.RECOVERY_PASS_ERROR.'</div>';
}
?>
<div class="control-group">
<div class="email controls"><?php echo $form->textField($model,'userEmail',array('size'=>60,'maxlength'=>150,'placeholder'=>'Email Address','class'=>'input-block-level','data-rule-required'=>'true','data-rule-email'=>'true')); ?>
</div>
</div>
<div class="submit"><?php echo CHtml::link('Cancel',array('/admin/'),array('class'=>'btn','style'=>'float:right;margin-left:10px;')); ?>
<?php echo CHtml::submitButton('Submit',array('class'=>'btn btn-primary')); ?>
</div>

<?php $this->endWidget(); ?></div>
</div>
