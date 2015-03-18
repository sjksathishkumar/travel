<div class="page-header">
    <div class="pull-left">
        <h1>Update City Partners Details</h1>
    </div>
</div>
<div class="breadcrumbs">
    <ul>
        <li><?php echo CHtml::link('Home',array('/admin')); ?><i class="icon-angle-right"></i></li>
        <li><?php echo CHtml::link('Manage City Partners',array('/admin/cityPartners')); ?><i class="icon-angle-right"></i></li>
        <li><a href="#">Update City Partners Details</a></li>
    </ul>
    <div class="close-bread"><a href="#"><i class="icon-remove"></i></a></div>
</div>
<div class="row-fluid">
	<div class="span12">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="icon-table"></i>
					Update City Partners Details
				</h3>
			</div>
			<div class="box-content nopadding">
				<?php $form=$this->beginWidget('CActiveForm', array(
										'id'=>'city-partner-form',
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
										Account Informations
									</span>
								</div>
							</li>
							<li>
								<div class="single-step">
									<span class="title">2</span>
									<span class="circle">
									</span>
									<span class="description">
										Account Informations
									</span>
								</div>
							</li>
						</ul>
						<div class="control-group">
							<?php echo $form->labelEx($model,'cityPartnerFirstName',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'cityPartnerFirstName',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'cityPartnerFirstName'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'cityPartnerLastName',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'cityPartnerLastName',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'cityPartnerLastName'); ?>
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
							<?php echo $form->labelEx($model,'cityPartnerMobile',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'cityPartnerMobile',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'cityPartnerMobile'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'cityPartnerContactMethod',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->dropDownList($model,'cityPartnerContactMethod',array('1'=>'Mobile','2'=>'E-Mail','3'=>'Both'),array('empty'=>'- Select Status -','class'=>'input-xlarge select2-me','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'cityPartnerContactMethod'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'cityPartnerBusinessName',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'cityPartnerBusinessName',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'cityPartnerBusinessName'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'cityPartnerWebsite',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'cityPartnerWebsite',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'cityPartnerWebsite'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'cityPartnerStatus',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->dropDownList($model,'cityPartnerStatus',array('0'=>'Inactive','1'=>'Active'),array('empty'=>'- Select Status -','class'=>'input-xlarge select2-me','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'cityPartnerStatus'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'cityPartnerSubscriptionPlan',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->dropDownList($model,'cityPartnerSubscriptionPlan',array('1'=>'Free','2'=>'Basic','3'=>'Pro'),array('empty'=>'- Select Status -','class'=>'input-xlarge select2-me','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'cityPartnerSubscriptionPlan'); ?>
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
										Account Informations
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
										Account Informations
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
							<?php echo $form->labelEx($model,'cityPartnerAddress',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'cityPartnerAddress',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'cityPartnerAddress'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'cityPartnerCountry',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->dropDownList($model, 'cityPartnerCountry',CHtml::listData(Country::model()->findAll(), 'pkCountryID', 'countryName'),
																		array(
																			'empty'=>'- Select Country -',
																			'class'=>'input-xlarge select2-me',
																			'data-rule-required'=>'true',
																			'ajax'=>array(
					                                                            'type'=>'POST',
					                                                            'url' => CController::createUrl('dynamicstates'),
					                                                            'data'=> array('country'=>'js:this.value'),
					                                                            'success'=> 'function(data){       
																				                $("#partnerState").html(data);
																				                $("#partnerState").select2("val","");
																				            }', 
					                                                        )
																		)
																); ?>	
								<?php echo $form->error($model, 'cityPartnerCountry'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'cityPartnerState',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->dropDownList($model,'cityPartnerState',$model->stateOptions,
																	array(
																		'empty'=>'- Select State -',
																		'class'=>'input-xlarge select2-me',
																		'data-rule-required'=>'true',
																		'id'=>'partnerState',
																		 'ajax'=>array(
					                                                        'type'=>'POST',
					                                                        'url' => CController::createUrl('dynamiccities'),
					                                                        'data'=> array('state'=>'js:this.value'),
					                                                        'success'=> 'function(data){       
																				                $("#cityPartnerCity").html(data);
																				                $("#cityPartnerCity").select2("val","");
																				            }', 
					                                                     )
																	)); ?>	
								<?php echo $form->error($model, 'cityPartnerState'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'cityPartnerCity',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->dropDownList($model,'cityPartnerCity',$model->cityOptions,array('empty'=>'- Select City -','class'=>'input-xlarge select2-me','data-rule-required'=>'true','id'=>'cityPartnerCity')); ?>	
								<?php echo $form->error($model, 'cityPartnerCity'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'cityPartnerZip',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'cityPartnerZip',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'cityPartnerZip'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'cityPartnerOperationCountry',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->dropDownList($model, 'cityPartnerOperationCountry',CHtml::listData(Country::model()->findAll(), 'pkCountryID', 'countryName'),
																		array(
																			'empty'=>'- Select Country -',
																			'class'=>'input-xlarge select2-me',
																			'data-rule-required'=>'true',
																			'ajax'=>array(
					                                                            'type'=>'POST',
					                                                            'url' => CController::createUrl('dynamicstates'),
					                                                            'data'=> array('country'=>'js:this.value'),
					                                                            'success'=> 'function(data){       
																				                $("#cityOperationState").html(data);
																				                $("#cityOperationState").select2("val","");
																				            }', 
					                                                        )
																		)
																); ?>	
								<?php echo $form->error($model, 'cityPartnerOperationCountry'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'cityPartnerOperationState',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->dropDownList($model,'cityPartnerOperationState',$model->stateOptions,
																	array(
																		'empty'=>'- Select State -',
																		'class'=>'input-xlarge select2-me',
																		'data-rule-required'=>'true',
																		'id'=>'cityOperationState',
																		 'ajax'=>array(
					                                                        'type'=>'POST',
					                                                        'url' => CController::createUrl('dynamiccities'),
					                                                        'data'=> array('state'=>'js:this.value'),
					                                                        'success'=> 'function(data){       
																				                $("#cityPartnerOperationCity").html(data);
																				                $("#cityPartnerOperationCity").select2("val","");
																				            }', 
					                                                     )
																	)); ?>	
								<?php echo $form->error($model, 'cityPartnerOperationState'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'cityPartnerOperationCity',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->dropDownList($model,'cityPartnerOperationCity',$model->cityOptions,array('empty'=>'- Select City -','class'=>'input-xlarge select2-me','data-rule-required'=>'true','id'=>'cityPartnerOperationCity')); ?>	
								<?php echo $form->error($model, 'cityPartnerOperationCity'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'cityPartnerOperationArea',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'cityPartnerOperationArea',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'cityPartnerOperationArea'); ?>
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
						<?php echo CHtml::link('Cancel',array('/admin/cityPartners'),array('class'=>'btn')); ?>  
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
				$('#city-partner-form').submit();
			}
		});
	});
</script>





















