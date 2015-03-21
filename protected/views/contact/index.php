	<?php
    $varBaseUrl = Yii::app()->baseUrl;
    $data = array();
    $data['mascots'] = Mascots::model()->findAllByAttributes(array('mascotStatus'=>'1'));
    $contact = Configurations::model()->findByPK('1');

	?>

	<!-- Create Account Part Start From Here -->
	<div class="container">
		<div class="membership-plan-outer">
			<div class="member-create-account">
				<div class="about-travelogini">
					<div class="about-left"><?php echo CHtml::image($varBaseUrl . "/images/design-left.png"); ?></div>
					<div class="travelogini-heading">Contact Us</div>
					<div class="about-right"><?php echo CHtml::image($varBaseUrl . "/images/design-right.png"); ?></div>
				</div>	
								<!-- <form class="contact-form"> -->
								<div class="half-box">
									<ul class="acc-login">
										<?php 
										$form = $this->beginWidget('CActiveForm', array(
						                            'id' => 'contact-form',
						                            'action'=>'#',
						                            'enableAjaxValidation' => false,
						                            //'enableClientValidation'=>true,
						                            'method'=>'post',
						                            'htmlOptions' => array(
						                                'novalidate' => 'novalidate',
						                                'class' => 'validate-form',
						                                'enctype' => 'multipart/form-data',
						                            )
						                        ));
            							?>
										<li class="margin-top">
											<?php echo CHtml::textField('name','',array('placeholder'=>'Name','class'=>'requiredField')); ?>
											
										</li>
										<li>
											<?php //echo $form->textField('userEmail',array('class'=>'requiredField emailField','placeholder'=>'Email'));?>
											<?php echo CHtml::textField('email','',array('placeholder'=>'Email','class'=>'requiredField emailField')); ?>
											
										</li>
										<li>
											<?php echo CHtml::textField('mobile','',array('placeholder'=>'Mobile','class'=>'requiredField phoneField')); ?>
											
										</li>
										<li>
											<?php echo CHtml::textArea('comments','',array('placeholder'=>'Enter your commands','rows'=>'4','class'=>'requiredField')); ?>
											
										</li>
									
										<li>
											<input  class="onesecond-input" type="text" name="adfaemail" value="" placeholder="Upload File" />
											<?php echo CHtml::fileField('contact-file','',array('class'=>'browse-btn fileType'));?>
											
										</li>
										<li>
											<div class="dashboard-btns">
												<div class="cntr-btn-outer">
													<div class="login-btn submit-btn margin0">
														<?php echo CHtml::submitButton('Submit');?>
														
													</div>
													<div class="login-btn submit-btn">
														<input type="submit" value="Cancel" name="Cancel">
													</div>
												</div>
											</div>
										</li>
										<?php $this->endWidget();?>
									</ul>
								</div>
								<div class="half-box margin0">
									<div class="contact-type">
										<ul>
											<li>
												<div class="contact-left">
													Call Us :-
												</div>
												<div class="contact-right phone">
													<?php echo $contact->configurationContact; ?>
												</div>
											</li>
											<li>
												<div class="contact-left">
													Email Us :-
												</div>
												<div class="contact-right mail">
													<a href="mailto:info@travelogini.com"><?php echo $contact->configurationEmail; ?></a>
												</div>
											</li>
										</ul>
									</div>
									<div class="google-map-outer">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1749.8724959972976!2d77.07798795000002!3d28.69727390000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d042195308135%3A0x8e580402488a9c2!2sIndira+Gandhi+Park%2C+Sultanpuri%2C+New+Delhi%2C+Delhi+110086!5e0!3m2!1sen!2sin!4v1423044678310"  height="250" frameborder="0" style="border:0"></iframe>
									</div>
								</div>
								
								<!-- </form> -->
							
									
			</div>
		</div>
	</div>
	<!-- Create Account Part End Here -->