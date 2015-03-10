<?php
    $varBaseUrl = Yii::app()->baseUrl;
    $data = array();
    $data['mascots'] = Mascots::model()->findAllByAttributes(array('mascotStatus'=>'1'));
?>

<!-- Create Account Part Start From Here -->
	<div class="container">
		<div class="member-create-account">
			<div class="about-travelogini">
				<div class="about-left"><?php echo CHtml::image($varBaseUrl . "/images/design-left.png"); ?></div>
				<div class="travelogini-heading">Paid Registration</div>
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
					<?php echo $form->textField($model,'customerFirstName',array('class'=>'half-input requiredField','placeholder'=>'First Name'));?>
					<?php echo $form->error($model,'customerFirstName'); ?>
					<?php echo $form->textField($model,'customerLastName',array('class'=>'half-input requiredField','placeholder'=>'Last Name'));?>
					<?php echo $form->error($model,'customerLastName'); ?>
					<?php echo $form->textField($model,'customerUserName',array('class'=>'half-input margin0 requiredField','placeholder'=>'Username'));?>
					<?php echo $form->error($model,'customerUserName'); ?>
				</li>
				<li>
					<?php echo $form->textField($model,'customerEmail',array('class'=>'half-input requiredField emailField','placeholder'=>'Email'));?>
					<?php echo $form->error($model,'customerEmail'); ?>
					<?php echo $form->passwordField($loginModel,'userPassword',array('class'=>'half-input passField requiredField','id'=>'passField','placeholder'=>'Password'));?>
					<?php echo $form->error($loginModel,'userPassword'); ?>
					<?php echo $form->passwordField($loginModel,'repassword',array('class'=>'half-input margin0 passField requiredField','placeholder'=>'Conform Password','equalTo'=>'#passField'));?>
					<?php echo $form->error($loginModel,'repassword'); ?>
				</li>
				<li>
					<?php echo $form->textField($model,'customerMobile',array('class'=>'half-input requiredField phoneField','placeholder'=>'Mobile'));?>
					<?php echo $form->error($model,'customerMobile'); ?>
					<div class="half-input">
						<div class="slecet-country">
							<?php echo $form->dropDownList($model,'customerGender',
																	array(
																		'empty'=>'- Select State -',
																		'Male' => 'Male',
																		'Female' => 'Female',
																	),
																	array('class' =>'chosen-select half-input dropdown requiredField')
																	); ?>	
							<?php echo $form->error($model, 'customerGender'); ?>
						</div>
					</div>
				
				</li>
				<li>
					<?php echo CHtml::checkBox('terms','',array('class'=>'radio', 'id'=>'terms')); ?>
					<!-- <input type="checkbox"  class="radio"> -->
					<label for="remember"> I agree to terms and conditions </label>
					<div class="terms-error"></div>
				</li>
				<li>
					<div class="btn-outer">
						<div class="login-btn submit-btn">
							<?php echo CHtml::submitButton('Signup',array('class' => 'register'));?>
							<!-- <input type="submit" name="submit" value="Create Account" /> -->
						</div>
					</div>
				</li>
			</ul>
			<?php $this->endWidget();?>
		</div>
	</div>
	<!-- Create Account Part End Here -->