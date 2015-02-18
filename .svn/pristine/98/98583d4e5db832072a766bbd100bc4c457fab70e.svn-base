<div class="login-body">
	<h2>SIGN IN</h2>
	<?php 
		$form=$this->beginWidget('CActiveForm', array('id'=>'test',
					'enableAjaxValidation'=>false,
					'htmlOptions'=>array('class'=>'form-validate',)));
		echo $form->error($model,'password');
		
		if(Yii::app()->User->hasFlash('invalid_login')){
			echo '<div class="errorMessage">'.INVALID_LOGIN_ERROR.'</div>';
		}
	?>
	<div class="control-group">
		<div class="controls">
			<?php echo $form->textField($model,'userEmail',array('value'=>'','size'=>60,'maxlength'=>150,'placeholder'=>'Email Address','class'=>'input-block-level','data-rule-required'=>'true')); ?>		
		</div>
	</div>
	<div class="control-group">
		<div class="pw controls">
			<?php echo $form->passwordField($model,'userPassword',array('value'=>'','size'=>60,'maxlength'=>255,'placeholder'=>'Password','class'=>'input-block-level','data-rule-required'=>'true')); ?>
		</div>
	</div>
	<div class="submit">
		<?php /*
		<div class="remember">
			<?php echo $form->checkBox($model,'rememberMe', array('class'=>'icheck-me','data-skin'=>'square', 'data-color'=>'blue', 'id'=>'remember')); ?>
			<?php echo $form->label($model,'rememberMe'); ?>
		</div>*/?>
		<?php echo CHtml::submitButton('Sign me in',array('class'=>'btn btn-primary')); ?>
	</div>
	<?php $this->endWidget(); ?>
	<div class="forget">
		<?php echo CHtml::link('<span>Forgot Password?</span>',array('recovery')); ?>
	</div>
</div>