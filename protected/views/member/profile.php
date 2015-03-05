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
				<div class="travelogini-heading">My Account</div>
				<div class="about-right"><?php echo CHtml::image($varBaseUrl . "/images/design-right.png"); ?> </div>
			</div>	

			<!-- Setting up flash success/error message -->
			<div class="clear"></div>
			<div class="breadcrumbs" id="breadcrumbs-msg">
				<?php  if( (Yii::app()->User->hasFlash('updateMemberSuccess')) || (Yii::app()->User->hasFlash('updateCustomerSuccess')) || (Yii::app()->User->hasFlash('deleteCustomerSuccess'))){ ?>
					<ul>
						<?php
							if(Yii::app()->User->getFlash('updateMemberSuccess'))
							{
								echo '<li><span class="readcrum_without_link_success">'.UPDATE_MEMBER_SUCCESS.'</li>';
							}else if(Yii::app()->User->getFlash('updateCustomerSuccess'))
							{
								echo '<li><span class="readcrum_without_link_success">'.UPDATE_CUSTOMER_SUCCESS.'</li>';
							}
						?>						
				      </ul>
				<?php } ?>
			</div>
			<!-- End of Setting up flash success/error message -->

			<div class="dashboard-outer">
				<div class="dashboard-menu">
						<ul><?php if((Yii::app()->user->userPlan) == '0'){ ?>
								<li><?php echo CHtml::link('dashboard',$varBaseUrl.'/member/dashboard',array('title'=>'dashboard','alt'=>'dashboard'));?></li>
								<li class="active"><?php echo CHtml::link('Profile',$varBaseUrl.'/member/profile',array('title'=>'profile','alt'=>'profile'));?></li>
								<li><a href="#">Bookings</a></li>
								<li><a href="#">eWallet</a></li>
							<?php }else { ?>
								<li><?php echo CHtml::link('dashboard',$varBaseUrl.'/member/dashboard',array('title'=>'dashboard','alt'=>'dashboard'));?></li>
								<li class="active"><?php echo CHtml::link('Profile',$varBaseUrl.'/member/profile',array('title'=>'profile','alt'=>'profile'));?></li>
								<li><a href="#">Bookings</a></li>
								<li><a href="#">eWallet</a></li>
								<li><a href="#">Service Request</a></li>
								<li><a href="#">Gift Card</a></li>
								<li><a href="#">Invite Friends</a></li>
							<?php } ?>
						</ul>
					</div>
				<div class="dashboard-heading">
					Update Profile
				</div>
				<div class="dashboard-profile">
					<?php if((Yii::app()->user->userPlan) == '0'){ ?>
					<div class="membership-plan-upgrade border-bottom-outer">
						<div class="city-membership-plan">
						<a href="#" class="upfrade-plan-btn">Upgrade Membership Plan</a>
							Current Membership Plan  - <span class="dashboard-plan-type">Free</span>									
						</div>
					</div>
					<?php } ?>
					<ul class="acc-login">
						<?php $form=$this->beginWidget('CActiveForm', array(
                						'id'=>'customer-form',
                						'action'=>'profile',
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
							<?php echo $form->textField($model,'customerFirstName',array('class'=>'half-input requiredField','placeholder'=>'First Name')); ?>	
							<?php echo $form->error($model, 'customerFirstName'); ?>
							<?php echo $form->textField($model,'customerLastName',array('class'=>'half-input requiredField','placeholder'=>'Last Name')); ?>	
							<?php echo $form->error($model, 'customerLastName'); ?>
							<?php echo $form->textField($model,'customerMobile',array('class'=>'half-input margin0 requiredField phoneField','placeholder'=>'Mobile')); ?>	
							<?php echo $form->error($model, 'customerMobile'); ?>
						</li>
						<li>
						<div class="half-input date-cal">
							<?php
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
								    'model' => $model,
								    'attribute' => 'customerDateOfBirth',
								    'options'=>array(
								        //'showAnim'=>'slide',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
								        'showOtherMonths'=>true,// Show Other month in jquery
								        'selectOtherMonths'=>true,// Select Other month in jquery
								    ),
								    'htmlOptions' => array(
								        'size' => '10',         // textField size
								        'maxlength' => '10',    // textField maxlength
								        'class' => 'requiredField',
								        //'changeMonth' =>  'true',
								        //'changeYear' =>  'true',
								    ),
								));
								?>
						</div>
						<?php echo $form->textField($model,'customerAddress',array('class'=>'onesecond-input margin0 requiredField','placeholder'=>'Address')); ?>	
						</li>
						<li>
						<div class="half-input">
							<div class="slecet-country">
								  <div class="half-half-input">
								<?php echo $form->error($model, 'customerCountry'); ?>
								  	<?php echo $form->dropDownList($model, 'customerCountry',CHtml::listData(Country::model()->findAll(), 'pkCountryID', 'countryName'),
																								array(
																									'empty'=>'- Select Country -',
																									'id'=>'customerCountry',
																									'class'=>'chosen-select half-input dropdown requiredField',
																									//'data-rule-required'=>'true',
																									'onchange' => 'getBstate(this.value)',
																								)
																							); ?>	
								  </div>
								  <div class="half-half-input margin0">
								  	<?php echo $form->dropDownList($model,'customerState',$model->stateOptions,
																	array(
																		'empty'=>'- Select State -',
																		'class'=>'chosen-select half-input dropdown requiredField',
																		//'data-rule-required'=>'true',
																		'id'=>'customerState',
																		'onchange' => 'getBcity(this.value)',
																		 
																	)); ?>	
								<?php echo $form->error($model, 'customerState'); ?>
								</div>
							</div>
						</div>
						<div class="half-input">
							<div class="slecet-country">
								  <div class="half-half-input">
								  	<?php echo $form->dropDownList($model,'customerCity',$model->cityOptions,array('empty'=>'- Select City -','class'=>'chosen-select half-input dropdown requiredField','id'=>'customerCity')); ?>	
								<?php echo $form->error($model, 'customerCity'); ?>
								  </div>
								  <div class="half-half-input margin0">
								  	<?php echo $form->textField($model,'customerZip',array('class'=>'requiredField zipField','data-rule-required'=>'true','placeholder'=>'Zip')); ?>	
								  </div>
							  </div>
						</div>
						</li>
						<li>
						<div class="form-heading">
						Change Password
						</div>
						</li>
						<li>
							<?php echo $form->passwordField($loginModel,'userPassword',array('class'=>'half-input passField','id'=>'passField','placeholder'=>'New Password')); ?>	
								<?php echo $form->error($loginModel, 'userPassword'); ?>
							<?php echo $form->passwordField($loginModel,'repassword',array('class'=>'half-input margin0 passField','placeholder'=>'Confirm Password','equalTo'=>'#passField')); ?>	
								<?php echo $form->error($loginModel, 'repassword'); ?>
						</li>
						<li>
							<?php echo CHtml::checkBox('offer',($model->customerSpecialOfferSubscription)?true:false,array('class'=>'radio','value' => 1)); ?>
							<label for="remember"> Subscribe for special offers </label>
						</li>
						<li class="dashboard-btns">
							<div class="cntr-btn-outer">
								<div class="login-btn submit-btn">
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