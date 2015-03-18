<div class="page-header">
    <div class="pull-left">
        <h1>Update Propery Partners Details</h1>
    </div>
</div>
<div class="breadcrumbs">
    <ul>
        <li><?php echo CHtml::link('Home',array('/admin')); ?><i class="icon-angle-right"></i></li>
        <li><?php echo CHtml::link('Manage Propery Partners',array('/admin/propertyPartners')); ?><i class="icon-angle-right"></i></li>
        <li><a href="#">Update Propery Partners Details</a></li>
    </ul>
    <div class="close-bread"><a href="#"><i class="icon-remove"></i></a></div>
</div>
<div class="row-fluid">
	<div class="span12">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="icon-table"></i>
					Update Propery Partners Details
				</h3>
			</div>
			<div class="box-content nopadding">
				<?php $form=$this->beginWidget('CActiveForm', array(
										'id'=>'property-partner-form',
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
							<?php echo $form->labelEx($model,'propertyPartnerFirstName',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'propertyPartnerFirstName',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'propertyPartnerFirstName'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'propertyPartnerLastName',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'propertyPartnerLastName',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'propertyPartnerLastName'); ?>
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
							<?php echo $form->labelEx($model,'propertyPartnerMobile',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'propertyPartnerMobile',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'propertyPartnerMobile'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'propertyPartnerContactMethod',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->dropDownList($model,'propertyPartnerContactMethod',array('1'=>'Mobile','2'=>'E-Mail','3'=>'Both'),array('empty'=>'- Select Status -','class'=>'input-xlarge select2-me','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'propertyPartnerContactMethod'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'propertyPartnerBusinessName',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'propertyPartnerBusinessName',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'propertyPartnerBusinessName'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'propertyPartnerWebsite',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'propertyPartnerWebsite',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'propertyPartnerWebsite'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'propertyPartnerStatus',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->dropDownList($model,'propertyPartnerStatus',array('0'=>'Inactive','1'=>'Active'),array('empty'=>'- Select Status -','class'=>'input-xlarge select2-me','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'propertyPartnerStatus'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'propertyPartnerSubscriptionPlan',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->dropDownList($model,'propertyPartnerSubscriptionPlan',array('1'=>'Free','2'=>'Basic','3'=>'Pro'),array('empty'=>'- Select Status -','class'=>'input-xlarge select2-me','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'propertyPartnerSubscriptionPlan'); ?>
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
							<?php echo $form->labelEx($model,'propertyPartnerAddress',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'propertyPartnerAddress',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'propertyPartnerAddress'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'propertyPartnerCountry',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->dropDownList($model, 'propertyPartnerCountry',CHtml::listData(Country::model()->findAll(), 'pkCountryID', 'countryName'),
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
								<?php echo $form->error($model, 'propertyPartnerCountry'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'propertyPartnerState',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->dropDownList($model,'propertyPartnerState',$model->stateOptions,
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
																				                $("#propertyPartnerCity").html(data);
																				                $("#propertyPartnerCity").select2("val","");
																				            }', 
					                                                     )
																	)); ?>	
								<?php echo $form->error($model, 'propertyPartnerState'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'propertyPartnerCity',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->dropDownList($model,'propertyPartnerCity',$model->cityOptions,array('empty'=>'- Select City -','class'=>'input-xlarge select2-me','data-rule-required'=>'true','id'=>'propertyPartnerCity')); ?>	
								<?php echo $form->error($model, 'propertyPartnerCity'); ?>
							</div>
						</div>
						<div class="control-group">
							<?php echo $form->labelEx($model,'propertyPartnerZip',array('class'=>'control-label','for'=>'textfield')); ?>
							<div class="controls">
								<?php echo $form->textField($model,'propertyPartnerZip',array('class'=>'input-xlarge','data-rule-required'=>'true')); ?>	
								<?php echo $form->error($model, 'propertyPartnerZip'); ?>
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
						<?php echo CHtml::link('Cancel',array('/admin/propertyPartners'),array('class'=>'btn')); ?>  
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
				$('#property-partner-form').submit();
			}
		});
	});
</script>









