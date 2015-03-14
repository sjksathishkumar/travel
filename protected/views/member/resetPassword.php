<?php
    $varBaseUrl = Yii::app()->baseUrl;
    $data = array();
    $data['mascots'] = Mascots::model()->findAllByAttributes(array('mascotStatus'=>'1'));
?>

		<!-- Create Account Part Start From Here -->
	<div class="container">
		<div class="full-box">
		<div class="membership-plan-outer">
			<div class="member-create-account">
				<div class="about-travelogini">
					<div class="about-left"><?php echo CHtml::image($varBaseUrl . "/images/design-left.png"); ?></div>
					<div class="travelogini-heading">Reset Password</div>
					<div class="about-right"><?php echo CHtml::image($varBaseUrl . "/images/design-right.png"); ?></div>
				</div>
			</div>
			<div class="activated">
				<div class="dashboard-outer">
					<div class="dashboard-heading">
					Update Password
				</div>
					<ul class="acc-login">
					<?php $form=$this->beginWidget('CActiveForm', array(
                						'id'=>'forgot-member-form',
                						'action'=>'#',
                						'enableAjaxValidation'=>false,
                						'htmlOptions' => array(
							                'novalidate' => 'novalidate',
							                'class' => 'validate-form',
							            ),
                						/*'htmlOptions'=>array(
                							//'class'=>'form-wizard form-horizontal form-bordered form-validate',
                							//'enctype' => 'multipart/form-data',
                						),*/										
                				));
                		?> 
                		<li>
							<?php echo $form->passwordField($model, 'userPassword', array('placeholder' => 'New Password', 'class' => 'passField requiredField','id'=>'passField')); ?>
							<?php echo $form->error($model, 'userPassword', array('class' => 'errorMessage')); ?> 
						</li>
						<li>
							<?php echo $form->passwordField($model, 'repassword', array('placeholder' => 'Re-Type Password', 'class' => 'passField requiredField','equalTo'=>'#passField')); ?>
        					<?php echo $form->error($model, 'repassword', array('class' => 'errorMessage')); ?>
        				</li>
        				<li class="dashboard-btns">
							<div class="cntr-btn-outer">
								<div class="login-btn submit-btn">
									<?php echo CHtml::submitButton('Submit'); ?>
								</div>
								<div class="login-btn submit-btn">
									<?php echo CHtml::link('Cancel', array('homepage/index'), array('class' => 'simple-btn')); ?>
								</div>
							</div>
						</li>
					<?php $this->endWidget();?>
					</ul>
				</div>
			</div>
		</div>
		</div>
	</div>
	<!-- Create Account Part End Here -->