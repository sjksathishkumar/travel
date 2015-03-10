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
							echo "<div class='form-heading'>Your Account Verified Successfully! Please Login !</div>";
						}
						elseif ($message == 'mail-success') {
							echo "<div class='form-heading'>Verification mail send Successfully ! Please Check your Email !</div>";
						}
						else
						{
							echo "<div class='form-heading'>Invalid Activaion ! Please Try Again !</div>";
						}
				?>

			</div>
		</div>
		</div>
	</div>
	<!-- Create Account Part End Here -->