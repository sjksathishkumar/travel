<?php
    $varBaseUrl = Yii::app()->baseUrl;
    $data = array();
    $data['mascots'] = Mascots::model()->findAllByAttributes(array('mascotStatus'=>'1'));
?>
<!-- Create Account Part Start From Here -->
	<div class="container">
		<div class="full-box">
		<div class="member-create-account">
			<div class="about-travelogini">
				<div class="about-left"><?php echo CHtml::image($varBaseUrl . "/images/design-left.png"); ?></div>
				<div class="travelogini-heading">Free Registration</div>
				<div class="about-right"><?php echo CHtml::image($varBaseUrl . "/images/design-right.png"); ?></div>
			</div>
			<div class="form-heading">Personal Details</div>
			<?php 
				$form = $this->beginWidget('CActiveForm', array(
                            'id' => 'member-free-signup-form',
                            'action'=>Yii::app()->createUrl('/member/memberFreeSignup'),
                            'enableAjaxValidation' => false,
                            'method'=>'post',
                            'htmlOptions' => array(
                                'novalidate' => 'novalidate',
                                'class' => 'validate-form',
                                //'enctype' => 'multipart/form-data',
                            )
                        ));
            ?>
			<ul class="acc-login">
				<li>
					<div  class="half-input"><?php echo $form->textField($model,'customerFirstName',array('class'=>'requiredField','placeholder'=>'First Name'));?>
					<?php echo $form->error($model,'customerFirstName'); ?></div>
					<div  class="half-input"><?php echo $form->textField($model,'customerLastName',array('class'=>'requiredField','placeholder'=>'Last Name'));?>
					<?php echo $form->error($model,'customerLastName'); ?></div>
					<div  class="half-input margin0"><?php echo $form->textField($loginModel,'userName',array('class'=>'requiredField','placeholder'=>'Username'));?>
					<?php echo $form->error($loginModel,'userName'); ?></div>
				</li>
				<li>
					<div  class="half-input"><?php echo $form->textField($loginModel,'userEmail',array('class'=>'requiredField emailField','placeholder'=>'Email'));?>
					<?php echo $form->error($loginModel,'userEmail'); ?></div>
					<div  class="half-input"><?php echo $form->passwordField($loginModel,'userPassword',array('class'=>'passField requiredField','id'=>'passField','placeholder'=>'Password'));?>
					<?php echo $form->error($loginModel,'userPassword'); ?></div>
					<div  class="half-input margin0"><?php echo $form->passwordField($loginModel,'repassword',array('class'=>'passField requiredField','placeholder'=>'Conform Password','equalTo'=>'#passField'));?>
					<?php echo $form->error($loginModel,'repassword'); ?></div>
				</li>
				<li>
					<div  class="half-input"><?php echo $form->textField($model,'customerMobile',array('class'=>'requiredField phoneField','placeholder'=>'Mobile'));?>
					<?php echo $form->error($model,'customerMobile'); ?></div>
					<div class="half-input">
						<div class="slecet-country">
							
							<?php echo $form->dropDownList($model,'customerGender',
																	array(
																		'empty'=>'- Select Gender -',
																		'Male' => 'Male',
																		'Female' => 'Female',
																	),
																	array('class' =>'chosen-select requiredField', 'id'=>'gender')
																	); ?>	
						</div>
						<?php echo $form->error($model,'customerGender'); ?>
					</div>
				
				</li>
				<li>
					<?php echo CHtml::checkBox('terms','',array('class'=>'radio', 'id'=>'terms')); ?>
					<label for="remember"> I agree to terms and conditions </label>
					<div class="terms-error"></div>
				</li>
				<li>
					<div class="btn-outer">
						<div class="login-btn submit-btn">
							<?php echo CHtml::submitButton('Signup',array('class' => 'register'));?>
						</div>
					</div>
				</li>
			</ul>
			<?php $this->endWidget();?>
		</div>
	</div>
	</div>
	<!-- Create Account Part End Here -->