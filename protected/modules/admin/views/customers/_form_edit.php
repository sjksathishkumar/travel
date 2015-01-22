<div class="page-header">
    <div class="pull-left">
        <h1>Update Customer Details</h1>
    </div>
</div>
<div class="breadcrumbs">
    <ul>
        <li><?php echo CHtml::link('Home',array('/admin')); ?><i class="icon-angle-right"></i></li>
        <li><?php echo CHtml::link('Manage Customers',array('/admin/customers')); ?><i class="icon-angle-right"></i></li>
        <li><a href="#">Update Customers Details</a></li>
    </ul>
    <div class="close-bread"><a href="#"><i class="icon-remove"></i></a></div>
</div>
<div class="row-fluid">
	<div class="span12">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="icon-table"></i>
					Update Customer Details
				</h3>
			</div>
			<div class="box-content nopadding">
				<?php $form=$this->beginWidget('CActiveForm', array(
										'id'=>'customer-form',
										'enableAjaxValidation'=>false,
										'htmlOptions'=>array(
											'class'=>'form-wizard form-horizontal form-bordered form-validate',
											'enctype' => 'multipart/form-data',
										),										
								));
				?>
					<div class="step" id="firstStep">
						<ul class="wizard-steps steps-3">
							<li class='active'>
								<div class="single-step">
									<span class="title">1</span>
									<span class="circle">
										<span class="active"></span>
									</span>
									<span class="description">
										Personal Information
									</span>
								</div>
							</li>
							<li>
								<div class="single-step">
									<span class="title">2</span>
									<span class="circle">
									</span>
									<span class="description">
										Billing & Shipping Address
									</span>
								</div>
							</li>
						</ul>
						<div class="control-group">
							<?php echo $form->labelEx($model,'userFirstName',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'userFirstName',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'userFirstName'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'userLastName',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'userLastName',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'userLastName'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'userEmail',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'userEmail',array('class'=>'input-xlarge','data-rule-required'=>'true','data-rule-email'=>'true')); ?>	
								<?php echo $form->error($model, 'userEmail'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($loginModel,'userPassword',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->passwordField($loginModel,'userPassword',array('class'=>'input-xlarge')); ?>	
								<?php echo $form->error($loginModel, 'userPassword'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($loginModel,'repassword',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->passwordField($loginModel,'repassword',array('class'=>'input-xlarge')); ?>	
								<?php echo $form->error($loginModel, 'repassword'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'userPhone',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'userPhone',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'userPhone'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'userDateOfBirth',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'userDateOfBirth',array('class'=>'input-xlarge datepick','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'userDateOfBirth'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'userGender',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->dropDownList($model,'userGender',array('Male'=>'Male','Female'=>'Female'),array('empty'=>'- Select Gender -','class'=>'input-xlarge select2-me','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'userGender'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'userStatus',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->dropDownList($model,'userStatus',array('0'=>'Inactive','1'=>'Active'),array('empty'=>'- Select Status -','class'=>'input-xlarge select2-me','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'userStatus'); ?>
							</div>
						</div>
					</div>
					<div class="step" id="secondStep">
						<ul class="wizard-steps steps-3">
							<li>
								<div class="single-step">
									<span class="title">1</span>
									<span class="circle">
									</span>
									<span class="description">
										Personal Information
									</span>
								</div>
							</li>
							<li class='active'>
								<div class="single-step">
									<span class="title">
										2</span>
									<span class="circle">
										<span class="active"></span>
									</span>
									<span class="description">
										Billing & Shipping Address
									</span>
								</div>
							</li>
						</ul>
						<div class="box-title">
							<h3 style="line-height:12px;font-size:14px;">
								Billing Information
							</h3>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'userBillingAddress1',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'userBillingAddress1',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'userBillingAddress1'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'userBillingAddress2',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'userBillingAddress2',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'userBillingAddress2'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'userBillingCountry',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->dropDownList($model, 'userBillingCountry',CHtml::listData(Country::model()->findAll(), 'pkCountryID', 'countryName'),
																		array(
																			'empty'=>'- Select Country -',
																			'class'=>'input-xlarge select2-me',
																			'data-rule-required'=>'true',
																			'ajax'=>array(
					                                                            'type'=>'POST',
					                                                            'url' => CController::createUrl('dynamicstates'),
					                                                            'data'=> array('country'=>'js:this.value'),
					                                                            'success'=> 'function(data){       
																				                $("#userbillingstate").html(data);
																				                $("#userbillingstate").select2("val","");
																				            }', 
					                                                        )
																		)
																); ?>	
								<?php echo $form->error($model, 'userBillingCountry'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'userBillingState',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->dropDownList($model,'userBillingState',$model->billingStateOptions,
																	array(
																		'empty'=>'- Select State -',
																		'class'=>'input-xlarge select2-me',
																		'data-rule-required'=>'true',
																		'id'=>'userbillingstate',
																		 'ajax'=>array(
					                                                        'type'=>'POST',
					                                                        'url' => CController::createUrl('dynamiccities'),
					                                                        'data'=> array('state'=>'js:this.value'),
					                                                        'success'=> 'function(data){       
																				                $("#userbillingcity").html(data);
																				                $("#userbillingcity").select2("val","");
																				            }', 
					                                                     )
																	)); ?>	
								<?php echo $form->error($model, 'userBillingState'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'userBillingCity',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->dropDownList($model,'userBillingCity',$model->billingCityOptions,array('empty'=>'- Select City -','class'=>'input-xlarge select2-me','data-rule-required'=>'true','id'=>'userbillingcity')); ?>	
								<?php echo $form->error($model, 'userBillingCity'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'userBillingZip',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'userBillingZip',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'userBillingZip'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'userBillingPhone',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'userBillingPhone',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'userBillingPhone'); ?>
							</div>
						</div>
						

						<div class="box-title">
							<h3 style="line-height:12px;font-size:14px;">
								Shipping Information
							</h3>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'userShippingAddress1',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'userShippingAddress1',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'userShippingAddress1'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'userShippingAddress2',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'userShippingAddress2',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'userShippingAddress2'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'userShippingCountry',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->dropDownList($model, 'userShippingCountry',CHtml::listData(Country::model()->findAll(), 'pkCountryID', 'countryName'),
																		array(
																			'empty'=>'- Select Country -',
																			'class'=>'input-xlarge select2-me',
																			'data-rule-required'=>'true',
																			'ajax'=>array(
					                                                            'type'=>'POST',
					                                                            'url' => CController::createUrl('dynamicstates'),
					                                                            'data'=> array('country'=>'js:this.value'),
					                                                            'success'=> 'function(data){       
																				                $("#usershippingstate").html(data);
																				                $("#usershippingstate").select2("val","");
																				            }', 
					                                                        )
																		)
																); ?>	
								<?php echo $form->error($model, 'userShippingCountry'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'userShippingState',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->dropDownList($model,'userShippingState',$model->shippingStateOptions,
																	array(
																		'empty'=>'- Select State -',
																		'class'=>'input-xlarge select2-me',
																		'data-rule-required'=>'true',
																		'id'=>'usershippingstate',
																		 'ajax'=>array(
					                                                        'type'=>'POST',
					                                                        'url' => CController::createUrl('dynamiccities'),
					                                                        'data'=> array('state'=>'js:this.value'),
					                                                        'success'=> 'function(data){       
																				                $("#usershippingcity").html(data);
																				                $("#usershippingcity").select2("val","");
																				            }', 
					                                                     )
																	)); ?>	
								<?php echo $form->error($model, 'userShippingState'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'userShippingCity',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->dropDownList($model,'userShippingCity',$model->shippingCityOptions,array('empty'=>'- Select City -','class'=>'input-xlarge select2-me','data-rule-required'=>'true','id'=>'usershippingcity')); ?>	
								<?php echo $form->error($model, 'userShippingCity'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'userShippingZip',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'userShippingZip',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'userShippingZip'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'userShippingPhone',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'userShippingPhone',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'userShippingPhone'); ?>
							</div>
						</div>
					</div>
					<div class="form-actions">
						<?php echo CHtml::resetButton('Back',array('class'=>'btn','id'=>'back')); ?>  
						<?php echo CHtml::submitButton('Submit',array('class'=>'btn btn-primary','id'=>'next')); ?>
						<?php echo CHtml::link('Cancel',array('/admin/customers'),array('class'=>'btn')); ?>  
					</div>
				<?php $this->endWidget();?>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#next').click(function(e){
			e.preventDefault();
			if($(this).val() == 'Submit'){
				$('#firstStep input[type="text"], #firstStep select').attr('disable',false);
				$('#customer-form').submit();
			}
		});
	});
</script>