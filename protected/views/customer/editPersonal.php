	<div class="breadcrumb">
		<div class="layout">
			<ul>
				<li>
					<?php echo CHtml::link('Home',array('dashboard')); ?>&raquo;
				</li>
				<li class="active">
					<?php echo CHtml::link('Edit Details',array('customer/update#')); ?>
				</li>
			</ul>
		</div>
	</div>
	<div class="body_container edit_details">
		<div class="layout">
			<div class="edit_personal_details">
                <?php $form=$this->beginWidget('CActiveForm', array(
                						'id'=>'customer-form',
                						'action'=>'#',
                						'enableAjaxValidation'=>false,
                						'htmlOptions'=>array(
                							'class'=>'form-wizard form-horizontal form-bordered form-validate',
                							'enctype' => 'multipart/form-data',
                						),										
                				));
                ?>            
				<h3 class="head">Edit Personal Details</h3>
				<div class="step" id="firstStep">
				<div class="boxes">
					<div class="requiredheading">
						<h3><a href="#" class="texth">Personal Information</a><span class="req">* Required Fields</span></h3>
					</div>
					<div class="pdeatails_box">
						<div class="simplebox">
							<div class="fieldbox">
								<label><span>*</span>First Name</label>
								<?php echo $form->textField($model,'customerFirstName',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'customerFirstName'); ?>
							</div>
							<div class="fieldbox">
								<label><span>*</span>Last Name</label>
								<?php echo $form->textField($model,'customerLastName',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'customerLastName'); ?>
							</div>
							<div class="fieldbox">
								<label><span>*</span>Email Address</label>
								<?php echo $form->textField($model,'userEmail',array('class'=>'input-xlarge','data-rule-required'=>'true','data-rule-email'=>'true')); ?>	
								<?php echo $form->error($model, 'userEmail'); ?>

							</div>
							<div class="fieldbox">
								<label><span>*</span>Gender</label>
                                <?php echo $form->dropDownList($model,'customerGender',array('Male'=>'Male','Female'=>'Female'),array('empty'=>'- Select Gender -','class'=>'select-cat','input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'customerGender'); ?>
							</div>
							<div class="fieldbox">
                                <label><span>*</span> Date Of Birth</label>
								<?php
								      $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                                        	'model'=>$model,
                                            'name'=> "Users[customerDateOfBirth]",
                                            'id' => 'Users_customerDateOfBirth',
                                            'value' => $model->customerDateOfBirth,
                                            'attribute' => 'customerDateOfBirth',
                                            'options'=>array(
                                                'showAnim'=>'fold',
                                                'dateFormat'=>'dd-mm-yy',//Date format 'mm/dd/yy','yy-mm-dd','d M, y','d MM,
                                                'changeMonth'=>true,
                                                'changeYear'=>true,
                                                'yearRange'=>'1900:2099',
                                                'maxDate' => 'today',      // maximum date
                                                //'setDate' => $model->customerDateOfBirth,
                                                //'altFormat' => 'dd-mm-yy',
                                            ),  
                                        ));

                                ?>
                                <?php echo $form->error($model, 'customerDateOfBirth'); ?>
							</div>
							<div class="fieldbox">
								<label><span>*</span>Mobile</label>
								<?php echo $form->textField($model,'customerMobile',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'customerMobile'); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="boxes">
					<div class="requiredheading">
						<h3><a href="#" class="texth">Login Information</a></h3>
					</div>
					<div class="pdeatails_box">
						<div class="simplebox">
							<div class="fieldbox">
								<label><span></span>Password</label>
								<?php echo $form->passwordField($loginModel,'userPassword',array('class'=>'input-xlarge')); ?>	
								<?php echo $form->error($loginModel, 'userPassword'); ?>
							</div>
							<div class="fieldbox">
								<label><span></span>Confirm Password</label>
								<?php echo $form->passwordField($loginModel,'repassword',array('class'=>'input-xlarge')); ?>	
								<?php echo $form->error($loginModel, 'repassword'); ?>
							</div>
						</div>
					</div>

				</div>
				</div>
				<div class="step" id="secondStep">
							<div class="edit_billing_details">
								<h3 class="head">Edit Billing Details</h3>

								<div class="boxes">
									<div class="requiredheading">
										<h3><a href="#" class="texth">Billing Address</a><span class="req">* Required Fields</span></h3>

									</div>
									<div class="pdeatails_box">
										<div class="simplebox">
											<div class="fieldbox">
												<label><span>*</span>Address Line 1</label>
				                                <?php echo $form->textField($model,'customerAddress',array('class'=>'input-xlarge','data-rule-required'=>'true','id'=>'customerAddress')); ?>	
				                                <?php echo $form->error($model, 'customerAddress'); ?>
											</div>
											<div class="fieldbox">
												<label><span>*</span>Address Line 1</label>
												<?php echo $form->textField($model,'customerAddress2',array('class'=>'input-xlarge','data-rule-required'=>'true','id'=>'customerAddress2')); ?>	
												<?php echo $form->error($model, 'customerAddress2'); ?>
											</div>
											<div class="fieldbox">
												<label><span>*</span>Phone</label>
												<?php echo $form->textField($model,'userBillingPhone',array('class'=>'input-xlarge','data-rule-required'=>'true','id'=>'userBillingPhone')); ?>	
												<?php echo $form->error($model, 'userBillingPhone'); ?>
											</div>											
											<div class="fieldbox">
												<label><span>*</span>Country</label>
												<div class="countryclass">
														<?php echo $form->dropDownList($model, 'customerCountry',CHtml::listData(Country::model()->findAll(), 'pkCountryID', 'countryName'),
																								array(
																									'empty'=>'- Select Country -',
																									'id'=>'customerCountry',
																									'class'=>'input-xlarge select2-me countryclass select-cat',
																									'data-rule-required'=>'true',
																									'onchange' => 'getBstate(this.value)',
																								)
																							); ?>	
														<?php echo $form->error($model, 'customerCountry'); ?>
												</div>
											</div>

											<div class="fieldbox">
												<label><span>*</span>State</label>
											
												<div class="countryclass">
													<?php echo $form->dropDownList($model,'customerState',$model->stateOptions,
																						array(
																							'empty'=>'- Select State -',
																							'class'=>'input-xlarge select2-me countryclass select-cat',
																							'data-rule-required'=>'true',
																							'id'=>'customerState',
																							'onchange' => 'getBcity(this.value)',
																						)); ?>	
													<?php echo $form->error($model, 'customerState'); ?>
													
												</div>
											</div>

											<div class="fieldbox">
												<label><span>*</span>City</label>
											
												<div class="countryclass">
													<?php echo $form->dropDownList($model,'customerCity',$model->cityOptions,array('empty'=>'- Select City -','class'=>'input-xlarge select2-me countryclass  select-cat','data-rule-required'=>'true','id'=>'customerCity')); ?>	
													<?php echo $form->error($model, 'customerCity'); ?>
												</div>
											</div>

											<div class="fieldbox">
												<label><span>*</span>Postal Code or Zip Code</label>
												<?php echo $form->textField($model,'customerZip',array('class'=>'input-xlarge','data-rule-required'=>'true','id'=>'customerZip')); ?>	
												<?php echo $form->error($model, 'customerZip'); ?>
											</div>								
										</div>

									</div>

								</div>
							

								<div class="boxes">
									<div class="requiredheading">
										<h3><a href="#" class="texth">Shipping Address</a><span class="req">* Required Fields</span></h3>

									</div>
									<div class="pdeatails_box">
										
										<div class="simplebox">
											<div class="fieldbox">
											
											<label class="samecheckbox"> <input type="checkbox" name="copyAddress" id="copyAddress" onclick="shipSameAsBill();" /> Same as billing address</label>
											</div>	
											
										</div>
										<div class="simplebox">
											<div class="fieldbox">
												<label><span>*</span>Address Line 1</label>
				                                <?php echo $form->textField($model,'userShippingAddress1',array('class'=>'input-xlarge','data-rule-required'=>'true','id'=>'userShippingAddress1')); ?>	
				                                <?php echo $form->error($model, 'userShippingAddress1'); ?>
											</div>
											<div class="fieldbox">
												<label><span>*</span>Address Line 1</label>
												<?php echo $form->textField($model,'userShippingAddress2',array('class'=>'input-xlarge','data-rule-required'=>'true','id'=>'userShippingAddress2')); ?>	
												<?php echo $form->error($model, 'userShippingAddress2'); ?>
											</div>
											<div class="fieldbox">
												<label><span>*</span>Phone</label>
												<?php echo $form->textField($model,'userShippingPhone',array('class'=>'input-xlarge','data-rule-required'=>'true','id'=>'userShippingPhone')); ?>	
												<?php echo $form->error($model, 'userShippingPhone'); ?>
											</div>
											<div class="fieldbox">
												<label><span>*</span>Country</label>
											
											<div class="countryclass">
												<?php echo $form->dropDownList($model, 'userShippingCountry',CHtml::listData(Country::model()->findAll(), 'pkCountryID', 'countryName'),
																						array(
																							'empty'=>'- Select Country -',
																							'id'=>'userShippingCountry',
																							'class'=>'input-xlarge select2-me countryclass select-cat',
																							'data-rule-required'=>'true',
																							'onchange' => 'getSstate(this.value)',
																						)
																				); ?>	
												<?php echo $form->error($model, 'userShippingCountry'); ?>
												
											</div>
											</div>

											<div class="fieldbox">
												<label><span>*</span>State</label>
												<div class="countryclass">
														<?php echo $form->dropDownList($model,'userShippingState',$model->shippingStateOptions,
																							array(
																								'empty'=>'- Select State -',
																								'class'=>'input-xlarge select2-me countryclass select-cat',
																								'data-rule-required'=>'true',
																								'id'=>'userShippingState',
																								'onchange' => 'getScity(this.value)',
																							)); ?>	
														<?php echo $form->error($model, 'userShippingState'); ?>
												</div>
											</div>

											<div class="fieldbox">
												<label><span>*</span>City</label>
												<div class="countryclass">
													<?php echo $form->dropDownList($model,'userShippingCity',$model->shippingCityOptions,array('empty'=>'- Select City -','class'=>'input-xlarge select2-me countryclass select-cat','data-rule-required'=>'true','id'=>'userShippingCity')); ?>	
													<?php echo $form->error($model, 'userShippingCity'); ?>
												</div>
											</div>

											<div class="fieldbox">
												<label><span>*</span>Postal Code or Zip Code</label>
												<?php echo $form->textField($model,'userShippingZip',array('class'=>'input-xlarge','data-rule-required'=>'true','id'=>'userShippingZip')); ?>	
												<?php echo $form->error($model, 'userShippingZip'); ?>
											</div>
										</div>

									</div>

								</div>
							
									<div class="simplebox">
									<!-- <a class="nextbutton" href="#">Save</a> -->

								</div>
							</div>
				<div class="simplebox">
					
					<?php //echo CHtml::link('Next',Yii::app()->baseUrl.'/customer/updateaddress',array('class'=>'nextbutton'));?>
					<?php //echo CHtml::submitButton('Next',array('class'=>'nextbutton'));?>

				</div>
			</div>
				<!-- <div class="form-actions">
						<?php //echo CHtml::resetButton('Back',array('class'=>'btn','id'=>'back')); ?>  
						<?php //echo CHtml::submitButton('Submit',array('class'=>'btn btn-primary','id'=>'next')); ?>
						<?php //echo CHtml::link('Cancel',array('/admin/customers'),array('class'=>'btn')); ?>  
				</div> -->
				<?php echo CHtml::submitButton('Submit',array('class'=>'nextbutton','id'=>'next')); ?>
				<?php $this->endWidget();?>

		</div>
	</div>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#casdopyAddress').click(function () {
		    //$("#txtAge").toggle(this.checked);
		    alert('select');
		});
		//$("#copyAddress").attr("checked") ? alert("Checked") : alert("Unchecked");
		$('#next').click(function(e){
			e.preventDefault();
			if($(this).val() == 'Submit'){
				$('#firstStep input[type="text"], #firstStep select').attr('disable',false);
				$('#customer-form').submit();
			}
		});
	});
	</script>