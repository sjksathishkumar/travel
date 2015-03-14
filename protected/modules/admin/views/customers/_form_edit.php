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
										Other Informations
									</span>
								</div>
							</li>
						</ul>
						<div class="control-group">
							<?php echo $form->labelEx($model,'customerFirstName',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'customerFirstName',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'customerFirstName'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'customerLastName',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'customerLastName',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'customerLastName'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($loginModel,'userName',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($loginModel,'userName',array('class'=>'input-xlarge')); ?>	
								<?php echo $form->error($loginModel, 'userName'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($loginModel,'userEmail',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($loginModel,'userEmail',array('class'=>'input-xlarge')); ?>	
								<?php echo $form->error($loginModel, 'userEmail'); ?>
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
							<?php echo $form->labelEx($model,'customerMobile',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'customerMobile',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'customerMobile'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'customerDateOfBirth',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'customerDateOfBirth',array('class'=>'input-xlarge datepick','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'customerDateOfBirth'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'customerGender',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->dropDownList($model,'customerGender',array('Male'=>'Male','Female'=>'Female'),array('empty'=>'- Select Gender -','class'=>'input-xlarge select2-me','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'customerGender'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'customerStatus',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->dropDownList($model,'customerStatus',array('0'=>'Inactive','1'=>'Active'),array('empty'=>'- Select Status -','class'=>'input-xlarge select2-me','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'customerStatus'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'customerSubscriptionPlan',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->dropDownList($model,'customerSubscriptionPlan',array('0'=>'Free','1'=>'Paid'),array('empty'=>'- Select Status -','class'=>'input-xlarge select2-me','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'customerSubscriptionPlan'); ?>
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
										Personal Informations
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
										Other Informations
									</span>
								</div>
							</li>
						</ul>
						<div class="box-title">
							<h3 style="line-height:12px;font-size:14px;">
								Address Information
							</h3>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'customerAddress',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'customerAddress',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'customerAddress'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'customerCountry',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->dropDownList($model, 'customerCountry',CHtml::listData(Country::model()->findAll(), 'pkCountryID', 'countryName'),
																		array(
																			'empty'=>'- Select Country -',
																			'class'=>'input-xlarge select2-me',
																			'data-rule-required'=>'true',
																			'ajax'=>array(
					                                                            'type'=>'POST',
					                                                            'url' => CController::createUrl('dynamicstates'),
					                                                            'data'=> array('country'=>'js:this.value'),
					                                                            'success'=> 'function(data){       
																				                $("#customerState").html(data);
																				                $("#customerState").select2("val","");
																				            }', 
					                                                        )
																		)
																); ?>	
								<?php echo $form->error($model, 'customerCountry'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'customerState',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->dropDownList($model,'customerState',$model->stateOptions,
																	array(
																		'empty'=>'- Select State -',
																		'class'=>'input-xlarge select2-me',
																		'data-rule-required'=>'true',
																		'id'=>'customerState',
																		 'ajax'=>array(
					                                                        'type'=>'POST',
					                                                        'url' => CController::createUrl('dynamiccities'),
					                                                        'data'=> array('state'=>'js:this.value'),
					                                                        'success'=> 'function(data){       
																				                $("#customerCity").html(data);
																				                $("#customerCity").select2("val","");
																				            }', 
					                                                     )
																	)); ?>	
								<?php echo $form->error($model, 'customerState'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'customerCity',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->dropDownList($model,'customerCity',$model->cityOptions,array('empty'=>'- Select City -','class'=>'input-xlarge select2-me','data-rule-required'=>'true','id'=>'customerCity')); ?>	
								<?php echo $form->error($model, 'customerCity'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'customerZip',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'customerZip',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'customerZip'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'eWalletBalance',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'eWalletBalance',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'eWalletBalance'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'wishginiBalance',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'wishginiBalance',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'wishginiBalance'); ?>
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