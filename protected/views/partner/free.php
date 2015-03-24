<?php
    $varBaseUrl = Yii::app()->baseUrl;
    $data = array();
    $data['mascots'] = Mascots::model()->findAllByAttributes(array('mascotStatus'=>'1'));


    $city->stateOptions = CHtml::listData(State::model()->findAll('fkCountryID=:fkCountryID',array(':fkCountryID'=>$city->cityPartnerCountry)),'pkStateID', 'stateName');
	$city->cityOptions = CHtml::listData(City::model()->findAll('fkStateID=:fkStateID',array(':fkStateID'=>$city->cityPartnerState)),'pkCityID', 'cityName');


	$property->stateOptions = CHtml::listData(State::model()->findAll('fkCountryID=:fkCountryID',array(':fkCountryID'=>$property->propertyPartnerCountry)),'pkStateID', 'stateName');
	$property->cityOptions = CHtml::listData(City::model()->findAll('fkStateID=:fkStateID',array(':fkStateID'=>$property->propertyPartnerState)),'pkCityID', 'cityName');
?>
<!-- Create Account Part Start From Here -->
	<div class="container">
		<div class="full-box">

		<div class="member-create-account">
			<div class="about-travelogini">
				<div class="about-left"><?php echo CHtml::image($varBaseUrl . "/images/design-left.png"); ?></div>
				<div class="travelogini-heading">Create Account</div>
				<div class="about-right"><?php echo CHtml::image($varBaseUrl . "/images/design-right.png"); ?></div>
			</div>
			<div class="signup-form">
				<div class="partners-choice"> Register as</div>
				<div class="partners-outer">
					<div class="partner-name">City Partner</div>
					<div class="partner-name">Property Partner</div>
				</div>
			
		<div class="register-form-outer">
			<div class="register-form-inner">
			<div class="form-heading">Personal Details</div>
			<?php 
				$form = $this->beginWidget('CActiveForm', array(
                            'id' => 'city-partner-free-signup-form',
                            'action'=>'../cityPartner/signup/free',
                            'enableAjaxValidation' => false,
                            //'enableClientValidation'=>true,
                            /*'clientOptions'=>array(
						      'validateOnSubmit'=>true,
						     ),*/
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
					<div  class="half-input"><?php echo $form->textField($city,'cityPartnerFirstName',array('class'=>'requiredField','placeholder'=>'First Name'));?>
					<?php echo $form->error($city,'cityPartnerFirstName'); ?></div>
					<div  class="half-input"><?php echo $form->textField($city,'cityPartnerLastName',array('class'=>'requiredField','placeholder'=>'Last Name'));?>
					<?php echo $form->error($city,'cityPartnerLastName'); ?></div>
					<div  class="half-input margin0"><?php echo $form->textField($loginModel,'userName',array('class'=>'requiredField','placeholder'=>'Username'));?>
					<?php echo $form->error($loginModel,'userName'); ?><div id='username'> </div></div>
				</li>
				<li>
					<div  class="half-input"><?php echo $form->textField($loginModel,'userEmail',array('class'=>'requiredField emailField','placeholder'=>'Email'));?>
					<?php echo $form->error($loginModel,'userEmail'); ?><div id='useremail'> </div></div>
					<div  class="half-input"><?php echo $form->passwordField($loginModel,'userPassword',array('class'=>'passField requiredField','id'=>'passField','placeholder'=>'Password'));?>
					<?php echo $form->error($loginModel,'userPassword'); ?></div>
					<div  class="half-input margin0"><?php echo $form->passwordField($loginModel,'repassword',array('class'=>'passField requiredField','placeholder'=>'Conform Password','equalTo'=>'#passField'));?>
					<?php echo $form->error($loginModel,'repassword'); ?></div>
				</li>
				<li>
					<div  class="half-input"><?php echo $form->textField($city,'cityPartnerBusinessName',array('class'=>'requiredField','placeholder'=>'Business Name'));?>
					<?php echo $form->error($city,'cityPartnerBusinessName'); ?></div>
					<div  class="half-input"><?php echo $form->textField($city,'cityPartnerMobile',array('class'=>'requiredField phoneField','placeholder'=>'Mobile'));?>
					<?php echo $form->error($city,'cityPartnerMobile'); ?></div>
					<!-- <input class="half-input" type="text" name="businessname" value="" placeholder="Business name" />
					<input class="half-input" type="text" name="contactnumber" value="" placeholder="Contact Number" /> -->
					<div class="half-input date-cal margin0">
						<?php
								$this->widget('zii.widgets.jui.CJuiDatePicker', array(
								    'model' => $city,
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
								        'placeholder' => 'Data of Birth',
								        //'changeMonth' =>  'true',
								        //'changeYear' =>  'true',
								    ),
								));
								 echo $form->error($city, 'cityPartnerDateOfBirth');
								?>
						<!-- <input id="datepicker"  type="text" name="dob" value="" placeholder="Date Of Borth" /> -->
					</div>
				</li>
				<li>
					<div  class="half-input"><?php echo $form->textField($city,'cityPartnerAddress',array('class'=>'requiredField','placeholder'=>'Address'));?>
					<?php echo $form->error($city,'cityPartnerAddress'); ?></div>
					<div class="half-input">
						<div class="slecet-country">
							  <div class="half-half-input">								
								  	<?php echo $form->dropDownList($city, 'cityPartnerCountry',CHtml::listData(Country::model()->findAll(), 'pkCountryID', 'countryName'),
																								array(
																									'empty'=>'- Select Country -',
																									'id'=>'cityPartnerCountry',
																									'class'=>'chosen-select half-input dropdown requiredField',
																									'data-rule-required'=>'true',
																									'onchange' => 'getBstate(this.value)',
																								)
																							); ?>
									<?php echo $form->error($city, 'cityPartnerCountry'); ?>	
								  </div>
							  <div class="half-half-input margin0">
								  	<?php echo $form->dropDownList($city,'cityPartnerState',$city->stateOptions,
																	array(
																		'empty'=>'- Select State -',
																		'class'=>'chosen-select half-input dropdown requiredField',
																		//'data-rule-required'=>'true',
																		'id'=>'customerState',
																		'onchange' => 'getBcity(this.value)',
																		 
																	)); ?>	
								<?php echo $form->error($city, 'cityPartnerState'); ?>
								</div>
						  </div>
					</div>
					<div class="half-input margin0">
						<div class="slecet-country">
							  <div class="half-half-input">
								  	<?php echo $form->dropDownList($city,'cityPartnerCity',$city->cityOptions,array('empty'=>'- Select City -','class'=>'chosen-select half-input dropdown requiredField','id'=>'customerCity')); ?>	
								<?php echo $form->error($city, 'cityPartnerCity'); ?>
							  </div>
							  <div class="half-half-input margin0">
									<?php echo $form->textField($city,'cityPartnerZip',array('class'=>'requiredField zipField','data-rule-required'=>'true','placeholder'=>'Zip')); ?>	
								  	<?php echo $form->error($city, 'cityPartnerZip'); ?>
							  </div>
						  </div>
					</div>
					<!-- <input class="half-input margin0" type="text" name="area" value="" placeholder="Area" /> -->
				</li>
				<li>
					<div class="prefered-method"> Preferred Contact Method </div>
					<div class="checkbox-outer">
						<?php echo $form->checkBoxList($city, 'cityPartnerContactMethod', array("1" => "Mobile", "2" => "Email"), array('separator' => '', 'id' => 'cityPartnerContactMethod','class'=>'radio')); ?>
						<?php echo $form->error($city, 'cityPartnerContactMethod'); ?>
					</div>
					<div class="contact-error"></div>
				</li>
				<li>
					<div class="form-heading">Area of Operation</div>
				</li>
				<li>
					<div class="half-input">
						<div class="slecet-country">
							  <div class="half-half-input">
							  	<?php echo $form->dropDownList($city, 'cityPartnerOperationCountry',CHtml::listData(Country::model()->findAll(), 'pkCountryID', 'countryName'),
																								array(
																									'empty'=>'- Select Country -',
																									'id'=>'cityPartnerOperationCountry',
																									'class'=>'chosen-select half-input dropdown requiredField',
																									'data-rule-required'=>'true',
																									'onchange' => 'getOstate(this.value)',
																								)
																							); ?>
								<?php echo $form->error($city, 'cityPartnerOperationCountry'); ?>
							  </div>
							  <div class="half-half-input margin0">
							  <?php echo $form->dropDownList($city,'cityPartnerOperationState',$city->stateOptions,
																	array(
																		'empty'=>'- Select State -',
																		'class'=>'chosen-select half-input dropdown requiredField',
																		//'data-rule-required'=>'true',
																		'id'=>'opertationState',
																		'onchange' => 'getOcity(this.value)',
																		 
																	)); ?>	
								<?php echo $form->error($city, 'cityPartnerOperationState'); ?>
							  </div>
						  </div>
					</div>
					<div class="half-input">
						<div class="slecet-country">
							  <div class="half-half-input">
								  	<?php echo $form->dropDownList($city,'cityPartnerOperationCity',$city->cityOptions,array('empty'=>'- Select City -','class'=>'chosen-select half-input dropdown requiredField','id'=>'operationCity')); ?>	
								<?php echo $form->error($city, 'cityPartnerOperationCity'); ?>
							  </div>
							  <div class="half-half-input margin0">
							  	<?php echo $form->textField($city,'cityPartnerOperationArea',array('class'=>'requiredField','data-rule-required'=>'true','placeholder'=>'Operational Area')); ?>	
								  	<?php echo $form->error($city, 'cityPartnerOperationArea'); ?>
								<!-- <input type="text" name="zip" value="" placeholder="Zip" /> -->
							  </div>
						  </div>
					</div>
					<!-- <input class="half-input margin0" type="text" name="area" value="" placeholder="Area" /> -->
				</li>
				<li>
					<?php echo CHtml::checkBox('terms','',array('class'=>'radio', 'id'=>'terms')); ?>
					<label for="remember"> I agree to terms and conditions </label>
					<div class="terms-error"></div>
				</li>
				<li>
					<div class="cntr-btn-outer">
						<div class="login-btn submit-btn">
							<?php echo CHtml::submitButton('Signup',array('class' => 'register'));?>
							<!-- <input type="submit" name="submit" value="Create Account" /> -->
						</div>						
					</div>
				</li>
				<?php $this->endWidget();?>
			</ul>
			</div>
			
			<div class="register-form-inner">
			<div class="form-heading">Personal Details</div>
			<ul class="acc-login">
				<li>
					<input class="half-input" type="text" name="firstname" value="" placeholder="First name" />
					<input class="half-input" type="text" name="lastname" value="" placeholder="Last Name" />
					<input class="half-input margin0" type="text" name="nickname" value="" placeholder="Nick Name" />
				</li>
				<li>
					<input class="half-input" type="text" name="email" value="" placeholder="Email ID" />
					<input class="half-input" type="password" name="password" value="" placeholder="Password" />
					<input class="half-input margin0" type="password" name="confirmpass" value="" placeholder="Confirm password" />
				</li>
				<li>
					<div class="prefered-method"> Preferred Contact Method </div>
					<div class="checkbox-outer">
						<input type="checkbox"  class="radio">
						<label for="remember"> Phone </label>
					</div>
					<div class="checkbox-outer">
						<input type="checkbox"  class="radio">
						<label for="remember"> Email </label>
					</div>
				</li>
				<li>
					<input class="half-input" type="text" name="contactnumber" value="" placeholder="Contact Number" />
					<div class="half-input date-cal">
						<input id="datepicker"  type="text" name="dob" value="" placeholder="Date Of Borth" />
					</div>
					<input class="half-input margin0" type="text" name="businessname" value="" placeholder="Business Name" />
				</li>
				<li>
					<input class="half-input" type="text" name="email" value="" placeholder="Website" />
					<div class="half-input">
						<div class="slecet-country">
							  <div class="half-half-input">
							  <select data-placeholder="Country" class="chosen-select half-input">
								<option value="select"></option>
								<option value="United States">United States</option>
								<option value="United Kingdom">United Kingdom</option>
								<option value="Afghanistan">Afghanistan</option>
								<option value="Aland Islands">Aland Islands</option>											
							  </select>
							  </div>
							  <div class="half-half-input margin0">
							  <select data-placeholder="State" class="chosen-select half-input" >
								<option value="select"></option>								
								<option value="United States">United States</option>
								<option value="United Kingdom">United Kingdom</option>
								<option value="Afghanistan">Afghanistan</option>
								<option value="Aland Islands">Aland Islands</option>
							  </select>
							  </div>
						  </div>
					</div>
					<div class="half-input margin0">
						<div class="slecet-country">
							  <div class="half-half-input">
							  <select data-placeholder="City" class="chosen-select half-input">
								<option value="select"></option>
								<option value="United States">United States</option>
								<option value="United Kingdom">United Kingdom</option>
								<option value="Afghanistan">Afghanistan</option>
								<option value="Aland Islands">Aland Islands</option>											
							  </select>
							  </div>
							  <div class="half-half-input margin0">
								<input type="text" name="zip" value="" placeholder="Zip" />
							  </div>
						  </div>
					</div>
				</li>
				
				<li>
					<input class="half-input" type="text" name="email" value="" placeholder="Area" />
				</li>
				<li>
					<input type="checkbox"  class="radio">
					<label for="remember"> I agree to terms and conditions </label>
				</li>
				<li>
					<div class="cntr-btn-outer">
						<div class="btn-outer">
							<div class="login-btn submit-btn">
								<input type="submit" name="submit" value="Create Account" />
							</div>
						</div>
					</div>
				</li>
			</ul>
			</div>
			</div>
			</div>
		</div>

	</div>
</div>

<script type="text/javascript">
$.validator.setDefaults({ ignore: ":hidden:not(select)" });
$("#UsersLogin_userName").blur(function(){
	var uname = $("#UsersLogin_userName").val();
	$.ajax({
	    type: "POST",
	    url: "../partner/checkUserName",
	    data: {
	        uname: uname
	    },
	    success: function(data){
	    	if(data == 'success'){
	    		$("#username").html('');
	    	}
	    	else
	    	{
	    		 $("#username").html("Username already Exist").css("color", "red").css("fontSize", "14px").show();
	    	}
	    }
	});
});

$("#UsersLogin_userEmail").blur(function(){
	var uemail = $("#UsersLogin_userEmail").val();
	$.ajax({
	    type: "POST",
	    url: "../partner/checkUserEmail",
	    data: {
	        uemail: uemail
	    },
	    success: function(data){
	    	if(data == 'success'){
	    		$("#useremail").html('');
	    	}
	    	else
	    	{
	    		$("#useremail").html("Email already Exist").css("color", "red").css("fontSize", "14px").show();
	    	}
	    }
	});
});

</script>