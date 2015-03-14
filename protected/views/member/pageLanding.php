<?php
    $varBaseUrl = Yii::app()->baseUrl;
    $data = array();
    $data['mascots'] = Mascots::model()->findAllByAttributes(array('mascotStatus'=>'1'));
?>

		<!-- Create Account Part Start From Here -->
	<div class="container">
		<div class="full-box">
		<div class="membership-plan-outer">
			<div class="member-create-account">
				<div class="about-travelogini">
					<div class="about-left"><?php echo CHtml::image($varBaseUrl . "/images/design-left.png"); ?></div>
					<div class="travelogini-heading">Notifications</div>
					<div class="about-right"><?php echo CHtml::image($varBaseUrl . "/images/design-right.png"); ?></div>
				</div>
			</div>
			<div class="activated">
				
				<?php 
						if($message == 'success')
						{
							echo "<div class='form-heading' align='center'>Your Account Verified Successfully! Please Login !</div>";
						}
						elseif ($message == 'mail-success') {
							echo "<div class='form-heading' align='center'>Verification mail send Successfully ! Please Check your Email !</div>";
						}
						elseif ($message == 'default-error') {
							echo "<div class='form-heading' align='center'>Invalid Operation !</div>";
						}
						elseif ($message == 'already-active') {
							echo "<div class='form-heading' align='center'>Account already Activated !</div>";
						}
						elseif ($message == 'payment-success') {
							Yii::app()->user->logout();
							echo "<div class='form-heading' align='center'>Payment made Successfully ! Please Login again for better Performance !</div>";
						}
						elseif ($message == 'payment-faild') {
							echo "<div class='form-heading' align='center'>Payment Faild ! Please Try Again !</div>";
						}
						elseif ($message == 'password-reset-success') {
							echo "<div class='form-heading' align='center'>Password Reseted Successfully ! Please Login with new password !</div>";
						}
						elseif ($message == 'password-reset-faild') {
							echo "<div class='form-heading' align='center'>Password Reset Faild ! Please Try Again !</div>";
						}
						elseif ($message == 'password-reset-link-used') {
							echo "<div class='form-heading' align='center'>Password Reset Link Expired ! Please Try Again !</div>";
						}
						elseif ($message == 'password-reset-link-invalid') {
							echo "<div class='form-heading' align='center'>Password Reset Link Invalid ! Please Try Again !</div>";
						}
						else
						{
							echo "<div class='form-heading' align='center'>Invalid Activaion ! Please Try Again !</div>";
						}
				?>

			</div>
		</div>
		</div>
	</div>
	<!-- Create Account Part End Here -->