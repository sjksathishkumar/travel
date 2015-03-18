<?php
    $varBaseUrl = Yii::app()->baseUrl;
    $data = array();
    $data['mascots'] = Mascots::model()->findAllByAttributes(array('mascotStatus'=>'1'));
?>
<!-- Create Account Part Start From Here -->
<div class="container">
	<div class="full-box">
		<div class="membership-plan-outer">
			<div class="left-box-services">
				<div class="services-outer">
					<ul>
						<li>						
							<div class="service-img">
								<?php echo CHtml::image($varBaseUrl.UPLOAD_FOLDER.MASCOTS_FOLDER.$data['mascots']['0']['mascotImage'],$data['mascots']['0']['mascotAltTag'],array('width'=>139,'height'=>139)); ?>
							</div>
							<div class="service-box">
								<a href="" class="service-title">
									<?php echo $data['mascots']['0']['mascotName']; ?>                                                                
								</a>
								<div class="title-arrow"></div>	
							</div>
						</li>
						<li>
							<div class="service-img">
								<?php echo CHtml::image($varBaseUrl.UPLOAD_FOLDER.MASCOTS_FOLDER.$data['mascots']['1']['mascotImage'],$data['mascots']['1']['mascotAltTag'],array('width'=>139,'height'=>139)); ?>
							</div>
							<div class="service-box">
								<a href=""  class="service-title">
									<?php echo $data['mascots']['1']['mascotName']; ?>                                                             
								</a>
								<div class="title-arrow"></div>	
							</div>
						</li>
						<li>
							<div class="service-img">
								<?php echo CHtml::image($varBaseUrl.UPLOAD_FOLDER.MASCOTS_FOLDER.$data['mascots']['2']['mascotImage'],$data['mascots']['2']['mascotAltTag'],array('width'=>139,'height'=>139)); ?>
							</div>
							<div class="service-box">
								<a href=""  class="service-title">
									<?php echo $data['mascots']['2']['mascotName']; ?>                                                                  
								</a>
								<div class="title-arrow"></div>	
							</div>
						</li>
						<li>
							<div class="service-img">
								<?php echo CHtml::image($varBaseUrl.UPLOAD_FOLDER.MASCOTS_FOLDER.$data['mascots']['3']['mascotImage'],$data['mascots']['3']['mascotAltTag'],array('width'=>139,'height'=>139)); ?>
							</div>
							<div class="service-box">
								<a href=""  class="service-title">
									<?php echo $data['mascots']['3']['mascotName']; ?>                                                                    
								</a>
								<div class="title-arrow"></div>	
							</div>
						</li>
						<li>
							<div class="service-img">
								<?php echo CHtml::image($varBaseUrl.UPLOAD_FOLDER.MASCOTS_FOLDER.$data['mascots']['4']['mascotImage'],$data['mascots']['4']['mascotAltTag'],array('width'=>166,'height'=>166)); ?>
							</div>
							<div class="service-box">
								<a href=""  class="service-title">
									<?php echo $data['mascots']['4']['mascotName']; ?>
								</a>
								<div class="title-arrow"></div>	
							</div>
						</li>
					</ul>
				</div>
			</div>

			<div class="member-create-account">
				<div class="about-travelogini">
					<div class="about-left"><?php echo CHtml::image($varBaseUrl . "/images/design-left.png"); ?></div>
					<div class="travelogini-heading">Profile</div>
					<div class="about-right"><?php echo CHtml::image($varBaseUrl . "/images/design-right.png"); ?> </div>
				</div>	
				<?php  
					if( Yii::app()->User->hasFlash('updateCityPartnerSuccess')){ 
						if(Yii::app()->User->getFlash('updateCityPartnerSuccess'))
						{
							echo '<div class="suc-msg">'.UPDATE_PARTNER_SUCCESS.'</div>';
						}
				 	} 
				?>
				<div class="dashboard-outer">
				<div class="dashboard-menu-outerbox">
					<div class="dashboard-menu">
						<ul>
							<li><a href="../dashboard/index">Dashboard</a></li>
							<li class="active"><a href="../profile/index">Profile</a></li>
							<li><a href="#">Properties</a></li>
							<li><a href="#">Bookings</a></li>
							<li><a href="#">eWallet</a></li>	
							<li><a href="#">Special Deals</a></li>	
							<li><a href="#">Service Request</a></li>
							<li><a href="#">Report</a></li>
						</ul>
					</div>
					</div>
					<div class="dashboard-heading">
								Update Profile
							</div>
							<div class="dashboard-profile">
								<?php if((Yii::app()->user->cityPartnerSubscriptionPlan) == '1' ){ ?>
								<div class="membership-plan-upgrade border-bottom-outer">
									<div class="city-membership-plan">
										<?php echo CHtml::link('Upgrade Membership Plan', array('/payment/paymentPage', 'memberID'=>$model->pkCityPartnerID),array('class' => 'upfrade-plan-btn')); ?>
									<!-- <a href="#" class="upfrade-plan-btn">Upgrade Membership Plan</a> -->
										Current Membership Plan  - <span class="dashboard-plan-type">Free</span>									
									</div>
								</div>
								<?php }else if((Yii::app()->user->cityPartnerSubscriptionPlan) == '2') { ?>
								<div class="membership-plan-upgrade border-bottom-outer">
									<div class="city-membership-plan">
										<?php echo CHtml::link('Upgrade Membership Plan', array('/payment/paymentPage', 'memberID'=>$model->pkCityPartnerID),array('class' => 'upfrade-plan-btn')); ?>
									<!-- <a href="#" class="upfrade-plan-btn">Upgrade Membership Plan</a> -->
										Current Membership Plan  - <span class="dashboard-plan-type">Basic</span>									
									</div>
								</div>
								<?php }else { ?>
									<div class="membership-plan-upgrade border-bottom-outer">
									<div class="city-membership-plan">
																		
									</div>
								</div>
								<?php } ?>
							<ul class="acc-login">
								<?php $form=$this->beginWidget('CActiveForm', array(
                						'id'=>'city-partner-form',
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
									<div class="half-input">
										<?php echo $form->textField($model,'cityPartnerFirstName',array('class'=>'requiredField','placeholder'=>'First Name')); ?>	
										<?php echo $form->error($model, 'cityPartnerFirstName'); ?>
									</div>
									<div class="half-input">
										<?php echo $form->textField($model,'cityPartnerLastName',array('class'=>'requiredField','placeholder'=>'Last Name')); ?>	
										<?php echo $form->error($model, 'cityPartnerLastName'); ?>
									</div>
									<div class="half-input margin0">	
										<?php echo $form->textField($model,'cityPartnerMobile',array('class'=>'requiredField phoneField','placeholder'=>'Mobile')); ?>	
										<?php echo $form->error($model, 'cityPartnerMobile'); ?>
									</div>
									<!-- <input class="half-input" type="text" name="firstname" value="" placeholder="First name" />
									<input class="half-input" type="text" name="lastname" value="" placeholder="Last Name" />
									<input class="half-input margin0" type="text" name="contactnumber" value="" placeholder="Contact Number" /> -->
								</li>
								<li>
									<div class="half-input date-cal">
										<?php
											$this->widget('zii.widgets.jui.CJuiDatePicker', array(
											    'model' => $model,
											    'attribute' => 'cityPartnerDateOfBirth',
											    'options'=>array(
											        //'showAnim'=>'slide',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
											        'showAnim' => 'fold',
											        //'showOtherMonths'=>'true',// Show Other month in jquery
											        //'selectOtherMonths'=>'true',// Select Other month in jquery
											        'changeMonth' =>  'true',
											        'changeYear' =>  'true',
											        'yearRange'=>'1900:2099',
											        'maxDate' => 'today',
											    ),
											    'htmlOptions' => array(
											        'size' => '10',         // textField size
											        'maxlength' => '10',    // textField maxlength
											        'class' => 'requiredField',
											        //'changeMonth' =>  'true',
											        //'changeYear' =>  'true',
											    ),
											));
											 echo $form->error($model, 'cityPartnerDateOfBirth');
											?>
									</div>
									<!-- <div class="half-input date-cal">
										<input id="datepicker"  type="text" name="dob" value="" placeholder="Date Of Borth" />
									</div> -->
									<div class="half-input">
										<?php echo $form->textField($model,'cityPartnerBusinessName',array('class'=>'requiredField','placeholder'=>'BUsiness Name')); ?>	
										<?php echo $form->error($model, 'cityPartnerBusinessName'); ?>
									</div>
									<!-- <input class="half-input" type="text" name="businessname" value="" placeholder="Business Name" /> -->
									<div class="half-input margin0">
										<div class="slecet-country">
											  <div class="half-half-input">								
											  	<?php echo $form->dropDownList($model, 'cityPartnerCountry',CHtml::listData(Country::model()->findAll(), 'pkCountryID', 'countryName'),
																											array(
																												'empty'=>'- Select Country -',
																												'id'=>'cityPartnerCountry',
																												'class'=>'chosen-select half-input dropdown requiredField',
																												'data-rule-required'=>'true',
																												'onchange' => 'getPstate(this.value)',
																											)
																										); ?>
																										<?php echo $form->error($model, 'cityPartnerCountry'); ?>	
											  </div>
											  <div class="half-half-input margin0">
											  <?php echo $form->dropDownList($model,'cityPartnerState',$model->stateOptions,
																	array(
																		'empty'=>'- Select State -',
																		'class'=>'chosen-select half-input dropdown requiredField',
																		//'data-rule-required'=>'true',
																		'id'=>'partnerState',
																		'onchange' => 'getPcity(this.value)',
																		 
																	)); ?>	
												<?php echo $form->error($model, 'cityPartnerState'); ?>
											  </div>
										  </div>
									</div>
								</li>
							<li>
								<div class="half-input">
										<div class="slecet-country">
											  <div class="half-half-input">
											  <?php echo $form->dropDownList($model,'cityPartnerCity',$model->cityOptions,array('empty'=>'- Select City -','class'=>'chosen-select half-input dropdown requiredField','id'=>'partnerCity')); ?>	
											  <?php echo $form->error($model, 'cityPartnerCity'); ?>
											  </div>
											  <div class="half-half-input margin0">
												<?php echo $form->textField($model,'cityPartnerZip',array('class'=>'requiredField zipField','data-rule-required'=>'true','placeholder'=>'Zip')); ?>	
								  				<?php echo $form->error($model, 'cityPartnerZip'); ?>
											  </div>
										  </div>
									</div>
									<div class="onesecond-input margin0">
												<?php echo $form->textField($model,'cityPartnerAddress',array('class'=>'requiredField','data-rule-required'=>'true','placeholder'=>'Address')); ?>	
								  				<?php echo $form->error($model, 'cityPartnerAddress'); ?>
									</div>
							</li>
							<li>
								<div class="half-input">
									<?php echo $form->textField($model,'cityPartnerWebsite',array('class'=>'requiredField','placeholder'=>'Website')); ?>	
									<?php echo $form->error($model, 'cityPartnerWebsite'); ?>
								</div>
								<div class="half-input">								
											  	<?php echo $form->dropDownList($model,'cityPartnerContactMethod',
																	array(
																		'empty'=>'- Select Mode -',
																		'1' => 'Mobile',
																		'2' => 'E-Mail',
																		'3' => 'Both',
																	),
																	array('class' =>'chosen-select requiredField', 'id'=>'cityPartnerContactMethod')
																	); ?>
												<?php echo $form->error($model, 'cityPartnerContactMethod'); ?>	
								</div>
							</li>
							<li>
								<div class="form-heading">
									Change Password
								</div>
							</li>
							<li>
							<div class="half-input">
								<?php echo $form->passwordField($loginModel,'userPassword',array('class'=>'passField','id'=>'passField','placeholder'=>'New Password')); ?>	
								<?php echo $form->error($loginModel, 'userPassword'); ?>
							</div>
							<div class="half-input margin0">
								<?php echo $form->passwordField($loginModel,'repassword',array('class'=>'passField','placeholder'=>'Confirm Password','equalTo'=>'#passField')); ?>	
								<?php echo $form->error($loginModel, 'repassword'); ?>
							</div>
							</li>
							<li class="dashboard-btns">
								<div class="cntr-btn-outer">
									<div class="login-btn submit-btn m0">
										<?php echo CHtml::submitButton('Update'); ?>
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
</div>
<!-- Create Account Part End Here -->

<script type="text/javascript">
$.validator.setDefaults({ ignore: ":hidden:not(select)" });
$(".suc-msg").fadeOut(6000);
</script>