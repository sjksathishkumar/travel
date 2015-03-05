
<div class="page-header">
	<div class="pull-left">
		<h1>Membership Plans</h1>
	</div>
</div>
<div class="breadcrumbs">
	<ul>
		<li><?php echo CHtml::link('Home',array('/admin')); ?><i class="icon-angle-right"></i></li>
		<li><a href="#">Membership Plans</a></li>
	</ul>
	<div class="close-bread"><a href="#"><i class="icon-remove"></i></a></div>
</div>
<!-- Setting up flash success/error message -->
<div class="clear"></div>
<div class="breadcrumbs" id="breadcrumbs-msg">
<?php  if(Yii::app()->User->hasFlash('updateMemberPlanSuccess')){ ?>
	<ul>
          <?php
                if(Yii::app()->User->getFlash('updateMemberPlanSuccess'))
                {
                    echo '<li><span class="readcrum_without_link_success">'.EDIT_MEMBER_PLAN_SUCCESS.'</li>';
                }
          ?>						
      </ul>
<?php } ?>
</div>
<div class="row-fluid">
	<div class="span12">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3><i class="icon-table"></i>Manage Plans</h3>
			</div>
            <div class="box-content nopadding">
				<?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'member-plan-form',
					'action'=> '',
					'enableAjaxValidation'=>false,
					'htmlOptions'=>array(
	                        'class'=>'form-horizontal form-bordered form-validate',
	                 )
				)); ?>
				<?php if($form->errorSummary($model)){ ?>
                 <div class="control-group">
                            <label class="control-label" for="textfield">&nbsp;</label>
                            <div class="controls">
                                    <?php echo $form->errorSummary($model); ?>
                            </div>
                    </div>
                 <?php }?>
					<div class="control-group">
						<span class="control-label"> Membership Fee</span>
						<div class="controls">
							<?php echo CHtml::textField('member-fee',$paid->membershipFee,array('size'=>10,'maxlength'=>8,'data-rule-required'=>'true','class'=>'input-xxlarge')); ?>
						</div>
					</div>
					<div class="control-group">
						<span class="control-label"> Feature List</span>
						<div class="controls">
							<table>
								<tr>
									<th></th>
									<th>
										Free
									</th>
									<th></th>
									<th>
										Paid
									</th>
								</tr>
								<tr>
									<td>Access Booking</td>
									<td><?php echo CHtml::CheckBox('free-access',($free->accessBooking)?true:false, array ('value'=>1)); ?> </td>
									<td></td>
									<td><?php echo CHtml::CheckBox('paid-access',($paid->accessBooking)?true:false, array ('value'=>1)); ?> </td>
								</tr>
								<tr>
									<td>Add to Wishgini</td>
									<td><?php echo CHtml::CheckBox('free-wish',($free->addToWishgini)?true:false, array ('value'=>1)); ?> </td>
									<td></td>
									<td><?php echo CHtml::CheckBox('paid-wish',($paid->addToWishgini)?true:false, array ('value'=>1)); ?> </td>
								</tr>
								<tr>
									<td>Receive Coupons</td>
									<td><?php echo CHtml::CheckBox('free-coupon',($free->receiveCoupons)?true:false, array ('value'=>1)); ?> </td>
									<td></td>
									<td><?php echo CHtml::CheckBox('paid-coupon',($paid->receiveCoupons)?true:false, array ('value'=>1)); ?> </td>
								</tr>
							</table>	
						</div>
					</div>
                    <div class="form-actions">  
                         <?php echo CHtml::submitButton('Submit',array('class'=>'btn btn-primary','title'=>'Submit','alt'=>'Submit')); ?>
                         <?php echo CHtml::link('Cancel',array('/admin/membershipPlans'),array('class'=>'btn','title'=>'Cancel','alt'=>'Cancel')); ?>  
                    </div>

				<?php $this->endWidget(); ?>
			</div>
			
		</div>
	</div>
</div>


