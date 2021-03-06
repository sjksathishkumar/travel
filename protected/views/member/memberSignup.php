<?php
    $varBaseUrl = Yii::app()->baseUrl;
    $data = array();
    $data['mascots'] = Mascots::model()->findAllByAttributes(array('mascotStatus'=>'1'));
?>


<!-- Create Account Part Start From Here -->
<div class="container">
	<div class="membership-plan-outer">
		<div class="member-create-account">
			<div class="about-travelogini">
				<div class="about-left"><?php echo CHtml::image($varBaseUrl . "/images/design-left.png"); ?></div>
				<div class="travelogini-heading">Membership Plans</div>
				<div class="about-right"><?php echo CHtml::image($varBaseUrl . "/images/design-right.png"); ?></div>
			</div>
			<div class="membership-plan">
				<div class="signup-plan-container">
					<div class="signup-plan-today-outer">
						<div class="signup-plan-inner">
							<div class="signup-plan-heading">
								Sign Up Today!
							</div>
							<p>To Fulfill Your Wish</p>
						</div>
					</div>
					<div class="signup-plan-type">
						<ul>
							<li>
								<div class="services-type">
									<div class="booking">
										Access booking history with upcoming trips
									</div>
								</div>
							</li>
							<li>
								<div class="services-type">
									<div class="print">
										Print Tickets and Invoices
									</div>
								</div>
							</li>
							<li>
								<div class="services-type">
									<div class="gift">
										Create gift Cards / Vouchers
									</div>
								</div>
							</li>
							<li>
								<div class="services-type">
									<div class="wish-grant">
										Wish Granted
									</div>
								</div>
							</li>
							<li>
								<div class="services-type">
									<div class="alert">
										Get alerts for low fares
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="plan-outer-box">
					<div class="plan-type-outer">
						<div class="plan-type-inner">
							<div class="paidfree-plan-outer">
								<div class="paidfree-plan">
									Paid
								</div>
								<div class="plan-amount">
									$ 8.33
									<p> One Time Payment </p>
								</div>
							</div>
						</div>
					</div>
					<div class="signup-plan-type">
						<ul>
							<li>
								<div class="services-type">
									<?php echo CHtml::image($varBaseUrl . "/images/blue-circle.png"); ?>
								</div>
							</li>
							<li>
								<div class="services-type">
									<?php echo CHtml::image($varBaseUrl . "/images/blue-circle.png"); ?>
								</div>
							</li>
							<li>
								<div class="services-type">
									<?php echo CHtml::image($varBaseUrl . "/images/blue-circle.png"); ?>
								</div>
							</li>
							<li>
								<div class="services-type">
									<?php echo CHtml::image($varBaseUrl . "/images/blue-circle.png"); ?>
								</div>
							</li>
							<li>
								<div class="services-type">
									<?php echo CHtml::image($varBaseUrl . "/images/blue-circle.png"); ?>
								</div>
							</li>
							<li>
								<div class="login-btn">
									<?php echo CHtml::link('Sign Up', array('memberPaidSignup'),array('class' => 'simple-btn')); ?>
									<!-- <input type="submit" value="Sign Up" name="submit"> -->
								</div>
							</li>
						</ul>
					</div>
					</div>
					
					<div class="plan-outer-box">
					<div class="plan-type-outer">
						<div class="plan-type-inner">
							<div class="paidfree-plan-outer">
								<div class="paidfree-plan">
									Free
								</div>
								<div class="plan-amount">
									$ 0.00
									<p> No Payment </p>
								</div>
							</div>
						</div>
				</div>
				<div class="signup-plan-type">
						<ul>
							<li>
								<div class="services-type">
									<?php echo CHtml::image($varBaseUrl . "/images/blue-circle.png"); ?>
								</div>
							</li>
							<li>
								<div class="services-type">
									<?php echo CHtml::image($varBaseUrl . "/images/blue-circle.png"); ?>
								</div>
							</li>
							<li>
								<div class="services-type">
									
								</div>
							</li>
							<li>
								<div class="services-type">
									
								</div>
							</li>
							<li>
								<div class="services-type">
									
								</div>
							</li>
							<li>
								<div class="login-btn">
									<?php //echo CHtml::submitButton('Sign Up', array('dasboard')); ?>
									<?php echo CHtml::link('Sign Up', array('memberFreeSignup'),array('class' => 'simple-btn')); ?>
									<?php //echo CHtml::submitButton('Sign Up', array('member/freeSingup'));  ?>
									<!-- <input type="submit" value="Sign Up" name="submit"> -->
								</div>
							</li>
						</ul>
					</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- Create Account Part End Here -->